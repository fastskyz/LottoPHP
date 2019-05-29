<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LottoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('lotto');
    }

    public function check(Request $request)
    {

        $request->validate([
            '0' => 'required|integer|between:1,52',
            '1' => 'required|integer|between:1,52',
            '2' => 'required|integer|between:1,52',
            '3' => 'required|integer|between:1,52',
            '4' => 'required|integer|between:1,52',
            '5' => 'required|integer|between:1,52',
        ]);





        // In orde

        $user = $request->all();
        array_splice($user, 0, 1);

        $draw = array();

        for( $i = 0; $i < 6; $i++ )
        {
            array_push($draw , rand(1, 52));
        }

        $result = 0;

        for( $i = 0; $i < 6; $i++ )
        {
            if($draw[$i] == $user[$i] ){
                $result++;
            }
        }



        $viewdata = array('user' => $user,'draw' => $draw,'result' => $result);
        return view( 'check', $viewdata);
    }
}
