<?php
require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/ValidationUtil.php";
// Reflection adalah membaca struktur kode pada saat aplikasi sedang berjalan
$request = new LoginRequest();
$request->username = "ihsan";
$request->password = "ihsan77";

ValidationUtil::validateReflection($request);

class ReqisterUserrequest{
    public ?string $name;
    public ?string $addres;
    public ?string $email;
    public ?int $umur;
}

$request = new ReqisterUserrequest();
$request->name = "ihsan";
$request->addres = "Bogor";
$request->email = 'ihsan123';
$request->umur = 19;

ValidationUtil::validateReflection($request);