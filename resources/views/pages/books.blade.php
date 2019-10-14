@extends('layouts.app', [
  'namePage' => 'Books',
  'class' => 'sidebar-mini',
  'activePage' => 'books',
])

@section('content')
<div class="panel-header">
    <div class="header text-center">
      <h2 class="title">Books</h2>
      <p class="category">list
        
      </p>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <!-- <h4 class="card-title">Notifications Style</h4> -->
          </div>
          <div class="card-body" style="text-align:center;">
          <img src="/assets/img/tuhan-maha-asik.jpg">
          <h5>nama buku</h5>
            <p>nama pengarang</p>  
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <!-- <h4 class="card-title">Notification states</h4> -->
          </div>
          <div class="card-body" style="text-align:center;">
          <img src="/assets/img/kalkulus.jpg">
          <h5>nama buku</h5>
            <p>nama pengarang</p>  
        </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <!-- <h4 class="card-title">Notification states</h4> -->
          </div>
          <div class="card-body" style="text-align:center;">
            <img src="/assets/img/senandung-talijiwo.jpg">
            <h5>nama buku</h5>
            <p>nama pengarang</p>

          </div>
        </div>
      </div>

    </div>
  </div>
@endsection