<?php
//OOP concepts

// class Fruit {
//     //Properties
//     private $name;
//     private $price;

//     //CONSTRUCTOR
//     public function __construct($name,$price) {
//         $this->name = $name;
//         $this->price = $price;
//     }
//     //Methods
//     public function showInfo() {
//         echo "Name:{$this -> name}<br>";
//         echo "Price:{$this -> price}";
//     }

//     public function setName ($name) {
//         $this->name = $name;
//     }


//     public function getName() {
//         return $this->name;
//     }               
//     public function setPrice($price) {
//         if ($price < 0) {
//             echo "Price cannot be negative";
//         } else {
//             $this -> price = $price;
//         }
        
//     }
        
//     public function getPrice () {
//         return $this -> price;
//     }

//     public function setValues($name,$price) {
//         $this -> setName($name);
//         $this -> setPrice($price); 
//     }
//     }

    //create a fruit object
    // $apple = new Fruit("Apple", 3.25);
    // $banana = new Fruit();
    // //Access public method
    // $apple->setName("Apple");
    // $apple->setPrice(3.25);
    // $apple->setPrice(-4.25);//price cannnot be negative
    // $apple->showInfo();//name: apple
     
    // $banana->setName("Banana");
    // echo $apple->getName(); //Apple
    // echo $banana->getPrice(); //null or empty
    // echo $banana->getName(); //Banana                   
    
    require_once 'Market.php';

    class Fruit extends Market {
        //Properties
        private $color;
        private $taste;

        public function __construct($store_name, $product_name, $price, $color, $taste) {
            $this->store_name = $store_name;
            $this->product_name = $product_name;
            $this->price = $price;
            $this->color = $color;
            $this->taste = $taste;
        }
        public function announce() {
            return "Enjoy this {$this->color} and {$this->taste} for just \$ {$this->price}!<br><br>";
        }
        public function displayDetails () {
            return "<b>Price</b> $" . $this->price . "<br>" .
                   "<b>Color</b> " . $this->color . "<br>" .
                   "<b>Taste</b> " . $this->taste . "<br>";
        }
    }
?>