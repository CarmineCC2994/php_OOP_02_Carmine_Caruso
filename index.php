
<?php

class Animal {

    protected function printAnimal() {
        echo "Sono un animale\n";
    }

    public function __construct() {
        $this->printAnimal();
    }
}

class Vertebrate extends Animal {

    protected function printVertebrate() {
        echo "Sono un animale Vertebrato\n";
    }

    public function __construct() {
        $this->printVertebrate();
    }
}

class ColdBlooded extends Vertebrate {

    protected function printColdBlooded() {
        echo "Sono un animale a Sangue Freddo\n";
    }

    public function __construct() {
        $this->printVertebrate();
        $this->printColdBlooded();
    }
}

class Fish extends ColdBlooded {

    protected function printFish() {
        echo "Splash!\n";
    }

    public function __construct() {
        $this->printVertebrate();
        $this->printColdBlooded();
        $this->printFish();
    }
}

// Creazione dell'oggetto
$magikarp = new Fish();
