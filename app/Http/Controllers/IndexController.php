<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $records = Record::all();

        return view('record.index', compact('records'));
    }
}
