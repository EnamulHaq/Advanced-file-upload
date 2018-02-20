<?php


$terget_dir="file/";
$terget_image=$_FILES["nahid"]["name"];
$main_image=$terget_dir.$terget_image;
$tem_name=$_FILES["nahid"]["tmp_name"];
$size_limit=$_FILES["nahid"]["size"];
// output jpg, png, gif etc
$file_type=pathinfo($terget_image, PATHINFO_EXTENSION);

if ($file_type == 'jpg' || $file_type == 'png' ) {
    //File size
    if ($size_limit<50000) {


    	if (file_exists($main_image)) {
            //move_uploaded_file use for file upload
    	 	if (move_uploaded_file($tem_name,$main_image)) {
			echo "file uploaded";
			}else{
				echo "Please try again";
			}
     	

        }else{
     	  echo "File already exists.";
        }


    }else{
    	echo "file too large";
    }
     //File exists

	// run upload function
	
}else{
	echo 'only allow jpg image';
}

?>