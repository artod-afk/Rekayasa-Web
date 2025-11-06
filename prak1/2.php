<?php
$json_buku = '{
    "id": 301,
    "judul": "Teknologi",
    "penulis": "Andi kakap",
    "penerbit": "Ryan goshling",
    "tahun": 2021
}';

// Decode ke array
$array_buku = json_decode($json_buku, true);
echo "ID : " . $array_buku["id"] . "<br>";
echo "Judul : " . $array_buku["judul"] . "<br>";
echo "Penulis : " . $array_buku["penulis"] . "<br>";
echo "Penerbit : " . $array_buku["penerbit"] . "<br>";
echo "Tahun : " . $array_buku["tahun"] . "<br>";

// Decode ke object
$object_buku = json_decode($json_buku);
echo "ID : " . $object_buku->id . "<br>";
echo "Judul : " . $object_buku->judul . "<br>";
echo "Penulis : " . $object_buku->penulis . "<br>";
echo "Penerbit : " . $object_buku->penerbit . "<br>";
echo "Tahun : " . $object_buku->tahun . "<br>";

?>