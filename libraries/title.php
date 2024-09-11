<?php
function formatTitle($title)
{
    // Ganti underscore atau huruf besar setelah huruf kecil dengan spasi
    $formatted = preg_replace('/([a-z])([A-Z])/', '$1 $2', $title);
    // Kapitalisasi setiap kata
    return ucwords($formatted);
}
