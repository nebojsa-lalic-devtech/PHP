<?php

namespace app\NL\Views;

use app\NL\Models\Employee\Employee;

$user = new Employee('Nebojsa', 'Lalic', 'nebojsa.lalic@devtechgroup.com', 'Software developer');
$user2 = new Employee('Petar', 'Petrovic', 'petarpetrovic@gmail.com', 'QA');
$user3 = new Employee('X', 'Man', 'xman@yahoo.com', 'Project manager');

echo 'Welcome to <b>Home Page</b> :)!<br>';
echo '-------------------------------------------------------';
echo '<h2>Hello from autoloaded class("Employee") with next details:</h2><br>';
echo '<p>' . $user->getUserDetails() . '</p>';
echo '<br>' . '<p>' . $user2->getUserDetails() . '</p>';
echo '<br>' . '<p>' . $user3->getUserDetails() . '</p>';
