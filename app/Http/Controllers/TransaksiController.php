<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Transaksi;

class TransaksiController extends Controller
{
    public function add(Request $request)
    {
        $add = Transaksi::create([
            'total' => $request->total,
        ]);

        if($add){
            return $request->wantsJson()
                    ? new Response(['status' => 'success', 'message' => 'added!'], 201)
                    : redirect($this->redirectPath());
        }
    }
}
