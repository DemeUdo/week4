<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    $data = fopen("users.csv", "r");
    logged = false
    while (($data = fgetcsv($data)) !== FALSE) {
    if ($data[0] == $username && $data[1] == $password) {
        $success = true;
        break;
    }

    $uri = $_SERVER['REQUEST_URI'];
    $uri_tokens = explode("/", $uri);
    
    if ($uri_tokens[1] == "login.php") {
          echo("<script>location.href = 'index.php';</script>");
        } else {
          $redirect_uri = $uri_tokens[1] . "/login.php";
          echo("<script>location.href = '" . $redirect_uri . "';</script>");
        }

}

echo "HANDLE THIS PAGE";

