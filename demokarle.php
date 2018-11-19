<?php
include @'C:xampp\htdocs\New folder\simple_html_dom.php';
//error_reporting(E_ALL ^ E_WARNING^E_NOTICE);
/*$html = file_get_contents(@"https://www.amazon.in/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=Lenovo IdeaPad 320-15ISK 80XH01FKIN 15.6-inch Laptop (6th Gen Core i3-6006U/4GB/2TB/Windows 10/Integrated Graphics");
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXpath($dom);
	$result1=$xpath->query("//li[@id='result_0']//a[contains(@class,'a-size-small a-link-normal a-text-normal')]/@href");
$str=strpos($result1->item(0)->nodeValue,"/dp/");
if($result1->item(0)->nodeValue=="")
{
	
	//echo "null hai<br/>";
	
}else {
	echo "<br/>position=".$str;
}
$sentence2="My name is Khan";
$sentence1="name { is , Khan.";
//preg_split('/\s+/', $sentence2);
//echo strpos("I love php, I love php too!","g");
//echo substr_count("Hello world. The world is nice","world");
//echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
$amzstr="{hello";
$amzstr = preg_replace("/[^a-zA-Z0-9]/", " ", $amzstr);
echo $amzstr;
	echo "<br/><br/>";
$str1=explode(" ", $sentence1);
$str2=explode(" ", $sentence2);
for($i=0;$i<str_word_count($sentence1);$i++)
{
	for($j=0;$j<str_word_count($sentence2);$j++)
if($str1[$i]==$str2[$j]){echo "match";}
}
$str = "{Hello {W}orld}";
$str = trim($str, "{}");
echo "Trimmed: $str";
?>
<?php

$string = "(This*) 999 is <<>> a ~!@# sample st#$%ring.";
$res = preg_replace("/[^a-zA-Z0-9]/", " ", $string);
echo $res;
*/
 $furl="https://www.flipkart.com/search?q=miphones";
 $furl=rawurlencode($furl);
 $html2 = file_get_contents($furl);
$dom2 = new DOMDocument();
@$dom2->loadHTML($html2);
$xpath2 = new DOMXpath($dom2);
 $fname=$xpath2->query("//div[contains(@class, 'col _2-gKeQ')][1]//div[contains(@class, ['_3wU53n')]");
if($fname->item(0)->nodeValue=="")
{
 $fname=$xpath2->query("//div[contains(@class, '_3yI_5w')][1]/div[contains(@class, 'MP_3W3 _31eJXZ')][1]//a[contains(@class, '_2cLu-l')]
");
}
$str6=$fname->item(0);
echo $str6->nodeValue;
?>

