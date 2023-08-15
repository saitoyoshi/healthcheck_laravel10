<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use App\Http\Requests\PutFormRequest;
use App\Models\Record;
use Illuminate\Http\RedirectResponse;
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
    public function store(PostFormRequest $request) {
        $record = new Record();
        $record->physical_condition = $request->physical_condition;
        $record->mood_state = $request->mood_state;
        $record->back_pain = $request->back_pain;
        $record->eyestrain = $request->eyestrain;
        $record->headache = $request->headache;
        $record->recording_date = $request->recording_date;

        $record->save();
        return redirect(route('record.index'));
    }
    public function edit(Record $record) {
        return view('record.edit', compact('record'));
    }
    public function update(PutFormRequest $request, Record $record) {
        $record->physical_condition = $request->physical_condition;
        $record->mood_state = $request->mood_state;
        $record->back_pain = $request->back_pain;
        $record->eyestrain = $request->eyestrain;
        $record->headache = $request->headache;
        $record->recording_date = $request->recording_date;
        $record->update();
        return redirect(route('record.index'));
    }

    public function destroy(Record $record) {
        $record->delete();
        return redirect(route('record.index'));

    }
}
