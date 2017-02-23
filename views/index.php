<?php

$user = new \classes\User('Nebojsa', 'Lalic', 'nebojsa.lalic@devtechgroup.com', 'Software developer');
$user2 = new \classes\User('Petar', 'Petrovic', 'petarpetrovic@gmail.com', 'QA');
$user3 = new \classes\User('X', 'Man', 'xman@yahoo.com', 'Project manager');

echo 'Welcome to <b>Home Page</b> :)!<br>';
echo '-------------------------------------------------------';
echo '<h2>Hello from autoloaded class("User") with next details:</h2><br>';
echo '<p>' . $user->getUserDetails() . '</p>';
echo '<br>' . '<p>' . $user2->getUserDetails() . '</p>';
echo '<br>' . '<p>' . $user3->getUserDetails() . '</p>';