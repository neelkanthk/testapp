<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Hobby;
use Validator;

class SiteController extends Controller {

    public function index() {
        $hobbies = Hobby::orderBy('id', 'asc')->get(array('id', 'title'))->toArray();
        return view('pages.home')->withHobbies($hobbies);
    }

    public function store(Request $request) {
//        dd($request->all());
        $this->validate($request, [
            'name' => 'required|unique:users|max:255',
            'email' => 'required|email',
            'password' => 'required',
            'hobbies' => 'required',
            'gender' => 'required',
            'image' => 'required|mimes:png'
        ]);
        if (isset($request->otherhobby)):
            //echo "helo";
            $this->validate($request, [
                'otherhobby' => 'required'
            ]);
        endif;
    }

}
