@extends('layouts.user')

@section('title', 'プロフィールの新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>新規プロフィールを作成</h2>
                <form action="{{ action('User\ProfileController@create') }}" method="post" encrype="multipart/form-data">
                    @if(count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">画像(Image)</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">名前（Name）</label>
                        <div class="col-md-10">
                            <input class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別(Gender)</label>
                        <div class="col-md-10">
                            <input class="form-control" name="gender" value="{{ old('gender') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">生年月日(Birthday)</label>
                        <div class="col-md-10">
                             <input class="form-control" name="birthday" value="{{ old('birthday') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">出身地(NativePlace)</label>
                        <div class="col-md-10">
                            <input class="form-control" name="nativeplace" value="{{ old('nativeplace') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">住所(Address)</label>
                        <div class="col-md-10">
                            <input class="form-control" name="address" value="{{ old('address') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">電話番号(Phone)</label>
                        <div class="col-md-10">
                            <input class="form-control" name="phone" value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メールアドレス(Email)</label>
                        <div class="col-md-10">
                            <input class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="作成">
                </form>
            </div>
        </div>
    </div>
@endsection
