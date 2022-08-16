<?php

namespace App\Controllers;

class DefaultController extends \MainController
{
    public function index() {
        $mySqlTime = json_encode(date('Y-m-d H:i:s'));
        $timeUnix = json_encode(microtime(date('H:i:s')));
        return view('time', ['timeUnix' => $timeUnix, 'mySqlTime' => $mySqlTime] );
    }
}

