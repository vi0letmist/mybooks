@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Create Peminjaman',
    'activePage' => 'peminjaman',
    'activeNav' => '',
])

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Management Peminjaman') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('peminjaman.index') }}" class="btn btn-primary btn-round">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('peminjaman.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('informasi Peminjaman') }}</h6>
                            <div class="pl-lg-4">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                    <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Nama Peminjam') }}</label>
                                        
                                            <select name="nama" class="form-control{{ $errors->has('nama') ? ' has-danger' : '' }}">
                                                @foreach ($peminjam as $p)
                                                    <option class="form-control" value="{{$p->id}}">{{$p->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @include('alerts.feedback', ['field' => 'nama'])
                                    </div>
                                    <div class="col-4" style="margin-top:1em;">
                                    <a href="{{ route('peminjam') }}" class="btn btn-primary btn-round">{{ __('Tambah Peminjam') }}</a>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('buku') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-title">{{ __('Nama Buku') }}</label>
                                    <select name="buku" class="form-control{{ $errors->has('buku') ? ' has-danger' : '' }}">
                                        @foreach ($buku as $b)
                                            <option class="form-control" value="{{$b->id}}">{{$b->judul}}</option>
                                        @endforeach
                                    </select>

                                    @include('alerts.feedback', ['field' => 'buku'])
                                </div>


                                <div class="row">
                                <div class="col-6">
                                <div class="form-group{{ $errors->has('tanggalPinjam') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tanggalPinjam">{{ __('Tanggal Pinjam') }}</label>
                                    <input type="date" name="tanggalPinjam" id="input-tanggalPinjam" class="form-control{{ $errors->has('tanggalPinjam') ? ' is-invalid' : '' }}" placeholder="{{ __('Tanggal Pinjam') }}" value="{{ old('TanggalPinjam') }}" required>

                                    @include('alerts.feedback', ['field' => 'tanggalPinjam'])
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="form-group{{ $errors->has('tanggalKembali') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tanggalKembali">{{ __('Tanggal Kembali') }}</label>
                                    <input type="date" name="tanggalKembali" id="input-tanggalKembali" class="form-control{{ $errors->has('tanggalKembali') ? ' is-invalid' : '' }}" placeholder="{{ __('Tanggal Kembali') }}" value="{{ old('TanggalKembali') }}" required>

                                    @include('alerts.feedback', ['field' => 'tanggalKembali'])
                                </div>
                                </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
