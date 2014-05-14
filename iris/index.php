<?php

header( 'Location: ' . ( empty( $_SERVER[ 'HTTPS' ] ) ? 'http://' : 'https://' ) . gethostname() . $_SERVER[ 'REQUEST_URI' ], true, 302 );
