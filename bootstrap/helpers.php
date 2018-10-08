<?php

function get_db_config()
{
    if(getenv('IS_IN_HEROKU')){
        $url=parse_url(getenv("DATABASE_URL"));
        return $get_db_config=[
            'connection'=>'pgsql',
            'host'=>$url['host'],
            'database'=>$url['user'],
            'password'=>$url['pass'],
        ];
    }else{
        return $db_config=[
            'connection'=>env('DB_CONNECTION','mysql'),
            'host'=>env('DB_HOST','localhost'),
            'database'=>env('DB_DATABASE','forge'),
            'username'=>env('DB_USERNAME','forge'),
            'pasword'=>env('DB_PASSWORD',''),
        ];
    }
}


>