<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrasi;

class RegistrasiController extends Controller
{
    public function index() {
        return view('registrasi');
    }

    public function store(Request $request)
    {
        $registrasi = new Registrasi;
        $registrasi->username = $request->get('username');
        $registrasi->email = $request->get('email');
        $registrasi->nomor_hp = $request->get('no_hp');

        $registrasi->save();

        return redirect('/registrasi/index');
    }
}
