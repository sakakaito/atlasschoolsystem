@extends('layouts.sidebar')

@section('content')
<div class="board_area w-100 border m-auto d-flex">
  <div class="post_view w-75 mt-5">
    <!-- <p class="w-75 m-auto">投稿一覧</p> -->
    @foreach($posts as $post)
    <div class="post_area border w-75 m-auto p-3">
      <div>
        <p><span>{{ $post->user->over_name }}</span><span class="ml-3">{{ $post->user->under_name }}</span>さん</p>
        <p class="post_title"><a href="{{ route('post.detail', ['id' => $post->id]) }}">{{ $post->post_title }}</a></p>
        @foreach ($post->subcategories as $subcategory)
         <button type="submit" class="sub_category_btn">{{$subcategory->sub_category}}</button>
        @endforeach
      </div>
      <div class="post_bottom_area d-flex">
        <div class="d-flex post_status">
          <div class="mr-5">
            <i class="fa fa-comment"></i><span class="">{{$post_comment->commentCounts($post->id)->count()}}</span>
          </div>
          <div>
            @if(Auth::user()->is_Like($post->id))
            <p class="m-0"><i class="fas fa-heart un_like_btn" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }}">{{$like->likeCounts($post->id)}}</span></p>
            @else
            <p class="m-0"><i class="fas fa-heart like_btn" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }}">{{$like->likeCounts($post->id)}}</span></p>
            @endif
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="other_area w-25">
    <div class="m-4">
      <div class=""><a href="{{ route('post.input') }}"><button class="post_button">投稿</button></a></div>
      <div class="keyword_content">
        <input type="text" placeholder="キーワードを検索" name="keyword" form="postSearchRequest">
        <input type="submit" value="検索" form="postSearchRequest">
      </div>
      <div class="like_my_content">
        <input type="submit" name="like_posts" class="category_like_btn" value="いいねした投稿" form="postSearchRequest">
        <input type="submit" name="my_posts" class="category_my_btn" value="自分の投稿" form="postSearchRequest">
      </div>
      <div>
        <p class="category_search">カテゴリー検索</p>
        @foreach($categories as $category)
        <ul class="main_categories" category_id="{{ $category->id }}">
          <li class="toggle_btn"><span>{{ $category->main_category }}</span>
            <span class="dli-chevron-down"></span>
          </li>
        @foreach($subcategories as $subcategory)
        @if($category->id===$subcategory->main_category_id)
        <li class="sub_categories" subcategory_id="{{$subcategory->id}}">
        <input type="submit" name="category_word" class="category_btn" value="{{$subcategory->sub_category}}" form="postSearchRequest">
        <!-- <span>{{$subcategory->sub_category}}</span> -->
        </li>
        @endif
        @endforeach
        </ul>
        @endforeach

    </div>
  </div>
  <form action="{{ route('post.show') }}" method="get" id="postSearchRequest"></form>
</div>
@endsection