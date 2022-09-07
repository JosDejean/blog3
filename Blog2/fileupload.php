<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["avatar"] ["name"]);
$uploadOK= 1;
$imageFileType= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["inscription"])){
    $check = getimagesize($_FILES["avatar"] ["tmp_name"]);
    if ($check !== false) {
        echo "file is an image" . $check ["mime"] . ".";
        $uploadOK = 1;

} else{
        echo 'file is not an image.';
        $uploadOK = 0;
    }
}

//check if file exists
if (file_exists($target_file)){
    echo "sorry file exists already";
    $uploadOK = 0;
}


//check file size

if ($_FILES["avatar"] ["size"] > 500000) {
    echo "sorry your file is too large";
    $uploadOK = 0;
}


//limit file type

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
    echo "sorry, only JPG, JPEG, PNG & GIF files allowed.";
    $uploadOK = 0;
}

// chekc if $uploadOK is set to 0 by an error

if ($uploadOK == 0){
    echo 'sorry file not uploaded';

    //file upload

} else{


    if (move_uploaded_file($_FILES ["avatar"] ["tmp_name"], $target_file)) {
        echo  "the file". htmlspecialchars(basename($_FILES["avatar"] ["name"])). "has been uploaded";
    } else {
        echo "sorry there was an error uploading your file";
    }
}





?>


