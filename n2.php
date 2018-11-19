<?php
//error_reporting(E_ALL ^ E_WARNING);
include @'C:xampp\htdocs\New folder\simple_html_dom.php';
$html = file_get_contents(@"https://www.amazon.in/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=redmiphones");
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXpath($dom);
$result=$xpath->query('//h2[contains(@class,"")]');
$img=$xpath->query('//img[contains(@class,"")]/@src');
//$src = $xpath->evaluate('string(//img[contains(@class,"")]/@src)'); 
$result1=$xpath->query('//span[contains(@class,"a-size-base a-color-price s-price a-text-bold")]');
 ?>

<table border="1">
	<tr><th>Name</th><th>price</th><th>image</th></tr>
<?php if(($result->length > 0)|| ($result1->length>0)) 
     {   	
     	 echo "<h1>here is the scrapped list</h1>";
     for($i=0;$i<=6;$i++)   
     {
         $node = $result->item($i);
        $node1 = $result1->item($i);
  $imgnode=$img->item($i+3);
        if(isset($node)||isset($node1)){    	
echo "<tr><td>$node->nodeValue </td><td>$node1->nodeValue</td><td> <img src='$imgnode->nodeValue' height='200px' width='250px'></td>
 </tr>";
     } 
 }
}
?>
</table>