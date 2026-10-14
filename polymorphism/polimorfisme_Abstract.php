<?php
    //Kita buat abstract baru
    //abstract itu adalah kelas yang tidak bisa dipakai langsung jadi object
    abstract class NotifikasiWeb{
        protected string $penerima;
        protected string $pesan;

        public function __construct(string $penerima,string $pesan)
        {
            $this->penerima=$penerima;
            $this->pesan = $pesan;
        }

        //Method biasa yang bihsa diwariskan dan digunakan langsung oleh kelas turunannya
        public function getInfoPengiriman(): string{
            return "Mengirim ke: {$this->penerima}";
        }

        //Abstract Method: kontrak wajib yang harus di-overide oleh kelas turunannya
        abstract public function kirimNotifikasi(): void;
    }

    //Kelas turunan 1 : notifikasi via email
    class NotifEmail extends NotifikasiWeb{
     private string $subjek;

     public function __construct(string $penerima,string $pesan,string $subjek){
     parent::__construct($penerima,$pesan);
        $this->subjek = $subjek;
     }

     //Wajib meng-override abstract method dari parent class 
     
     public function kirimNotifikasi(): void{
        echo "<div style='border: 2px solid #007bff;
        padding:10px;
         margin-bottom: 10px;
         
        background: color #f8f8f8;'>";

        echo "<h4> [EMAIL] - Subjek : {$this->subjek}</h4>";
        echo "<p>{$this->getInfoPengiriman()}</p>";
        echo "<p>Isi Pesan: <i>{$this->pesan}</i></p>";
        echo "</div>";
     }
}               
//kelas turunan 2: notifikasi via whatsApp
//class NotifWA
    class NotifWA extends NotifikasiWeb{
        //Wajib ovetrride abstract method dari parent
        public function kirimNotifikasi(): void
        {
            echo "<div style='border:2px solid #28a745;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #e8f5e9;
            '>";

            echo"<h4> [WhatsApp MESSAGE]</h4>";
            echo "<p>{$this->getInfoPengiriman()}</p>";
            echo "<p>Pesan: <i>{$this->pesan}</i></p>";
            echo "</div>";
        }
    }

    //Kelas Turunan 3:Notifikasi Browser
    class NotifBrowser extends NotifikasiWeb{
        private string $browserApp;

        public function __construct(string $penerima,string $pesan,string $browserApp)
        {
            parent::__construct($penerima, $pesan);
            $this->browserApp=$browserApp;
        }

        //Wajib override abstract Method dari parent
        public function kirimNotifikasi(): void 
        {
             echo "<div style='border:1px solid #ffc107;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #fff3cd;
            '>";

            echo"<h4> [PUSH NOTIF] - Browser: {$this->browserApp}</h4>";
            echo "<p>{$this->getInfoPengiriman()}</p>";
            echo "<p>Notif: <i>{$this->pesan}</i></p>";
            echo "</div>";
        }
    }
    class NotifGitHub extends NotifikasiWeb{

      public function kirimNotifikasi(): void {
        echo "<div style='border:2px solid #0d0d0d;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #e8f5e9;
            '>";

            echo"<h4> [GitHub]</h4>";
            echo "<p>{$this->getInfoPengiriman()}</p>";
            echo "<p>Pesan: <i>{$this->pesan}</i></p>";
            echo "</div>";
      }
       
    }

    //Buat class manager untuk mengimplementasikan polimorfisme
    class NotifManager{
        //menerima tipe data berdasar abstract class
        //apapun objectnya, asalkan turunan notifikasiWeb, bisa masuk
        public static function prosesKirim(NotifikasiWeb $notif): void{
            $notif->kirimNotifikasi();
        } 
    }
      echo "<h2> DashBoard Simulasi Pengiriman Notifikasi Web</h2>";
    //penggunaan dan instalisasi object notif
    $notif1 = new NotifEmail("Dimasnunggujawaban@gmail.com","nyatanya menunggumu lebih menarik,daripada mencari yang lain.","Konfirmasi Akun");
    $notif2 = new NotifWA("08987654321", "yoo, lama tidak berjumpa :)");
    $notif3 = new NotifBrowser("Token_Device_Asus", "Ada diskon 40% untuk produk pilihan anda!", "Google Chrome");
    $notif4 = new NotifGitHub("ProjectPraktikum5", "Project telah ditambahkan ke repository");

    //mengirimkan dan menampilkan semua notif secara
    //polimorfisme melalui manager
     NotifManager::prosesKirim($notif1);
     NotifManager::prosesKirim($notif2);
     NotifManager::prosesKirim($notif3);
     NotifManager::prosesKirim($notif4);

?>              