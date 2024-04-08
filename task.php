<?php
$file = 'tasks.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskText = $_POST['task'];

    if ($taskText !== '') {
        file_put_contents($file, $taskText . PHP_EOL, FILE_APPEND);
    }
}

$tasks = [];
if (file_exists($file)) {
    $tasks = file($file, FILE_IGNORE_NEW_LINES);
}

foreach ($tasks as $task) {
    echo '<li>' . htmlspecialchars($task) . '<button class="delete-button" onclick="removeTask(this)">Hapus</button></li>';
}
?>