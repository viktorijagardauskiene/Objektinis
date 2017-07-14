<?php

class Animal {
	public $name;
	public $countOfLegs;
	public $hasFurr;
	public $food;




	public function __construct($name) {
		$this->name = $name;
	}

	public function run() {
		echo $this->name .' is running';
	}

	public function talk() {
		
	}

	public function eat() {
		
	}

	public function sleep() {
		
	}
}

class Dog extends Animal { // subklase
	public function run() {
			echo $this->name .' is flying';
		}

	public function size() {
		
	}

}

class Fish extends Animal { // subklase
	public function run() {
			echo $this->name .' is swiming';
		}

	public function swimSpeed() {

	}

}

class Bird extends Animal { // subklase
	public function hasWings() {

	}

}

$gyvunas = new Animal('Suo');
$gyvunas->run();