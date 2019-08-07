<?php
include 'flag.php';
$str = 'Hi '.$_GET['s'];
$str = str_replace( '<script>','', $str);//loc ky tu script
$str = substr( $str,0,50); // cat ngan chuoi xuong con 50 ky tu
$str = str_replace( '"','', $str);// xoa dau ngoac kep
$str = urldecode($str); // url decode dau vao 
if (isset($_GET['s'])) 
{
 echo 'your_payload: '.bin2hex($str).'<br>';
 echo 'kzyy_payload: '.bin2hex('Hi "><script>alert("kzy")</script>').'<br>';
 if (strpos($str, '"><script>alert("kzy")</script>' )== TRUE)
  echo "Win => Flag: <font color='red'>".$flag2."</font>";
 else
  echo $str;
}
else
 highlight_file(__FILE__);
?>
