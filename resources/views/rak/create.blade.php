@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Create Book',
    'activePage' => 'rak',
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
                                <h3 class="mb-0">{{ __('Rak Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('rak.index') }}" class="btn btn-primary btn-round">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('rak.store') }}" autocomplete="off"
                            enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Book information') }}</h6>
                            <div class="pl-lg-4">
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
                                <div class="form-group{{ $errors->has('tahunTerbit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tahunTerbit">{{ __('Tahun Terbit') }}</label>
                                    <input type="text" name="tahunTerbit" id="input-tahunTerbit" class="form-control{{ $errors->has('tahunTerbit') ? ' is-invalid' : '' }}" placeholder="{{ __('Tahun Terbit') }}" value="{{ old('tahunTerbit') }}" required>

                                    @include('alerts.feedback', ['field' => 'tahunTerbit'])
                                </div>
                                <div class="form-group{{ $errors->has('deskripsi') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-deskripsi">{{ __('Deskripsi') }}</label>
                                    <input type="text" name="deskripsi" id="input-deskripsi" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" placeholder="{{ __('Deskripsi') }}" value="{{ old('deskripsi') }}" required>

                                    @include('alerts.feedback', ['field' => 'deskripsi'])
                                </div>
                                <div class="form-group{{ $errors->has('gambar') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-gambar">{{ __('Gambar') }}</label><br/>
                                    <div class="btn btn-primary btn-sm float-left">
                                    <span>choose file</span>
                                    <input type="file" name="gambar" id="input-gambar" class="custom-file-control{{ $errors->has('gambar') ? ' is-invalid' : '' }}" placeholder="{{ __('Gambar') }}" value="{{ old('gambar') }}" required>
                                    </div>
                                    @include('alerts.feedback', ['field' => 'gambar'])
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