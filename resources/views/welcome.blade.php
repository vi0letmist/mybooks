@extends('layouts.app', [
    'namePage' => 'Welcome',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'welcome',
    'backgroundImage' => asset('assets') . "/img/b.jpg",
])
<img src="/assets/img/tengah1.svg" id="tengah" alt="tengah">
<img src="/assets/img/kiri.svg" id="left" alt="left">
<img src="/assets/img/right.svg" id="right" alt="right">
<img src="/assets/img/fallstar.svg" id="fall" alt="fall">
<img src="/assets/img/spark.svg" id="spark1" alt="spark">
<img src="/assets/img/spark.svg" id="spark2" alt="spark">
<img src="/assets/img/spark.svg" id="spark3" alt="spark">
<img src="/assets/img/spark.svg" id="spark4" alt="spark">
<img src="/assets/img/spark.svg" id="spark5" alt="spark">
<img src="/assets/img/spark.svg" id="spark6" alt="spark">
<img src="/assets/img/spark.svg" id="spark7" alt="spark">
<img src="/assets/img/spark.svg" id="spark8" alt="spark">
<img src="/assets/img/spark.svg" id="spark9" alt="spark">
<img src="/assets/img/spark.svg" id="spark10" alt="spark">
<img src="/assets/img/spark.svg" id="spark11" alt="spark">
<img src="/assets/img/spark.svg" id="spark12" alt="spark">
<img src="/assets/img/spark.svg" id="spark13" alt="spark">
@section('content')
  <div class="content" style="padding:0">
    <div class="container">
      <div class="col-md-12 ml-auto mr-auto">
          <div class="header bg-gradient-primary py-10 py-lg-2 pt-lg-12">
              <div class="container">
                  <div class="header-body text-center mb-7">
                      <div class="row justify-content-center">
                          <div class="col-lg-12 col-md-9">
                              <h3 class="text-white">{{ __('Welcome to MyBooks App') }}</h3>
                              <p class="text-lead text-light mt-3 mb-0">
                                  @include('alerts.migrations_check')
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-4 ml-auto mr-auto">
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush
