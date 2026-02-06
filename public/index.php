<?php

use Core\Router;

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$router = new Router();
$router->dispatch($_SERVER['REQUEST_URI']);

// use App\Models\TeacherInfo;
// use App\Models\StudentInfo;

// $teacherInfo = new TeacherInfo('Albert', 'Einstein');
// $studentInfo = new StudentInfo('Simon', 'Burri', 22);

// $userInfo = $teacherInfo;

// $firstname = $userInfo->getFirstname();
// $lastname = $userInfo->getLastname();
// $fullname = $userInfo->getFullName();
// $login = $userInfo->getLogin();

?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <span>Bonjour <?= $firstname ?> <?= $lastname ?> </span>
    <br>
    <span>Hi <?= $fullname ?> <?= $login ?></span>
</body>

</html> -->