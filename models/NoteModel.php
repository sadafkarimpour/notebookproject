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


    public static function insert($title,$description,$user_id):bool
    {
        return true;
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
    
    public static function find($user_id)
    {
        return true;
    }


}

?>