<?php 

class NoteModel
{

    public $id;
    public $title;
    public $description;
    public $userId; 
    public $datetimeCreated;
    public $datetimeEdited;

    public static function find($userId)
    {
        $result = [];

        for($i = 0; $i < 10; $i++){
            $note = new NoteModel();
            $note->id = $i+1;
            $note->title = "Title-" . $i;
            $note->description = "Description-" . $i;
            $note->userId = 10;
            $note->datetimeCreated = new Datetime();
            $note->datetimeEdited = new Datetime();

            $result[] = $note;
        }

        return $result;
    }
}