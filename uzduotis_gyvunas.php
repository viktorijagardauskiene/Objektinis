<?php

include "messages.php";

class Animal {
	public $name;
	public $countOfLegs;
	public $hasFurr;
	public $food;
	public static $countOfAnimals = 0; // atributas pasiekiamas is bet kur




	public function __construct($name) {
		$this->name = $name;
		Animal::$countOfAnimals++; // iskvieciam per klase su dviem dvitaskiais nes static kintamasis
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

	public static function sayHi() { // statine funkcija, iskvieciama per klase su dviem dvitaskiais
		show("Hi!");
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

$dog1 = new Dog("Vardas1"); // sukuriam naujus gyvunus, jiems priskirdami subklase, kuri turi papildomu atributu (o klases atributai priklauso visoms subklasems )
$fish1 = new Fish("Vardas2");
$bird1 = new Bird("Vardas3");

$dog1->countOfLegs = 4; // atvaizduojam parametru reiksmes
$dog1->size = "huge";
$dog1->hasFurr = TRUE;
$dog1->food = "meat";

$dog1->talk(); // atvaizduojam aprasytus metodus
$dog1->run();

$fish1->run();

if ($dog1 instanceof Dog) { // jeigu priklauso tai subklasei tada..
	echo $dog1->name ." is " . $dog1->size . " dog";
}

$animals = array($dog1, $fish1, $bird1);

showa($animals);

show(Animal::$countOfAnimals); // iskvieciam static atributa

Animal::sayHi(); // iskvieciam static funkcija

/* namu darbai: class Car su
Tributai: make, model, dateOfManufacture, +3 papildomi 
Metodai: bent 4. 
Subklases: 
	sportsCar(issibegejimo laikas iki 100) 
	cisterna - tanker (talpa), 
	electricCar(pakrovimo laikas, vaziavimo atstumas);

sukurti po 3 objektus kiekvienai subkategorijai, susideti i masyva ir atvaizduoti ekrane

bendri: owner milage motor insurance