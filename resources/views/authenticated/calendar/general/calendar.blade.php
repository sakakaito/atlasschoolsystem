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
        <span>予約日：</span>
        <p>
          <!-- <span>
          <input type="text" name="" placeholder="" class="w-100" readonly>
          </span> -->
        </p>
      </div>
      <div class="modal-inner-reserve-part">
        <span>時間：</span>
        <p>
        <!-- <input type="" name="" placeholder="" class="w-100" readonly> -->
        </p>
      </div>
        <p>上記の予約をキャンセルしてもよろしいでしょうか？</p>
      <input type="hidden" class="reserve-day-hidden" value="" form="deleteParts">
      <input type="hidden" class="reserve-part-hidden" value="" form="deleteParts">
      <button class="btn btn-primary">閉じる</button>
      <input type="submit" class="btn btn-danger" value="キャンセル" form="deleteParts">

    </div>
  </div>
</div>
@endsection