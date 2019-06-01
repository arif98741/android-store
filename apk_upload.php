<?php
session_start();

if (!empty($_FILES["file_apk"]["name"])) {
    //echo '<pre>';
    //print_r($_POST);
    //exit;
    $name = $_FILES["file_apk"]["name"]; 
    $temp = explode(".", $_FILES["file_apk"]["name"]);
    $directory =  str_replace(" ", ".",$temp[1]);

    $filename     = $directory;
    $package      = '';
    $cover_image  = '';
    $logo         = '';
    $screenshot_1 = '';
    $screenshot_2 = '';
    $screenshot_3 = '';
    $screenshot_4 = '';
    $screenshot_5 = '';
    $screenshot_6 = '';
    $screenshot_7 = '';
    $screenshot_8 = '';
    
    if (!file_exists("uploads/files/" . $filename)) {
        mkdir("uploads/files/" . $filename);
        mkdir("uploads/files/" . $filename . "/screenshot");
        mkdir("uploads/files/" . $filename . "/others");
        
        //zip file upload
        $temp = explode(".", $_FILES["file_apk"]["name"]); 

        $newfilename = $filename .'.'. end($temp);
        move_uploaded_file($_FILES["file_apk"]["tmp_name"], "uploads/files/" . $filename . "/" . $newfilename);
        $package = $newfilename;
        
        // COVER IMAGE UPLOADS START
        /*image upload start*/
        if (!empty($_FILES["cover_image"]["tmp_name"])) {
            $temp        = explode(".", $_FILES["cover_image"]["name"]);
            $newfilename = "cover". '.' . end($temp);
            move_uploaded_file($_FILES["cover_image"]["tmp_name"], "uploads/files/" . $filename . "/others/" . $newfilename);
            $cover_image = $newfilename;
        }

        
        // LOGO AND COVER IMAGE START
        if (!empty($_FILES["logo"]["tmp_name"])) {
            $temp        = explode(".", $_FILES["logo"]["name"]);
            $newfilename = "logo" . '.' . end($temp);
            move_uploaded_file($_FILES["logo"]["tmp_name"], "uploads/files/" . $filename . "/others/" . $newfilename);
            $logo = $newfilename;
        }
        
        // LOGO AND COVER IMAGE END
        //SCREENSHOT UPLOAD START
        
        if (!empty($_FILES["screenshot_1"]["tmp_name"])) {
            $temp        = explode(".", $_FILES["screenshot_1"]["name"]);
            $newfilename = "1" . '.' . end($temp);
            move_uploaded_file($_FILES["screenshot_1"]["tmp_name"], "uploads/files/" . $filename . "/screenshot/" . $newfilename);
            $screenshot_1 = $newfilename;
        }
        
        if (!empty($_FILES["screenshot_2"]["tmp_name"])) {
            $temp        = explode(".", $_FILES["screenshot_2"]["name"]);
            $newfilename = "2" . '.' . end($temp);
            move_uploaded_file($_FILES["screenshot_2"]["tmp_name"], "uploads/files/" . $filename . "/screenshot/" . $newfilename);
            $screenshot_2 = $newfilename;
        }
        
        if (!empty($_FILES["screenshot_3"]["tmp_name"])) {
            $temp        = explode(".", $_FILES["screenshot_3"]["name"]);
            $newfilename = "3" . '.' . end($temp);
            move_uploaded_file($_FILES["screenshot_3"]["tmp_name"], "uploads/files/" . $filename . "/screenshot/" . $newfilename);
            $screenshot_3 = $newfilename;
        }
        
        if (!empty($_FILES["screenshot_4"]["tmp_name"])) {
            $temp        = explode(".", $_FILES["screenshot_4"]["name"]);
            $newfilename = "4" . '.' . end($temp);
            move_uploaded_file($_FILES["screenshot_4"]["tmp_name"], "uploads/files/" . $filename . "/screenshot/" . $newfilename);
            $screenshot_4 = $newfilename;
        }
        
        if (!empty($_FILES["screenshot_5"]["tmp_name"])) {
            $temp        = explode(".", $_FILES["screenshot_5"]["name"]);
            $newfilename = "5" . '.' . end($temp);
            move_uploaded_file($_FILES["screenshot_5"]["tmp_name"], "uploads/files/" . $filename . "/screenshot/" . $newfilename);
            $screenshot_5 = $newfilename;
        }
        
        if (!empty($_FILES["screenshot_6"]["tmp_name"])) {
            $temp        = explode(".", $_FILES["screenshot_6"]["name"]);
            $newfilename = "6" . '.' . end($temp);
            move_uploaded_file($_FILES["screenshot_6"]["tmp_name"], "uploads/files/" . $filename . "/screenshot/" . $newfilename);
            $screenshot_6 = $newfilename;
        }
        
        if (!empty($_FILES["screenshot_7"]["tmp_name"])) {
            $temp        = explode(".", $_FILES["screenshot_7"]["name"]);
            $newfilename = "7" . '.' . end($temp);
            move_uploaded_file($_FILES["screenshot_7"]["tmp_name"], "uploads/files/" . $filename . "/screenshot/" . $newfilename);
            $screenshot_7 = $newfilename;
        }
        
        if (!empty($_FILES["screenshot_8"]["tmp_name"])) {
            $temp        = explode(".", $_FILES["screenshot_8"]["name"]);
            $newfilename = "8" . '.' . end($temp);
            move_uploaded_file($_FILES["screenshot_8"]["tmp_name"], "uploads/files/" . $filename . "/screenshot/" . $newfilename);
            $screenshot_8 = $newfilename;
        }
        
        $_SESSION['filename']     = str_replace(".apk", "",$package);
        $_SESSION['cover_image']  = $cover_image;
        $_SESSION['logo']         = $logo;
        $_SESSION['screenshot_1'] = $screenshot_1;
        $_SESSION['screenshot_2'] = $screenshot_2;
        $_SESSION['screenshot_3'] = $screenshot_3;
        $_SESSION['screenshot_4'] = $screenshot_4;
        $_SESSION['screenshot_5'] = $screenshot_5;
        $_SESSION['screenshot_6'] = $screenshot_6;
        $_SESSION['screenshot_7'] = $screenshot_7;
        $_SESSION['screenshot_8'] = $screenshot_8;
        
        header('location: show_result.php');
        exit;
    } else {
        echo "The directory already exists.";
    }
    
}





?>