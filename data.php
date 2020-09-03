<?php
//random skaicius
$randomas = rand(1111, 9999);
$data = date("Y-m-d");
$val = 0; 
$sk = 0;
$vid = 0;

$klase = ['mokinys1' => ['Klase' => '5B',
                         'Kodas' => $randomas,
                         'Vardas' => 'Melissa',
                         'Pavarde' => 'Lissa',
                         'Pazymiai' => ['Matematika' => 8,
                                        'Informacines Technologijos' => 5, 
                                        'Anglu kalba' => 10],
                         'Data' => $data
         ],
         'mokinys2' => ['Klase' => '5B',
                         'Kodas' => $randomas,
                         'Vardas' => 'Melissa',
                         'Pavarde' => 'Lissa',
                         'Pazymiai' => ['Matematika' => 8,
                                        'Informacines Technologijos' => 5, 
                                        'Anglu kalba' => 10,
                                        'Lenku kalba' => 1],
                         'Data' => $data],
         'mokinys3' => ['Klase' => '5B',
                         'Kodas' => $randomas,
                         'Vardas' => 'Melissa',
                         'Pavarde' => 'Lissa',
                         'Pazymiai' => ['Matematika' => 8,
                                        'Informacines Technologijos' => 5, 
                                        'Anglu kalba' => 10],
                         'Data' => $data],
        ];