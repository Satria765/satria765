<!DOCTYPE html>
<html lang="id">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Final Exam</title>
      <link rel="stylesheet" href="warna.css">
   </head>
   <body>
      <header>
         <h1>Satria OOP: Encapsulation</h1>
         <nav>
            <a href="index.php">Home</a>
            <a href="Class objek.php">Class Objek</a>
            <a href="encapsulasi.php">Encapsulation</a>
            <a href="MagicMethod.php">Magic Methode</a>
            <a href="Inheritance.php">Inheritance</a>
            <a href="Polymorhism.php">Polymorhism</a>
            <a href="abstraksi.php">Abstraksi</a>
            <a href="overriding.php">Overriding</a>
            <a href="overloading.php">Overloading</a>
         </nav>
      </header>
      <?php
class Mobil {

    private $roda = 4;
    protected $kecepatanMaks = 120;  
    private function berjalan() {
        echo "Mobil sedang berjalan.<br>";
    }
    protected function tampilkanKecepatan() {
        echo "Kecepatan maksimum: " . $this->kecepatanMaks . " km/jam.";
    }
    public function getRoda() {
        return $this->roda;
    }
    public function mulaiBerjalan() {
        $this->berjalan();
    }
}

class MobilBalap extends Mobil {
    public function tampilkanKecepatanMaks() {
        $this->tampilkanKecepatan();
    }
}
$mobil = new Mobil();
// echo "Jumlah roda: " . $mobil->getRoda() . "<br>";  
// $mobil->mulaiBerjalan();  
$mobilBalap = new MobilBalap();
// $mobilBalap->tampilkanKecepatanMaks();  
?>
      <div class="code-box">
         <pre><code class="language-python">class Mobil {

    private $roda = 4;
    protected $kecepatanMaks = 120;  
    private function berjalan() {
        echo "Mobil sedang berjalan.";
    }
    protected function tampilkanKecepatan() {
        echo "Kecepatan maksimum: " . $this->kecepatanMaks . " km/jam.";
    }
    public function getRoda() {
        return $this->roda;
    }
    public function mulaiBerjalan() {
        $this->berjalan();
    }
}
class MobilBalap extends Mobil {
    public function tampilkanKecepatanMaks() {
        $this->tampilkanKecepatan();
    }
}
$mobil = new Mobil();
echo "Jumlah roda: " . $mobil->getRoda() ;  
$mobil->mulaiBerjalan();  
$mobilBalap = new MobilBalap();
$mobilBalap->tampilkanKecepatanMaks();  </code></pre>
      </div>
      <div class="container">
       <div class="content">
        <div class="card">
            <p><code class="output-content">Jumlah roda: <?=$mobil->getRoda()?><br><?=$mobil->mulaiBerjalan()?><?=$mobilBalap->tampilkanKecepatanMaks()?></code></p>
        </div>
       </div>
      </div>      
   </body>
</html>