<?php

include "messages.php";

class Animal {
	public $name;
	public $countOfLegs;
	public $hasFurr;
	public $food;




	public function __construct($name) {
		$this->name = $name;
	}

	public function run() {
		show("The $this->name is running"); // show funkcija parasyta messages.php
	}

	public function talk() {
		show("The $this->name is talking"); // show funkcija parasyta messages.php
	}

	public function eat() {
		show("The $this->name is eating"); // show funkcija parasyta messages.php
	}

	public function sleep() {
		show("The $this->name is sleeping"); // show funkcija parasyta messages.php
	}
}

class Dog extends Animal { // subklase
	public $size;


	public function talk() {
			show("Im barking");
		}

	
}

class Fish extends Animal { // subklase
	public $swimspeed;

	public function run() {
			show("The $this->name is swimming"); // show funkcija parasyta messages.php
		}

}

class Bird extends Animal { // subklase
	public $canFly;

	public function run() {
		show("The $this->name is flying"); // show funkcija parasyta messages.php
	}

}

$dog1 = new Dog("Vardas1");
$fish1 = new Fish("Vardas2");
$bird1 = new Bird("Vardas3");

$animals = array($dog1, $fish1, $bird1);

showa($animals);