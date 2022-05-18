<?php 
session_start();
require_once './includes/database_conn.php';

if(isset($_POST['login'])) {
    $email = mysqli_escape_string($conn, $_POST['email']);
    $password = mysqli_escape_string($conn, $_POST['password']);

    if(empty($email) && empty($password)) {
        $_SESSION['status'] = "no input";
        echo '<script>
            window.location.replace("login");
        </script>';
    } else if(empty($email)) {
        $_SESSION['status'] = "no email";
        echo '<script>
            window.location.replace("login");
        </script>';
    } else if(empty($password)) {
        $_SESSION['status'] = "no password";
        echo '<script>
            window.location.replace("login")
        </script>';
    } else {
        $check = mysqli_query($conn, "SELECT * FROM customers WHERE email = '$email'");

        if(mysqli_num_rows($check) == 0) {
            $_SESSION['status'] = "no email";
            echo '<script>
                window.location.replace("login")
            </script>';
        } else {
            $row = mysqli_fetch_array($check);

            if($password == $row['password']) {
                if(isset($_POST['rem']) == 'checked') {
                    setcookie('email', $row['email'], time() + (86400 * 30), '/');
                    setcookie('password', $row['password'], time() + (86400 * 30), '/');
                } else {
                    setcookie('email', '');
                    setcookie('password', '');
                }
                $_SESSION['loggedin'] = true;
                $_SESSION['userEmail'] = $email;
                echo '<script>
                    window.location.replace("index")
                </script>';
            } else {
                $_SESSION['status'] = "wrong password";
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['userEmail'] = '';
                echo '<script>
                    window.location.replace("login")
                </script>';
            }
        }
    }
}
?>