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
    
    public static function update($id,$title,$description,$date)
    {
        global $servername;
        global $username;
        global $password;
        global $db_name;
        $connect=mysqli_connect($servername,$username,$password,$db_name);
        if (!$connect) {
            die ("Connection Error
            !".mysqli_connect_error());
        }
        

        mysqli_query($connect,"UPDATE `addnote` SET datee='$date' , title='$title' , note='$description' , datee='$date'  where id='$id' ");
      

    }
    
    public static function delete($id)
    {
        global $servername;
        global $username;
        global $password;
        global $db_name;

        $connect = mysqli_connect($servername, $username, $password, $db_name);
        if (!$connect) {
            die ("Connection Error!".mysqli_connect_error());
        }
        mysqli_query($connect,"delete from `addnote` where id='$id' ");
       

    }
    
    public static function findone($id)
    {
        return true;
    }
    
    /**
     * @param int $user_id
     * @param int $pageIndex
     * @param int $pageSize
     * @return NoteModel[]
     */
    public static function find($user_id, $pageIndex, $pageSize, &$numRows = 0)
    {
        $notes = [];

        
        global $servername;
        global $username;
        global $password;
        global $db_name;

        $connect = mysqli_connect($servername, $username, $password, $db_name);
        if (!$connect) {
            die ("Connection Error!".mysqli_connect_error());
        }

        //$sql= "SELECT * FROM `addnote` WHERE `user_id`=$user_id";

        // todo .....
        $sql="SELECT * from `addnote` WHERE   `user_id`=$user_id  " ;
        $sql_result=mysqli_query($connect,$sql);
        $total=mysqli_num_rows($sql_result);
        $total_pages=ceil($total/$pageSize);
        $numRows = $total_pages;

        $start_form=($pageIndex-1)*$pageSize;
        $sql= "SELECT * FROM `addnote` WHERE `user_id`=$user_id   LIMIT " .  $start_form . ',' .  $pageSize ;  
        $sql_result=mysqli_query($connect,$sql);
        if (mysqli_num_rows($sql_result)>0){
            while ($row=mysqli_fetch_assoc($sql_result)) {
                //array_push($notes,$row);
                $note = new NoteModel();
                $note->id = $row['id'];
                $note->title = $row['title'];
                $note->description=$row['note'];
                $note->user_id=$row['user_id'];
                // ... 
                $note->datetime_created = ($row['datee']);
               // $note->datetime_edited =($row['datetime_edited']);
                // ....
                $notes[] = $note;
            }
        }

        return $notes;
    }


}

?>