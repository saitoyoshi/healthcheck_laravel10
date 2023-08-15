<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RecordController extends Controller
{
    public function index(): View {
        $records = Record::all();

        return view('record.index', compact('records'));
    }
    public function create(): View {
        return view('record.create');
    }
}
