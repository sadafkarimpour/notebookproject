<?php 

class NoteModel{
    /**
     * شناسه یادداشت
     *
     * @var int
     */ 
    public $id;
    /**
     * عنوان یادداشت
     *
     * @var string
     */
    public $title;
      /**
     * توضیحات یادداشت
     *
     * @var string
     */
    public $description;
      /**
     * شناسه کاربر
     *
     * @var string
     */
    public $user_id;
      /**
     * تاریخ ثبت یادداشت
     *
     * @var string
     */
    public $datetime_created;
      /**
     * تاریخ آپدیت یادداشت
     *
     * @var string
     */
    public $datetime_edited;


    public static function insertnote($title,$description,$user_id)
    {


        require_once 'database.php';
        global $servername;
        global $username;
        global $password;
        global $db_name;

        $connect = mysqli_connect($servername, $username, $password, $db_name);
        if (!$connect) {
            die ("Connection Error!".mysqli_connect_error());
        }
       
        $sql="INSERT INTO `addnote` (title,note,user_id) VALUES ('$title','$description','$user_id')";
        mysqli_query($connect,$sql); 
      //  header('location:note.php?action=index');

    }
    
    public static function update($id,$title,$description):bool
    {
        
        return true;
    }
    
    public static function delete($id):bool
    {
        return true;
    }
    
    public static function findone($id)
    {
        return true;
    }
    
    public static function find($user_id, $pageIndex, $pageSize)
    {
        $notes = [];
        
        // TODO: fetch data

        return $notes;
    }


}

?>