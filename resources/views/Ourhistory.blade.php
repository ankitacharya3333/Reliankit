@extends('layouts.app')

@section('title', 'Products')

@section('content')

<section class="our-history py-5 bg-light">
    <div class="container">
        <!-- Section Title -->
        <h2 class="text-center mb-4 history-title">Our History</h2>
        
        <!-- History Text -->
        <p class="history-text mx-auto" style="max-width: 900px;">
            Reliance Spinning Mills was founded in the early 1990s with a vision to become one of Nepal’s leading textile manufacturers. Starting as a modest operation with a handful of machines, the company focused on producing high-quality yarn for local markets. Over the years, through dedication, innovation, and strategic investments in technology, Reliance Spinning Mills expanded its production capabilities, incorporating advanced machinery and sustainable practices.
        </p>
        <p class="history-text mx-auto" style="max-width: 900px;">
            The company has always placed a strong emphasis on quality, which has helped it build long-lasting relationships with domestic and international clients. Reliance Spinning Mills also prioritizes employee growth, creating opportunities for skill development and fostering a collaborative work culture. Throughout its history, the company has successfully navigated industry challenges, adapting to market trends and technological advancements while maintaining its core values of integrity, excellence, and social responsibility.
        </p>
        <p class="history-text mx-auto" style="max-width: 900px;">
            Today, Reliance Spinning Mills stands as a symbol of quality, innovation, and commitment in Nepal’s textile industry. Its journey from a small spinning operation to a leading manufacturer reflects not only its business success but also its dedication to contributing positively to the community, the workforce, and the overall growth of Nepal’s industrial sector.
        </p>
    </div>
</section>

<footer class="py-4 bg-white">
  <div class="container text-center">
    <p class="mb-0 footer-text">
      Copyrights © Reliance Spinning Mills Ltd. All Rights reserved.
    </p>
  </div>
</footer>

@endsection

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

<style>
.our-history {
    font-family: 'Roboto', sans-serif;
}

.history-title {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    font-weight: 700;
    color: #4e2a84; /* Dark purple */
}

.history-text {
    font-size: 1.15rem;
    line-height: 1.8;
    color: #333;
    margin-bottom: 1.5rem;
    text-align: justify;
}

.footer-text {
  font-size: 14px;
  letter-spacing: 1px;
  color: #b5b5b5; /* soft gray like image */
}
</style>