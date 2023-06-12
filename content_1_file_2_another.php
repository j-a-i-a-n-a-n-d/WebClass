<?php
function copyFile($sourcePath, $destinationPath)
{
    if (!copy($sourcePath, $destinationPath)) {
        echo "Failed to copy the file.";
    } else {
        echo "File copied successfully!";
    }
}
$sourceFile = 'uploads/file1.txt';
$destinationFile = 'uploads/file2.txt';

copyFile($sourceFile, $destinationFile);
?>