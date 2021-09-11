<?php
$listmahasiswa = '{
    "1":{
        "nim": 1920175312,
        "nama": "indah",
        "umur": "19 tahun",
        "email": "ndh@gmail.com"
    },
    "2":{
        "nim": 1920175313,
        "nama": "anisa",
        "umur": "20 tahun",
        "email": "anisaand@gmail.com"
    },
    "3":{
        "nim": 1920175314,
        "nama": "lia",
        "umur": "21 tahun",
        "email": "liaaml@gmail.com"
    },
    "4":{
        "nim": 1920175315,
        "nama": "silvia",
        "umur": "19 tahun",
        "email": "slvi@gmail.com"
    },
    "5":{
        "nim": 1920175316,
        "nama": "marsya",
        "umur": "19 tahun",
        "email": "mrsyadz@gmail.com"
    }
    "1":{
        "nim": 1920175317,
        "nama": "tasya",
        "umur": "21 tahun",
        "email": "tsy@gmail.com"
    }
    }';

    $mahasiswa = json_decode($listmahasiswa);
    echo "<br>";
    echo "<b>1. Dosen Pembimbing : Danny Indra Gunawan</b> <p>";
    foreach ($mahasiswa as $key =>$a){
        echo "{$key}. nim: {$a->nim} <br>";
        echo "nama: {$a->nama} <br>";
        echo "nim: {$a->nim} <br>";
        echo "umur: {$a->umur} <br>";
        echo "email: {$a->email} </p>";
    }
    echo "<br>";
    echo "<b>2. Dosen Pembimbing : Muhammad Sabar </b> <p>";
    foreach ($mahasiswa as $key =>$a){
        echo "{$key}. nim: {$a->nim} <br>";
        echo "nama: {$a->nama} <br>";
        echo "nim: {$a->nim} <br>";
        echo "umur: {$a->umur} <br>";
        echo "email: {$a->email} </p>";
    }
    echo "<br>";
    echo "<b>3. Dosen Pembimbing : Tarsinah Sumarni </b> <p>";
    foreach ($mahasiswa as $key =>$a){
        echo "{$key}. nim: {$a->nim} <br>";
        echo "nama: {$a->nama} <br>";
        echo "nim: {$a->nim} <br>";
        echo "umur: {$a->umur} <br>";
        echo "email: {$a->email} </p>";
    }
    echo "<br>";
    echo "<b>4. Dosen Pembimbing : Saepudin </b> <p>";
    foreach ($mahasiswa as $key =>$a){
        echo "{$key}. nim: {$a->nim} <br>";
        echo "nama: {$a->nama} <br>";
        echo "nim: {$a->nim} <br>";
        echo "umur: {$a->umur} <br>";
        echo "email: {$a->email} </p>";
    }
?>