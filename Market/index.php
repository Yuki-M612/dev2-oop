<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit OOP</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <br>

        <label for="price">Price:</label>
        <input type="text" name="price" id="price">
        
        
        <button type="submit" name="btn_submit">Submit</button>
    </form>

</body>
</html> -->

<?php
// include 'Fruit.php';

// if(isset($_POST['btn_submit'])){
//     $name = $_POST['name'];
//     $price = $_POST['price'];

//     //CREATE AN INSTANCE OF CLASS FRUIT(object)
//     $fruit = new Fruit;

//     //SET THE VALUES
//     $fruit->setValues($name,$price);

//     //GET AND DISP+AY THE VALUES
//     echo"Name: " .$fruit->getName() . "<br>";
//     echo"Price:" .$fruit->getPrice();
// }

require_once 'Fruit.php';
require_once 'Meat.php';

$tina_store = new Fruit("Tina's Mangoes", "Mango", 3.25,"yellow", "fresh","sweet");
$albert_store = new Meat("Albert's Meatshop", "Ribeye Stek", 10, "beef", "ribs");

echo $tina_store->openStore();
echo $tina_store->announce();
echo $tina_store->displayDetails();

echo"<hr>";

echo $albert_store->openStore();
echo $albert_store->announce();
echo $albert_store->displayDetails();

?>