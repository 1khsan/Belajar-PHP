<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Ahmad";
$manager->sayHello("Joko");

$vp = new VipePresident();
$vp->name = "Ihsan";
$vp->sayHello("Juna");