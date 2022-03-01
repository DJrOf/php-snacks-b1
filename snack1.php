<?php

$age = $_GET['age'] ?? '';
$name = $_GET['name'] ?? '';
$mail = $GET['name'] ?? '';

$is_age_valid = is_numeric($age);
$is_name_valid = mb_strlen($name) > 3;
$is_mail_valid = strpos($mail, '@') !== false && strpos($mail, '.') !== false;

if ($is_age_valid && $is_name_valid && $is_mail_valid) {
    echo 'Accesso riuscito?';
} else {
    echo 'Accesso negato';
}
?>

