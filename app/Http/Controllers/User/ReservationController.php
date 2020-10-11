<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function index() {
        return 'ユーザー画面トップ。レッスンを予約しましょう！<br>
        <a href="/user/reservation/create">カレンダー</a><br>
        <a href="#">自分の予約を確認する</a><br>
        <a href="#">担当講師から選ぶ</a>';
    }

    public function create() {
        return '  M月D日の予約 (担当指名なし)<br>
        <a href="#">カレンダー</a><br>';
    }
}
