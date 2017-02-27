<?php

namespace app\NL\Views;

use app\NL\Models\Project\Project;

$project = new Project('AppRiver', 'In Progress', 'Google', 'Street 01', 'IT');

echo $project->getProject();
