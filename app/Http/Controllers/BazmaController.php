<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BazmaController extends Controller
{
    public function responseFunction()
    {
        return response("ini adalah bentuk response");
    }
    public function responseHeader()
    {
        $bodyResponse = [
            'name' => 'Haempebe',
            'school' => 'smk ti bazma'
        ];
        return response(json_encode($bodyResponse), 200)
            ->header('Content-Type', 'Application/Json')
            ->withHeaders([
                'App' => 'Hamidzan PB',
                'Classes' => 'XI',
                'Web' => 'Laravel'
            ]);
    }
}
