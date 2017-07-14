<?php

class Task {

	public $title;
	private $isCompleted;
	public $description;

	public function __construct($title, $desc) {
		$this->title = $title;
		$this->description = $desc;
	}

	public function __get($att) { // getter
		show("Trying to get $att value");
		return $this->isCompleted;
	}

	public function __set($att, $value) { // setter
		show("Trying to set value to $value");
		$this->$att = $value;
	}
}