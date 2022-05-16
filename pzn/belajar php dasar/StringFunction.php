<?php

var_dump(join(",", [10,11,12,13,14,15]));
//memecah string ke array
var_dump(explode(" ", "Ahmad Ihsanullah Rabbani"));
var_dump(strtolower("Ahmad Ihsanullah Rabbani"));
var_dump(strtoupper("Ahmad Ihsanullah Rabbani"));
var_dump(ucwords("ahmad ihsanullah rabbani"));
$nama = "ihsan/";
var_dump(trim($nama,"/"));
var_dump(substr("Ahmad Ihsanullah Rabbani", 0 , 5));