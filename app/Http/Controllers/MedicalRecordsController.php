<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalRecordsController extends Controller
{
    public function index() {
    	//return 'radi';
    	return view('medical.index');
    }

    public function operation() {
    	return view('medical.operation');
    }

    public function control() {
    	return view('medical.control');
    }

}
