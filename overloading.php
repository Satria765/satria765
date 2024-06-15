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
    <h1>Satria OOP: Overloading</h1>
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
class Zero {
    
    public $name = "satria";
    public $umur = 19;
    public function __get($name) {

        echo "nama saya $this->name";

    }
    public function __set($name, $asal) {
        
        echo "nama saya $name saya dari $asal";
    }
}

$myobjek = new Zero();
?>
<div class="code-box">
        <pre><code class="language-python">class Zero {
    
    public $name = "satria";
    public $umur = 19;
    public function __get($name) {

        echo "nama saya $this->name";

    }
    public function __set($name, $umur) {
        $name = $this->name;
        $umur = $this->umur;
        
        echo "nama saya $name saya dari $umur";
    }
}
$myobjek = new Zero();
$myobjek->alamat;
$myobjek->satria = "miangas";</code></pre>
    </div>
    <div class="container">
       <div class="content">
        <div class="card">
            <p><code class="output-content"><?= $myobjek->alamat ?><br><?= $myobjek->satria = "miangas" ?></code></p>
        </div>
       </div>
    </div>
</body>
</html>