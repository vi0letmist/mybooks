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
                                <h3 class="mb-0">{{ __('Book Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('rak.index') }}" class="btn btn-primary btn-round">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('book.store') }}" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Book information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-title">{{ __('Book Name *  ') }}</label>
                                    <input type="text" name="title" id="input-title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Book Name') }}" value="{{ old('title') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'title'])
                                </div>
                                <div class="form-group{{ $errors->has('author') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-author">{{ __('Author') }}</label>
                                    <input type="text" name="author" id="input-author" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" placeholder="{{ __('Author') }}" value="{{ old('author') }}">

                                    @include('alerts.feedback', ['field' => 'author'])
                                </div>
                                <div class="form-group{{ $errors->has('tahunTerbit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tahunTerbit">{{ __('Publication Year') }}</label>
                                    <input type="number" min="1700" max="2020" name="tahunTerbit" id="datepicker1" class="form-control{{ $errors->has('tahunTerbit') ? ' is-invalid' : '' }}" placeholder="{{ __('Publication Year') }}" value="2019">

                                    @include('alerts.feedback', ['field' => 'tahunTerbit'])
                                </div>
                                <div class="form-group{{ $errors->has('deskripsi') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-deskripsi">{{ __('Description') }}</label>
                                    <input type="text" name="deskripsi" id="input-deskripsi" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}" value="{{ old('deskripsi') }}">

                                    @include('alerts.feedback', ['field' => 'deskripsi'])
                                </div>

                                <div class="form-group{{ $errors->has('penerbit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-penerbit">{{ __('Publisher') }}</label>
                                    <input type="text" name="penerbit" id="input-penerbit" class="form-control{{ $errors->has('penerbit') ? ' is-invalid' : '' }}" placeholder="{{ __('Publisher') }}" value="{{ old('penerbit') }}">

                                    @include('alerts.feedback', ['field' => 'penerbit'])
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group{{ $errors->has('rak') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-penerbit">{{ __('Shelf') }}</label><br>
                                                <select name="rak" class="form-control{{ $errors->has('rak') ? ' has-danger' : '' }}">
                                                @foreach ($rak as $x)
                                                    <option value="{{$x->id}}">{{$x->nama}}</option>
                                                @endforeach
                                                </select>
                                                @include('alerts.feedback', ['field' => 'rak'])
                                            </input>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <a href="{{ route('rak.create') }}" class="btn btn-primary btn-round" style="margin-top:25px">{{ __('Add Shelf') }}</a>
                                    </div>
                                </div>
                                <label>Book cover</label><br>
                                <input type="file" class="form-control btn btn-primary btn-sm" name="gambar" value="{{old('gambar')}}">

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
