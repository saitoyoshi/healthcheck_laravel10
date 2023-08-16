<x-layout.layout>
    <x-slot:title>
        更新
    </x-slot:title>
<h2>更新画面</h2>
  <a href="{{ route('record.index') }}">戻る</a>
  @if($errors->any())
    <x-error-message></x-error-message>
  @endif
  <form action="{{ route('record.update', $record) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
    <label for="" class="form-label">体調</label>
    <input class="form-control" type="number" name="physical_condition" id="" value="{{ old('physical_condition', $record->physical_condition) }}">
</div>
<div class="mb-3">
    <label for="" class="form-label">気分</label>
    <input class="form-control" type="number" name="mood_state" id="" value="{{ old('mood_state',$record->mood_state) }}">
</div>
<div class="mb-3">
    <label for="" class="form-label">肩こり</label>
    <input class="form-control" type="number" name="back_pain" id="" value="{{ old('back_pain', $record->back_pain) }}">
</div>
<div class="mb-3">
    <label for="" class="form-label">眼精疲労</label>
    <input class="form-control" type="number" name="eyestrain" id="" value="{{ old('eyestrain', $record->eyestrain) }}">

</div>
<div class="mb-3">
    <label for="" class="form-label">頭痛</label>
    <input class="form-control" type="number" name="headache" id="" value="{{ old('headache', $record->headache) }}">
</div>
<div class="mb-3">
    <label for="" class="form-label">記録日時</label>
    <input class="form-control" type="date" name="recording_date" id="" value="{{ old('recording_date', $record->recording_date) }}">
</div>
<div class="mb-3">
    <textarea class="form-control" name="comment" id="" cols="30" rows="5">{{ old('comment', $record->comment) }}</textarea>
</div>
<button class="btn btn-primary">更新</button>
</form>
</x-layout.layout>
