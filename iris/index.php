<?php
$servers = array( 'buzz', 'toast', 'fry', 'dew', 'snow' );
$host = gethostname();

if( $host == 'elmer.spi.gt' )
{
    $host = $servers[ rand( 0, count($servers) - 1 ) ] . '.spi.gt';
}

$location = (empty( $_SERVER[ 'HTTPS' ] ) ? 'http://' : 'https://' ) . $host . $_SERVER[ 'REQUEST_URI' ];

header( "Location: $location", true, 302 );
