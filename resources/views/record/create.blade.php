<x-layout.layout>
    <x-slot:title>
        登録
    </x-slot:title>
  <h2>登録画面</h2>
  <a href="{{ route('record.index') }}">戻る</a>
  @if($errors->any())
    <x-error-message></x-error-message>
  @endif
  <form action="{{ route('record.store') }}" method="post">
    @csrf
    <div class="mb-3">
    <label for="" class="form-label">体調</label>
    <input type="number" name="physical_condition" class="form-control" id="" value="{{ old('physical_condition') }}">
</div>
<div class="mb-3">
    <label for="" class="form-label">気分</label>
    <input class="form-control" type="number" name="mood_state" id="" value="{{ old('mood_state') }}">
</div>
<div class="mb-3">
    <label for="" class="form-label">肩こり</label>
    <input class="form-control" type="number" name="back_pain" id="" value="{{ old('back_pain') }}">
</div>
<div class="mb-3">
    <label for="" class="form-label">眼精疲労</label>
    <input class="form-control" type="number" name="eyestrain" id="" value="{{ old('eyestrain') }}">

</div>
<div class="mb-3">
    <label for="" class="form-label">頭痛</label>
    <input class="form-control" type="number" name="headache" id="" value="{{ old('headache') }}">
</div>
<div class="mb-3">
    <label for="" class="form-label">記録日時</label>
    <input class="form-control" type="date" name="recording_date" id="" value="{{ old('recording_date', date('Y-m-d')) }}">
</div>
<div class="mb-3">
    <textarea class="form-control"  name="comment" id="" cols="30" rows="5">{{ old('comment') }}</textarea>
</div>
<button class="btn btn-primary">登録</button>
</form>
</x-layout.layout>
