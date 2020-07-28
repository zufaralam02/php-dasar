<?php

// date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// time
// UNIX TimeStamp / EPOCH time
// detik yang berlalu sejak 1 januari 1970  (waktu yang di sepakati untuk komputer)
// echo time();

// echo date("l", time() + 172800);
// echo date("l", time() + 60 * 60 * 24 * 100);
// echo date("l d M Y", time() - 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik yang telah berlalu
// mktime(0, 0, 0, 0, 0, 0)
// jam, menit, detik, bulan, tanggal, tahun
// echo mktime(0, 0, 0, 2, 16, 2001);
// echo date("l d M Y", mktime(0, 0, 0, 2, 16, 2001));

// strtotime
echo date("l d M Y", strtotime("16 feb 2001"));
