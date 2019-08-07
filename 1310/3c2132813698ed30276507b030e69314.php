<?php
include 'flag.php';

if(isset($_COOKIE["name"]))
  echo "Hi ".htmlspecialchars($_COOKIE["name"], ENT_QUOTES, 'UTF-8')."<br>";
else
  highlight_file(__FILE__);
$header=apache_request_headers();
if ($_SERVER['REMOTE_ADDR'] == "127.0.0.1")//your localhost ip
{
  if(isset($header['flag']))
  {
    if ($header['flag']=='1')
       echo "flag: <font color='red'>".$flag3."</font><br>";
  }
}
else
   echo "<pre>".$_SERVER['REMOTE_ADDR']."</pre>";
?>
