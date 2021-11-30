<?php 
    include 'dbconfig.php';
    $targetDir = "upload\\";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    echo "Target dir :". $targetDir ."<br>";
    echo "File name :" . $fileName . "<br>"; 
    echo "Path:" . $targetFilePath. "<br>";
    echo "Type: ". $fileType ."<br>";

    $allowTypes = array('jpg','png','jpeg','gif','pdf');

    if(in_array($fileType, $allowTypes)){
        echo "Baina";
       if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $insert = mysqli_query($connection, "INSERT into upload (img_name, uploaddate) VALUES ('$fileName', NOW())");
            if($insert){
                echo "DONE";
                header("location: img.php");
            } else {
                echo "error";
            }
       }
    } else {
        echo "Baihgui";
    }

?>