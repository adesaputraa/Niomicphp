<!-- fungsi output pada php -->

<!-- <?php 

echo "<p>Belajar php<p/>";
echo ("<h1>belajar php tanda kurung</h1>");
print("<h3> belajar php h3 </h3>");
print("<h1>Fungsi print </h1>");

?> -->

<!-- Variable dan Konstanta -->
<!-- variable adalah suatu penyimpanan dalam memori komputer
yang berisi tentang data atau informasi yang mana nilainya telah
diketahui maupun belom diketahui.
konstanta adalah lokasi penyimpanan didalam memori komputer
yang berisi data atau informasi yang nilainya bersifat tetap atau tidak bisa diubah. -->
<!-- <?php 
$nilai =34;
echo "$nilai";
?> -->

<!-- Tugas 1 -->
<!-- <?php 
echo ("<h1>Daftar Menu</h1>");
$nama = "Ayam goreng";
$harga =13000;
echo "<li>$nama &nbsp;=Rp. $harga</li>";
?> -->
<!-- Array Terindeks dimuali dari angka 0 -->
<!-- Dua spasi – Tikkan &ensp;
Empat spasi – Tikkan &emsp;
Indentasi – Tikkan &nbsp;&nbsp;&nbsp;&nbsp; -->

<?php
echo "<h1> Tugas 1</h1>";
echo ("<u><h3> Jawaban No.1 </h3></u>");
echo ("<h1>Daftar Menu</h1>");
$nama = ["Ayam goreng", "Ayam Bakar", "Ayam Sayur", 
        "Tempe Goreng" , "Tahu Goreng" , "Soto", 
        "Nasi Putih", "Es Teh" , "Es Tebu"];
$harga = ["Rp. 13000", "15000", "Rp. 1000","1000","3000","5000", "4000"];
   echo "<p><li>$nama[0] &emsp;= $harga[0] </li></p>";
   echo "<p><li>$nama[1] &emsp;&ensp;=Rp. $harga[1] </li></p>";
   echo "<p><li>$nama[2] &emsp;&ensp;= $harga[0] </li></p>";
   echo "<p><li>$nama[3] &ensp;=Rp. $harga[3] </li></p>";
   echo "<p><li>$nama[4] &ensp;&ensp;=Rp. $harga[3] </li></p>";
   echo "<p><li>$nama[5] &emsp;&emsp;&emsp;&emsp;&nbsp;=Rp. $harga[4] </li></p>";
   echo "<p><li>$nama[6] &emsp;&emsp;=Rp. $harga[5] </li></p>";
   echo "<p><li>$nama[7] &emsp;&emsp;&emsp;&nbsp;=Rp. $harga[6] </li></p>";
   echo "<p><li>$nama[8] &emsp;&emsp;&ensp;=Rp. $harga[5] </li></p><br>";

   print("<u><h3> Jawaban No.2 </h3></u>");

echo "<h1> Daftar Menu </h1>";
$menu = ["Cireng", "Es Duren", "Es Milo", 
        "Es Teh" , "Pisco" , "Soto"];
echo "<table border =1 width=200>

<tr>
<td> No. </td>
<td> Nama Menu </td>
<td> Harga </td>
</tr>

<tr>
<td>1.</td>
<td>$menu[0]</td>
<td> $harga[2]</td>
</tr>

<tr>

<td>2.</td>
<td>$menu[1]</td>
<td>Rp. $harga[1]</td>
</tr>

<tr>
<td>3.</td>
<td>Es Milo</td>
<td>Rp. 20000</td>
</tr>

<tr>
<td>4.</td>
<td>Es Teh</td>
<td>Rp. $harga[5]</td>
</tr>

<tr>
<td>5.</td>
<td>Piscok</td>
<td>$harga[2]</td>
</tr>

<tr>
</table>";
?>





