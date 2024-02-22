<?php
//form edit atau update
include "koneksi.php";
$judul=$_GET['judul'];
$query="SELECT * FROM tbl_pjbl WHERE judul='$judul'";
$hasil=mysqli_query($conn,$query);
$data=mysqli_fetch_array($hasil);
?>
<form method="POST" action="update.php">
    
            <td>Judul</td>
            <td>:</td>
           <td><input type="text" name="judul" value="<?php echo $data['judul'];?>"></td>
  <br>
      
            <td>Artikel</td>
            <td>:</td>
            <td><input type="text" name="artikel" value="<?php echo $data['artikel'];?>"></td>
        <br>
        
            <td><input type="submit" name="submit" value="KIRIM"></td>
            <td></td>
            <td><input type="reset" name="reset" value="RESET"></td>
        
</form>