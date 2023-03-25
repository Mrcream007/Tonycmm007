<?php
//making sure that the user fills out the boxes before submitting
if (isset($_POST['submit'])){

    $newFileName = $_POST['filename'];
    if (empty($newFileName)){
        $newFileName = "gallery";
    }
    else{
        //fixing any spacing typed by the user and also converting it to lowercase
        $newFileName = strtolower(str_replace(" ", "-", $newFileName));
    }
    $imageTitle = $_POST['filetitle'];
    $imageDesc = $_POST['filedesc'];

    $file = $_FILES['file'];
    //print_r($file);

    //creating variables from our array image upload inorder to use them to verify or check for errors
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTempName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    //using the "explode" function to collect the last part of the image upload name array
    $fileExt = explode(".", $fileName);
    //checking that the end text of image is in lowercase
    $fileActualExt = strtolower(end($fileExt));

    //checking that only these type of files/imgs are allowed to be uploaded
    $allowed = array("jpg", "jpeg", "png", "pdf", "psd");

    //checking that one of the extensions ($fileActualExt, $fileExt) correlates with any of the file type in the $allowed
    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0) {
            if ($FileSize < 2000000) {
                $imageFullName = $newFileName . ".". uniqid("", true) . "." . $fileActualExt;
                $fileDestination = "./assets/images/" . $imageFullName;

                include_once "database.php";

                if (empty($imageTitle) || empty($imageDesc)) {
                    header("Location: galleries.php?upload=empty");
                    exit();
                }else{
                    $sql = "SELECT * FROM gallery;";
                    $stmt = mysqli_stmt_init($sqliconn);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                        echo "SQL statement failed";
                    }else{
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowCount = mysqli_num_rows($result);
                        $setImageOrder = $rowCount + 1;

                        $sql = "INSERT INTO gallery (titleGallery, descGallery,	imgFullNameGallery,	orderGallery) VALUES (?, ?, ?, ?);";

                        if (!mysqli_stmt_prepare($stmt, $sql)){
                            echo "SQL statement failed";
                        }else{
                            mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
                            mysqli_stmt_execute($stmt);

                            //uploading the actual image to our server from its temporary location to the new destination 
                            move_uploaded_file($fileTempName, $fileDestination);

                            header("Location: galleries.php?upload=success");
                        }
                    }
                }

            }else{
                echo "size of file is very large!";
            }
        }else{
            echo "You had an error!";
            exit();
        }
    }else {
        echo "You have to upload a proper file type!";
    }

}