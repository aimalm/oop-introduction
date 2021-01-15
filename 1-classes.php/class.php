<?php

class Beverage {
    // properties
  public $color;
  public $price;
  public $temperature;

  // Constructor
  function __construct($color, $price, $temperature = "cold") {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;
  }

  //Methods
    function getInfo() {
      echo "This beverage is: " .$this->color ." " ."and "  .$this-> temperature;
    }
  
}


//$beer = new Beverage("red", 15);
//$beer->getInfo();



class Beer extends Beverage {
  // properties
  public $name;
  public $alcoholPercentage;

// Constructor
  function __construct($color, $price, $name, $alcoholPercentage) {
      parent::__construct($color, $price);
      $this->name = $name;
      $this->alcoholPercentage = $alcoholPercentage;
      }


//Methods
public function getAlcoholPercentage()
{
    echo $this->alcoholPercentage . "%";
    echo '<br>';
    echo number_format($this->alcoholPercentage, 2) . "%";
    echo '<br>';
}
}


$Duvel = new Beer('blond', 3.5, 'Duvel', 8.5);
$Duvel->getAlcoholPercentage();
$Duvel->getInfo();
$cola->getAlcoholPercentage();


//echo $Duvel->name;
//echo $Duvel->getAlcoholPercentage();
//var_dump($Duvel);
