<?php

$user = new User('Nebojsa', 'Lalic', 'nebojsa.lalic@devtechgroup.com', 'developer');

echo "<h3>Hello from autoloaded class('User') with next details:</h3><br>" . $user->getUserDetails();