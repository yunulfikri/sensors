<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docs;

class DocsController extends Controller
{
    //
    public function store(Request $request)
    {
        
        if (
            Docs::create([
                'temp' => $request->temp,
                'humadity' => $request->humadity,
                'volt' => $request->volt,
                'current' => $request->current,
                'sun' => $request->sun,
                'load' => $request->load
            ])
        ) {
            return 'sukses';
        } else {
            return 'gagal';
        }
        
    }
}
