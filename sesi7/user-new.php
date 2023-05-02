<h3>Menambahkan User Baru</h3>

<from method="post " action="dtuser.php">
    <input type="hidden" name="act" value="store">

    <div>
        nama Lengkap
        <input type="text" name="txNAMA">
    </div>

    <div>
        email 
        <input type="email" name="txEMAIL">
    </div>

    <div>
        user name 
        <input type="text" name="txUSER">
    </div>

    <div>
        password
        <input type="password" name="txPASS1">
    </div>

    <div>
        password
        <input type="password" name="txPASS2">
    </div>

    <div>

    </div>

    <div>
        <button type="submit"> buat data baru </button>
    </div>

?>
