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
    <h1>Satria OOP: Polymorhism</h1>
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

    protected function berjalan() {
        echo "Mobil dengan " . $this->roda . " roda sedang berjalan.";
    }

    public function getRoda() {
        return $this->roda;
    }

    public function mulaiBerjalan() {
        $this->berjalan();
    }
}

class MobilBalap extends Mobil {
    protected function berjalan() {
        echo "Mobil balap dengan " . $this->getRoda() . " roda sedang melaju cepat!";
    }
}

class MobilSUV extends Mobil {
    protected function berjalan() {
        echo "Mobil SUV dengan " . $this->getRoda() . " roda sedang melaju di 
        medan berat!";
    }
}

function testDrive(Mobil $mobil) {
    $mobil->mulaiBerjalan();
}

$mobil = new Mobil();
$mobilBalap = new MobilBalap();
$mobilSUV = new MobilSUV();
// testDrive($mobil);       
// testDrive($mobilBalap);  
// testDrive($mobilSUV);   
?>
<div class="code-box">
        <pre><code class="language-python">class Mobil {
    
    private $roda = 4;
    protected function berjalan() {
        echo "Mobil dengan " . $this->roda . " roda sedang berjalan.";
    }
    public function getRoda() {
        return $this->roda;
    }
    public function mulaiBerjalan() {
        $this->berjalan();
    }
}
class MobilBalap extends Mobil {
    protected function berjalan() {
        echo "Mobil balap dengan " . $this->getRoda() . " roda sedang melaju cepat!";
    }
}
class MobilSUV extends Mobil {
    protected function berjalan() {
        echo "Mobil SUV dengan " . $this->getRoda() . " roda sedang melaju di 
        medan berat!";
    }
}
function testDrive(Mobil $mobil) {
    $mobil->mulaiBerjalan();
}
$mobil = new Mobil();
$mobilBalap = new MobilBalap();
$mobilSUV = new MobilSUV();
testDrive($mobil);       
testDrive($mobilBalap);  
testDrive($mobilSUV);</code></pre>
    </div>
    <div class="container">
       <div class="content">
        <div class="card">
            <p><code class="output-content"><?=testDrive($mobil)?><br><?=testDrive($mobilBalap)?><br><?=testDrive($mobilSUV)?></code></p>
        </div>
       </div>
    </div>
</body>
</html>
