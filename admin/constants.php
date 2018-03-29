<?php
define("DB_NAME", "autocash");
define("DB_HOSTNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");

$company = 'Cashwell';
define("COMPANY", $company);
$matrix = 2;
define("MATRIX", $matrix);


//database connection
$link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);

if (!$link) {
    die("could not connect to database: " . mysqli_error($link));
} else {
    $db_select = mysqli_select_db($link, DB_NAME);
    if (!$db_select) {
        die("could not connect to database: " . mysqli_error($link));
    }
}
