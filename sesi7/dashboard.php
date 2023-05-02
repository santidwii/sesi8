<?php
    session_start();

    if(!isset($_SESSION["login"])){
        header("location: formlogin.php");

    }
    $konten = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

<ul>
    <li>Datamahasiswa</li>
    <li>DataMatakuliah</li>
    <li>DataDosen</li>
    <li>DataUser</li>
    <li>[Username] - logout</li>
<ul>
    
<div>
    <?php
    echo $konten;
    ?>

</body>
</html>