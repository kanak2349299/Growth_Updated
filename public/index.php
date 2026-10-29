
<?php

$minPhpVersion = '8.1';

if (version_compare(PHP_VERSION, $minPhpVersion, '<')) {
    exit('PHP 8.1 or higher is required.');
}

define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

if (getcwd() . DIRECTORY_SEPARATOR !== FCPATH) {
    chdir(FCPATH);
}

// Application folder is one level above public/
require FCPATH . '../app/Config/Paths.php';

$paths = new Config\Paths();

require $paths->systemDirectory . '/Boot.php';

exit(CodeIgniter\Boot::bootWeb($paths));
