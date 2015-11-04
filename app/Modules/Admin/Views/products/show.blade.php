@extends('Admin::layout')
@section('content')
<style type="text/css">
    .profile-container .profile-header{
        -webkit-box-shadow: none;
        box-shadow: none;
        background-color: none;
    }
</style>
<div class="profile-container">
    <div class="profile-header row">
        <div class="col-lg-2 col-md-4 col-sm-12 text-center">
            <img src="{{ $product->image }}" alt="" class="header-avatar">
        </div>
        <div class="col-lg-5 col-md-8 col-sm-12 profile-info">
            <div class="header-fullname">{{ $product->title }}</div>
            <div class="header-information">
                {!! $product->description !!}
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 profile-stats">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                    <div class="stats-value pink">284</div>
                    <div class="stats-title">Lượt đọc</div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                    <div class="stats-value pink">803</div>
                    <div class="stats-title">Bình luận</div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                    <div class="stats-value pink">1207</div>
                    <div class="stats-title">Lượt thích</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                    <i class="glyphicon glyphicon-map-marker"></i> Boston
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                    Rate: <strong>$250</strong>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                    Age: <strong>24</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection