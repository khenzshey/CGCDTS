<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once '../config/connection.php';

    $accounts->login($username, $password);

    // if ($loggedIn) {
    //     if ($accounts->getStatus() == "active") { // Assuming "getStatus" is a method to retrieve the user's status
    //         $_SESSION["account_id"] = $accounts->getAccountId($account_id); // Assuming "getAccountId" is a method to retrieve the account ID
    //         $_SESSION["username"] = $accounts->getUsername($username); // Assuming "getUsername" is a method to retrieve the username
    //         $_SESSION["role_id"] = $accounts->getRoleId($role_id); // Assuming "getRoleId" is a method to retrieve the role ID
    //         $accounts->redirectUser($role); // Assuming "redirectUser" is a function for redirecting the user based on the role ID


    //     } else {
    //         echo "User is deactivated.";
    //     }
    // } else {
    //     echo "Invalid username or password.";
    // }

}