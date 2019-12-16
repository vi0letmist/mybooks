@extends('layouts.app', [
    'namePage' => 'Dashboard',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
  <div class="panel-header panel-header-lg" style="margin-bottom:-20em;">
    <!-- <canvas id="bigDashboardChart"></canvas> -->
  </div>
  <div class="content">
    <div class="row">
      <div class="col-lg-3">
        <div class="card card-chart" style="background-color:#eebc5a;">
          <div class="card-header">
            <h5 class="card-category" style="color:#fff;">Book</h5>
            <h4 class="card-title" style="color:#fff;">Books</h4>
            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown" style="color:#fff;">
                <i class="now-ui-icons loader_gear" style="color:#fff;"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item text-danger" href="#">Remove Data</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h1 style="color:#fff;">{{$buku}}</h1>
            <!-- <div class="chart-area">
              <canvas id="lineChartExample"></canvas>
            </div> -->
          </div>
          <div class="card-footer">
            <div class="stats" style="color:#fff;">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card card-chart" style="background-color:#83e53a;">
          <div class="card-header">
            <h5 class="card-category" style="color:#fff;">Borrower</h5>
            <h4 class="card-title" style="color:#fff;">Borrowers</h4>
            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown" style="color:#fff;">
                <i class="now-ui-icons loader_gear" style="color:#fff;"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item text-danger" href="#">Remove Data</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h1 style="color:#fff;">12</h1>
            <!-- <div class="chart-area">
              <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
            </div> -->

          </div>
          <div class="card-footer">
            <div class="stats" style="color:#fff;">
              <i class="now-ui-icons arrows-1_refresh-69" style="color:#fff;"></i> Just Updated
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-category">All Persons List</h5>
            <h4 class="card-title"> Borrow list</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>Name</th>
                  <th>Book</th>
                  <th>Date Borrowed</th>
                  <th class="text-right">Date back</th>
                </thead>
                <tbody>
                  <tr>
                    <td>Dakota Rice</td>
                    <td>Niger</td>
                    <td>ini tanggal</td>
                    <td class="text-right">ini tanggal</td>
                  </tr>
                  <tr>
                    <td> Minerva Hooper</td>
                    <td> Curaçao</td>
                    <td>ini tanggal</td>
                    <td class="text-right">ini tanggal</td>
                  </tr>
                  <tr>
                    <td>Sage Rodriguez</td>
                    <td>Netherlands</td>
                    <td>ini tanggal</td>
                    <td class="text-right">ini tanggal</td>
                  </tr>
                  <tr>
                    <td>Doris Greene</td>
                    <td>Malawi</td>
                    <td>ini tanggal</td>
                    <td class="text-right">ini tanggal</td>
                  </tr>
                  <tr>
                    <td>Mason Porter</td>
                    <td>Chile</td>
                    <td>ini tanggal</td>
                    <td class="text-right">ini tanggal</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
@endpush
