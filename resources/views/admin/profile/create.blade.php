@extends('layouts.admin')

@section('title', '先生のプロフィールの新規作成')

@section('content')
    <div class="container">
        
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>先生の新規プロフィールを作成</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" encrype="multipart/form-data">
                    @if(count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <!--プロフィールページ左側-->
                    <div class="page-container">
                        
                        <div class="page-left">
                            <div class="page-left-upper">
                                <div class="form-group row">
                                    <label class="col-md-2">画像(Image)</label>
                                    <div class="col-md-10">
                                        <input type="file" class="form-control-file" name="image">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2">名前(Name）</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="name" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2">等級(Class)</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="class" value="{{ old('class') }}">
                                    </div>
                                </div>
                                <!--講師歴の項目入れる？？-->
                                <!--<div class="form-group row">-->
                                <!--    <label class="col-md-2">講師歴(Experience)</label>-->
                                <!--    <div class="col-md-10">-->
                                <!--        <input class="form-control" name="experience" value="{{ old('ecperience') }}">-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                            <div class="page-left-lower">
                                <div class="form-group row">
                                    <label class="col-md-2">身長(Height)</label>
                                    <div class="col-md-10">
                                         <input class="form-control" name="height" value="{{ old('height') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2">専攻(Section)</label>
                                    <div class="col-md-10">
                                         <input class="form-control" name="section" value="{{ old('section') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2">性別(Gender)</label>
                                    <div class="col-md-10">
                                         <input class="form-control" name="gender" value="{{ old('gender') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2">出身地(NativePlace)</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="nativeplace" value="{{ old('nativeplace') }}">
                                    </div>
                                </div>
                            </div>
                            <!--プロフィールページ右側-->
                            <div class="page-right">
                                <div class="form-group row">
                                    <label class="col-md-2">好きな種目(FavoriteDance)</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="favorite_dance" value="{{ old('favorite_dance') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2">特技(Skill)</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="skill" value="{{ old('skill') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2">好きな食べ物(FavoriteFood)</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="favorite_food" value="{{ old('favorite_food') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2">メッセージ(Message)</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" name="message" value="{{ old('message') }}"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="作成">
                </form>
            </div>
        </div>
    </div>
@endsection
