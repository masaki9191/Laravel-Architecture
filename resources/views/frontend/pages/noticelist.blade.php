@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/noticelist.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="notice-top">
        <div class="notice-top-bg"></div>
        <div class="notice-title">
            <div class="notice-title-jp gothic font-40 color-2a">お知らせ一覧</div>
            <div class="notice-title-en gothic font-30 color-cb">Notice List</div>
        </div>
        <div class="notice-top-right">
            <img src="{{asset('frontend/img/notice/notice-top.png')}}" alt="">
        </div>
    </section>

    <section class="notice-content">
        <div class="notice-show-set">
            <div class="notice-show-category">
                <div class="notice-show-category-title gothic font-18 color-2a">カテゴリー：</div>

                <div class="notice-show-category-1">
                    <a class="notice-show-category-1-btn gothic font-14 text-decoration-unset {{ session('blog.type')=='0' ? 'active' : ''}}" href="{{route('blog.list',['type' => '0'])}}">お知らせ</a>
                </div>
                <div class="notice-show-category-1">
                    <a class="notice-show-category-1-btn gothic font-14 text-decoration-unset {{ session('blog.type')=='1' ? 'active' : ''}}" href="{{route('blog.list',['type' => '1'])}}">ニュースリリース</a>
                </div>
            </div>
            <div class="notice-show-year">
                <div class="notice-show-year-1">
                    <div class="notice-sy-title gothic font-18 color-2a">年号：</div>
                    <div class="notice-sy-sel font-14">
                        <select name="year" id="year" onchange="yearChFn()">
                            <?php
                                $year = date("Y");
                            ?>
                            @for($i=$year; $i>$year-5; $i--)
                                <option value="{{$i}}" {{ session("blog.year") == $i ? "selected" : "" }}>{{$i}}年</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="notice-show-year-2">
                    <div class="notice-show-year-title gothic font-18 color-2a">Show:</div>
                    <div class="notice-show-year-sel">
                        <select name="count" id="count" onchange="countChFn()">
                            <option value="5" {{ session("blog.count") == 5 ? "selected" : "" }}>5</option>
                            <option value="10" {{ session("blog.count") == 10 ? "selected" : "" }}>10</option>
                            <option value="50" {{ session("blog.count") == 50 ? "selected" : "" }}>50</option>
                            <option value="100" {{ session("blog.count") == 100 ? "selected" : "" }}>100</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="notice-sh-content">
            <div class="notice-content-title font-18 color-57">{{ session("blog.year")}}年度</div>
            @forelse($blogs as $blog)
            <a class="notice-content-show text-decoration-unset" href="{{route('blog.detail',$blog->id)}}">
                <div class="notice-content-show-left font-14 color-8b">{{ date('Y', strtotime($blog->created_at )) }}年{{ date('m', strtotime($blog->created_at )) }}月{{ date('d', strtotime($blog->created_at )) }}日</div>
                <div class="notice-content-show-right font-16 color-2a">{{ $blog->title }}</div>
            </a>
            @empty
            資料が存在しません。
            @endforelse
        </div>
    </section>
@endsection
@section('js')
<script>
    function countChFn(){
        window.location.href="{{url('/blog/list/?count=')}}" + document.getElementById('count').value;
    }
    function yearChFn(){
        window.location.href="{{url('/blog/list/?year=')}}" + document.getElementById('year').value;
    }
</script>
@endsection
