<div class="widget-main widget-insert" style="display: none;">
    {!! Form::open(['url'=>'user/penataan_batas']) !!}
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
                <td>Fungsi</td>
                <td class="@if($errors->has('fungsi')) has-error @endif">
                    {!! Form::text('fungsi',null,['class'=>'form-control']) !!}
                    @if($errors->has('fungsi'))
                        <small class="red"> {{ $errors->first('fungsi') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Luar</td>
                <td class="@if($errors->has('luar')) has-error @endif">
                    {!! Form::text('luar',null,['class'=>'form-control']) !!}
                    @if($errors->has('luar'))
                        <small class="red"> {{ $errors->first('luar') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td class="@if($errors->has('jumlah')) has-error @endif">
                    {!! Form::text('jumlah',null,['class'=>'form-control']) !!}
                    @if($errors->has('jumlah'))
                        <small class="red"> {{ $errors->first('jumlah') }} </small>
                    @endif
                </td>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-save"> </i>
            Simpan
        </button>
    {!! Form::close() !!}
</div>