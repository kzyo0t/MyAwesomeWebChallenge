<?php
include 'flag.php';
if (isset($_GET['n']))
{
  $url = "http://127.0.0.1/3c2132813698ed30276507b030e69314.php";
  $options = array(
    'http'=>array(
      'method'=>"GET",
      'header'=>"Cookie: name=".$_GET['n']
    )
  );
  $context = stream_context_create($options);
  $file = file_get_contents($url, false, $context);
  echo $file;
}
else
{
  highlight_file(__FILE__); 
}
?>
