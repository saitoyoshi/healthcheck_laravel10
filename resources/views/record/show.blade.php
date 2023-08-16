<x-layout.layout>
    <x-slot:title>詳細画面</x-slot:title>
    <x-message-function></x-message-function>
<ul>
    <a href="{{ route('record.index') }}">戻る</a>
    <div class="mt-3">
    <span class="">コメント</span>
    <p class="border border-2 p-3 mt-3">{{ $record->comment }}</p>
</div>
<li>体調: {{ message($record->physical_condition) }}</li>
<li>気分: {{ message($record->mood_state) }}</li>
<li>肩こり: {{ message($record->back_pain) }}</li>
<li>目の疲れ: {{ message($record->eyestrain) }}</li>
<li>頭痛: {{ message($record->headache) }}</li>
<li>記録日時: {{ date('Y年n月j日', strtotime($record->recording_date)) }}</li>
</ul>
</x-layout.layout>
