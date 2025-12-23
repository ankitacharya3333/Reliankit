@extends('layouts.app')

@section('title', 'Products')

@section('content')

<div class="careers-banner d-flex align-items-center">
    <div class="banner-text text-left px-3 px-md-5">
        <h1 class="banner-title mb-3">Reports</h1>
        
    </div>
</div>


    <div class="container py-5">
        <h1 class="financial-report-title mb-4">Financial Reports</h1>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Title</th>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Audited Financial Statement 2081/82</td>
                        <td><a href="{{ asset('pdfs/product-details.pdf') }}" target="_blank" >
                                View 
                            </a>
                        <td>
                    </tr>
                    <tr>
                        <td>Audited Financial Statement 2080/81</td>
                        <td><a href="{{ asset('pdfs/product-details.pdf') }}" target="_blank" >
                                View 
                            </a>
                        <td>
                    </tr>
                    <tr>
                        <td>Audited Financial Statement 2079/80</td>
                        <td><a href="{{ asset('pdfs/product-details.pdf') }}" target="_blank" >
                                View 
                            </a>
                        <td>
                    </tr>
                    <tr>
                        <td>Audited Financial Statement 2078/79</td>
                       <td><a href="{{ asset('pdfs/product-details.pdf') }}" target="_blank" >
                                View 
                            </a>
                        <td>
                    </tr>
                </tbody>
            </table>
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
        background-image: url('https://img-cdn.inc.com/image/upload/f_webp,q_auto,c_fit/images/panoramic/GettyImages-1465722333_539447_zxah9i.jpg');
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
        z-index: 1;
    }

    .overlay-text {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
        height: 100%;
    }


    .annual-report-text {
        font-family: 'Playfair Display', serif;
        font-size: 48px;
        font-weight: 700;
        color: #FFD700;
        text-align: left;
        margin-left: 50px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }


    .financial-report-title {
        font-family: 'Playfair Display', serif;
        font-size: 36px;
        font-weight: 700;
        color: #3b1f1f;
    }

    .table a {
        text-decoration: none;
        color: #3b1f1f;
        font-weight: 500;
    }

    .table a:hover {
        text-decoration: underline;
        color: #000;
    }

    .careers-banner {
    background-image: url('https://img-cdn.inc.com/image/upload/f_webp,q_auto,c_fit/images/panoramic/GettyImages-1465722333_539447_zxah9i.jpg'); 
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
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
