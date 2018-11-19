<html>
<head1
</head><body>
	<div class="jumbotron jumbotron-fluid">
	<?php 
  //session_start();
	include "sec.php"; ?>
	<div class="container"><br/>
	   <h1 class="display-4">Search Results</h1>	
   <?php
$pid=$_REQUEST['pid'];
$search=$_REQUEST['name'];
echo "<h2>$pid</h2>";
error_reporting(E_ALL & ~E_NOTICE);
include @'C:xampp\htdocs\New folder\simple_html_dom.php';
$html = file_get_contents(@"https://www.amazon.in/dp/$pid");
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXpath($dom);
//error_reporting(E_ALL ^ E_WARNING);
$amzstr=strtolower($search);
 $amzstr = str_replace(' ', '-', $amzstr); 
       $amzstr = preg_replace('/[^A-Za-z0-9\-]/', '', $amzstr); 
      $amzstr=preg_replace('/-+/', ' ', $amzstr);
$amzstr=substr($amzstr,0, 50);
echo $amzstr;
$amzstr=explode(" ", $amzstr);

//print_r($amzstr);
 $furl="https://www.flipkart.com/search?q=".urlencode(substr($search,0, 50));
 $html2 = file_get_contents($furl);
$dom2 = new DOMDocument();
@$dom2->loadHTML($html2);
$xpath2 = new DOMXpath($dom2);
$count=0;
//for($i=1;$i<2;$i++){
$fprice=$xpath2->query("//div[contains(@class, 'bhgxx2 col-12-12')][2]//div[contains(@class, '_1vC4OE _2rQ-NK')]");
 $fname=$xpath2->query("//div[contains(@class, 'bhgxx2 col-12-12')][2]//div[contains(@class, '_3wU53')]");
if($fprice->item(0)->nodeValue=="")
{
$fprice=$xpath2->query("//div[contains(@class, '_3yI_5w')][1]/div[contains(@class, 'MP_3W3 _31eJXZ')][1]//div[contains(@class, '_1vC4OE')]");
 $fname=$xpath2->query("//div[contains(@class, '_3yI_5w')][1]/div[contains(@class, 'MP_3W3 _31eJXZ')][1]//a[contains(@class, '_2cLu-l')]");
}
$namenode=$fname->item(0);
$flstr=strtolower($namenode->nodeValue);
 $flstr = str_replace(' ', '-', $flstr); 
       $flstr = preg_replace('/[^A-Za-z0-9\-]/', '', $flstr); 
      $flstr=preg_replace('/-+/', ' ', $flstr);
      echo $flstr;
$flstr=explode(" ", $flstr);
for($j=0;$j<count($amzstr);$j++){
for($k=0;$k<count($flstr);$k++)
       {
  if($amzstr[$j]==$flstr[$k])
          {
    $count++;
           }
       }
     }
//if((count($flstr)-($count))<=2){echo "break at ".$count;break;}
//else{$count=0;}
//}

$image=$xpath->query("//img[contains(@id,'landingImage')]/@src");
$price=$xpath->query("//span[contains(@id,'priceblock_ourprice')]");
$imagenode=$image->item(0);
$pricenode=$price->item(0);
$pricenode2=$fprice->item(0);
        ?>
        <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <img src='<?php echo $imagenode->nodeValue?>'/>
      <h4><?php echo $search,"Flipkart name:".$namenode->nodeValue;?></h4>
    </div>
    <div class="col-sm-8">
      <h3>Amazon Price:</h3><h4>
      <?php
        echo $pricenode->nodeValue;
     ?> </h4>
      <br/><h3>Flipkart Price:</h3><h4>
        <?php 
          echo $pricenode2->nodeValue;
        ?></h4>
       
    </div>
  </div>
</div>
<?php
print_r($amzstr);
     echo "<br/>";
     print_r($flstr);
	?></body>
</html>