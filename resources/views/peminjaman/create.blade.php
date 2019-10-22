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
                        <form method="post" action="{{ route('peminjaman.store') }}" autocomplete="off"
                            enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('informasi Peminjaman') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nama Peminjam') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama Peminjam') }}" value="{{ old('peminjam') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>
                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-title">{{ __('Nama Buku') }}</label>
                                    <input type="text" name="title" id="input-title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama Buku') }}" value="{{ old('title') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'title'])
                                </div>
                                <div class="form-group{{ $errors->has('author') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-author">{{ __('Nama Pengarang') }}</label>
                                    <input type="text" name="author" id="input-author" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama Pengarang') }}" value="{{ old('author') }}" required>

                                    @include('alerts.feedback', ['field' => 'author'])
                                </div>
                                <div class="form-group{{ $errors->has('noHP') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-noHP">{{ __('Nomer Telefon') }}</label>
                                    <input type="text" name="noHP" id="input-noHP" class="form-control{{ $errors->has('noHP') ? ' is-invalid' : '' }}" placeholder="{{ __('Nomer Telefon') }}" value="{{ old('noHP') }}" required>

                                    @include('alerts.feedback', ['field' => 'noHP'])
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