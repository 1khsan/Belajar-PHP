<?php

class Address{
    public ?string $country;
}

class User{
    public ?Address $address;
}
// Biasanya ketika kita ingin mengakses sesuatu dari sebuah object yang bisa memungkinan nilai null, 
// maka kita akan melakukan pengecekan apakah object tersebut null atau tidak, 
// jika tidak baru kita akses object tersebut
// Dengan nullsafe operator, kita tidak perlu melakukan itu, kita hanya perlu menggunakan karakter ?
//  (tanda tanya), secara otomatis PHP akan melakukan pengecekan null tersebut 
//tidak perlu melakukan pengecekan null secara manual
function getCountry(?User $user): ?string{
    // if ($user != null){
    //     if($user->address != null ){
    //         return $user->address->country;
    //     }
    // }
    // return null;
    return $user?->address?->country;
    //php akan mengecek apakah objek user,   null atau tidak
    //jika tidak dia akan mengeksekusi kesampingnya
    //jika null dia akan return null
}
echo getCountry(null);