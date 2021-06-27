<?php
    session_start();

    $txt = $_POST['text'];
    $db = new PDO('mysql:host=localhost;dbname=php-course', 'root', '');

    $sql = 'SELECT * FROM content WHERE text=:text';
    $stmt = $db->prepare($sql);
    $stmt->execute(['text' => $txt]);
    $array = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!empty($array)) {
      $mes = 'You should check in on some of those fields below.';
      $_SESSION['error'] = $mes;

      header('Location: /task_10.php');
      exit;
    }

    $sql = 'INSERT INTO content (text) VALUES (:text)';
    $stmt = $db->prepare($sql);
    $stmt->execute(['text' => $txt]);

    $mes = 'Success';
    $_SESSION['success'] = $mes;

    header('Location: /task_10.php');
?>


