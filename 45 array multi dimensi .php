<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk Pemula",
        "penulis" => "meylisa eka putry"
    ],
    [
        "judul" => "Tutorial PHP dari Nol hingga Mahir",
        "penulis" => "meylisa eka putry"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "meylisa eka putry"
    ]
];

// menampilkan array
foreach($artikel as $post){
    echo "<h2>".$post["judul"]."</h2>";
    echo "<p>".$post["penulis"]."<p>";
    echo "<hr>";
}

echo "<p><strong><i>By Meylisa eka putry</strong>";
