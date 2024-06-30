@extends('layouts.sidebar')

@section('content')
<div class="vh-100 d-flex" style="align-items:center; justify-content:center;">
  <div class="w-50 m-auto h-75">
    <p><span>{{$date}}</span><span class="ml-3">{{$part}}部</span></p>
    <div class="reserve_detail_content">
      <table class="">
        <tr class="reserve_users_th">
          <th class="reserve_detail_column">ID</th>
          <th class="reserve_detail_column">名前</th>
          <th class="reserve_detail_column">場所</th>
        </tr>
        @foreach ($reservePersons as $reservePerson)
              @foreach ($reservePerson->users as $user)
        <tr class="reserve_detail_users">
          <td class="reserve_detail_column">
            <ul>
                <li>{{$user->id}}</li>
            </ul>
          </td>
          <td class="reserve_detail_column">
            <ul>
            <li>{{$user->over_name}}{{$user->under_name}}</li>
            </ul>
          </td>
          <td class="reserve_detail_column">
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