<?php
require "auth.php";
$f="../content/data.json";
$d=json_decode(file_get_contents($f),true);

$d['profile']['name']=$_POST['name'];
$d['profile']['tagline']=$_POST['tagline'];
$d['profile']['bullets']=$_POST['bullets'];
$d['theme']['background_value']=$_POST['bg'];
$d['actions']=$_POST['actions'];

$u="../uploads/";
if($_FILES['logo']['name']){
  $n=time().$_FILES['logo']['name'];
  move_uploaded_file($_FILES['logo']['tmp_name'],$u.$n);
  $d['profile']['logo']="/uploads/".$n;
}

foreach(["instagram","whatsapp","facebook","map"] as $s){
  $d['social'][$s]=$_POST[$s];
  if($_FILES[$s."_image"]['name']){
    $n=time().$_FILES[$s."_image"]['name'];
    move_uploaded_file($_FILES[$s."_image"]['tmp_name'],$u.$n);
    $d['social'][$s."_image"]="/uploads/".$n;
  }
}

file_put_contents($f,json_encode($d,JSON_PRETTY_PRINT));
header("Location: dashboard.php");
