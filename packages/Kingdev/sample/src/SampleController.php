<?php

namespace Kingdev\Sample;

use App\Http\Controllers\Controller;

class SampleController extends Controller {

    public function index() {
        return view('sample::index', ['name' => 'King Thao']);
    }

}
