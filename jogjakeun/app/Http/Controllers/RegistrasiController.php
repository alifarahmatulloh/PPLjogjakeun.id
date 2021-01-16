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
        $registrasi_all = Registrasi::all();

        $info = "";

        for($i = 0;  $i < sizeof($registrasi_all); $i++) {
            $uname = $registrasi_all[$i]->username;
            $email = $registrasi_all[$i]->email;

            if($request->get('username') != $uname && $request->get('email') != $email) {
                $info = "Sukses Mendaftar";
            } else {
                $info = "Maaf, Anda sudah terdaftar registrasi";
                break;
            }
        }

        if($info == "Sukses Mendaftar") {
            $registrasi->username = $request->get('username');
            $registrasi->email = $request->get('email');
            $registrasi->nomor_hp = $request->get('no_hp');

            $registrasi->save();

            return redirect('/event/index');
        } else {
            return redirect('/registrasi/index')->with('info', $info);   
        }
    }
}
