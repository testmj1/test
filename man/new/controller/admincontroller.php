<?php 

class add{
    public function admin()
    {
        include "./view/haeder.php";
        include './model/adminview.php';
    }
    public function admindelet()
    {
    include './model/admindelet.php';
     
    }
}
$obj2= new add();

?>