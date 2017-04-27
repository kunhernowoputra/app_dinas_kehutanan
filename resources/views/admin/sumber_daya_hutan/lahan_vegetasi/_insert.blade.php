<div class="widget-main widget-insert" style="display: none;">
    {!! Form::open(['url'=>'user/lahan_vegetasi']) !!}
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
                <th colspan="2">Hutan Lahan Kering</th>
            </tr>
            <tr>
                <td>Primer</td>
                <td class="@if($errors->has('lahan_kering_primer')) has-error @endif">
                    {!! Form::text('lahan_kering_primer',null,['class'=>'form-control']) !!}
                    @if($errors->has('lahan_kering_primer'))
                        <small class="red"> {{ $errors->first('lahan_kering_primer') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Sekunder</td>
                <td class="@if($errors->has('lahan_kering_sekunder')) has-error @endif">
                    {!! Form::text('lahan_kering_sekunder',null,['class'=>'form-control']) !!}
                    @if($errors->has('lahan_kering_sekunder'))
                        <small class="red"> {{ $errors->first('lahan_kering_sekunder') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <th colspan="2">Hutan Rawa</th>
            </tr>
            <tr>
                <td>Primer</td>
                <td class="@if($errors->has('hutan_rawa_primer')) has-error @endif">
                    {!! Form::text('hutan_rawa_primer',null,['class'=>'form-control']) !!}
                    @if($errors->has('hutan_rawa_primer'))
                        <small class="red"> {{ $errors->first('hutan_rawa_primer') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Sekunder</td>
                <td class="@if($errors->has('hutan_rawa_sekunder')) has-error @endif">
                    {!! Form::text('hutan_rawa_sekunder',null,['class'=>'form-control']) !!}
                    @if($errors->has('hutan_rawa_sekunder'))
                        <small class="red"> {{ $errors->first('hutan_rawa_sekunder') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <th colspan="2">Hutan Mangrove</th>
            </tr>
            <tr>
                <td>Primer</td>
                <td class="@if($errors->has('hutan_mangrove_primer')) has-error @endif">
                    {!! Form::text('hutan_mangrove_primer',null,['class'=>'form-control']) !!}
                    @if($errors->has('hutan_mangrove_primer'))
                        <small class="red"> {{ $errors->first('hutan_mangrove_primer') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Sekunder</td>
                <td class="@if($errors->has('hutan_mangrove_sekunder')) has-error @endif">
                    {!! Form::text('hutan_mangrove_sekunder',null,['class'=>'form-control']) !!}
                    @if($errors->has('hutan_mangrove_sekunder'))
                        <small class="red"> {{ $errors->first('hutan_mangrove_sekunder') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <th colspan="2">Semak</th>
            </tr>
            <tr>
                <td>Belukar</td>
                <td class="@if($errors->has('semak_belukar')) has-error @endif">
                    {!! Form::text('semak_belukar',null,['class'=>'form-control']) !!}
                    @if($errors->has('semak_belukar'))
                        <small class="red"> {{ $errors->first('semak_belukar') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Belukar Rawa</td>
                <td class="@if($errors->has('semak_belukar_rawa')) has-error @endif">
                    {!! Form::text('semak_belukar_rawa',null,['class'=>'form-control']) !!}
                    @if($errors->has('semak_belukar_rawa'))
                        <small class="red"> {{ $errors->first('semak_belukar_rawa') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Savana</td>
                <td class="@if($errors->has('savana')) has-error @endif">
                    {!! Form::text('savana',null,['class'=>'form-control']) !!}
                    @if($errors->has('savana'))
                        <small class="red"> {{ $errors->first('savana') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>HTI</td>
                <td class="@if($errors->has('hti')) has-error @endif">
                    {!! Form::text('hti',null,['class'=>'form-control']) !!}
                    @if($errors->has('hti'))
                        <small class="red"> {{ $errors->first('hti') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Perkebunan</td>
                <td class="@if($errors->has('perkebunan')) has-error @endif">
                    {!! Form::text('perkebunan',null,['class'=>'form-control']) !!}
                    @if($errors->has('perkebunan'))
                        <small class="red"> {{ $errors->first('perkebunan') }} </small>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Pertanian</td>
                <td class="@if($errors->has('pertanian')) has-error @endif">
                    {!! Form::text('pertanian',null,['class'=>'form-control']) !!}
                    @if($errors->has('pertanian'))
                        <small class="red"> {{ $errors->first('pertanian') }} </small>
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