<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller {

    public function main() {
      return view('top.main');
    }

    public function result(Request $request) {
      $result = ['result'=>$request->text];
      return view('top.result', $result);
    }
}
