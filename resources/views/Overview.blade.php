@extends('layouts.app')

@section('title', 'Careers')

@section('content') 
 
 
 
 <div class="container">
        <h1 class="main-title">RELIANCE SPINNING MILLS LTD. UNIT B</h1>
        
        <div class="section-content">
            <!-- Left Section (Image) -->
            <div class="image-container col-md-6">
                <img src="https://reliancespinningnepal.com/wp-content/uploads/2024/01/DSC_0043_B.jpg" alt="Reliance Spinning Mills">
            </div>
            
            <!-- Right Section (Text) -->
            <div class="text-container col-md-6">
                <p>
                    Located in Duhabi (Sunsari district, Nepal), Reliance Spinning Mills Ltd. Unit B is equipped with hi-tech state-of-the-art machinery from Himson Internationals and Aalidhra Textool.
                </p>
                <p>
                    A Research & Development division, which operates from a modern quality control cell, ensures quality standards. Our R&D laboratory has the latest equipment to test the yarn as per the international quality standards.
                </p>
                <p>
                    Our installed production capacity of 2880 MT.
                </p>
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

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .main-title {
            color: #6f42c1;
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }
        .section-content {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
        }
        .text-container {
            flex: 1;
            padding-left: 20px;
        }
        .text-container p {
            font-size: 1.1rem;
        }
        .text-container .small-text {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .footer-text {
  font-size: 14px;
  letter-spacing: 1px;
  color: #b5b5b5; /* soft gray like image */
}
    </style>