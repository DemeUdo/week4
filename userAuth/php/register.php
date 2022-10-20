<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $header = "username,email,password\n";
    $data = "$username,$email,$password\n";

    $filename = users.csv
    
    if (file_exists($fileName)) {
            // Add only data. The header is already added in the existing file.
    	file_put_contents($fileName, $data, FILE_APPEND);
    }
    else {
        // Add CSV header and data.
        file_put_contents($fileName, $header . $data);
        }

    // echo "OKAY";
    echo '<div class="alert alert-success" role="alert">User Successfully registered</div>';
}
echo "HANDLE THIS PAGE";


