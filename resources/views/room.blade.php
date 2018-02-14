@extends('layouts.master')

@section('container')
	<div class="price">
        @if(count($room))
            <span>&#36;</span> {{ $room->price}} {{ trans('data.dram') }} / {{ $room->duration > 1 ? $room->duration.' '.trans('data.hours') : trans('data.hour') }}
        @endif
    </div>
    <div id="bannerscollection_zoominout_generous">
    	<div class="myloader"></div>
        @if(count($room))
            <ul class="bannerscollection_zoominout_list">
                @foreach(unserialize($room->images) as $image)
                    <li data-initialZoom="1" data-finalZoom="0.78" data-horizontalPosition="center" data-verticalPosition="bottom" data-text-id="#bannerscollection_zoominout_photoText1" data-bottom-thumb="{{ str_replace("source","thumbs",$image) }}" ><img src="{{ $image }}" alt="ծղոտներ ռուսական սաունա" width="2500" height="1667" /></li>
                @endforeach
            </ul>  
        @endif
    </div>
@endsection

