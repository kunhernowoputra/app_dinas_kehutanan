<div class="widget-main">
    {!! Form::model($data,['url'=>['user/sebaran_kawasan', $data->id],'method'=>'PATCH']) !!}
        <table class="table table-bordered">
        <tr>
            <td>Tahun</td>
            <td class="@if($errors->has('tahun')) has-error @endif">
                {!! Form::date('tahun',null,['class'=>'form-control']) !!}
                @if($errors->has('tahun'))
                    <small class="red"> {{ $errors->first('tahun') }} </small>
                @endif
            </td>
        </tr>
        <tr>
            <td>Taman Nasional Jumlah</td>
            <td class="@if($errors->has('taman_nasional_jumlah')) has-error @endif">
                {!! Form::text('taman_nasional_jumlah',null,['class'=>'form-control']) !!}
                @if($errors->has('taman_nasional_jumlah'))
                    <small class="red"> {{ $errors->first('taman_nasional_jumlah') }} </small>
                @endif
            </td>
        </tr>
        <tr>
            <td>Taman Nasional Luas</td>
            <td class="@if($errors->has('taman_nasional_luas')) has-error @endif">
                {!! Form::text('taman_nasional_luas',null,['class'=>'form-control']) !!}
                @if($errors->has('taman_nasional_luas'))
                    <small class="red"> {{ $errors->first('taman_nasional_luas') }} </small>
                @endif
            </td>
        </tr>
        <tr>
            <td>Taman Wisata Jumlah</td>
            <td class="@if($errors->has('taman_wisata_jumlah')) has-error @endif">
                {!! Form::text('taman_wisata_jumlah',null,['class'=>'form-control']) !!}
                @if($errors->has('taman_wisata_jumlah'))
                    <small class="red"> {{ $errors->first('taman_wisata_jumlah') }} </small>
                @endif
            </td>
        </tr>
        <tr>
            <td>Taman Wisata Luas</td>
            <td class="@if($errors->has('taman_wisata_luas')) has-error @endif">
                {!! Form::text('taman_wisata_luas',null,['class'=>'form-control']) !!}
                @if($errors->has('taman_wisata_luas'))
                    <small class="red"> {{ $errors->first('taman_wisata_luas') }} </small>
                @endif
            </td>
        </tr>
        <tr>
            <td>Taman Buru</td>
            <td class="@if($errors->has('taman_buru')) has-error @endif">
                {!! Form::text('taman_buru',null,['class'=>'form-control']) !!}
                @if($errors->has('taman_buru'))
                    <small class="red"> {{ $errors->first('taman_buru') }} </small>
                @endif
            </td>
        </tr>
        <tr>
            <td>Cagar Alam Jumlah</td>
            <td class="@if($errors->has('cagar_alam_jumlah')) has-error @endif">
                {!! Form::text('cagar_alam_jumlah',null,['class'=>'form-control']) !!}
                @if($errors->has('cagar_alam_jumlah'))
                    <small class="red"> {{ $errors->first('cagar_alam_jumlah') }} </small>
                @endif
            </td>
        </tr>
        <tr>
            <td>Cagar Alam Luas</td>
            <td class="@if($errors->has('cagar_alam_luas')) has-error @endif">
                {!! Form::text('cagar_alam_luas',null,['class'=>'form-control']) !!}
                @if($errors->has('cagar_alam_luas'))
                    <small class="red"> {{ $errors->first('cagar_alam_luas') }} </small>
                @endif
            </td>
        </tr>
        <tr>
            <td>Suaka Margasatwa Jumlah</td>
            <td class="@if($errors->has('suaka_margasatwa_jumlah')) has-error @endif">
                {!! Form::text('suaka_margasatwa_jumlah',null,['class'=>'form-control']) !!}
                @if($errors->has('suaka_margasatwa_jumlah'))
                    <small class="red"> {{ $errors->first('suaka_margasatwa_jumlah') }} </small>
                @endif
            </td>
        </tr>
        <tr>
            <td>Suaka Margasatwa Luas</td>
            <td class="@if($errors->has('suaka_margasatwa_luas')) has-error @endif">
                {!! Form::text('suaka_margasatwa_luas',null,['class'=>'form-control']) !!}
                @if($errors->has('suaka_margasatwa_luas'))
                    <small class="red"> {{ $errors->first('suaka_margasatwa_luas') }} </small>
                @endif
            </td>
        </tr>
        <tr>
            <td>Taman Hutan Jumlah</td>
            <td class="@if($errors->has('taman_hutan_jumlah')) has-error @endif">
                {!! Form::text('taman_hutan_jumlah',null,['class'=>'form-control']) !!}
                @if($errors->has('taman_hutan_jumlah'))
                    <small class="red"> {{ $errors->first('taman_hutan_jumlah') }} </small>
                @endif
            </td>
        </tr>
        <tr>
            <td>Taman Hutan Luas</td>
            <td class="@if($errors->has('taman_hutan_luas')) has-error @endif">
                {!! Form::text('taman_hutan_luas',null,['class'=>'form-control']) !!}
                @if($errors->has('taman_hutan_luas'))
                    <small class="red"> {{ $errors->first('taman_hutan_luas') }} </small>
                @endif
            </td>
        </tr>
        <tr>
            <td>Total Luas</td>
            <td class="@if($errors->has('total_luas')) has-error @endif">
                {!! Form::text('total_luas',null,['class'=>'form-control']) !!}
                @if($errors->has('total_luas'))
                    <small class="red"> {{ $errors->first('total_luas') }} </small>
                @endif
            </td>
        </tr>
        <tr>
            <td>keterangan</td>
            <td class="@if($errors->has('keterangan')) has-error @endif">
                {!! Form::text('keterangan',null,['class'=>'form-control']) !!}
                @if($errors->has('keterangan'))
                    <small class="red"> {{ $errors->first('keterangan') }} </small>
                @endif
            </td>
        </tr>
    </table>
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-save"> </i>
            Updated
        </button>
    {!! Form::close() !!}
</div>