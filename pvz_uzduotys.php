<pre>
<?php

include 'messages.php';
include 'task.php';

$new_task = new task("Go to the shop", "Buy some milk and bread"); // clase sukurta task.php faile // perduoti du parametrai - $title ir $desc

$new_task->$isCompleted = true;

show($new_task->$isCompleted);


showa($new_task); // funkcija kuri nurodyta messages.php faile


show("my text");
showa(["vardas" => "tomas", "amzius" => "55"]);