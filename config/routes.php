<?php
/**
 * Route definitions: URL slug => [Controller class, method]
 */
return [
    ''        => ['HomeController', 'index'],
    'home'    => ['HomeController', 'index'],
    'programs'=> ['ProgramController', 'index'],
    'campus'  => ['CampusController', 'index'],
    'contact' => ['ContactController', 'index'],
];
