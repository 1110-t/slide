<form action="/admin/register" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <input type="text" name="title">
  <input type="text" name="description">
  <input type="file" name="src">
  <button type="submit">登録</button>
</form>
