<?php
if(isset($_POST['submit'])){
    $email = //complete this;
    $newpassword = //complete this;

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    //if it does, replace the password

    $input = fopen('users.csv', 'r');
    $output = fopen('Database/temporary.csv', 'w');
    while( false !== ( $data = fgetcsv($input) ) ){
    if ($data[4] == $_POST['oldPassword'] && $data[1] == $_SESSION['username']) {
        $data[4] = $_POST['newPassword'];
        echo("SUCCESS|Password changed!");
   }

   //write modified data to new file
   fputcsv( $output, $data);	

   //write modified data to new file
   fputcsv( $output, $data);
}
echo "HANDLE THIS PAGE";


