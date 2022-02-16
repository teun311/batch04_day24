<?php


namespace App\classes;


class StudentInfo
{
    protected $name;
    protected $email;
    protected $phone;
    protected $value;
    protected $result;
    protected $imageFile;
    protected $imageName, $imageDirectory;
    public function __construct($post=null,$file=null)
    {
        if ($post)
        {
            $this->name  = $post['name'];
            $this->email = $post['email'];
            $this->phone = $post['phone'];
            $this->value = $post;

        }
        if ($file)
        {
            $this->imgageFile =$file['image'];

        }
    }

    public function index()
    {
//        $this->imageName = $_FILES['image']['name'];
//        $this->imageDirectory = 'assets/upload/' .$this->imageName;
//        move_uploaded_file($_FILES['image']['tmp_name'],$this->imageDirectory);
//        echo 'success';
    //    $this->imageUpload();

        $db = 'db.txt';
        $file = fopen($db,'a');
        fwrite($file,'hello world');
        fclose($file);
        echo 'success';

    }
    protected function imageUpload ()
    {
        $this->imageName =time(). $this->imgageFile['name'];
        $this->imageDirectory = 'assets/upload/' .$this->imageDirectory;
       move_uploaded_file($this->imageFile['tmp_name'], $this->imageDirectory);
       echo 'success';
    }
}