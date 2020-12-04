@extends('tema.master')
@section('title', 'About Us')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset
 
('images/about-bg.jpg') }}') no-repeat top center;">
    <div class="container text-center">
      <h1>TENTANG KAMI</h1>
      <p class="lead">BELAJAR TEMPLATE</p>
    </div>
  </header>
  <!-- END : Header -->

@section('content')
  <!-- Main -->
  <body class="intro-header text-white" style="background: url('{{ asset
 
 ('images/about-bg.jpg') }}') no-repeat center center;">
  <section class="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Halaman About Us</h2>
          <p class="lead">DUA MAHASISWA YANG SEDANG BELAJAR FRAMEWORK LARAVEL DAN BOOTSTRAP.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection