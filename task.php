<?php

class Task implements TaskInterface { // turi atitikti nurodyta interface pvz_uzduotys.php

	public $title;
	private $isCompleted;
	public $description;
	public $deadline;

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

	public function getProducts() {
		show("Im going to the shop to get some products");

	}
}