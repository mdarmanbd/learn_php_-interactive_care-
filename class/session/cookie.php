<?php 

// setcookie('fullname', 'Mohammod Arman Hossain'); 
setcookie('fullname', 'Mohammod Arman Hossain', time() + (86400));  // one day 86400 second
setcookie('lastname', 'Mohammod Arman Hossain', time() + (86400 * 2)); // two days 

setcookie('lastname', 'Mohammod Arman Hossain', time() - 1); // deleted cookie

echo $_COOKIE['fullname']; // purses the cookie
?>