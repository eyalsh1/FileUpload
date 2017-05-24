<?php

$uploaddir = "C:\\xampp\\htdocs\\schoolProject-master\\img\\";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo "<p>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Upload failed";
}

echo "</p>";
echo '<pre>';
echo 'Here is some more debugging info:';
print_r($_FILES);
print "</pre>";


//http://stackoverflow.com/questions/18929178/move-uploaded-file-function-is-not-working

/*File is valid, and was successfully uploaded.

Here is some more debugging info:Array
(
    [userfile] => Array
    (
        [name] => school_img.png
            [type] => image/png
[tmp_name] => C:\xampp\tmp\phpCE41.tmp
[error] => 0
            [size] => 224073
        )

)*/