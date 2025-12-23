@extends('layouts.app')

@section('title', 'Careers')

@section('content')


<div class="careers-banner d-flex align-items-center">
    <div class="banner-text text-left px-3 px-md-5">
        <h1 class="banner-title mb-3">Contact</h1>
        
    </div>
</div>


<section class="py-5 contact-section">
  <div class="container">
    <div class="row">

      <!-- LEFT COLUMN : COMPANY INFO -->
      <div class="col-lg-6 mb-4 mb-lg-0">

        <h5 class="section-title">RELIANCE SPINNING MILLS LIMITED</h5>

        <p class="info-text mt-4">
          <strong>Registered Office (Corporate)</strong><br>
          Ward No. 28, Kathmandu Metropolitan City,<br>
          Ameer Bhawan, 4th Floor<br>
          Kamaladi, Ganeshtan, Kathmandu, Nepal<br>
          P.O. Box No.:454<br>
          Tel: +977 9846245555<br>
          E-mail: info@reliancespinningnepal.com
        </p>

        <h6 class="section-subtitle mt-5">FACTORY UNIT A</h6>
        <p class="info-text">
          Address: Bhaktapur Metropolitan City-12, Kalanki, Asan Nepal
        </p>

        <h6 class="section-subtitle mt-4">FACTORY UNIT B</h6>
        <p class="info-text">
          Address: Duhab Metropolitan-3, Hetauda, Nepal
        </p>

        <h6 class="section-subtitle mt-4">COMPANY SECRETARY</h6>
        <p class="info-text">
          Mr. Ankit Acharya </P>
          <p class="info-text">Tel: +977-984624555</p>
 <p class="info-text">E-mail: bandipurs18@gmail.com</p>

        </p>

      </div>

      <!-- RIGHT COLUMN : CONTACT FORM -->
      <div class="col-lg-6">

        <form>
          <div class="form-group mb-4">
            <label class="form-label">Name</label>
            <input type="text" class="form-control custom-input">
          </div>

          <div class="form-group mb-4">
            <label class="form-label">Email</label>
            <input type="email" class="form-control custom-input">
          </div>

          <div class="form-group mb-4">
            <label class="form-label">Message</label>
            <textarea rows="6" class="form-control custom-input"></textarea>
          </div>

          <button type="submit" class="btn btn-warning submit-btn px-4 py-2">
            Submit
          </button>
        </form>

      </div>

    </div>
  </div>


  <footer class="py-4 bg-white">
  <div class="container text-center">
    <p class="mb-0 footer-text">
      Copyrights © Reliance Spinning Mills Ltd. All Rights reserved.
    </p>
  </div>
</footer>
</section>


@endsection

<style>
/* Top Banner */
.careers-banner {
    background-image: url('https://images.unsplash.com/photo-1610891015188-5369212db097?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZmFjdG9yeXxlbnwwfHwwfHx8MA%3D%3D'); 
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

.contact-section {
  background-color: #fff;
}

.section-title {
  color: #7a1f1f;
  letter-spacing: 1px;
  font-weight: 600;
}

.section-subtitle {
  color: #7a1f1f;
  letter-spacing: 1px;
  font-weight: 600;
}

.info-text {
  color: #6c6c6c;
  font-size: 15px;
  line-height: 1.8;
}

.form-label {
  color: #7a1f1f;
  font-size: 14px;
  letter-spacing: 1px;
}

.custom-input {
  background-color: #f3f3f3;
  border: none;
  border-radius: 0;
  height: 48px;
}

textarea.custom-input {
  height: auto;
}

.custom-input:focus {
  box-shadow: none;
  background-color: #f0f0f0;
}

.submit-btn {
  background-color: #f9a23b;
  color: #fff;
  border-radius: 0;
  font-weight: 500;
}

.submit-btn:hover {
  background-color: #e68f2f;
  color: #fff;
}
.footer-text {
  font-size: 14px;
  letter-spacing: 1px;
  color: #b5b5b5; /* soft gray like image */
}



</style>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
