<?php

include 'config.php';
extract($_REQUEST);

if(isset($_POST['submite']) && isset($_POST['submite']) == "Create"){
    $folder = "asset/uploaded_profile";
    $file_temp_name = $_FILES['profile_pic']['tmp_name'];
    $file_name = $_FILES['profile_pic']['name'];
    $new_path = $folder . '/' . $file_name;
    $ex = explode(".",$file_name);
    $extension = strtolower(end($ex));

    if($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg'){

        move_uploaded_file($file_temp_name,$new_path);
        $insert_query = "INSERT INTO user_details(name,email_id,profile_pic) VALUES ('$name','$email','$new_path')";

        $insert_result = mysqli_query($connect,$insert_query);

        if($insert_result){
            echo "New user Created";
            header("location:index.php");
        }else{
            echo "New user can't Created";
        }

    }else{

        echo "You are uploaded".$extension. "File.  Upload only 'Jpg','Jpeg','png' file";
    }
}


?>