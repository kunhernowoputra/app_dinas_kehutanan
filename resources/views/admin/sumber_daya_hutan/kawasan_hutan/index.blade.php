@extends('layouts.user')
@section('content')
    <div class="widget-box widget-color-dark">
        <div class="widget-header widget-header-small">
            <h6 class="widget-title smaller">Luas Kawasan Hutan dan Perairan Wilayah <strong>{{ Auth::user()->name }}</strong></h6>
            <div class="widget-toolbar">
                    <button class="btn btn-minier btn-primary btn-insert">
                        <i class="ace icon fa fa-plus"> </i>
                        Tambah
                    </button>
                <button class="btn btn-minier btn-danger btn-close" style="display: none;">
                    <i class="ace icon fa fa-remove"> </i>
                </button>
            </div>
        </div>

        <div class="widget-body">

            {{--widget main list--}}
            @include('user.sumber_daya_hutan.kawasan_hutan._list')

            {{--widget main insert--}}
            @include('user.sumber_daya_hutan.kawasan_hutan._insert')

        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function() {

            // insert
            $(':button.btn-insert').on('click', function() {
                $(this).hide();
                $('.widget-list').slideUp(function() {
                    $(':button.btn-close').show();
                   $('.widget-insert').slideDown();
                });
            });

            // close
            $(':button.btn-close').on('click', function() {
                $(this).hide();
                $('.widget-insert').slideUp(function() {
                    $(':button.btn-insert').show();
                    $('.widget-list').slideDown();
                });
            });
        });

        function softDelete()
        {

        }

    </script>
@endsection
@section('styles')
    <style>
        /*th, td, .table-bordered*/
        /*{*/
            /*border:1px dotted #B5B5B5 !important;*/
            /*vertical-align: middle;*/
        /*}*/
    </style>
@endsection