@extends('layouts.sidebar')

@section('content')
<div class="w-75 school_reserve_confirmation">
  <div class="w-100 s_r_c_content">
    <p>{{ $calendar->getTitle() }}</p>
    <p>{!! $calendar->render() !!}</p>
  </div>
</div>
@endsection