@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Edit user',
    'activePage' => 'user',
    'activeNav' => '',
])

@section('content')
    <div class="panel-header">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h5 class="title">{{ __('Edit Book') }}</h5>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('rak.index') }}" class="btn btn-primary btn-round">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('book.update', $book->id) }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label>{{__(" Title")}}</label>
                                    <input type="text" name="title" class="form-control" value="{{ old($book->judul) }}">
                                    @include('alerts.feedback', ['field' => 'title'])
                                </div>
                                <div class="form-group">
                                    <label>{{__(" Author")}}</label>
                                    <input type="text" name="author" class="form-control" value="{{ old('name', $book->penulis) }}">
                                    @include('alerts.feedback', ['field' => 'author'])
                                </div>
                                <div class="form-group">
                                    <label>{{__(" Publication Year")}}</label>
                                    <input type="text" name="tahunTerbit" class="form-control" value="{{ old('name', $book->tahun_terbit) }}">
                                    @include('alerts.feedback', ['field' => 'tahunTerbit'])
                                </div>
                                <div class="form-group">
                                    <label>{{__(" Description")}}</label>
                                    <input type="text" name="deskripsi" class="form-control" value="{{ old('name', $book->deskripsi) }}">
                                    @include('alerts.feedback', ['field' => 'deskripsi'])
                                </div>
                                <div class="form-group">
                                    <label>{{__(" Publisher")}}</label>
                                    <input type="text" name="deskripsi" class="form-control" value="{{ old('name', $book->deskripsi) }}">
                                    @include('alerts.feedback', ['field' => 'deskripsi'])
                                </div>
                                <div class="form-group">
                                    <label>{{__(" Shelf")}}</label>
                                    <input type="text" name="deskripsi" class="form-control" value="{{ old('name', $book->deskripsi) }}">
                                    @include('alerts.feedback', ['field' => 'deskripsi'])
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
