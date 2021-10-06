<?php

$target_Dir = "";
$target_file = $target_Dir . basename($_FILES["fielToUpload"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION))

?>