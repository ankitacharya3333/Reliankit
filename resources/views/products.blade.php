@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <!-- Banner with overlay text -->
    <div class="product-banner text-warning d-flex align-items-center justify-content-center">
        <div class="overlay-text text-center px-3 px-md-5">
            <h4 class="mb-0">Quality is the key driver in today’s competitive marketplace <br> and Reliance is right there
                with you.</h4>
        </div>
    </div>

    <!-- Product Range Section -->
    <section class="product-range-section py-5">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold" style="color:#4b1f16;">Product range</h2>
            <hr class="mx-auto mb-5" style="width:60px; border-top: 3px solid #4b1f16;">

            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6 mb-4">
                    <p><strong>A. Yarn on Cones - both RW and Dyed</strong></p>
                    <ul class="list-unstyled" style="color:#6f6f6f;">
                        <li><span class="fw-bold">Blend</span></li>
                        <li>100% Polyester</li>
                        <li>100% Viscose</li>
                        <li>Polyester/Viscose</li>
                        <li>Polyester/ Acrylic</li>
                        <li>Polyester/ Nylon</li>
                        <li>Blends as per choice of the customer.</li>
                    </ul>
                    <p><strong>A. 100% Polyester Sewing Thread Yarn</strong></p>
                    <ul class="list-unstyled" style="color:#6f6f6f;">
                        <li><span class="fw-bold">Colour</span></li>
                        <li> Raw White, Optical White and Black</li>
                        <li><span class="fw-bold">Counts</span></li>
                        <li> Ranging from Ne 16/2 to 30/3 (single & multifold)</li>
                    </ul>
                    <p><strong>D. Regular non bulk yarn on cones</strong></p>
                    <ul class="list-unstyled" style="color:#6f6f6f;">
                        <li><span class="fw-bold">Counts</span></li>
                        <li> NM 20 to NM 60 (single & multifold)</li>
                        <li><span class="fw-bold">Use</span></li>
                        <li> Knitting & Weaving mainly for Summer-Wear Sweat Shirts,
                            T-shirts and Socks, Sportswear, Swimming Costumes,
                            Jogging Suits, Track Suits and more.li>
                    </ul>
                </div>

                <!-- Right Column -->
                <div class="col-md-6 mb-4" style="color:#6f6f6f;">
                    <p><strong>Other Fibers</strong> : Modal, Bamboo, Tencel, linen, Allo and Antibacterial</p>
                    <p>Counts Ne 12 to Ne 40 (single & multifold)</p>

                    <p><strong>Effect Yarns</strong>: Injection Slub, Neps, Mechanical Slub, Monline, Multicount,
                        Multitwist, Special fiber Mixes for Visual effects, Half Chenille</p>
                    <p><strong>Various types of Vortex Spinning Yarn.</strong></p>
                    <ul class="list-unstyled" style="color:#6f6f6f;">

                        <li> Blend Polyester
                            Viscose
                            Polyester/Cotton
                            Polyester/Viscose
                            Counts Ranging from NE 20 to 50 (single & multifold)
                            Colour Raw White, Melange and Dyed
                            Use Weaving, Knitting, Hosiery</li>

                    </ul>
                    <p><strong>Various types of Openend Yarn.</strong></p>
                    <ul class="list-unstyled" style="color:#6f6f6f;">

                        <li> The company is professionally managed, technologically advanced spinning mill engaged in
                            manufacturing of international quality Polyester, Viscose, Acrylic, Cotton and their various
                            blends in grey, dyed and mélange yarn including swing threads.k</li>

                    </ul>
                </div>
            </div>
        </div>
    </section>


   <div class="container py-5">

    <!-- Tabs -->
    <ul class="nav justify-content-center mb-5">
        <li class="nav-item">
            <button class="nav-link tab-btn active"
                    data-bs-toggle="tab"
                    data-bs-target="#reliance">
                Reliance Product
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link tab-btn"
                    data-bs-toggle="tab"
                    data-bs-target="#unitb">
                Reliance Unit B Products
            </button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content">

        <!-- Reliance Product -->
        <div class="tab-pane fade show active" id="reliance">
            <div class="row g-5">

                <div class="col-md-6">
                    <div class="d-flex mb-5">
                        <img src="https://reliancespinningnepal.com/wp-content/uploads/2024/01/POLYESTER-VISCOSE-BLENDED.jpg" class="product-img me-4">
                        <div>
                            <div class="product-title">
                                POLYESTER/VISCOSE BLENDED YARN
                            </div>
                            <div class="product-text">
                                Both grey & colored yarn<br>
                                Count from Ne 10s to 40s, both single & double yarn
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <img src="https://reliancespinningnepal.com/wp-content/uploads/2024/01/POLYESTER.jpg" class="product-img me-4">
                        <div>
                            <div class="product-title">
                                ACRYLIC YARN
                            </div>
                            <div class="product-text">
                                Grey & colored yarn<br>
                                Bulky & Non-bulky yarn<br>
                                Count from Ne 10s to 40s
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Reliance Unit B Products -->
        <div class="tab-pane fade" id="unitb">
            <div class="row g-5">

                <div class="col-md-6">
                    <div class="d-flex mb-5">
                        <img src="https://reliancespinningnepal.com/wp-content/uploads/2024/01/PTY-SEMIDULL.jpg" class="product-img me-4">
                        <div>
                            <div class="product-title">
                                UNIT B – POLY/VISCOSE YARN
                            </div>
                            <div class="product-text">
                                Dyed & grey yarn<br>
                                Single & double ply
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <img src="https://reliancespinningnepal.com/wp-content/uploads/2024/01/POLYESTER.jpg" class="product-img me-4">
                        <div>
                            <div class="product-title">
                                UNIT B – SPECIAL ACRYLIC YARN
                            </div>
                            <div class="product-text">
                                High bulk yarn<br>
                                Count Ne 20s to 40s
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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


@endsection

<style>
    .product-banner {
        background-image: url('https://assets.architecturaldigest.in/photos/6008333de6e1f64740188c2e/16:9/w_2560%2Cc_limit/Estella-hi-res-3-1366x768.jpg');
        /* replace with your actual image URL */
        background-size: cover;
        background-position: center;
        height: 200px;
        position: relative;
    }

    .product-banner::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(30, 24, 74, 0.75);
        /* dark blue overlay */
        z-index: 1;
    }


    .overlay-text {
        position: relative;
        z-index: 2;
        font-size: 1.5rem;
        font-weight: 500;
        line-height: 1.3;
    }

//style for image and text below uses//
    .section-title {
            font-size: 22px;
            font-weight: 500;
            color: #6b2c2c;
            cursor: pointer;
        }

        .section-title.active {
            border-bottom: 2px solid #c49a6c;
            display: inline-block;
            padding-bottom: 5px;
        }

        .product-title {
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .product-text {
            color: #777;
            line-height: 1.7;
        }

        .product-img {
            width: 150px;
            height: auto;
            object-fit: cover;
        }

         .tab-btn {
            font-size: 22px;
            font-weight: 500;
            color: #6b2c2c;
            cursor: pointer;
        }

        .tab-btn.active {
            border-bottom: 2px solid #c49a6c;
        }

        .footer-text {
  font-size: 14px;
  letter-spacing: 1px;
  color: #b5b5b5; /* soft gray like image */
}
</style>
