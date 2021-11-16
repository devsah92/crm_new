@extends('template.main')
@section('main-container')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

        <!-- form strat -->
        <form class="row g-3">
    <div class="col-12">
      <label for="inputNanme4" class="form-label">Your Name*</label>
      <input type="text" class="form-control" id="inputNanme4">
    </div>
    <div class="col-12">
      <label for="inputEmail4" class="form-label">Email*</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-12">
      <label for="inputPassword4" class="form-label">Password*</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Address*</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>  <!-- form close -->


    </div><!-- End Right side columns -->

  </div>
</section>

</main><!-- End #main -->
@endsection
