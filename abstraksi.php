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
    <h1>Satria OOP: Abstraksi</h1>
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
abstract class Mobil {
    protected $roda = 4; 
    protected $warna;
    public function __construct($warna) {
        $this->warna = $warna;
    }
    abstract public function berjalan();
    public function jumlahRoda() {
        echo "Jumlah roda: " . $this->roda;
    }
}
class MobilBalap extends Mobil {
    public function berjalan() {
        echo "Mobil balap berwarna " . $this->warna . " sedang melaju cepat!";
    }
}
class MobilSUV extends Mobil {
    public function berjalan() {
        echo "Mobil SUV berwarna " . $this->warna . " sedang di medan berat!";
    }
}
$mobilBalap = new MobilBalap("Merah");
$mobilSUV = new MobilSUV("Hijau");
// $mobilBalap->jumlahRoda(); 
// $mobilBalap->berjalan();   
// $mobilSUV->jumlahRoda();   
// $mobilSUV->berjalan();    
?>
<div class="code-box">
        <pre><code class="language-python">abstract class Mobil {
    protected $roda = 4; 
    protected $warna;
    public function __construct($warna) {
        $this->warna = $warna;
    }
    abstract public function berjalan();
    public function jumlahRoda() {
        echo "Jumlah roda: " . $this->roda;
    }
}
class MobilBalap extends Mobil {
    public function berjalan() {
        echo "Mobil balap berwarna " . $this->warna . " sedang melaju cepat!";
    }
}
class MobilSUV extends Mobil {
    public function berjalan() {
        echo "Mobil SUV berwarna " . $this->warna . " sedang di medan berat!";
    }
}
$mobilBalap = new MobilBalap("Merah");
$mobilSUV = new MobilSUV("Hijau");
$mobilBalap->jumlahRoda(); 
$mobilBalap->berjalan();   
$mobilSUV->jumlahRoda();   
$mobilSUV->berjalan();    </code></pre>
    </div>

    <div class="container">
       <div class="content">
        <div class="card">
            <p><code class="output-content"><?=$mobilBalap->jumlahRoda()?><br><?= $mobilBalap->berjalan() ?><br><?=$mobilSUV->jumlahRoda()?><br><?=$mobilSUV->berjalan()?></code></p>
        </div>
       </div>
    </div>
</body>
</html>