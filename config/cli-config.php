<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

/*// replace with file to your own project bootstrap
require_once __DIR__.'/../src/bootstrap.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = GetEntityManager();

return ConsoleRunner::createHelperSet($entityManager);*/

use App\bootstrap;

//use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__.'/../src/bootstrap.php';

$bootstrap = new bootstrap();

return ConsoleRunner::createHelperSet($bootstrap->configOrm());
