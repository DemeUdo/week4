<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/

     if (isset($_SESSION['user'])) {

    destroySession();
    header('Location:' login.php);

}

echo "HANDLE THIS PAGE";
