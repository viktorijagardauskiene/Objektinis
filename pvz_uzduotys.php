<pre>
<?php

include 'messages.php';
include 'task.php';
include 'cooking.php';

$new_task = new task("Go to the shop", "Buy some milk and bread"); // clase sukurta task.php faile // perduoti du parametrai - $title ir $desc

showa($new_task); // funkcija kuri nurodyta messages.php faile

$another_task = new Cooking("Make something to eat", "anything really"); // title, descrip
showa($another_task);

interface TaskInterface {
	public function getDaysToDeadline(); // neaprasom funkcijos, tik nurodom kad sitas metodas mum bus reikalingas
	public function getAge();
}

show($new_task->getDaysToDeadline());
