<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
class LocalizationController extends Controller
{
    public function change($lang = 'en')
    {
        Session::put('locale', $lang);
//        dd(Session::get('locale'));
        App::setlocale($lang);

        return redirect()->back();
    }
}
