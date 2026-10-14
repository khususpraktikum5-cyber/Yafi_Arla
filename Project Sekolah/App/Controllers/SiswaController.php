<?php
    //buat namespace untuk controllers
    namespace App\Controllers;

    //kita panggil namespace model siswa -> menggunakan use
    use App\Models\siswa;

    //kita buat class baru yaitu siswaController
    class SiswaController{//ini adealah kelas SiswaController yg berbeda dengan App\Models\Siswa
                //method prosesData
        public function prosesData(): void{
            //simulas ambil data dari model(yang nantinya dari database)
            $siswa1 = new siswa("257030","Siti Kusmini", "XI", "Rekayasa Perangkat Lunak");
            //controller untuk memproses dan merender tampilan HTML
            echo "<div style='border:2px solid #007bff;
            padding:15px;
            border-radius:8px;
            font-family: sans-serif;
            background: #f8f9fa;'>";

            echo "<h3 style= 'color: #007bff;margin-top:0;'> Data Profil Siswa(Via Controller)</h3>";

            echo "<b>NIS : </b> {$siswa1->getNis()}<br>";
            echo "<b>NAMA : </b> {$siswa1->getNama()}<br>";
            echo "<b>KELAS : </b> {$siswa1->getKelas()}<br>";
            echo "<b>JURUSAN : </b> {$siswa1->getJurusan()}<br>";
            echo "</div>";
            
            echo "<br>";

            $siswa2 = new siswa("257028","Muhammad Yafi Nadhir Amrullah", "XI", "Rekayasa Perangkat Lunak");
            echo "<div style='border:2px solid #007bff;
            padding:15px;
            border-radius:8px;
            font-family: sans-serif;
            background: #f8f9fa;'>";

            echo "<h3 style= 'color: #007bff;margin-top:0;'> Data Profil Siswa(Via Controller)</h3>";

            echo "<b>NIS : </b> {$siswa2->getNis()}<br>";
            echo "<b>NAMA : </b> {$siswa2->getNama()}<br>";
            echo "<b>KELAS : </b> {$siswa2->getKelas()}<br>";
            echo "<b>JURUSAN : </b> {$siswa2->getJurusan()}<br>";
            echo "</div>";

            echo "<br>";

            $siswa3 = new siswa("257011","Dimas Arla Nova", "XI", "Rekayasa Perangkat Lunak");
            echo "<div style='border:2px solid #007bff;
            padding:15px;
            border-radius:8px;
            font-family: sans-serif;
            background: #f8f9fa;'>";

            echo "<h3 style= 'color: #007bff;margin-top:0;'> Data Profil Siswa(Via Controller)</h3>";

            echo "<b>NIS : </b> {$siswa3->getNis()}<br>";
            echo "<b>NAMA : </b> {$siswa3->getNama()}<br>";
            echo "<b>KELAS : </b> {$siswa3->getKelas()}<br>";
            echo "<b>JURUSAN : </b> {$siswa3->getJurusan()}<br>";
            echo "</div>";
        }
    }
?>