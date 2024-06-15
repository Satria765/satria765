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
    <h1>Satria OOP: Inheritance</h1>
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
class mobil {
    private $roda = 4;

    private function jalan() {
        echo "mobil berjalan";
    }

    public function jumlahRoda() {
        echo $this->roda;
    }

    public function aktifkanJalan() {
        $this->jalan();
    }
}

class mobilBalap extends mobil {
    public function kecepatanTinggi() {
        echo "mobil balap berjalan dengan kecepatan tinggi!";
    }
}

$mobilBalapSaya = new mobilBalap();
$mobilBalapSaya = new mobilBalap();
// echo "jumlah Roda: " . $mobilBalapSaya->jumlahRoda();
// $mobilBalapSaya->aktifkanJalan();
// $mobilBalapSaya->kecepatanTinggi();
?>
<div class="code-box">
        <pre><code class="language-python">class mobil {
    private $roda = 4;

    private function jalan() {
        echo "mobil berjalan";
    }

    public function jumlahRoda() {
        echo $this->roda;
    }

    public function aktifkanJalan() {
        $this->jalan();
    }
}

class mobilBalap extends mobil {
    public function kecepatanTinggi() {
        echo "mobil balap berjalan dengan kecepatan tinggi!";
    }
}

$mobilBalapSaya = new mobilBalap();
echo "jumlah Roda: " . $mobilBalapSaya->jumlahRoda();
$mobilBalapSaya->aktifkanJalan();
$mobilBalapSaya->kecepatanTinggi();</code></pre>
    </div>
    <div class="container">
       <div class="content">
        <div class="card">
            <p><code class="output-content">jumlahRoda: <?=$mobilBalapSaya->jumlahRoda()?><br><?=$mobilBalapSaya->aktifkanJalan()?><br><?=$mobilBalapSaya->kecepatanTinggi()?></code></p>
        </div>
       </div>
    </div>
</body>
</html>