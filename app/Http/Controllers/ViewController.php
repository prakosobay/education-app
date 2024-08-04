<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Controller ini untuk guest, dipisah dari user
 * @author choanam
 */
class ViewController extends Controller
{
    // untuk view only atau guest
    public function index(): string {
        return view('user.users');
    }
}
