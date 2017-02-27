<?php

namespace app\NL\Views;

use app\NL\Models\Company\Company;

$company = new Company('DevTech', array('Mihajla Pupina 12', 'Janka Cmelika 7'), 'Information Technology');


echo 'If you want <b>about page</b>, you are right there! :)<br>';
echo '-------------------------------------------------------';
echo '<h2>This is page about company:</h2><br>';
echo '<p>' . $company->getCompanyDetails() . '</p>';
