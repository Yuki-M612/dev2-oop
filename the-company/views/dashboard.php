<?php
session_start();

require "../classes/User.php";

$user_obj = new User;
$all_users = $user_obj->getAllUsers();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!-- Content Here -->
    <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h3">The company</h1>
            </a>
            <div class="navbar-nav">
                <span class="navbar-text"><?= $_SESSION['full_name'] ?></span>
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="row justify-content-center gx-0">
        <div class="col-6">
            <h2 class="text-center">USER LIST</h2>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th><!--for phot--></th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th><!-- for action button--></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($user = $all_users->fetch_assoc()) {?>
                        <tr>
                            <td>
                                <?php 
                                if ($user['photo']){ ?>
                                    <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>" class="d-block mx-auto dashboard-photo" style="width:50px; height:50px; object-fit:cover; border-radius:50%;">
                                <?php
                                } else {
                                ?>
                                    <i class="fa-solid fa-user text-secondary d-block text-center dashboard-icon"></i>
                                <?php 
                                }
                                ?>
                            </td>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['first_name'] ?></td>
                            <td><?= $user['last_name'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td>
                                <?php if ($_SESSION['id'] == $user['id']){ ?>
                                    <a href="edit-user.php" class="btn btn-outline-warning" title="Edit">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="delete-user.php" class="btn btn-outline-danger" title="Delete">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>