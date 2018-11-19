<?php

include @'C:xampp\htdocs\New folder\simple_html_dom.php';
$html = file_get_html('https://www.amazon.in');
//$html = file_get_contents("http://gisapps.co.union.nc.us/ws/rest/v2/cm_iw.ashx?gid=12339");
$doc = new DOMDocument();
$doc->strictErrorChecking = false;
$doc->recover=true;
@$doc->loadHTML("<html><body>".$html."</body></html>");

$xpath = new DOMXpath($doc);
$elements = $xpath->query("//img/@src");

if (!is_null($elements)) {
   foreach ($elements as $element) {
      echo "<br/>[". $element->nodeName. "]";
      $nodes = $element->childNodes;
      foreach ($nodes as $node) {
         echo $node->nodeValue. "\n";
     }
   }
 }
?>