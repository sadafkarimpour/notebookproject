<?php 

class UserModel{
    /**
     * شناسه کاربر
     *
     * @var int
     */ 
    public $id;
    /**
     * نام کاربر
     *
     * @var string
     */
    public $fisrtname;
      /**
     * نام خانوادگی کاربر
     *
     * @var string
     */
    public $lastname;
      /**
     * نام کاربری
     *
     * @var string
     */
    public $username;
      /**
     * ایمیل کاربر
     *
     * @var string
     */
    public $email;
      /**
     * رمز عبور کاربر
     *
     * @var string
     */
    public $password;


    public static function insert($firstname,$lastname,$username,$phone_number,$email,$passwordd)
    {
       
        require_once "database.php";
       
        $sql="INSERT INTO `user` ( `fname`, `lname`, `username`, `phone_number`, `email`, `passwordd`) VALUES ('$firstname','$lastname','$username','$phone_number','$email','$passwordd')";
        $result=mysqli_query($connect,$sql);
        if($result){
            echo json_encode(array("statusCode"=>200));
        }
        else{
            echo json_encode(array("statusCode"=>201));
        
        }
    

    }

    public static function update($id,$firstname,$lastname,$username,$email,$password):bool
    {
        return true;
    }
    
    public static function login($email,$passwordd)
    {
        require_once "database.php";
        session_start();
        $email=$_POST['email'];
        $passwordd=$_POST['passwordd'];
        $sqlche= "SELECT * From  `user` WHERE email='$email' and passwordd='$passwordd'";
        $check=mysqli_query($connect,$sqlche);
        if(mysqli_num_rows($check)===1){
            $row=mysqli_fetch_assoc($check);
            if($row['email']=$email and $row['passwordd']=$passwordd){
           
              $_SESSION["id"]=$row["id"];
              echo json_encode(array("statusCode"=>200));
             
              
            }
           else{
            echo json_encode(array("statusCode"=>201));
           }
          
        }
        else
        {
           
            echo json_encode(array("statusCode"=>201));
        }
    
    }
    
    public static function logout($id):bool
    {
        return true;
    }
    
    
    public static function findone($id)
    {
        return true;
    }


}

?>