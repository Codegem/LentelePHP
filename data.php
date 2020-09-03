<?php
//random skaicius
$randomas = rand(1111, 9999);
$data = date("Y-m-d");

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
                                        'Anglu kalba' => 10],
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

// Melissa (Lissa)
// Sarah (Sadie)
// Nicole (Nicci)
// Amanda (Manda)
// Jessica (Jess)
// Stephanie (Steph)
// Jennifer (Jen)
// Amy (Amia)
// Michelle (Misha)
// Heather (Ledger)

// $klase = [  'Kodas' => [$randomas],
//             'Vardas' => ['Melissa', 'Sarah', 'Nicole', 'Amanda', 'Jessica', 'Stephanie', 'Jennifer', 'Amy', 'Michelle', 'Heather'],
//             'Pavarde' => ['Lissa', 'Sadie', 'Nicci', 'Manda', 'Jess', 'Steph', 'Jen', 'Amia', 'Misha', 'Ledger'],
//             'pazymiai' => [ 'Matematika' => [8], 
//                             'Informacines Technologijos' => [5], 
//                             'Anglu kalba' => [10]],
//             'Data' => [$data]            
// ];
