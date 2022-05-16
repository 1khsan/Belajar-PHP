<?php

class SocialMedia{
    public string $name;
}

class Facebook extends SocialMedia{
    final public function login(string $username, string $password):bool
    {
        return true;
    }
}
// final class = class tidak bisa diturunkan lagi
// final fuction = funsi tidak bisa dioverread lagi
//kta coba overried funsi login

class FakeFaceboo extends Facebook{
    //  function login(string $username, string $password):bool
    // { //tidak bisa dioverread karena sudah difinal
    //     return false;
    // }
}