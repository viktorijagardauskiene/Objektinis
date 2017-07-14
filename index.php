<pre>
<?php

// klase nurodo bendrus parametrus visiems objektams
class Car {
	public $make; // nurodom kintamuosius, reiksmiu suteikti nereikia, public - kad butu pasiekiami is visur
	private $model;
	public $owner;

	public function __construct($owner) { // funkcija veikianti sukuriant objekta, pradzioje yra du apatiniai bruksniai, visada ivykdomas kai pagaminam nauja objekta
		$this->owner = $owner;
	}

	public function set_model($model) { // kadangi model kintamajam nustatyta private
		$this->model = $model;
	}

	public function get_model() {
		return $this->model;
	}

	public function drive($speed) { // nurodom objekto funkcija, kitaip vadinama metodu
		echo "We are going somewhere at speed of $speed <br />";
}
		public function stop() { // nurodom objekto funkcija
		echo "Breaking <br />";
	}
}

$auto = new Car("Viktorija"); // sukuriamas naujas objektas, skliausteliuose priskirtas owner reiksme
$auto->make = "Toyota"; // -> priskiriama objektui reiksme  
$auto->set_model("Avensis");
echo $auto->get_model()."<br />"; // funkcija atvaizduoja private objekta
$auto->drive(80); // priskiriama objektui funkcija (metodas), skliausteliuose nurodyta $speed reiksme
$auto->stop();

print_r($auto);

/* $auto2 = new Car(); // sukuriamas naujas objektas
$auto2->make = "BMW"; // -> priskiriama objektui reiksme  
$auto2->model = "X";

$auto3 = new Car(); // sukuriamas naujas objektas
$auto3->make = "Mersedes"; // -> priskiriama objektui reiksme  
$auto3->model = "Y";



// echo atspausdina ekrane tik string tipo duomenis
print_r($auto); // print_r isveda objektus i ekrana
print_r($auto2);
print_r($auto3);

$cars = [$auto, $auto2, $auto3]; // sukuriame objektu masyva
print_r($cars);

echo $auto3->make; // parodo auto3 make reiksme
echo $cars[2]->make; // parodo ta pacia auto3 make reiksme tik is masyvo cars
*/

