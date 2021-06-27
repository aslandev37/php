<?php
    $txt = $_POST['text'];
  
    $db = new PDO('mysql:host=localhost;dbname=php-course', 'root', '');
    $sql = 'INSERT INTO content (text) VALUES (:text)';
    $stmt = $db->prepare($sql);
    $stmt->execute(['text' => $txt]);

    header('Location: /task_9.php');
?>