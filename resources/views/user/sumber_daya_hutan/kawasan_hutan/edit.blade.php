@extends('layouts.user')
@section('content')
    <div class="widget-box widget-color-dark">
        <div class="widget-header widget-header-small">
            <h6 class="widget-title smaller">Luas Kawasan Hutan dan Perairan Wilayah <strong>{{ Auth::user()->name }}</strong></h6>
        </div>

        <div class="widget-body">

            {{--widget main update--}}
            @include('user.sumber_daya_hutan.kawasan_hutan._update')
        </div>
    </div>
@endsection

@section('script')

@endsection
@section('styles')
@endsection