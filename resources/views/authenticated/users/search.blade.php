@extends('layouts.sidebar')

@section('content')
<!-- <p>ユーザー検索</p> -->
<div class="search_content w-100 d-flex">
  <div class="reserve_users_area">
    @foreach($users as $user)
    <div class="border one_person">
      <div>
        <span class="one_person_item">ID : </span><span class="one_person_information">{{ $user->id }}</span>
      </div>
      <div><span class="one_person_item">名前 : </span>
        <a href="{{ route('user.profile', ['id' => $user->id]) }}">
          <span>{{ $user->over_name }}</span>
          <span>{{ $user->under_name }}</span>
        </a>
      </div>
      <div>
        <span class="one_person_item">カナ : </span>
        <span>({{ $user->over_name_kana }}</span>
        <span>{{ $user->under_name_kana }})</span>
      </div>
      <div>
        @if($user->sex == 1)
        <span class="one_person_item">性別 : </span><span>男</span>
        @elseif($user->sex == 2)
        <span class="one_person_item">性別 : </span><span>女</span>
        @else
        <span class="one_person_item">性別 : </span><span>その他</span>
        @endif
      </div>
      <div>
        <span class="one_person_item">生年月日 : </span><span>{{ $user->birth_day }}</span>
      </div>
      <div>
        @if($user->role == 1)
        <span class="one_person_item">権限 : </span><span>教師(国語)</span>
        @elseif($user->role == 2)
        <span class="one_person_item">権限 : </span><span>教師(数学)</span>
        @elseif($user->role == 3)
        <span class="one_person_item">権限 : </span><span>講師(英語)</span>
        @else
        <span class="one_person_item">権限 : </span><span>生徒</span>
        @endif
      </div>
      <div>
        @if($user->role == 4)
        <span class="one_person_item">選択科目 :</span>
        @foreach($user -> subjects as $subject)
        <span>{{$subject->subject}}</span>
        @endforeach
        @endif
      </div>
    </div>
    @endforeach
  </div>
  <div class="search_area w-25">
    <p class="search_paragraph">検索</p>
    <div class="">
      <div>
        <input type="text" class="free_word" name="keyword" placeholder="キーワードを検索" form="userSearchRequest">
      </div>
      <div class="search_category">
        <label>カテゴリ</label>
        <select form="userSearchRequest" name="category">
          <option value="name">名前</option>
          <option value="id">社員ID</option>
        </select>
      </div>
      <div class="search_category">
        <label>並び替え</label>
        <select name="updown" form="userSearchRequest">
          <option value="ASC">昇順</option>
          <option value="DESC">降順</option>
        </select>
      </div>
      <div class="">
        <p class="search_conditions"><span>検索条件の追加</span><span class="dli-chevron-down"></span></p>
        <div class="search_conditions_inner">
          <div>
            <label>性別</label>
            <span>男</span><input type="radio" name="sex" value="1" form="userSearchRequest">
            <span>女</span><input type="radio" name="sex" value="2" form="userSearchRequest">
            <span>その他</span><input type="radio" name="sex" value="3" form="userSearchRequest">
          </div>
          <div>
            <label>権限</label>
            <select name="role" form="userSearchRequest" class="engineer">
              <option selected disabled>----</option>
              <option value="1">教師(国語)</option>
              <option value="2">教師(数学)</option>
              <option value="3">教師(英語)</option>
              <option value="4" class="">生徒</option>
            </select>
          </div>
          <div class="selected_engineer">
            <label>選択科目</label>
            <span>国語</span><input type="checkbox" name="subject[]" value="1" form="userSearchRequest">
            <span>数学</span><input type="checkbox" name="subject[]" value="2" form="userSearchRequest">
            <span>英語</span><input type="checkbox" name="subject[]" value="3" form="userSearchRequest">
          </div>
        </div>
      </div>
      <div class="search_reset">
        <div>
          <input type="submit" class="s-r-search-btn" name="search_btn" value="検索" form="userSearchRequest">
        </div>
        <div>
          <input type="reset" class="reset-button" value="リセット" form="userSearchRequest">
        </div>
      </div>
    </div>
    <form action="{{ route('user.show') }}" method="get" id="userSearchRequest"></form>
  </div>
</div>
@endsection
