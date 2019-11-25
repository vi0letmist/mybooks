@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Edit Peminjaman',
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
                    <form method="post" action="{{ route('peminjaman.update', $peminjaman) }}" autocomplete="off"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <h6 class="heading-small text-muted mb-4">{{ __('informasi Peminjaman') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label>{{__("Nama Peminjam")}}</label>
                                    <input type="text" name="nama" class="form-control" value="{{ old('name', auth()->peminjaman()->nama) }}">
                                    @include('alerts.feedback', ['field' => 'nama'])
                                </div>
                                <div class="form-group">
                                    <label>{{__("Nama Buku")}}</label>
                                    <input type="text" name="nama" class="form-control" value="{{ old('name', auth()->peminjaman()->nama) }}">
                                    @include('alerts.feedback', ['field' => 'nama'])
                                </div>
                                
                                <div class="row">
                                    <div class="col-6">
                                    <div class="form-group">
                                        <label>{{__("Tanggal Pinjam")}}</label>
                                        <input type="date" name="tanggalPinjam" class="form-control" value="{{ old('name', auth()->peminjaman()->nama) }}">
                                        @include('alerts.feedback', ['field' => 'tanggalPinjam'])
                                    </div>
                                    </div>
                                    <div class="col-6">
                                    <div class="form-group">
                                        <label>{{__("Tanggal Kembali")}}</label>
                                        <input type="date" name="tanggalKembali" class="form-control" value="{{ old('name', auth()->peminjaman()->nama) }}">
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
