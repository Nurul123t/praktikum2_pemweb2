//array asosiatif
$mahasiswa = ["Nama"=>"Nurul", "Umur"=>18, "Alamat"=>"jakarta"];

echo $mahasiswa["Nama"] . "<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value;
    echo "<br>";
}

echo "<br>";