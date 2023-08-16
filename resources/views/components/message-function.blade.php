
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
