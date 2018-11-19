<?php
  include @'C:xampp\htdocs\New folder\simple_html_dom.php';
error_reporting(E_ALL ^ E_WARNING^E_NOTICE);
  echo 'url'.@urlencode($_REQUEST['name']);
$html = file_get_contents(@"https://www.amazon.in/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=".urlencode($_REQUEST['name']));
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXpath($dom);
?>

<div class='container'>
<div class="row">
    <?php
for($i=0;$i<=9;$i++)
{
$name=$xpath->query("//li[@id='result_$i']//img[contains(@class,'s-access-image cfMarker')]/@alt");
$image=$xpath->query("//li[@id='result_$i']//img[contains(@class,'s-access-image cfMarker')]/@src");
//$src = $xpath->evaluate('string(//img[contains(@class,"")]/@src)'); 
$price=$xpath->query("//li[@id='result_$i']//span[@class='a-size-base a-color-price s-price a-text-bold']");
$sponsored=$xpath->query("//li[@id='result_$i']//h5[@class='a-spacing-none a-color-tertiary s-sponsored-list-header s-sponsored-header sp-pixel-data a-text-normal']");
$rstr=$xpath->query("//li[@id='result_$i']/@data-asin");
if(is_null($sponsored->item(0)->nodeValue))
{
if($price->item(0)->nodeValue=="")
{
echo "null";
 $price=$xpath->query("//li[@id='result_$i']//span[@class='a-size-base a-color-price a-text-bold']");
}

if(is_null($name->item(0)->nodeValue)&&is_null($image->item(0)->nodeValue)&&is_null($price->item(0)->nodeValue))
{
   continue;
}else{
$imagenode=$image->item(0);
$namenode=$name->item(0);
$pricenode=$price->item(0);
?>
    <div class="col-sm">  
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo $imagenode->nodeValue;?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $namenode->nodeValue;?><br/><?php echo"Price:$pricenode->nodeValue";?></h5>
    <p class="card-text"></p>
    <a href="scrappe_result.php?name=<?php echo $namenode->nodeValue;?>&pid=<?php echo $rstr->item(0)->nodeValue;?>" class="btn btn-success">Get The Best Prices</a>
  </div>
</div></div>
 
<?php }}
}
?>
</div></div>