<!-- type data integer merupakan type data dari bilangan
bulat seperti 1,2,3,4 dll type data ini cocok digunakan
unutuk menampung nilai yang pasti bulat misalnya seperti jumlah
orang, mobil, peserta dll.
kesimpulannya ya itu type data integer yang bernilai bulat 1,2,3,4
pokonya bulat atau tidak berpecah atau tidak memiliki pecahan. -->
<!-- <?php 
$nilai = 2000; // ini integer
echo "nilai budi : $nilai"; 
$pecahan = 1.2; // ini bukan integer
?> -->

<!-- type data float adalah type data yang terdiri dari angka pecaha seperti 1.33 1.99 atau 0.11 dll
cocok digunakan untuk angka yang tidak penuh misalnya seperti ipk atau pembagian  
kesimpulannya type data float merupakan type data yang memiliki nilai pecahan -->
<!-- <?php 
$nilai = 2000; 
echo "nilai budi : $nilai <br>"; 
$nilai_ipk = 3.99;
echo "Nilai IPK budi : $nilai_ipk";
?> -->


<!-- type data string adalah type data yang terdiri dari karakter atau kumpulan karakter.
kesimpulannya type data string digunakan untuk menyimpan
karakter seperti nama, alamat dll. -->
<!-- <?php 
$nama = "Budi";
$alamat = "Adiyasa Blok L 14 ";
echo "Nama : $nama <br>";
echo "Nama : $alamat <br>";
?> -->

<!-- 
type data boolean terdiri dari 2 nilai yaitu true dan false, 
boolean biasanya digunakan untuk oprasi logika seperti,
kondisi if atau perulangan.
kesimpulannya variabel boolean digunakan untuk kondisi benar atau salah
dan hanya memiliki dua nilai yaitu true dan false. -->
<!-- <?php 
$benar = true;
$salah = false;
var_dump($benar);
echo "<br>";
var_dump($salah);
?> -->

<!-- type data array adalah type data bentukan yang terdiri dari
kumpulan type data lainnya dan tersusun secara berurutan pada umumnya
type data array adalah sekumpulan type data yang sejenis
tetapi didalam php sebuah array bisa terdiri dari,
integer, float, string bakan bisa juga gambar.
kesimpulannya type data array merupakan type data bentukan
yang terdiri dari kumpulan type data baik itu sejenis maupun tidak sejenis. -->
<!-- <?php 
$mahasiswa = array(7.0, "adul", "eko", "bimo");
echo "$mahasiswa[1]<br>";
echo "$mahasiswa[0]";
?> -->

<!-- menambahkan element array -->
<!-- <?php 
$mahasiswa = array(7.0, "adul", "eko", "bimo");
$mahasiswa[3] ="mobil";
$mahasiswa[4] ="7.9";
$mahasiswa[5] ="Mahasiswa Abadi";
print_r($mahasiswa);
?> -->

<!-- type data object adalah type data khusus yang juga
terdiri dari berbagai data atau mirip dengan array
namu didalam object kita bisa memiliki function sendiri
atau dikenal sebagai metodh. -->

<!-- <?php 
class mahasiswa{
    public $nama;
    public $umur;
    public $tanggal_lahir;

    function get_nama(){
        return $this->nama;
    }
}
$mahasiswa_abadi = new mahasiswa;
$mahasiswa_abadi->nama ="budi";
$mahasiswa_abadi->umur ="50";
$mahasiswa_abadi->tanggal_lahir ="10 januari 2021";
print_r($mahasiswa_abadi);
?> -->

<!-- Tipe Data Resource adalah type data khusus php
yang digunakan untuk menyimpan reverensi function atau
aplikasi diluar php. -->
<!-- <?php 
$koneksi = mysqli_connect("localhost", "root", "");
var_dump($koneksi);
//Resource
?> -->

<!-- Tipe Data null digunakan untuk mengkosokan variable
pada pemrograman php-->
<!-- <?php 
$satu = 0;
var_dump($satu);
$dua = null;
var_dump($dua);
?> -->

<!-- Tipe casting adalah proses untuk mengubah sebuah type data
menjadi type data lainnya-->
<!-- <?php 
$angka = 100;
var_dump($angka);
echo "<br>";
$strangka = (string) $angka;
var_dump($strangka);
?> -->

<!-- Operator Aritmatika -->
 <!-- <?php 
$angka_1 = 100;
$angka_2 = 50;
echo "angka pertama = $angka_1 <br>";
echo "angka kedua : $angka_2";
$tambah = $angka_1 + $angka_2;
echo "<br>";
echo "Hasil Penambahan : $tambah";
$kurang = $angka_1 - $angka_2;
echo "<br>";
echo "Hasil Pengurangan : $kurang";
$pembagian = $angka_1 / $angka_2;
echo "<br>";
echo "Hasil Pembagian : $pembagian";
$perkalian = $angka_1 * $angka_2;
echo "<br>";
echo "Hasil perkalian : $perkalian";
$mod = $angka_1 % $angka_2;
echo "<br>";
echo "Hasil Modulus : $mod";
?> -->



















