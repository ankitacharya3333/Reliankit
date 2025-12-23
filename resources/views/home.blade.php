@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://picsum.photos/1920/600?1" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/1920/600?2" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/1920/600?3" class="d-block w-100" alt="Slide 3">
        </div>
    </div>
</div>

<section class="about-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h2 class="about-title mb-4">ABOUT THE COMPANY</h2>
                <p>
                    Reliance Spinning Mills Ltd. is a public limited company established in 1994 AD and is the largest
                    spinning mills in Nepal. The company has two factories: Unit A located at Khanar, Sunsari and Unit B
                    located at Duhabi, Sunsari, Nepal. Reliance Spinning is a high-tech spinning plant with both Ring
                    Frame and Vortex machineries from world renowned textile machinery manufacturers such as LMW, Savio,
                    Schlafhorst / Saurer, Reiter, Veejay Lakshmi, Peass, Mylon, Murata & Aaldhra Textool.
                </p>

                <p class="mt-4">
                    The company is a professionally managed, technologically advanced spinning mill engaged in
                    manufacturing of international quality Polyester, Viscose, Acrylic, Cotton and their various
                    blends in grey, dyed, melange yarn & DTY yarns.
                </p>
            </div>
        </div>
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

<style>
    .footer-text {
  font-size: 14px;
  letter-spacing: 1px;
  color: #b5b5b5; /* soft gray like image */
}
</style>
