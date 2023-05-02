<?php
    include_once("konfigurasi.php");
    $psn = "";
    if(isset($_POST["txUSER"])){
        $user = $_POST["txUSER"];
        $pwd = $_POST["txPASS"];
            
            $sql = "SELECT tu.nama, tu.email, tu.username, tu.passkey, tu.iduser FROM tbuser tu WHERE tu.username='".$user."';";
            $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke dbms");
            $hasil = mysqli_query($cnn, $sql);
            $jdata = mysqli_num_rows($hasil);
            //echo "DEBUG: jdata=>".$jdata;
            if($jdata > 0){
                $h = mysqli_fetch_assoc($hasil);
                //echo "DEBUG:<br>Nama: " . $h["passkey"];
                if(md5($pwd) == $h["passkey"]){
                    echo "DEBUG: password sama";
                }else{
                    $psn = "Akses Ditolak";
                }             
            }else{
                $psn = "Akses Ditolak";

            }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
</head>
<body>

    <div><?=$psn;?></div> 
    
<form method="POST" action="formlogin.php">
    <h3>Form Login</h3>
        <div>
            Username 
            <input type="text" name="txUSER">
        </div>

        <div>
            Password <br>
            <input type="password" name="txPASS">
        </div>

        <div><br>
            <button type="submit">Login</button>
        </div>

        <div><br>
            <button type ="submit"><a href="registrasi.php">Registrasi</button>
        </div>

        
    </form>
</body>
</html>

   