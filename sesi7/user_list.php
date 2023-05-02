


<h3>Daftar User</h3>

<table>
    <tr>
        <th>#</th>
        <th>Nama Lengkap</th>
        <th>email</th>
        <th>User Name</th>
        <th><a href="dtuser.php?aksi=new">DaftarBaru</a></th>
    </tr>



<?php
    $sql = "SELECT tu, nama, tu.username, tu.iduser FROM tbuser tu;";
    $hasil = mysqli_query($cnn, $sql);
    while($h = mysql_fetch_assoc($hasil)){

    echo "<tr>
        <th>$cn</th>
        <th>"$h["nama"]"</th>
        <th>"$h["email"]"</th>
        <th>"$h["Username"]"</th>
        <th><a href=\"dtuser.php?aksi=edit\">edit</a> <a herf=\"dtuser.php?aksi=del\"><hapus></th>
    </tr>";
    $cx++;

    }
?>
</table>