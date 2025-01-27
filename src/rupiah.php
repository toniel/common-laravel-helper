<?php
function toRupiah($number, $decimals = 2)
{
    return "Rp" . number_format($number, $decimals, ',', '.');
}

function parseFromRupiah($rupiah)
{
    $number = str_replace(['Rp', '.', ' '], '', $rupiah);
    return (int)$number;
}

function spelled($nilai)
{
    $nilai = abs($nilai);
    $huruf = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];
    if ($nilai < 12) {
        return " " . $huruf[$nilai];
    }

    $temp = "";
    if ($nilai >= 1000000000000) {
        $temp .= spelled($nilai / 1000000000000) . " trilyun";
        $nilai %= 1000000000000;
    }
    if ($nilai >= 1000000000) {
        $temp .= " " . spelled($nilai / 1000000000) . " milyar";
        $nilai %= 1000000000;
    }
    if ($nilai >= 1000000) {
        $temp .= " " . spelled($nilai / 1000000) . " juta";
        $nilai %= 1000000;
    }
    if ($nilai==1000) {
        $temp .= "seribu";
        $nilai %= 1000;
    }
    if ($nilai >= 1000) {
        $temp .= " " . spelled($nilai / 1000) . " ribu";
        $nilai %= 1000;
    }
    if ($nilai >= 200) {
        $temp .= " " . spelled($nilai / 100) . " ratus";
        $nilai %= 100;
    }
    if ($nilai >= 100) {
        $temp .= " seratus";
        $nilai -= 100;
    }
    if ($nilai >= 20) {
        $temp .= " " . spelled($nilai / 10) . " puluh";
        $nilai %= 10;
    }
    if ($nilai >= 10) {
        $temp .= " belas";
        $nilai -= 10;
    }
    return $temp . " " . $huruf[$nilai] ;
}
