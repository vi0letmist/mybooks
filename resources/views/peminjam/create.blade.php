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
                                <h3 class="mb-0">{{ __('Tambah Peminjam') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('peminjaman.index') }}" class="btn btn-primary btn-round">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('peminjam_store') }}" autocomplete="off"
                            enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Shelf information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-title">{{ __('Nama') }}</label>
                                    <input type="text" name="nama" id="input-title" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama') }}" value="{{ old('nama') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'nama'])
                                </div>
                                <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-title">{{ __('Alamat') }}</label>
                                        <input type="text" name="alamat" id="input-title" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" placeholder="{{ __('Alamat') }}" value="{{ old('alamat') }}" required autofocus>
                                        @include('alerts.feedback', ['field' => 'alamat'])
                                </div>
                                <div class="form-group{{ $errors->has('noHP') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-title">{{ __('No Telepon') }}</label>
                                        <input type="text" name="noHP" id="input-title" class="form-control{{ $errors->has('noHP') ? ' is-invalid' : '' }}" placeholder="{{ __('No Telepon') }}" value="{{ old('noHP') }}" required autofocus>
                                        @include('alerts.feedback', ['field' => 'noHP'])
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
