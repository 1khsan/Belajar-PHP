<?php

var_dump(str_contains("Ahmad Ihsanullah Rabbani", "Ahmad"));
var_dump(str_contains("Ahmad Ihsanullah Rabbani", "Ihsan"));
var_dump(str_contains("Ahmad Ihsanullah Rabbani", "Rabbani"));
var_dump(str_contains("Ahmad Ihsanullah Rabbani", "Joko"));

var_dump(str_starts_with("Ahmad Ihsanullah Rabbani", "Ahmad"));
var_dump(str_starts_with("Ahmad Ihsanullah Rabbani", "Ihsan"));
var_dump(str_starts_with("Ahmad Ihsanullah Rabbani", "Rabbani"));
var_dump(str_starts_with("Ahmad Ihsanullah Rabbani", "Joko"));

var_dump(str_ends_with("Ahmad Ihsanullah Rabbani", "Ahmad"));
var_dump(str_ends_with("Ahmad Ihsanullah Rabbani", "Ihsan"));
var_dump(str_ends_with("Ahmad Ihsanullah Rabbani", "Rabbani"));
var_dump(str_ends_with("Ahmad Ihsanullah Rabbani", "Joko"));