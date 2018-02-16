<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.02.2018
 * Time: 18:06
 */

$uploads_dir = 'files'; // эту папку я добавил от себя ее нет в задании
$file        = $_FILES['file'];
$text        = $_POST['text'];

if(!file_exists("files")) //проверяем существует ли директория если нет то создаем
{
    mkdir("files", 0755);
}


if(!empty($file))
{
    $name = basename($file['name']);
    $tmp_name = $file['tmp_name'];
    move_uploaded_file($tmp_name, $uploads_dir . "/" . $name);
}

if(!empty($text))
{
    file_put_contents('txt.txt', $text . "\n", FILE_APPEND);
}
