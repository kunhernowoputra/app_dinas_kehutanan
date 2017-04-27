<div class="widget-main">
    {!! Form::model($data,['url'=>['user/kawasan_hutan', $data->id],'method'=>'PATCH']) !!}
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
                <td>Luas Wilayah Kabupaten/Kota</td>
                <td class="@if($errors->has('luas')) has-error @endif">
                    {!! Form::text('luas',null,['class'=>'form-control']) !!}
                    @if($errors->has('luas'))
                        <small class="red"> {{ $errors->first('luas') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <th colspan="2">Luas Kawasan Hutan Berdasarkan SK Menhut No.44 Tahun 2005 (Ha)</th>
            </tr>
            <tr>
                <td>Hutan Suaka Alam</td>
                <td class="@if($errors->has('suaka_alam')) has-error @endif">
                    {!! Form::text('suaka_alam',null,['class'=>'form-control']) !!}
                    @if($errors->has('suaka_alam'))
                        <small class="red"> {{ $errors->first('suaka_alam') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Hutan Lindung</td>
                <td class="@if($errors->has('lindung')) has-error @endif">
                    {!! Form::text('lindung',null,['class'=>'form-control']) !!}
                    @if($errors->has('lindung'))
                        <small class="red"> {{ $errors->first('lindung') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Hutan Produksi Terbatas</td>
                <td class="@if($errors->has('produksi_terbatas')) has-error @endif">
                    {!! Form::text('produksi_terbatas',null,['class'=>'form-control']) !!}
                    @if($errors->has('produksi_terbatas'))
                        <small class="red"> {{ $errors->first('produksi_terbatas') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Hutan Produksi Tetap</td>
                <td class="@if($errors->has('produksi_tetap')) has-error @endif">
                    {!! Form::text('produksi_tetap',null,['class'=>'form-control']) !!}
                    @if($errors->has('produksi_tetap'))
                        <small class="red"> {{ $errors->first('produksi_tetap') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Hutan Produksi Yang Dapat Dikonservasi</td>
                <td class="@if($errors->has('produksi_konservasi')) has-error @endif">
                    {!! Form::text('produksi_konservasi',null,['class'=>'form-control']) !!}
                    @if($errors->has('produksi_konservasi'))
                        <small class="red"> {{ $errors->first('produksi_konservasi') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Jumlah Luas Kawasan Hutan</td>
                <td class="@if($errors->has('jumlah_luas')) has-error @endif">
                    {!! Form::text('jumlah_luas',null,['class'=>'form-control']) !!}
                    @if($errors->has('jumlah_luas'))
                        <small class="red"> {{ $errors->first('jumlah_luas') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Persentase Terhadap Luas Wilayah %</td>
                <td class="@if($errors->has('persentase')) has-error @endif">
                    {!! Form::text('persentase',null,['class'=>'form-control']) !!}
                    @if($errors->has('persentase'))
                        <small class="red"> {{ $errors->first('persentase') }} </small>
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