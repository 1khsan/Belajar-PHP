<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Ihsan");

$vp = new VipePresident();
$vp->name = "Ihsan";
$vp->sayHello("Ahmad");