@extends('layouts.user')

@section('content')
    <div class="page-header">
        <h1>
            Data
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                membuat berkas data dinas kehutanan
            </small>
        </h1>
    </div>

    <div class="col-lg-5">
        <div class="widget-box widget-dark">
            <div class="widget-header widget-header-small">
                <h6 class="widget-title smaller">Form Baru</h6>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="form-group">
                        {!! Form::label('Tahun',null,['class'=>'control-label']) !!}
                        <input id="checkbox" type="checkbox" class="ace ace-switch ace-switch-3">
                        <span class="lbl middle"></span>
                    </div>
                    {!! Form::open(['url'=>'admin/buat_data']) !!}
                    <div class="toggleDate">
                        <div class="form-group">
                            <div class="input-group">
                                {!! Form::text('tahun',null,['class'=>'form-control tahun','readonly'=>true]) !!}
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <ul>
                                @foreach($user as $row)
                                    <li class="@if($row->id == Auth::user()->id) hidden @endif list-unstyled" >
                                        {{--{!! Form::checkbox('user_id[]',$row->id,['class'=>'form-control']) !!} {{ $row->name }}--}}
                                        <input type="checkbox" name="user_id[]" value="{{ $row->id }}"> {{ $row->name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="form-group">
                            {!! Form::submit('submit',['class'=>'btn btn-success btn-mini']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-7">
        <div class="widget-box widget-color-dark">
            <div class="widget-header widget-header-small">
                <h6 class="widget-title smaller">List Form</h6>
            </div>
            <div class="widget-body">

                <div class="widget-main">
                    @foreach($data as $row)
                        {{ $row->id }}
                        {{--<ul>--}}
                            {{--<li>--}}
                                {{--{{ $row->tahun }}--}}
                                {{--<ul>--}}
                                    {{--<li>{{ $row->user_id }}</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    @endforeach
                    {{--<div id="accordion" class="accordion-style1 panel-group">--}}
                        {{--@foreach($data as $row)--}}
                            {{--<div class="panel panel-default">--}}
                                {{--<div class="panel-heading">--}}
                                    {{--<h4 class="panel-title">--}}
                                        {{--<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{ $row->id }}" aria-expanded="false">--}}
                                            {{--<i class="bigger-110 ace-icon fa fa-angle-right" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>--}}
                                            {{--{{ $row->tahun }}--}}
                                        {{--</a>--}}
                                    {{--</h4>--}}
                                {{--</div>--}}

                                {{--<div class="panel-collapse collapse" id="collapseOne{{ $row->id }}" aria-expanded="false" style="height: 0px;">--}}
                                    {{--<div class="panel-body">--}}
                                        {{--<ul>--}}
                                            {{--<li>--}}
                                                {{--{{ $row->user_id}}--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function() {

            $(".tahun").datepicker({
                format: " yyyy",
                autoclose: true,
                language: "id",
                viewMode: "years",
                minViewMode: "years"
            });

            $( "#checkbox" ).on( "click", function() {
                $('.toggleDate').toggle();
            });
        });
    </script>
@endsection
@section('styles')
    <style>

        .toggleDate
        {
            display: none;
        }
    </style>
@endsection