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
    <h1>Satria OOP: Overriding</h1>
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
class Animal {
    
    public function makeSound() {
        return "Some generic animal sound";
    }
}

class Dog extends Animal {
    
    public function makeSound() {
        return "Bark";
    }
}


class Cat extends Animal {
    
    public function makeSound() {
        return "Meow";
    }
}

$dog = new Dog();
$cat = new Cat();
?>
<div class="code-box">
        <pre><code class="language-python">class Animal {
    
    public function makeSound() {
        return "Some generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

$dog = new Dog();
$cat = new Cat();
"Dog sound: " . $dog->makeSound();
echo "Cat sound: " . $cat->makeSound();</code></pre>
    </div>
    <div class="container">
       <div class="content">
        <div class="card">
            <p><code class="output-content">Dog sound: <?=$dog->makeSound()?><br>cat sound: <?=$cat->makeSound() ?></code></p>
        </div>
       </div>
    </div>
</body>
</html>
