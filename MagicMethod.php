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
    <h1>Satria OOP: Magic Methode</h1>
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
    private $warna;   
    private $data = array(); 
    public function __construct($warna) {
        $this->warna = $warna;
    }
    public function __get($name) {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else {
            echo "Properti '$name' tidak ditemukan!";
            return null;
        }
    }
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
    public function __toString() {
        return "Mobil berwarna " . $this->warna . " dengan " . $this->roda . " roda.";
    }
    public function mulaiBerjalan() {
        echo "Mobil berwarna " . $this->warna . " dengan " . $this->roda . " roda berjalan";
    }
}
$mobil = new Mobil("Merah");
$mobil->kecepatan = "100 km/jam";
// echo "Kecepatan: " . $mobil->kecepatan ;
// echo "Kapasitas: " . $mobil->kapasitas ;
// echo $mobil ;
// $mobil->mulaiBerjalan();
?>
<div class="code-box">
        <pre><code class="language-python">class Mobil {
    private $roda = 4; 
    private $warna;   
    private $data = array(); 
    public function __construct($warna) {
        $this->warna = $warna;
    }
    public function __get($name) {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else {
            echo "Properti '$name' tidak ditemukan!";
            return null;
        }
    }
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
    public function __toString() {
        return "Mobil berwarna " . $this->warna . 
        " dengan " . $this->roda . " roda.";
    }
    public function mulaiBerjalan() {
        echo "Mobil berwarna " . $this->warna . 
        " dengan " . $this->roda . " roda berjalan";
    }
}
$mobil = new Mobil("Merah");
$mobil->kecepatan = "100 km/jam";
echo "Kecepatan: " . $mobil->kecepatan ;
echo "Kapasitas: " . $mobil->kapasitas ;
echo $mobil ;
$mobil->mulaiBerjalan();</code></pre>
    </div>
    <div class="container">
       <div class="content">
        <div class="card">
            <p><code class="output-content">Kecepatan: <?=$mobil->kecepatan?><br>Kapasitas: <?=$mobil->kapasitas?><br><?=$mobil?><br><?=$mobil->mulaiBerjalan()?></code></p>
        </div>
       </div>
    </div>
</body>
</html>
