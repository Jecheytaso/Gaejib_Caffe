<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> <!-- Pengaturan responsif agar tampilan sesuai di berbagai perangkat -->
        <meta name="description" content="" />
        <meta name="author" content="" /> <!-- Meta informasi penulis halaman -->
        <title>Gaejib Café</title> 
        <link rel="icon" type="image/x-icon" href="{{asset('image/gaejib.jpg')}}" /> <!-- Ikon favorit yang ditampilkan di tab browser sebagai ikon logo -->
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" /> <!-- Memuat font Raleway dari Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" /> <!-- Memuat font Lora dari Google Fonts -->
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" /> <!-- Memuat stylesheet utama untuk tema Bootstrap -->
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Dog Cafe, Rooftop Dog Park, Dog Pool & Day Care</span>
                <span class="site-heading-lower">Gaejib Café</span>
            </h1> <!-- Header utama dengan judul situs -->
        </header>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.blade.php">Gaejib Café</a> <!-- Brand name untuk layar kecil -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> <!-- Tombol toggler untuk navigasi responsif -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{asset('about')}}">About</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{asset('booking')}}">Booking</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{asset('order')}}">Food Order</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{asset ('login')}}" data-bs-toggle="modal" data-bs-target="#signupModal">Login</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end code navigation -->

<!-- code list checkout -->
<div class="container checkout-container">
    <h2 class="text-center">Checkout</h2>
    <div class="ordered-items mb-4">
        <h5>Ordered Items (1)</h5>
        <div class="item d-flex justify-content-between align-items-center">
            <div>
                <p class="m-0"><strong>BROWNIES</strong></p>
                <p class="m-0 text-muted">No notes yet</p>
            </div>
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-secondary btn-sm">-</button>
                <span class="mx-2">1</span>
                <button class="btn btn-outline-secondary btn-sm">+</button>
            </div>
            <p class="m-0">Rp11.818</p>
        </div>
        <div class="mt-3">
            <a href="#" class="btn btn-outline-secondary btn-sm">+ Add Item</a>
        </div>
    </div>

    <div class="payment-details mb-4">
        <h5>Payment Details</h5>
        <div class="d-flex justify-content-between">
            <span>Subtotal (1 menu)</span>
            <span>Rp11.818</span>
        </div>
        <div class="d-flex justify-content-between">
            <span>Rounding</span>
            <span>Rp0,2</span>
        </div>
        <div class="d-flex justify-content-between">
            <span>Other fees</span>
            <span>Rp1.181,8</span>
        </div>
        <div class="d-flex justify-content-between font-weight-bold">
            <span>Total</span>
            <span>Rp13.000</span>
        </div>
    </div>

    <div class="total-payment text-center mb-4">
        <h4>Total Payment</h4>
        <h3>Rp13.000</h3>
    </div>

    <div class="text-center">
        <button class="btn btn-primary">Payment</button>
    </div>
{{-- </div>btn btn-primary btn-lg --}}

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
