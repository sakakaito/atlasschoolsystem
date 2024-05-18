@extends('layouts.sidebar')

@section('content')
<div class="vh-100 pt-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-5 pb-5" style="border-radius:5px; background:#FFF;">
    <div class="w-75 m-auto border" style="border-radius:5px;">

      <p class="text-center">{{ $calendar->getTitle() }}</p>
      <div class="">
        {!! $calendar->render() !!}
      </div>
    </div>
    <div class="text-right w-75 m-auto">
      <input type="submit" class="btn btn-primary" value="予約する" form="reserveParts">
    </div>
  </div>
</div>
<!-- モーダル表示 -->
<div class="modal js-modal">
  <div class="modal__bg js-modal-close">
    <div class="modal__content">
      <div class="modal-inner-reserve-day">
        <p>予約日：
          <span>
          <input type="text" name="" placeholder="" class="w-100" readonly>
          </span>
        </p>
      </div>
      <div class="modal-inner-reserve-part">
        <input type="" name="" placeholder="" class="w-100" readonly>
      </div>

      
      <input type="submit" class="btn btn-primary" value="閉じる">
      <input type="button" class="btn btn-danger" value="キャンセル">

    </div>
  </div>
</div>
@endsection