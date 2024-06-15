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
         <h1>Satria OOP: Class Objek</h1>
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
         
         $avanza = new mobil();
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

$avanza = new mobil();
echo "jumlah Roda: " . $avanza->jumlahRoda();
$avanza->aktifkanJalan();</code></pre>
    </div>
    <div class="container">
       <div class="content">
        <div class="card">
            <p><code class="output-content">jumlah roda: <?=$avanza->jumlahRoda()?><br><?=$avanza->aktifkanJalan()?></code></p>  
        </div>
       </div>
    </div> 
</body>
</html>