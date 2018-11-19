
<?php
  include @'C:xampp\htdocs\New folder\simple_html_dom.php';
$html = file_get_contents(@"https://www.amazon.in/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=".$_REQUEST['name']);
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXpath($dom);
$result=$xpath->query('//h2[contains(@class,"")]');
  for($i=0;$i<=6;$i++)   
     {
     	$node = $result->item($i);
     	echo $node->nodeValue;
     	}
?>
