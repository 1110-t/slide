<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  </head>
  <body>
    <div class="container">
      <form class="register m-auto" action="/admin/register" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
          <label for="title" class="form-label">タイトル</label>
          <input id="title" type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
          <label for="caption" class="form-label">キャプション</label>
          <textarea id="caption" type="text" col="10" row="5" name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
          <label for="src" class="form-label">ファイル選択</label>
          <input type="file" name="src" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">登録</button>
      </form>
      <div class="row mt-5">
        @foreach($slides as $slide)
        <div class="col-md-4 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('storage/'.$slide->src)}}">
            <form action="/admin/update" class="card-body" method="post" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input name="id" type="hidden" value="{{$slide->id}}">
              <input name="title" class="card-title" value="{{$slide->title}}">
              <textarea name="description" class="card-text">{{$slide->description}}</textarea>
              <input type="file" name="src" class="form-control">
              <button type="submit" class="btn btn-primary mt-3">更新</button>
            </form>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </body>
</html>
