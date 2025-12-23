@extends('layouts.app')

@section('title', 'Products')

@section('content')

<div class="careers-banner d-flex align-items-center">
    <div class="banner-text text-left px-3 px-md-5">
        
        
    </div>
</div>


<div class="careers-banners d-flex align-items-center">
    <div class="banner-texts text-left px-3 px-md-5">
        <h1 class="banner-titles mb-3">Interested can apply</h1>
        <p class="banner-subtitles">
           Dear Customers, We have issued Ipo at 12/22/2025 , you can apply it till 12/31/2025.
           
        </p>

         <h5 class="banner-titles mb-3">
    <a href="https://meroshare.cdsc.com.np/" class="apply-link">Apply here</a>
</h5>

    </div>
</div>

<footer class="py-4 bg-white">
  <div class="container text-center">
    <p class="mb-0 footer-text">
      Copyrights © Reliance Spinning Mills Ltd. All Rights reserved.
    </p>
  </div>
</footer>

@endsection
<style>
/* Top Banner */
.careers-banner {
    background-image: url('https://kanoonforall.com/wp-content/uploads/2021/01/fimg-notice1.jpg'); 
    background-size: cover;
    background-position: center;
    height: 400px;
    position: relative;
    display: flex;
    align-items: center;
    color: white;
}

.careers-banner::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(30, 24, 74, 0.6); /* semi-transparent overlay */
    z-index: 1;
}

.banner-text {
    position: relative;
    z-index: 2;
    max-width: 700px;
}

/* Banner Text Styles */
.banner-title {
    font-family: 'Playfair Display', serif;
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 20px;
}

.banner-subtitle {
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    line-height: 1.6;
}

.footer-text {
  font-size: 14px;
  letter-spacing: 1px;
  color: #b5b5b5; /* soft gray like image */
}
</style>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

