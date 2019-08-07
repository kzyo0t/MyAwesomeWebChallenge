<?php
include 'flag.php';
if (isset($_GET['kzy']))
{
  $url = "http://127.0.0.1/d5e3c3e4b03f39e5112972c2239ed866.php";
  $options = array(
    'http'=>$_GET['kzy']
  );
  $options['http']['header'].="\r\nFlag5: ".$flag5."";
  $context = stream_context_create($options);
  $file = file_get_contents($url, false, $context);
  echo $file;
}
else
{
  highlight_file(__FILE__); 
}
?>
