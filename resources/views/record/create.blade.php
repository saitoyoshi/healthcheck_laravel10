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
    <div>
    <label for="">体調</label>
    <input type="number" name="physical_condition" id="" value="{{ old('physical_condition') }}">
</div>
<div>
    <label for="">気分</label>
    <input type="number" name="mood_state" id="" value="{{ old('mood_state') }}">
</div>
<div>
    <label for="">肩こり</label>
    <input type="number" name="back_pain" id="" value="{{ old('back_pain') }}">
</div>
<div>
    <label for="">眼精疲労</label>
    <input type="number" name="eyestrain" id="" value="{{ old('eyestrain') }}">

</div>
<div>
    <label for="">頭痛</label>
    <input type="number" name="headache" id="" value="{{ old('headache') }}">
</div>
<div>
    <label for="">記録日時</label>
    <input type="date" name="recording_date" id="" value="{{ old('recording_date', date('Y-m-d')) }}">
</div>
<button>登録</button>
</form>
</x-layout.layout>
