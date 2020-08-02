<?php

// Date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time() + 182700);
// echo date("d M Y", time() + 60 * 60 * 24 * 100);

// mktime
// membuat detik sendiri
// mktime(0, 0, 0, 0, 0, 0);
// jam, menit, detik, bulan, tanggal, tahun
// echo date("Y-m-d l H:i:s", mktime(0, 0, 0, 2, 16, 2001));

// strtotime
echo date("l", strtotime("16 feb 2001"));
