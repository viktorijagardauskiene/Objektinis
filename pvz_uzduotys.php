<pre>
<?php

include 'messages.php';
include 'task.php';
include 'cooking.php';

$new_task = new task("Go to the shop", "Buy some milk and bread"); // clase sukurta task.php faile // perduoti du parametrai - $title ir $desc

showa($new_task); // funkcija kuri nurodyta messages.php faile

$another_task = new Cooking("Make something to eat", "anything really"); // title, descrip
showa($another_task);

$new_task->getProducts(); // sitam galioja klase task
$another_task->getProducts(); // o sitam priklauso klase task papildyta klase cooking

