@extends('layouts.app', [
  'namePage' => 'Rak',
  'class' => 'sidebar-mini',
  'activePage' => 'rak',
  'activeNav' => '',
])

@section('content')
<div class="panel-header">
    <div class="header text-center">
      <h2 class="title">Rak</h2>
      <p class="category">list</p>
      
    </div>
  </div>
  <div class="content">
    <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" style="margin-bottom:1em;">
        
        <div class="dropdown pull-left">
            <button type="button" class="btn btn-primary text-white btn-round dropdown-toggle pull-left" data-toggle="dropdown">
                <a>Kategori</a>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Umum</a>
                <a class="dropdown-item" href="#">Filsafat dan Psikologi</a>
                <a class="dropdown-item" href="#">Agama</a>
                <a class="dropdown-item" href="#">Sosial</a>
                <a class="dropdown-item" href="#">Bahasa</a>
                <a class="dropdown-item" href="#">Sains dan Matematika</a>
                <a class="dropdown-item" href="#">Teknologi</a>
                <a class="dropdown-item" href="#">Seni dan Kreasi</a>
                <a class="dropdown-item" href="#">Literatur dan Sastra</a>
                <a class="dropdown-item" href="#">Sejarah dan Geografi</a>
              </div>
            </div>
            <a class="btn btn-primary btn-round text-white pull-right" href="{{ route('rak.create') }}">{{ __('Add Book') }}</a> 
            <div class="col-12 mt-2">
              @include('alerts.success')
              @include('alerts.errors')
            </div>
            <div class="card-body" style="margin-top:2em;">

            </div>

        </div>
      </div>

    </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header" style="text-align:right;margin-bottom:-2.5em;">
            <!-- <h4 class="card-title">Notifications Style</h4> -->
            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Lihat</a>
                <a class="dropdown-item" href="#">Edit</a>
                <a class="dropdown-item text-danger" href="#">Remove Data</a>
              </div>
            </div>
          </div>
          <div class="card-body" style="text-align:center;">
          <img src="/assets/img/tuhan-maha-asik.jpg">
          <h5>nama buku</h5>
            <p>nama pengarang</p>  
        </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
        <div class="card-header" style="text-align:right;margin-bottom:-2.5em;">
            <!-- <h4 class="card-title">Notifications Style</h4> -->
            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Lihat</a>
                <a class="dropdown-item" href="#">Edit</a>
                <a class="dropdown-item text-danger" href="#">Remove Data</a>
              </div>
            </div>
          </div>
          <div class="card-body" style="text-align:center;">
          <img src="/assets/img/kalkulus.jpg">
          <h5>nama buku</h5>
            <p>nama pengarang</p>  
        </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <div class="card-header" style="text-align:right;margin-bottom:-2.5em;">
            <!-- <h4 class="card-title">Notifications Style</h4> -->
            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Lihat</a>
                <a class="dropdown-item" href="#">Edit</a>
                <a class="dropdown-item text-danger" href="#">Remove Data</a>
              </div>
            </div>
          </div>
          <div class="card-body" style="text-align:center;">
            <img src="/assets/img/senandung-talijiwo.jpg">
            <h5>nama buku</h5>
            <p>nama pengarang</p>

          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
        <div class="card-header" style="text-align:right;margin-bottom:-2.5em;">
            <!-- <h4 class="card-title">Notifications Style</h4> -->
            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Lihat</a>
                <a class="dropdown-item" href="#">Edit</a>
                <a class="dropdown-item text-danger" href="#">Remove Data</a>
              </div>
            </div>
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