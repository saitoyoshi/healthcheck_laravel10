<x-layout.layout>
    <x-slot:title>記録一覧</x-slot:title>

    <h2>記録一覧画面</h2>
    <x-message-function></x-message-function>
    @if (session('message'))
        <p style="color:blue">{{ session('message') }}</p>
    @endif
    <div class="py-3">
        <a href="{{ route('record.create') }}">追加</a>
    </div>
    @foreach ($records as $record)
    <ul class="mb-4 border border-2 py-3 list-unstyled">
            <div class="row mb-0 ps-3">
            <h5 class="col-auto"><a href="{{ route('record.show', $record) }}">作成日時: {{ date('Y/n/j', strtotime($record->updated_at)) }}</a></h5>
                <div class="col-auto">
                    <a href="{{ route('record.edit', $record) }}"><button class="btn btn-info btn-sm">更新</button></a>
                </div>
                <form class="col-auto" action="{{ route('record.destroy', $record) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('本当に削除しますか');">削除</button>
                </form>
            </div>
            <li class="ps-3">体調: {{ message($record->physical_condition) }}</li>
            <li class="ps-3">気分: {{ message($record->mood_state) }}</li>
            <li class="ps-3">肩こり: {{ message($record->back_pain) }}</li>
            <li class="ps-3">目の疲れ: {{ message($record->eyestrain) }}</li>
            <li class="ps-3">頭痛: {{ message($record->headache) }}</li>
            <li class="ps-3">記録日時: {{ date('Y年n月j日', strtotime($record->recording_date)) }}</li>
        </ul>
    @endforeach
    <div class="container">
    {!! $records->links('pagination::bootstrap-5') !!}
</div>
</x-layout.layout>
