@extends('layouts.app', [
  'namePage' => 'Rak',
  'class' => 'sidebar-mini',
  'activePage' => 'rak',
  'activeNav' => '',
])

@section('content')
<div class="panel-header">
    <div class="header text-center">
        <h2 class="title">{{$active->nama}}</h2>
        <a class="btn btn-primary btn-round text-white" href="{{ route('rak.create') }}">{{ __('Add Shelf') }}</a>
    </div>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="margin-bottom:1em;">
                    <div class="dropdown pull-left">
                        <button type="button" class="btn btn-primary text-white btn-round dropdown-toggle pull-left" data-toggle="dropdown">
                            <a>Shelf</a>
                        </button>
                        <div class="dropdown-menu">
                        @foreach ($rak as $x)
                            <a class="dropdown-item" href="/rak/{{$x->id}}">{{$x->nama}}</a>
                        @endforeach
                        </div>
                    </div>
                    <a class="btn btn-primary btn-round text-white pull-right" href="{{ route('book.create') }}">{{ __('Add Book') }}</a>
                    <div class="col-12 mt-2">
                    @include('alerts.success')
                    @include('alerts.errors')
                    </div>
                    <div class="card-body" style="margin-top:2em;">
                    </div>
                </div>
            </div>
        </div>
        @foreach ($buku as $b)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header" style="text-align:right;margin-top:-1em;margin-bottom:-1em;">
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
                    <h5>{{$b->judul}}</h5>
                    <p>{{$b->penulis}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
