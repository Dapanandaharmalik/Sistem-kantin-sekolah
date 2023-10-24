<?php
// Create database connection using config file
include_once("../test/config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_menu ORDER BY id_menu DESC");
?>
 
<html>
<head>    
    <title>Menu makanan/minuman</title>
</head>
 
<body>
<a href="add.php">Kembali ke halaman utama</a><br/><br/>
<a href="add.php">Tambah Menu makanan/minuman</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Nama</th><th>Jenis</th><th>Harga</th><th>Penjual</th><th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama_menu']."</td>";
        echo "<td>".$user_data['jenis_menu']."</td>";
        echo "<td>".$user_data['harga_menu']."</td>";
        echo "<td>".$user_data['stok_menu']."</td>";
        echo "<td>".$user_data['id_penjual']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id_menu]'>Edit</a> | <a href='delete.php?id=$user_data[id_menu]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>