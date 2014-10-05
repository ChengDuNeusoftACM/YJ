<?php
    if($_FILES["file"]["error"]>0)
    {
        echo "Error:".$_FILES["file"]["error"]."<br />";
    }    
    else
    {
        echo "Upload: ".$_FILES["file"]["name"]."<br />";
        if(file_exists("upload/".$_FILES["file"]["name"]))
        {
            echo $_FILES['file']['name']."already exists. ";
        }
        else
        {
            echo "Stored in "."upload/".$_FILES['file']['name'];
            //move_uploaded_file($_FILES['file']["tmp_name"],"upload/".$_FILES['file']['name']);
            move_uploaded_file($_FILES["file"]["tmp_name"],"new/" . $_FILES["file"]["name"]);
            echo "Stored in "."upload/".$_FILES['file']['name'];
        }
    }

?>