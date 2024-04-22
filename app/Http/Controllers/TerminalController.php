<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\StreamOutput;

class TerminalController extends Controller
{
    //
    public function index(){
    return view('terminal');    
    }

    public function terminal(Request $request){
    $validated = $request->validate([
    'itemid' => 'required|string|max:800',
    ]);
    $stream = fopen("php://output", "w");
    return $response=Artisan::call("migrate", array(), new StreamOutput($stream));
    
                
    return response()->json(['code' => 200, 'response' => '123']);
       
    }
}
