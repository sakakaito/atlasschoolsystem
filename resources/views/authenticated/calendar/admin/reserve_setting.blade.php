@extends('layouts.sidebar')
@section('content')
<div class="w-75 d-flex school_reserve_confirmation" style="align-items:center; justify-content:center;">
  <div class="w-100  border s_r_c_content">
  <p>{{ $calendar->getTitle() }}</p>
  <p>{!! $calendar->render() !!}</p>
    <div class="m-auto text-right">
      <input type="submit" class="btn btn-primary" value="登録" form="reserveSetting" onclick="return confirm('登録してよろしいですか？')">
    </div>
  </div>
</div>
@endsection