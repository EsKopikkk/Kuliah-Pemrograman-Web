<?php

namespace App\Http\Controllers;

class MimiController extends Controller
{
    // Halaman utama & about
    public function index() { return view('mimi.index'); }
    public function about() { return view('mimi.aboutme'); }

    // Kategori utama
    public function kueKering() { return view('mimi.kueKering'); }
    public function kueBolu() { return view('mimi.kueBolu'); }
    public function lauk() { return view('mimi.lauk'); }
    public function roti() { return view('mimi.roti'); }

    // Roti
    public function roti1() { return view('mimi.roti1'); }
    public function r1() { return view('mimi.r1'); }
    public function r2() { return view('mimi.r2'); }
    public function r3() { return view('mimi.r3'); }

    // Bolu
    public function bolu1() { return view('mimi.bolu1'); }
    public function bolu2() { return view('mimi.bolu2'); }
    public function bolu3() { return view('mimi.bolu3'); }

    // Ayam
    public function ayamBakar() { return view('mimi.ayamBakar'); }
    public function ayamChick() { return view('mimi.ayamChick'); }
    public function ayamKari() { return view('mimi.ayamKari'); }
    public function ayamKuning() { return view('mimi.ayamKuning'); }

    // Kue kering 
    public function kering1() { return view('mimi.kering1'); }
    public function kering2() { return view('mimi.kering2'); }
    public function kering3() { return view('mimi.kering3'); }
    public function kering4() { return view('mimi.kering4'); }

    // Pudding
    public function pudding1() { return view('mimi.Pudding1'); }
    public function pudding2() { return view('mimi.Pudding2'); }
}
