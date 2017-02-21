<?php

require 'autoload/autoloader.php';

$user = new User('Nebojsa', 'Lalic', 'nebojsa.lalic@devtechgroup.com');

echo "Hello from autoloaded 'User()' class with next details:\n" . $user->getUserDetails();