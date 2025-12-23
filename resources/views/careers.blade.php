@extends('layouts.app')

@section('title', 'Careers')

@section('content')

<!-- Top Banner Section -->
<div class="careers-banner d-flex align-items-center">
    <div class="banner-text text-left px-3 px-md-5">
        <h1 class="banner-title mb-3">Come and join us!</h1>
        <p class="banner-subtitle">
            RELIANCE SPINNING MILLS offers rewarding and challenging career opportunities to all motivated professionals 
            as well as those new to the industry. Know what it’s like to be a part of one of the largest companies in Nepal.
        </p>
    </div>
</div>

<!-- Vacancy Section -->
<div class="container vacancy-section">
    <h2 class="vacancy-header">Vacancies</h2>
    <div class="vacancy-line"></div>
    <p class="vacancy-subheader">We have no open positions at the moment.</p>
</div>

<!-- Bottom Banner Section -->
<div class="careers-banners d-flex align-items-center">
    <div class="banner-texts text-left px-3 px-md-5">
        <h1 class="banner-titles mb-3">Interested can apply</h1>
        <p class="banner-subtitles">
            If you’re interested to work with us, you may send us your C.V to 

info@relianceankits.com

All the applications are forwarded to Reliance Spinning Mills Head office in Kathmandu.
        </p>
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
    background-image: url('https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_detail/huracan/evo/2022/10_06/over/hura_evo_over_01_m.jpg'); 
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

/* Bottom Banner */
.careers-banners {
    background-image: url('https://www.craftyourcontent.com/wp-content/uploads/2018/05/practice-of-copywork.png'); 
    background-size: cover;
    background-position: center;
    height: 400px;
    position: relative;
    display: flex;
    align-items: center;
    color: white;
}

.careers-banners::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(30, 24, 74, 0.6); /* semi-transparent overlay */
    z-index: 1;
}

.banner-texts {
    position: relative;
    z-index: 2;
    max-width: 700px;
    padding: 20px; /* ensures text is visible */
}

/* Bottom Banner Text Styles */
.banner-titles {
    font-family: 'Playfair Display', serif;
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 20px;
}

.banner-subtitles {
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    line-height: 1.6;
}

/* Vacancy Section */
.vacancy-section {
    text-align: center;
    padding: 50px 0;
}

.vacancy-header {
    font-size: 2.5rem;
    font-weight: bold;
    color: #4e2a84; /* Dark purple color */
}

.vacancy-subheader {
    font-size: 1.2rem;
    color: #4e2a84; /* Dark purple color */
}

.vacancy-line {
    width: 100px;
    height: 2px;
    background-color: #f9a825; /* Gold color */
    margin: 20px auto;
}

.footer-text {
  font-size: 14px;
  letter-spacing: 1px;
  color: #b5b5b5; /* soft gray like image */
}
</style>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
