<?php
require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Bird.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Kingdom Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center mt-5">
        <div class="card border-primary shadow" style="width: 600px;">
            <div class="card-body">
                <h2 class="card-title text-center text-primary">Animal Kingdom</h2>
                <form action="" method="post">
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    
                    <!-- Species & Breed -->
                    <div class="row mb-3">
                        <div class="col">
                            <label for="species" class="form-label">Species:</label>
                            <select class="form-select" id="species" name="species" required>
                                <option selected disabled>Select a Species:</option>
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                                <option value="Bird">Bird</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="breed" class="form-label">Breed:</label>
                            <input type="text" class="form-control" id="breed" name="breed" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100" name="btn_submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["btn_submit"])) {
        $name = $_POST["name"];
        $species = strtolower($_POST["species"]);
        $breed = $_POST["breed"];

        $animal = null;

        if ($species === "dog") {
            $animal = new Dog($name, $breed);
        } elseif ($species === "cat") {
            $animal = new Cat($name, $breed);
        } elseif ($species === "bird") {
            $animal = new Bird($name, $breed);
        } else {
            echo "<p class='text-danger'>Unknown species!</p>";
        }

        if ($animal) {
            echo "
            <div class='container d-flex justify-content-center mt-4'>
                <div class='border border-danger p-4 rounded' style='width: 600px;'>
                    <h2 class='text-danger fw-bold'>{$animal->getName()}</h2>
                    {$animal->introduction()}";
            if (method_exists($animal, 'speak')) {
                echo $animal->speak();
            }
            echo "</div></div>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>