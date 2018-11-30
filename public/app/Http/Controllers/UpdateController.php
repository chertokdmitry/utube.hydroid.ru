<?php

namespace App\Http\Controllers;

use Config;

class UpdateController extends Controller

{
    public function index()
    {
        Config::set('time.updatetime', date(DATE_RFC3339, strtotime("-6 hours")));
        return redirect('/');
    }
}
