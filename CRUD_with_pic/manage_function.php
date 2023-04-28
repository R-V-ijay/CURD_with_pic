<?php

include 'config.php';
extract($_REQUEST);

if (isset($submit) && $submit == "Create") {
    $folder = "asset/uploaded_profile";
    $file_temp_name = $_FILES['profile_pic']['tmp_name'];
    $file_name = $_FILES['profile_pic']['name'];
    $new_path = $folder . '/' . $file_name;
    $ex = explode(".", $file_name);
    $extension = strtolower(end($ex));

    if ($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg') {

        move_uploaded_file($file_temp_name, $new_path);
        $insert_query = "INSERT INTO user_details(name,email_id,profile_pic) VALUES ('$name','$email','$new_path')";

        $insert_result = mysqli_query($connect, $insert_query);

        if ($insert_result) {
            echo "New user Created";
            header("location:index.php");
        } else {
            echo "New user can't Created";
        }

    } else {

        echo "You are uploaded" . $extension . "File.  Upload only 'Jpg','Jpeg','png' file";
    }
} else if (isset($submit) && $submit == "Update") {
    $file_name = $_FILES['profile_pic']['name'];
    $ex = explode(".", $file_name);
    $extension = strtolower(end($ex));

    if ($_FILES['profile_pic']['size'] == 0) {
        $update_query = "UPDATE user_details SET name='$name', email_id='$email' WHERE id=$id";
        $update_result = mysqli_query($connect, $update_query);

        if ($update_result) {
            echo "Updated";
            header("location:index.php");
        } else {
            echo "can't Updated";
        }
    } else if ($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg') {
        $folder = "asset/uploaded_profile";
        $file_temp_name = $_FILES['profile_pic']['tmp_name'];
        $file_name = $_FILES['profile_pic']['name'];
        $new_path = $folder . '/' . $file_name;
        $ex = explode(".", $file_name);
        $extension = strtolower(end($ex));

        move_uploaded_file($file_temp_name, $new_path);
        $update_query = "UPDATE user_details SET name='$name', email_id='$email',profile_pic='$new_path' WHERE id=$id";

        $update_result = mysqli_query($connect, $update_query);

        if ($update_result) {
            echo "Updated";
            header("location:index.php");
        } else {
            echo "can't Updated";
        }
    }

} else if (isset($submit) && $submit == "delete") {
    $query = "SELECT profile_pic FROM user_details WHERE id=$id";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $profile_pic = $row['profile_pic'];
    if (file_exists($profile_pic)) {
        unlink($profile_pic);
    }
    $delete_query = "DELETE FROM user_details WHERE id=$id";
    $delete_result = mysqli_query($connect, $delete_query);
    if ($delete_result) {
        header("location:index.php");
    }
}


?>