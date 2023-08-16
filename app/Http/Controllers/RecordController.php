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
        $records = Record::orderBy('created_at', 'desc')->get();

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
        $record->comment = $request->comment;

        $record->save();
        return redirect(route('record.index'))->with('message', '健康記録を登録しました');
    }
    public function show(Record $record) {
        return view('record.show', compact('record'));
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
        return redirect(route('record.index'))->with('message', '健康記録を更新しました');
    }

    public function destroy(Record $record) {
        $record->delete();
        return redirect(route('record.index'))->with('message', '健康記録を削除しました');

    }
}
