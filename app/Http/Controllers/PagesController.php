<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('welcome');
    }
}