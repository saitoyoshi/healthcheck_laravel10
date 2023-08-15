<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>健康管理アプリ</h1>
  <h2>記録一覧画面</h2>
  @php
      function message(int $v) {
        switch ($v) {
            case 5:
                return 'とても良い';
                break;
            case 4:
                return '良い';
                break;
            case 3:
                return '普通';
                break;
            case 2:
                return '悪い';
                break;
            case 1:
                return 'とても悪い';
                break;
            default:
                return '不正な値が入力されました';
                break;
        }
      }
  @endphp
  @if(session('message'))
    <p style="color:blue">{{ session('message') }}</p>
  @endif
  <a href="{{ route('record.create') }}">追加</a>
  @foreach($records as $record)
    <ul>
        <a href="{{ route('record.edit', $record) }}"><button>更新</button></a>
        <form action="{{ route('record.destroy', $record) }}" method="post">
            @csrf
            @method('delete')
            <button onclick="return confirm('本当に削除しますか');">削除</button>

        </form>
        <li>体調: {{ message($record->physical_condition) }}</li>
        <li>気分: {{ message($record->mood_state) }}</li>
        <li>肩こり: {{ message($record->back_pain) }}</li>
        <li>目の疲れ: {{ message($record->eyestrain) }}</li>
        <li>頭痛: {{ message($record->headache) }}</li>
        <li>日時: {{ date('Y年n月j日', strtotime($record->recording_date)) }}</li>
    </ul>
  @endforeach
</body>
</html>
