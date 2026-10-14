<?php
    //panggil namespace
    use App\Models\Siswa;
    //bisa digunakan alias jika nama kelasnya sama persis
    use App\Controllers\SiswaController;

    //membuat file kelas(nantinya ini akan dilakukan composee/autoload)
    require_once 'App/Models/Siswa.php';
    require_once 'App/Controllers/SiswaController.php';

    echo "<h2>Sistem Informasi  Sekolah - SMK Texmaco Semarang</h2>";
    echo "<hr>";

    //instansiasi conntroller dan jalankan method 
    $controller = new SiswaController();
    $controller->prosesData();

    echo "<br> <hr>";
    
    //instansiasi objek
    echo "<h2>Data Profil Siswa(Via Model)</h2>";
    $siswa0 = new siswa ("257030","Siti Kusmini", "11 RPL 1", "Rekayasa Perangkat Lunak");
    echo "NIS: " .$siswa0->getNis();
    echo "<br>";
    echo "NAMA: " .$siswa0->getNama();
    echo "<br>";
    echo "KELAS: " .$siswa0->getKelas();
    echo "<br>";
    echo "JURUSAN: " .$siswa0->getJurusan();
    echo "<hr>";

    $siswa1 = new siswa ("257028","Muhammad Yafi Nadhir Amrullah", "11 RPL 1", "Rekayasa Perangkat Lunak");
    echo "NIS: " .$siswa1->getNis();
    echo "<br>";
    echo "NAMA: " .$siswa1->getNama();
    echo "<br>";
    echo "KELAS: " .$siswa1->getKelas();
    echo "<br>";
    echo "JURUSAN: " .$siswa1->getJurusan();
    echo "<hr>";

    $siswa2 = new siswa ("257011","Dimas Arla Nova", "11 RPL 1", "Rekayasa Perangkat Lunak");
    echo "NIS: " .$siswa2->getNis();
    echo "<br>";
    echo "NAMA: " .$siswa2->getNama();
    echo "<br>";
    echo "KELAS: " .$siswa2->getKelas();
    echo "<br>";
    echo "JURUSAN: " .$siswa2->getJurusan();

?>