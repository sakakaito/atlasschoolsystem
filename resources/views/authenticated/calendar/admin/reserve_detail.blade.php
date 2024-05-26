@extends('layouts.sidebar')

@section('content')
<div class="vh-100 d-flex" style="align-items:center; justify-content:center;">
  <div class="w-50 m-auto h-75">
    <p><span>{{$date}}</span><span class="ml-3">{{$part}}部</span></p>
    <div class="h-75 border">
      <table class="">
        <tr class="text-center">
          <th class="w-25">ID</th>
          <th class="w-25">名前</th>
          <th class="w-25">場所</th>
        </tr>
        @foreach ($reservePersons as $reservePerson)
              @foreach ($reservePerson->users as $user)
        <tr class="text-center">
          <td class="w-25">
            <ul>
                <li>{{$user->id}}</li>
            </ul>
          </td>
          <td class="w-25">
            <ul>
            <li>{{$user->over_name}}{{$user->under_name}}</li>
            </ul>
          </td>
          <td class="w-25">
            <ul>
              <li>リモート</li>
            </ul>
          </td>
        </tr>
        @endforeach
          @endforeach
      </table>
    </div>
  </div>
</div>
@endsection