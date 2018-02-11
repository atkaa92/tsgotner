@extends('layouts.master')

@section('container')
    <div class="price">
        <span>&#36;</span> 12.000 {{ trans('data.dram') }} / {{ trans('data.hour') }}
    </div>
    <div id="bannerscollection_zoominout_generous">
        <div class="myloader"></div>
            <!-- CONTENT -->
            <ul class="bannerscollection_zoominout_list">
                <li data-initialZoom="1" data-finalZoom="0.78" data-horizontalPosition="center" data-verticalPosition="bottom" data-text-id="#bannerscollection_zoominout_photoText1" data-bottom-thumb="/img/Eastern/Thumb/1.jpg" ><img src="/img/Eastern/1.jpg" alt="ծղոտներ արևելյան" width="2500" height="1667" /></li>
                <li data-initialZoom="1" data-finalZoom="0.78" data-horizontalPosition="center" data-verticalPosition="bottom" data-text-id="#bannerscollection_zoominout_photoText1" data-bottom-thumb="/img/Eastern/Thumb/2.jpg" ><img src="/img/Eastern/2.jpg" alt="ծղոտներ արևելյան" width="2500" height="1667" /></li>
                <li data-initialZoom="1" data-finalZoom="0.78" data-horizontalPosition="center" data-verticalPosition="bottom" data-text-id="#bannerscollection_zoominout_photoText1" data-bottom-thumb="/img/Eastern/Thumb/3.jpg" ><img src="/img/Eastern/3.jpg" alt="ծղոտներ արևելյան" width="2500" height="1667" /></li>
                <li data-initialZoom="1" data-finalZoom="0.78" data-horizontalPosition="center" data-verticalPosition="bottom" data-text-id="#bannerscollection_zoominout_photoText1" data-bottom-thumb="/img/Eastern/Thumb/4.jpg" ><img src="/img/Eastern/4.jpg" alt="ծղոտներ արևելյան" width="2500" height="1667" /></li>
                <li data-initialZoom="1" data-finalZoom="0.78" data-horizontalPosition="center" data-verticalPosition="bottom" data-text-id="#bannerscollection_zoominout_photoText1" data-bottom-thumb="/img/Eastern/Thumb/5.jpg" ><img src="/img/Eastern/5.jpg" alt="ծղոտներ արևելյան" width="2500" height="1667" /></li>
            </ul>
        </div>
@endsection

