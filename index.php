<?php
require 'flight/Flight.php';

/* Home */
Flight::route('/', function() {
	Flight::render('header');
	Flight::render('home');
	Flight::render('footer');
});

/* Calendario */
Flight::route('/calendario/', function() {
	Flight::render('header');
	echo "aaaaa";
	Flight::render('footer');
});

/* Inscripciones */
Flight::route('/inscripciones/', function() {
	Flight::render('header');
	Flight::render('inscripciones');
	Flight::render('footer');
});

/* Semblanza */
Flight::route('/semblanza/', function() {
	Flight::render('header');
	Flight::render('semblanza');
	Flight::render('footer');
});

/* Noticias */
Flight::route('/noticias/', function() {
	Flight::render('header');
	echo "aaaaa";
	Flight::render('footer');
});

/* Se inicializa el framework */
Flight::start();
?>