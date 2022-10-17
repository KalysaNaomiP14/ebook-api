<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120121,
            'Name' => 'Kalysa Naomi P',
            'Phone' => '081226035320',
            'Class' => 'XII RPL 4'
        ];
    }
};
