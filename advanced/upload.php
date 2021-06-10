<?php 
    $target_dir = "advanced/";
    $targetFile = $target_dir . basename($_FILES['file']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // CHECK IF THE IMAGE IS AN IMAGE
        if(isset($_POST['submit'])){
            $check = getimagesize($_FILES['file']['tmp_name']);
            if($check !== false){
                echo "file is an image-" . $check["mime"]. ".";
                echo "<br>" . $_FILES['file']['name'];
                $uploadOk = 1;
            }else{
                echo "File is not an image";
                $uploadOk = 0;
            }
            
        }
        if(file_exists($targetFile)){
            echo "Sorry file already exist";
            $uploadOk = 0;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flie Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype = "multipart/form-data">
        <h1>Select image to upload</h1>
        <input type="file" name="file" id="file">
        <input type="submit" value="submit" name='submit'>
    </form>
</body>
</html>