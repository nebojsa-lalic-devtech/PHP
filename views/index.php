<?php

$user = new User('Nebojsa', 'Lalic', 'nebojsa.lalic@devtechgroup.com', 'Software developer');
$user2 = new User('Petar', 'Petrovic', 'petarpetrovic@gmail.com', 'QA');
$user3 = new User('X', 'Man', 'xman@yahoo.com', 'Project manager');

echo "<h3>Hello from autoloaded class('User') with next details:</h3><br>";
echo '<p>' . $user->getUserDetails() . '</p>';
echo "<br>" . '<p>' . $user2->getUserDetails() . '</p>';
echo "<br>" . '<p>' . $user3->getUserDetails() . '</p>';