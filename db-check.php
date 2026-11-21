<?php

require __DIR__ . '/bootstrap/app.php';

try {
    $connection = \Core\Database\Connection::instance();
    $result = $connection->selectOne('SELECT DATABASE() AS db');

    echo '<pre>';
    echo 'Database connection successful!' . PHP_EOL;
    print_r($result);
    echo '</pre>';

} catch (Throwable $e) {
    echo '<pre>';
    echo 'ERROR: ' . $e->getMessage() . PHP_EOL;
    echo 'DETAIL: ' . $e->getPrevious()?->getMessage();
    echo '</pre>';
}