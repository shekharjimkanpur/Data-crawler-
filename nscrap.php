<?php
if(isset($_REQUEST['name'])){
  include @'C:xampp\htdocs\New folder\simple_html_dom.php';
  echo 'url'.@urlencode($_REQUEST['name']);
$html = file_get_contents(($_REQUEST['name']));
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXpath($dom);
  $result1=$xpath->query('(//body//a)');
  $result2=$xpath->query('(//body//a)/@href');
  $page=$xpath->query('(//body)');
  $pagenode=$page->item(0);
  ?>
  <div class="container">
  <div class="tab-pane fade show active embed-responsive" id="pills-home" role="tabpanel" style='pointer-events: none;' aria-labelledby="pills-home-tab"></div>
  <div class="tab-pane fade embed-responsive" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Text</th>
      <th scope="col" align='center'>Url</th>
    </tr>
  </thead>
  <tbody>
  <?php 
   for($i=0;$i<=10;$i++)   
     {
         $node1 = $result1->item($i);
        $node2= $result2->item($i);
     
 echo '<tr>
  <th scope="row">'.$i.'</th>
      <td>'.$node1->nodeValue.'</td>
      <td>'.$node2->nodeValue.'</td>
    </tr>';
    }
    ?>
  </tbody>
</table>
</div> 
<div class="tab-pane fade embed-responsive" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><?php echo $pagenode->nodeValue; ?></div></div>
<?php }
else{
	echo "<h1>Please enter a url</h1>";
}
?>