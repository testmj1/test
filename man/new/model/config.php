<?php  $err="";
class user{
    public $host="localhost";
    public $username="root";
    public $password="";
    public $dbname="loginpage";
    public $E;
    public $err="";
    public function __construct()

    {
        $this->E= new mysqli($this->host,$this->username,$this->password,$this->dbname);
        
        if(mysqli_connect_errno()){
             echo "connectin faild";
             exit;
        }
    }
//Query run and database inserted
    public function insdata($name,$lname,$g,$email,$password,$city,$address,$im,){
        $res=$this->E->query("select * from ragistration where email='$email' AND password='$password'");
        if(mysqli_num_rows($res)){// this qurey return selected rows return or zero row selected
           //this condition is true ,so email allrady exeits in database
      return false;
      exit;
        }
        else{
            $this->E->query("insert into ragistration (fname,lname,gender,email,password,city,address,img)values('$name','$lname','$g','$email','$password','$city','$address','$im')");
            return true;
        }

      //print_r(mysqli_fetch_assoc($this->E->query($res)));
      
return $res;

    }
    public function login($email,$password)
    {                          // SELECT`email`, `password` FROM `ragistration` WHERE email="admi@jnjk.jd" AND password="sdfsdf";
     $result = $this->E->query("SELECT`email`, `password` FROM `ragistration` WHERE email='$email' AND password='$password';");

       if(mysqli_num_rows($result)){
           return true;
       }else {
           return false;
       
       }
      // Fetch all 
     } public function Token($query)
     {
         $res=$this->E->query($query);
         return $res;
     }
     public function email($datains)
     { 
$result=$this->E->query($datains);
if( $result){return true;}else{return false; };

     }
     public function select($email){
         $res=$this->E->query("select * from `ragistration` where email='$email' ;");
         while($row = $res->fetch_assoc()) {
            session_start();
        $_SESSION['username']=$row['fname']; 
        $_SESSION['lastname']=$row['lname'];
        $_SESSION['gender']=$row['gender'];
        $_SESSION['email']=$row['email'];
        $_SESSION['city']=$row['city'];
        $_SESSION['address']=$row['address']      ;
          $_SESSION['img']=$row['img'];
          $_SESSION['admin']=$row['admin'];
          
          }
           

     }


    public function updatedata($email,$N,$L,$A,$city,$g,$im){
        $sql="UPDATE ragistration SET fname='$N',lname='$L',city='$city',address='$A',gender='$g' WHERE email='$email'";
$res =$this->E->query($sql);
if($res){
    session_start();
    $_SESSION['username']=$N;
    $_SESSION['lastname']=$L;
    $_SESSION['gender']=$g;
    $_SESSION['city']=$city;
    $_SESSION['address']=$A;
    if(!$im==''){
     $this->E->query("UPDATE ragistration SET img='$im' WHERE email='$email';" );

    
    $_SESSION['img']=$im;
    }
    return true;
    
      
} else {
  echo "Error updating record: "  ; return false;
}
    // // }
    // // public function login1($q)
    // // {
    // //     $res=$this->E->query("select * from `ragistration` where email='$q' ;");
    // //     if($res){
    // //         return true;
    // //     }
    // //     else
    // //     {
    // //         return false;
    //     }
    // }
    // public function forget($q){
    //     $re=$this->E->query($q);
    //     if($re){
    //         return $re;
    //     }
    //     else return false;
     }
    public function UpdatePassword($email,$conpass)
    {
      
      $query="UPDATE ragistration SET password='$conpass' WHERE email='$email' ";

        $res=$this->E->query($query);
        if($res){
            return true;
        }
        else
        {
            return false;
        }


        
    }
    
    public function deleteEmail($email){//tis function is delet otp in data base pwdreset table
        
        $this->E->query("DELETE FROM pwdreset WHERE UemailId='$email'");
    
        
    }
     


    public function adminedit($q)
    {
        $res=$this->E->query($q);
        if($res){
            return $res;
        }
        else
        return false;
    }
    public function admindelet($id)
    {
       $res=$this->E->query("DELETE FROM ragistration WHERE id='$id'");
       if($res){
           return true ;

       }
       else return false ;
    }
    public function otpp($otp)
    {
        $res=$this->E->query("SELECT * FROM pwdreset WHERE validator='$otp' ");

        if(mysqli_num_rows($res)){
            return true;
       }else return false;
    }
    public function Uemailid($otp)
    {
        $res=$this->E->query("SELECT * FROM pwdreset WHERE validator='$otp' ");
         foreach($res as $row){
             $otp=$row['UemailId'];
             
         }
         if($res){
         return $otp;
    }else return false;
    }
    public function Isemail($email)
    {
        $res=$this->E->query("SELECT * FROM ragistration WHERE email='$email'");
    if(mysqli_num_rows($res)){
        return true;
    }
    else return false;
    }
}

$o= new user;

?>