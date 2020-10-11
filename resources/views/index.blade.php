<a href="/login">ユーザー用のログイン</a>
<form action="logout" method="POST">
  @csrf
  <input type="submit" value="ユーザー用のログアウト">
</form>


<a href="teacher/login">先生用のログイン</a>
<form action="teacher/logout" method="POST">
  @csrf
  <input type="submit" value="先生用のログアウト">
</form>