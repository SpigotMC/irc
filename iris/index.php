<?php
$servers = array( 'buzz', 'toast', 'elmer', 'fry', 'dew', 'snow' );
$host = gethostname();

if( $host == 'comstock.spi.gt' )
{
    $host = $servers[ rand( 0, 5 ) ] . '.spi.gt';
}

header( 'Location: ' . ( empty( $_SERVER[ 'HTTPS' ] ) ? 'http://' : 'https://' ) . $host . '/iris/', true, 302 );
