<?php
include './model/config.php';
extract($_GET);

$query="DELETE FROM ragistration WHERE id='$id'";

//echo $id;echo $id;echo $id;echo $id;echo $id;
$res= $o->admindelet($id);
echo "<script>  window.location='index.php?admin=admin';</script>"; 
?>