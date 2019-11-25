@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Show Book',
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
                            <h6 class="heading-small text-muted mb-4">{{ __('Book information') }}</h6>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <strong>Sampul: </strong>
                                        <a></a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Nama Buku : </strong>
                                                <a></a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Nama Pengarang : </strong>
                                                <a></a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Tahun Terbit : </strong>
                                                <a></a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Deskripsi : </strong>
                                                <a></a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Penerbit : </strong>
                                                <a></a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Rak : </strong>
                                                <a></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
