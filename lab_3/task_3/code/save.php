<?php
// Предварительная проверка наличия всех необходимых POST-параметров
if(isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    // Извлечение данных из POST-запроса
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $desc = $_POST['description'];


    $dirName = "./categories/{$category}/{$email}";
    if(!mkdir($dirName, 0777, true) && !is_dir($dirName)) {
        throw new Exception("Не удалось создать директорию: {$dirName}");
    }


    $fileName = "{$dirName}/{$title}.txt";
    if(file_put_contents($fileName, $desc) === false) {
        throw new Exception("Не удалось записать в файл: {$fileName}");
    }

    chmod($fileName, 0777); // Установка прав доступа к файлу
} else {

    header('Location: /task_3/index.php?error=missing_data');
    exit();
}


header('Location: /task_3/success.php');
exit();
