<?php

function getUsers()
{
    return [
        [
            "id" => 1,
            "name" => "Admin Utama",
            "email" => "admin@ski.sch.id",
            "role" => "admin"
        ],
        [
            "id" => 2,
            "name" => "Budi Santoso",
            "email" => "budi.santoso@siswa.ski.sch.id",
            "role" => "member"
        ]
        ,
        [
            "id" => 3,
            "name" => "Siti Aminah",
            "email" => "siti.aminah@siswa.ski.sch.id",
            "role" => "member"
        ]
        ,
        [
            "id" => 4,
            "name" => "Richard Marcell",
            "email" => "richard.m@ski.sch.id",
            "role" => "admin"
        ]
    ];
}

function getUser()
{
    return [
        "id" => 1,
        "name" => "Budi Santoso",
        "email" => "budi@gmail.com",
        "role" => "admin"
    ];
}

function getProfile()
{
    return [
        "phone" => "081234567890",
        "address" => "Jl. Ahmad Yani No. 45, Pontianak",
        "bio" => "Pustakawan yang berdedikasi dan menyukai literasi digital."
    ];
}

?>
