<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for menu update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama=$_POST['nama'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    $penjual=$_POST['penjual'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE menu SET nama='$nama',jenis='$jenis',harga='$harga',penjual='$penjual' WHERE id=$id");
    
    // Redirect to homepage to display updated menu in list
    header("Location: index.php");
}
?>
<?php
// Display selected menu data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech menu data based on id
$result = mysqli_query($mysqli, "SELECT * FROM menu WHERE id=$id");
 
while($menu_data = mysqli_fetch_array($result))
{
    $nama = $menu_data['nama'];
    $jenis = $menu_data['jenis'];
    $harga = $menu_data['harga'];
    $penjual = $menu_data['penjual'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">atryry</a>
    <br/><br/>
    
    <form name="update_menu" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>jenis</td>
                <td><input type="text" name="jenis" value=<?php echo $jenis;?>></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr>
                <td>penjual</td>
                <td><input type="text" name="harga" value=<?php echo $penjual;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>