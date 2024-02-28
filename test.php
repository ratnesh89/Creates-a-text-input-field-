<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form method="post" action="test.php">
    <input type="test" name="folder_name">
    <input type="submit">
</body>
</html>
<?php 
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $folder_name = $_POST['folder_name'];
    if(mkdir("c:/".$folder_name))
    {
        echo"Folder created";
    }
    else{
        echo "<style>.xe-warning{display:none}</style>";
        echo "Folder already exist";
    }
}
?>

