<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>тест функции</title>
</head>
<body>

<?php

//1. Напишите функцию, возвращающую дескриптор <img /> разметки HTML-страницы. Эта функция должна
//принимать URL изображения в качестве обязательного аргумента, а также текст надписи, ширину и высоту
//изображения в качестве необязательных аргументов alt, height и width соответственно.

//<img src="html_img_pic.jpg" alt="picture'" height="200" width="400">

function get_img ($url, $alt = ' ', $height = 100, $width = 100): string {
    return "<img src = $url alt = '$alt' height = $height width = $width >";
}
echo get_img('html_img_pic.jpg', 'picture', 200, 400);
echo get_img('https://lh3.ggpht.com/KV-KPdiqPUxbHuNkba5T5XR9JfH673Hv9Gk6Lb42o8GQ4sPyneCszPl8Uw8rZUWrbl4', 'picture', 400, 400);


?>

</body>
</html>


