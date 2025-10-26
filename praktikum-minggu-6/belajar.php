<?php
    echo "hello world";

    $nim = "130116769";
    $nama = "Budiii";

    echo "NIM :" . $nim;
    echo "\nNama :" . $nama;
?> 

<?php
    define(constant_name: "NAMA", value: "John doe");
    define(constant_name: "NIM", value: "007");
    echo "Nama : " . NAMA;
    echo "NIM : " . NIM;
?>

<!-- Konstanta -->
 <h2>Ini Materi Konstanta</h2>
 <pre>
    <?php
        define(constant_name: "UNIV", value: "Univ Telkom Bandung");
        echo "Selamat datang di " . UNIV;
    ?>
 </pre>

 <!-- Operator -->
  <h2>Tes Opertator</h2>
  <pre>
    <?php
        $a = 10;
        $b = 5;
        
        echo "Tambah: " . ($a + $b) ."<br>";
        echo "Kurang: " . ($a - $b) ."<br>";
        echo "Bagi: " . ($a / $b) ."<br>";
        echo "Kali: " . ($a * $b) ."<br>";
    ?>
  </pre>

  <!-- Kondisi -->
   <h2>Kondisi</h2>
   <pre>
    <?php
        $nilai = 85;
        if($nilai >= 75){
            echo "Cumlaude lgsg g sie";
        }else{
            echo "Nt Nt";
        }

        echo "<br>";

        $grade ="B";
        switch($grade){
            case "A": echo"Bro is winning"; break;
            case "B": echo"yang penting lulus"; break;
            default: echo "Belajar lagi"; break;

        }
    ?>
   </pre>

   <!-- Looping -->
    <h2>Perulangan / Looping</h2>
    <pre>
        <?php
            for ($i = 1; $i <= 5; $i++){
                echo "Perulangan ke - $i <br>";
            }

            echo "<br>";

            $i = 1;
            while($i <= 3){
                echo "Angka: $i <br>";
                $i++;
            }

            echo "<br>";

            $warna =["Merah", "Hijau", "Biru"];
            foreach($warna as $w){
                echo $w . "<br>";
            }
        ?>
    </pre>

    <!-- Funtion -->
     <h2>Fungsi</h2>
     <pre>
        <?php
            function luasSegitiga($alas, $tinggi): float|int{
                return 0.5 * $alas * $tinggi;
            }
            echo "Luas Segitiga (alas=50, tinggi=10):"
            .luasSegitiga(alas: 50, tinggi: 10);
        ?>
     </pre>

     <!-- Array -->
      <h2>Array - List</h2>
      <pre>
        <?php
            $buah = ["Apel", "Apel2", "Apel3"];
            echo "Buah Pertama: " .$buah[0]."<br>";

            $mhs = [
                "nama"=>"Jane Doe", 
                "nim"=>"001", 
                "jurusan"=>"Informatika" 
            ];
            echo "Nama Mahasiswa: ".$mhs["nama"];
        ?>
      </pre>