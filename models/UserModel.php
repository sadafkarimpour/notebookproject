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


    public static function insert($firstname,$lastname,$username,$email,$password)
    {
       
        require_once "database.php";
        $data=$_POST['data'];
        $firstname=$data['fname'];
        $lastname=$data['lname'];
        $username=$data['username'];
        $phonenum=$data['phone-number'];
        $email=$data['email'];
        $password=$data['passwordd'];
        $sql="INSERT INTO `signupnote` ( `fname`, `lname`, `username`, `phone_number`, `email`, `passwordd`) VALUES ('$firstname','$lastname','$username','$phonenum','$email','$password')";
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
    
    public static function login($email,$password):bool
    {
        return true;
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