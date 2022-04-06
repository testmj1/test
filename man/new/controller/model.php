<?php 
  
      class fun{
           
    public function      index(){
        require_once "./view/haeder.php";
         require_once './view/container.php';
         include './view/footer.php';
          }
          public function      home(){
            require_once './view/haeder.php';
          include "./view/ragistration.php";
          include "./view/footer.php";
        } public function      login(){
          
              require_once './view/haeder.php';
              if(!isset($_SESSION['username'])){
          
           require_once './view/login.php';}
           else { include './view/container.php';}
            include "./view/footer.php";

        } public function      view(){
            include './view/loginv.php';
             include './view/view.php';
             include "./view/footer.php";
        } public function      logout(){
            include "./model/logout.php";
        } public function      edit(){
            include './view/edit.php';
        }
        //  public function      editupdate(){
        //     include "./model/editupdate.php";
        // }
         public function      submit(){
            include './model/phprag.php';

        }
        //  public function      phplogin(){
          
        //     include './model/phplogin.php';
        // }

        public function forphp()
        {
            include './model/reset_password.php';
        }
         public function      forget(){
           include './view/haeder.php';
            include './view/forget.php';
            include './view/footer.php';
        } 
        // public function      forgetphp(){
        //     include './model/reset_password.php';
        // // }
        // public function password(){
        //     include './model/password.php';
        // }
        public function resetpass()
        {
          
          include "./view/resetp.php";
        }
        public function otp()
        {
          include './view/haeder.php';
          include './view/otp.php';
          include './view/footer.php';
        }
        public function chackotp()
        {
          include './model/chackotp.php';
        }
        public function conpass()
        {
          include "./view/haeder.php";
          include "./view/conpass.php";
          include "./view/footer.php";
        }
        public function conpassphp()
        {
          include "./model/conpassphp.php";
        }
        }

        
         
      $obj= new fun();
   
 
 ?>