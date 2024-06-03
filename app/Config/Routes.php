<?php

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
//$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true); // Habilitar el auto-routing