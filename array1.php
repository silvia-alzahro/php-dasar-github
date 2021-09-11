<?php
$jurusan = ["Jurusan Teknik Informatika",
            "Jurusan Sistem Informasi",
            "Jurusan Teknik Komputer",
            "Jurusan Manajemen Informatika"
];
foreach($jurusan as $key => $jurusa){
    echo $jurusa .'-ada di index'.' ' .$key;
    echo '<br>';
}
echo '<br>';
?>

<?php
$jurusan = ["teknik informatika",
            "sistem informasi",
            "teknik komputer",
            "manajemen informatika"
];
foreach($jurusan as $key => $jurusa){
echo 'kata kunci index'.'=';
echo "jurusan $key,".' nilai ='.$jurusa;
echo '<br>';
}
?>