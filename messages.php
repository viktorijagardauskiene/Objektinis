<style>
	
	.text {
		background-color: black;
		color: white;
		padding: 10px;
		margin: 5px;
	}

	.array {
		background-color: pink;
		color: white;
		padding: 10px;
		margin: 5px;
	}


</style>



<?php

function show($text) {
	echo '<pre class="text">'.$text.'</pre>';

}

function showa($array) {
	echo "<pre class='array'>";
	print_r($array);
	echo "</pre>";
}