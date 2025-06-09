<?php


require_once 'Database.php';

class User extends Database
{

    public function store($request)
    {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $password = $request['password'];

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (`first_name`, `last_name`, `username`,`password` )
                VALUES ('$first_name','$last_name','$username','$password')";

        if ($this->conn->query($sql)) {
            header('location:../views'); //go to index page;
            exit;
        } else {
            die('Error createing the user:' . $this->conn->error);
        }
    }

    public function login($request) {
        $username = $request['username'];
        $password = $request['password'];

        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = $this ->conn->query($sql);

        #Check the username
        if ($result->num_rows == 1) {
            #Check if the password is correct
            $user =$result->fetch_assoc();
            //$user = ['id' => 1, 'username' => 'john',]'password' => '$2y...']
            
            if (password_verify($password, $user['password'])) {
                //Login successful
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['full_name'] = $user['first_name'] . " ". $user['last_name'];

                header('location: ../views/dashboard.php');
                exit;
            } else {
                die('password is incorrect');
            }
        } else {
            die('Username not found');
        }
    }   

    public function logout() {
        session_start();
        session_unset();
        session_destroy();

        header('location: ../views');
        exit;
    }


    public function getAllUsers() {
        $sql = "SELECT id, first_name, last_name, username, photo FROM users";

        if ($result = $this->conn->query($sql)) {
            if ($result->num_rows > 0) {
                return $result;
            } else {
                die("Error retrieving all users: " . $this->conn->error);

            }
        }
    }

    public function getUser($id) {
        $sql = "SELECT * FROM users WHERE id = $id";

        if ($result = $this->conn->query($sql)) {
            return $result->fetch_assoc();
        } else {
            die("Error retrieving user: " . $this->conn->error);
            }
        }
    

public function update($request,$files) {
    session_start();
    $id = $_SESSION['id'];
    $first_name = $request['first_name'];
    $last_name = $request['last_name'];
    $username = $request['username'];
    $photo = $files['photo']['name'];
    $tmp_photo = $files['photo']['tmp_name'];

    $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', username = '$username' WHERE id = $id";

    if ($this->conn->query($sql)) {
        $_SESSION['username'] = $username;
        $_SESSION['full_name'] = "$first_name $last_name";

        #if there is an updated photo, save itto db save the file to images folder
        if ($photo){
            $sql = "UPDATE users SET photo = '$photo' WHERE id = $id";
            $destination = "../assets/images/$photo";

            //save the image name to db

            if ($this->conn->query($sql)) {
           //save the file to images folder
                if (move_uploaded_file($tmp_photo, $destination)) {
                    header('location: ../views/dashboard.php');
                    exit;
                } else {
                    die('Error uploading the photo' .$this->conn->error);
                }
            } else {
                die('Error updating the photo: ' . $this->conn->error);
            }
    }
    header('location: ../views/dashboard.php');
    exit;
    } else {
        die('Error updating the user: ' . $this->conn->error);
    }
 }

    public function delete() {
        session_start();
        $id = $_SESSION['id'];

        $sql = "DELETE FROM users WHERE id = $id";

        if ($this->conn->query($sql)) {
            //Logout the user
            $this->logout();
        } else {
            die('Error deleting your account: ' . $this->conn->error);
        }
    }
}
?>