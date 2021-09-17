<?php 

    require_once "../function.php";
 
    $sql = "DELETE FORM tblkategori WHERE idkategory = $id";

    $result = mysqli_query($koneksi, $sql);

    header ("location:http://localhost/PHPSMK/restoran/kategori/select.php");


?>