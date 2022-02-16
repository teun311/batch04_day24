<?php
require_once 'vendor/autoload.php';
use App\classes\StudentInfo;
use App\classes\FileUpload;
use App\classes\Auth;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'file-upload')
    {
        include 'pages/fileUpload.php';
    }
    elseif ($_GET['pages'] == 'view-student')  //view page
    {
        $fileUpload = new FileUpload();
        $students = $fileUpload->getAllStudentInfo();
        include 'pages/viewStudent.php';
    }
    elseif ($_GET['pages'] == 'login')
    {
        include 'pages/login.php';
    }

    elseif ($_GET['pages'] == 'logout')
    {

        $auth  = new Auth();
        $auth->logout();

    }

}
//elseif (isset($_POST['btn']))
//{
//    $studentInfo = new StudentInfo($_POST,$_FILES);
//       $studentInfo->index();
//}

elseif (isset($_POST['btn']))
{   $fileUpload = new FileUpload($_FILES, $_POST);
    $message = $fileUpload->index();
    include 'pages/fileUpload.php';

}
elseif (isset($_POST['loginBtn']))
{   $fileUpload = new FileUpload($_FILES, $_POST);
    $message = $fileUpload->index();
    include 'pages/fileUpload.php';

}elseif (isset($_GET['loginBtn']))
{
    $auth  = new Auth();
    $message =$auth->login();
    include 'pages/login.php';

}

