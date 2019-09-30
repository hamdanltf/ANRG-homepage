<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "peringatan@accessnetrg.id";
    $to = "h.lathief@gmail.com";
    $subject = "Peringatan Tanah Longsor";
    $message = "Telah terjadi ketidakwajaran, segera jauhi kawasan 1";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Peringatan berhasil dikirim";
?>