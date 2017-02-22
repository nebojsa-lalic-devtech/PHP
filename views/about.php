<?php

$company = new Company('DevTech', 'Mihajla Pupina 12', 'Information Technology');


echo 'If you want <b>about page</b>, you are right there! :)<br>';
echo '-------------------------------------------------------';
echo '<h2>This is page about company:</h2><br>';
echo '<p>' . $company->get_company_details() . '</p>';



