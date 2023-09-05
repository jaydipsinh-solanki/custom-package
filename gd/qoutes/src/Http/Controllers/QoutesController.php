<?php

namespace gd\qoutes\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QoutesController extends Controller {
    public function index() {
        return view('qoutes::qoutes');
    }
}