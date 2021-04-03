<?php 

function get_harga($waktu_masuk)
{
	$waktu = date_diff(date_create($waktu_masuk), date_create(date('H:i:s')));
    $tarif = 1;

    if ($waktu->format("%H") == 00) {

        $tarif = 1;

    } else if($waktu->format("%H") > 00){

        $tarif = $tarif + $waktu->format("%H");

    }

    return $tarif;
}

    
