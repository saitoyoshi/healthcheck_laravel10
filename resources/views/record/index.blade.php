<x-layout.layout>
    <x-slot:title>記録一覧</x-slot:title>

    <h2>記録一覧画面</h2>
    <x-message-function></x-message-function>
    @if (session('message'))
        <p class="text-info">{{ session('message') }}</p>
    @endif
    <div class="py-3">
        <a href="{{ route('record.create') }}">追加</a>
    </div>
    @foreach ($records as $record)
    <div class="mb-4 py-3 card bg-dark">
        <div class="card-body">
            <div class="row mb-0">
            <h5 class="col-auto card-title text-decoration-underline"><a class="text-dark" href="{{ route('record.show', $record) }}">作成日時: {{ date('Y/n/j', strtotime($record->updated_at)) }}</a></h5>
                <div class="col-auto">
                    <a href="{{ route('record.edit', $record) }}"><button class="btn btn-info btn-sm">更新</button></a>
                </div>
                <form class="col-auto" action="{{ route('record.destroy', $record) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('本当に削除しますか');">削除</button>
                </form>
            </div>
            <ul class="list-group list-group-flush py-3">
            <li class="list-group-item">体調: {{ message($record->physical_condition) }}</li>
            <li class="list-group-item">気分: {{ message($record->mood_state) }}</li>
            <li class="list-group-item">肩こり: {{ message($record->back_pain) }}</li>
            <li class="list-group-item">目の疲れ: {{ message($record->eyestrain) }}</li>
            <li class="list-group-item">頭痛: {{ message($record->headache) }}</li>
            <li class="list-group-item">記録日時: {{ date('Y年n月j日', strtotime($record->recording_date)) }}</li>
        </ul>
        </div>
        </div>
    @endforeach
    <div class="container">
    {!! $records->links('pagination::bootstrap-5') !!}
</div>
</x-layout.layout>
