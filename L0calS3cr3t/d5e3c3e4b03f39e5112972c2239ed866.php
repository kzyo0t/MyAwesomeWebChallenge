<?php
include 'flag.php';

if(isset($_COOKIE["name"]))
  echo "Hi ".htmlspecialchars($_COOKIE["name"], ENT_QUOTES, 'UTF-8')."<br>";
else
  highlight_file(__FILE__);
$header=apache_request_headers();
if ($_SERVER['REMOTE_ADDR'] == "127.0.0.1")//your localhost:)
{
  if(isset($header['Flag5'])&&isset($_COOKIE["name"]))
  {
    if ($header['Flag5']==$flag5)
       echo "Congratulation! <font color='red'>"."but this is not flag"."</font><br>";
  }
}
else
   echo "<pre>".$_SERVER['REMOTE_ADDR']."</pre>";
?>

