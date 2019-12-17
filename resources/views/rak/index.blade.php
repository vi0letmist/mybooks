@extends('layouts.app', [
  'namePage' => 'Rak',
  'class' => 'sidebar-mini',
  'activePage' => 'rak',
  'activeNav' => '',
])

@section('content')
<div class="panel-header">
    <div class="header text-center">
        @if($active == 'All' || $active == 'Result')
            <h2 class="title">{{$active}}</h2>
        @else
            <h2 class="title">{{$active->nama}}</h2>
        @endif
        <div class="form-inline" style="justify-content:center">

        @if($active != 'All' && $active != 'Result')
            <form action="{{route('rak.destroy', $active->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-primary btn-round text-white" href="{{ route('rak.destroy', $active->id) }}" data-method="delete" class="jquery-postback">{{ __('Remove Shelf') }}</button>
            </form>
        @endif
        </div>
    </div>
</div>
<div class="content">
    <div class="row">
    <div class="col-md-12">

            @include('alerts.success')
                    @include('alerts.errors')

        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="margin-bottom:1em;">
                    <div class="dropdown pull-left">
                        <button type="button" class="btn btn-primary text-white btn-round dropdown-toggle pull-left" data-toggle="dropdown">
                            <a>Shelf</a>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/rak">All</a>
                        @foreach ($rak as $x)
                            <a class="dropdown-item" href="/rak/{{$x->id}}">{{$x->nama}}</a>
                        @endforeach
                        </div>
                    </div>
                    <a class="btn btn-primary btn-round text-white pull-left" href="{{ route('rak.create') }}">{{ __('Add Shelf') }}</a>
                    <a class="btn btn-primary btn-round text-white pull-right" href="{{ route('book.create') }}">{{ __('Add Book') }}</a>
                    <div class="col-12 mt-2">

                    </div>
                    <div class="card-body" style="margin-top:2em;">
                    </div>
                </div>
            </div>
        </div>

        <!-- @foreach ($buku as $b)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header" style="text-align:right;margin-top:-1em;margin-bottom:-1em;">
                    <div class="dropdown">
                        <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                            <i class="now-ui-icons loader_gear"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" style="font-family:timess;" href="{{route('book.show', $b->id)}}">Lihat</a>
                            <a class="dropdown-item" style="font-family:timess;" href="{{route('book.edit', $b->id)}}">Edit</a>
                            <form action="{{route('book.destroy', $b->id)}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button style="background:white;color:black;font-family:timess;"  class="btn" data-method="delete" class="jquery-postback">{{ __('Remove Book') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="text-align:center;">
                    <img src="{{URL::asset('/images/' . $b->sampul)}}" style="height:330px;">
                    <h5>{{$b->judul}}</h5>
                    <p>{{$b->penulis}}</p>
                </div>
            </div>
        </div>
        @endforeach -->
        @foreach ($buku as $b)
        <div class="col-md-3">
            <div class="card">
            <div class="dropdown" style="text-align:right;margin-bottom:-4.2em;">
                        <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown" style="color:#fff;">
                            <i class="now-ui-icons loader_gear" style="color:#fff;"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('book.edit', $b->id)}}">Edit</a>
                            <form action="{{route('book.destroy', $b->id)}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button style="background:white;color:black;"  class="btn" data-method="delete" class="jquery-postback">{{ __('Remove Book') }}</button>
                            </form>
                        </div>
                    </div>
                    <img src="{{URL::asset('/images/' . $b->sampul)}}" class="card-img-top" style="height:330px;" alt="{{$b->judul}} by {{$b->penulis}}" title="{{$b->judul}} by {{$b->penulis}}">
                <div class="card-body">
                    <a href="{{route('book.show', $b->id)}}">{{$b->judul}}</a><br/>
                    <a>by </a><a href="#">{{$b->penulis}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@push('script')
<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
$(document).on('click', 'a.jquery-postback', function(e) {
    e.preventDefault(); // does not go through with the link.

    var $this = $(this);

    $.post({
        type: $this.data('method'),
        url: $this.attr('href')
    }).done(function (data) {
        alert('success');
        console.log(data);
    });
});
</script>
@endpush
