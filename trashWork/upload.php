<?php
    //this means that once the user clicks the button the file/pic should be uploaded
    if(isset($_POST['submit'])) {
        $file = $_FILES['file'];
        /*print_r($file);*/
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        //code below tells php the type of files that i want uploaded e.g jpeg, png, pdf, ect
        $fileExt = explode('.', $fileName);
        
        //checks that file are always in small letters
        $fileActualExt = strtolower(end($fileExt));

        // i create a variable for the files i want to be allowed for uploading
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        //this checks that the code above works
        if(in_array($fileActualExt, $allowed)) {
            //checks for error in uploading file
            if ($fileError === 0) {
                //checks for error in the file size and assigning an actual size
                if($fileSize < 1000000) {
                    //makes sure that no 2 files of the same name are uploaded. New variable is created
                    $fileNameNew = uniqid('', true).".".$fileActualExt;

                    //assigning a destination inside our root folder where the files will be successfully uploaded to. New variable is created
                    $fileDestination = './assets/uploads/'.$fileNameNew;
                    //this moves the file from the temporary destination to the uploads folder
                    move_uploaded_file($fileTmpName, $fileDestination);
                    //this takes us back to the front page
                    header("Location: uploadfile.php?upload-successful");
                }
                else {
                    echo "file too big!";
                }
            }
            else {
                echo "There was an error!";
            }
        }
        else {
            echo "You cannot upload this kind of file!";
        }
    }

?>