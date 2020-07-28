<?php

$names = [
    'dhani' => [
        'umur' => 17,
        'alamat' => 'jonggol'
    ],
    'haris' => [
        'umur' => 18,
        'alamat' => 'jonggol'
    ],
    'rafael' => [
        'umur' => 19,
        'alamat' => 'jonggol'
    ]
];

foreach ($names as $name => $data) {
    echo "<h1>" . $name . "</h1>";
    echo "<li>";
    // foreach ($data as $key => $value) {
    //     if ($key == 'alamat') {
    //         continue;
    //     }
    //     echo $key . " : ";
    // }
    // $new = array_keys($data);
    // echo $new[0];
    // echo strtoupper(current(array_keys($data))) . " : " . $data["umur"];
    echo current(array_keys($data)) . " : " . $data["umur"];

    $a = current(array_keys($data));
    // echo $a;
    $b = substr($a, 1, 1);
    // echo $b;
    // echo substr(current(array_keys($data)), 1, 1);
    $c = strtoupper(substr(current(array_keys($data)), 1, 1));
    // echo $c;
    // echo strtoupper()
    // echo $data['umur'];
    // echo array_keys($names, "dhani");
    echo "</li>";
}

// foreach ($names as $name => $data) {
//     echo "<br>" . $name;
//     foreach ($data as $key => $value) {
//         if ($key == "alamat") {
//             continue;
//         }
//         echo "<br>" . $key . " : " . $value;
//     }
// }
