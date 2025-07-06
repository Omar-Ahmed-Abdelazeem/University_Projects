<?php
require_once '../Models/customers.php';
require_once 'DBController.php';

class Auth
{
    public static function logIn(customers $customer)
    {
        $email = $customer->getEmail();
        $password = $customer->getPassword();

        $db = new DBController();

        if ($db->openConnection()) {
            $query = "SELECT * FROM customers WHERE email='$email'";
            $result = $db->runQuery($query);

            if (!empty($result)) {
                $user = $result[0];

                if (password_verify($password, $user['password'])) {
                    $_SESSION['customer'] = $user;

                    if (isset($_POST['remember_me'])) {
                        setcookie('remember_me', $user['customersid'], time() + (86400 * 30), "/");
                    }

                    return true;
                } else {
                    return 1;
                }
            } else {
                return 2;
            }
        } else {
            return 3;
        }
    }


    public static function register(customers $customer, $confirmPassword)
    {
        $username = $customer->getUsername();
        $email = $customer->getEmail();
        $password = $customer->getPassword();

        if ($password !== $confirmPassword) {
            return 1;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $db = new DBController();

        if ($db->openConnection()) {
            $checkQuery = "SELECT * FROM customers WHERE email = '$email'";
            $existingUser = $db->runQuery($checkQuery);

            if (!empty($existingUser)) {
                return 2;
            }

            $insertQuery = "INSERT INTO customers (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
            $result = $db->runQuery($insertQuery);

            if ($result) {
                return true;
            } else {
                return 3;
            }
        } else {
            return 4;
        }
    }


    public static function editAccount(customers $customer, $confirmPassword)
{
    $id = $customer->getcustomersid();
    $newEmail = $customer->getEmail();
    $newPassword = $customer->getPassword();
    $newUsername = $customer->getUsername();

    $db = new DBController();

    if (!$db->openConnection()) {
        return 4;
    }

    $existingUser = $db->runQuery("SELECT * FROM customers WHERE customersid = '$id'");

    if (empty($existingUser)) {
        return 5;
    }

    $existing = $existingUser[0];

    $finalUsername = !empty($newUsername) ? $newUsername : $existing['username'];
    $finalEmail    = !empty($newEmail)    ? $newEmail    : $existing['email'];

    if (!empty($newPassword)) {
        if ($newPassword !== $confirmPassword) {
            return 1; 
        }
        $finalPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    } else {
        $finalPassword = $existing['password'];
    }

    $checkQuery = "SELECT * FROM customers WHERE email = '$finalEmail' AND customersid != '$id'";
    $duplicateEmail = $db->runQuery($checkQuery);

    if (!empty($duplicateEmail)) {
        return 2; 
    }

    $updateQuery = "
        UPDATE customers 
        SET username = '$finalUsername', 
            email = '$finalEmail', 
            password = '$finalPassword' 
        WHERE customersid = '$id'
    ";

    $result = $db->runQuery($updateQuery);

    return $result ? true : 3;
}

}