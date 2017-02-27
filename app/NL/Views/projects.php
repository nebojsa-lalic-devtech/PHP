<?php

$project = new \app\NL\Models\Project\Project('AppRiver', 'In Progress', 'Google', 'Street 01', 'IT');

echo $project->getProject();
