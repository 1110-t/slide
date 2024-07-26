<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Swiper DEMO</title>

<link rel="stylesheet" href="https://unpkg.com/swiper@8.4.7/swiper-bundle.min.css" />
</head>

<body>
  <!-- Slider main container -->
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      @foreach($slides as $slide)
        <div class="swiper-slide">
          <p class="swiper-slide__title">{{$slide->title}}</p>
          <p class="swiper-slide__description">{{$slide->description}}</p>
          <img class="swiper-slide__img" src="{{asset('storage/'.$slide->src)}}">
        </div>
      @endforeach
    </div>
    <!-- If we need navigation buttons -->
  </div>
<script src="https://unpkg.com/swiper@8.4.7/swiper-bundle.min.js"></script>
<script>
const mySwiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,
  autoplay: { // 自動再生
    delay: 3000, // 1.5秒後に次のスライド
  },
});
</script>
<style>
  body{
    margin:0;
  }
  .swiper{
    max-height:100vh;
    height:100vh;
  }
  .swiper-slide__img{
    max-height: 100%;
    width: 100vw;
    height: 100vh;
    object-fit: contain;
  }
  .swiper-slide__title{
    position: absolute;
    background-color: orange;
    left: min(10%, 200px);
    top: min(10%, 50px);
    font-size: 50px;
    margin: 0;
  }
  .swiper-slide__description{
    position: absolute;
    background-color: orange;
    right: min(10%, 200px);
    bottom: min(10%, 50px);
    font-size: 30px;
    margin: 0;
  }
</style>
</body>

</html>
