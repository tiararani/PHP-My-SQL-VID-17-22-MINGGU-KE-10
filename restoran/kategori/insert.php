<form action="" method="post">
    kategory : 
    <input type="text" name="kategory">
    <br>
    <input type="submit" name="simpan" value="simpan">

</form>

<?php 

require_once "../function.php";

if (isset($_POST['simpan'])) {

    $kategory = $_POST['kategory'];

    $sql = "INSERT INTO tblkategori VALUES ('','$kategory')";

    $result = mysqli_query($koneksi,$sql);

    header("location:http://localhost/PHPSMK/restoran/kategori/select.php");
}



?>