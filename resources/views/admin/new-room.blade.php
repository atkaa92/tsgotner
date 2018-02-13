@extends('admin.layouts.master')

@section('content')
    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">New Room</li>
            </ol>
        </div>
    </section>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('admin.includes.sidebar')
                </div>
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">New Room</h3>
                        </div>
                        <div class="panel-body pl0">
                            <div>
                                <form action="/admin/add-room{{ $some ? '/'.$some->id : '' }}" method="post">
                                    {{ csrf_field() }}
                                    <div style="overflow: hidden">
                                        <div class="col-xs-10 pr0">
                                            <div style="overflow: hidden">
                                                <div class="col-xs-4">
                                                    <label>English name</label>
                                                    <input value="{{ $some ? $some->en_name : ''}}" name="en_name" required placeholder="English name" class="form-control room-name">
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Russian name</label>
                                                    <input value="{{ $some ? $some->ru_name : ''}}" name="ru_name" required placeholder="Russian name" class="form-control room-name">
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Armenian name</label>
                                                    <input value="{{ $some ? $some->hy_name : ''}}" name="hy_name" required placeholder="Armenian name" class="form-control room-name">
                                                </div>
                                            </div>
                                            <hr class="clearfix">
                                            <div style="overflow: hidden">
                                                <div class="col-xs-4">
                                                    <label>Duration</label>
                                                    <input value="{{ $some ? $some->duration : ''}}" type="number" required name="duration" placeholder="1 hour">
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Price</label>
                                                    <input type="number" value="{{ $some ? $some->price : ''}}" name="price" placeholder="12.000 AMD">
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Slug</label>
                                                    <input type="text" value="{{ $some ? $some->slug : ''}}" name="slug" placeholder="mitage">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="{{ asset('/filemanager/dialog.php?type=1&field_id=room_image') }}" class="open-filemanager btn btn-info btn-block">Add Image</a>
                                            <hr class="clearfix">
                                            <div class="room-albom">
                                                <div class="one-img">
                                                    <img src="/img/no-image.png" width="100%">
                                                    <input type="hidden" id="room_image">
                                                </div>
                                                @if($some)
                                                    @foreach(unserialize($some->images) as $image)
                                                        <div class="one-img">
                                                            <img src="{{$image}}" width="100%">
                                                            <input type="hidden" value="{{ $image }}" name="images[]">
                                                            <button class="btn btn-danger btn-block rm-image"><i class="fa fa-remove"></i>
                                                                Remove
                                                            </button>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-xs-offset-10 col-xs-2">
                                        <button class="btn btn-lg btn-success">Save Room</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection