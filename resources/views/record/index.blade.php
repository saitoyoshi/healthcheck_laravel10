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
  @foreach($records as $record)
    <ul>
        <li>体調: {{ $record->physical_condition }}</li>
        <li>気分: {{ $record->mood_state }}</li>
        <li>肩こり: {{ $record->back_pain }}</li>
        <li>目の疲れ: {{ $record->eyestrain }}</li>
        <li>頭痛: {{ $record->headache }}</li>
        <li>日時: {{ $record->recording_date }}</li>
    </ul>
  @endforeach
</body>
</html>
