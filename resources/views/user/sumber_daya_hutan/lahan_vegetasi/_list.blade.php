<div class="widget-main widget-list">
    @if(count($data) > 0)
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace" />
                        <span class="lbl"></span>
                    </label>
                </th>
                <th>Tahun</th>
                <th>Lahan Kering Primer</th>
                <th>Lahan Kering Sekunder</th>
                <th>Hutan Rawa Primer</th>
                <th>Hutan Rawa Sekunder</th>
                <th>Hutan Mangrove Primer</th>
                <th>Hutan Mangrove Sekunder</th>
                <th>Semak Belukar</th>
                <th>Semak Belukar Rawa</th>
                <th>Savana</th>
                <th>HTI</th>
                <th>Perkebunan</th>
                <th>Pertanian</th>
                <th width="8%"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                    <td class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </td>
                    <td>{!! $row->tahun !!}</td>
                    <td>{!! $row->lahan_kering_primer !!}</td>
                    <td>{!! $row->lahan_kering_sekunder !!}</td>
                    <td>{!! $row->hutan_rawa_primer !!}</td>
                    <td>{!! $row->hutan_rawa_sekunder !!}</td>
                    <td>{!! $row->hutan_mangrove_primer !!}</td>
                    <td>{!! $row->hutan_mangrove_sekunder !!}</td>
                    <td>{!! $row->semak_belukar !!}</td>
                    <td>{!! $row->semak_belukar_rawa !!}</td>
                    <td>{!! $row->savana !!}</td>
                    <td>{!! $row->hti !!}</td>
                    <td>{!! $row->perkebunan !!}</td>
                    <td>{!! $row->pertanian !!}</td>
                    <td class="text-center">

                        {!! Form::open(['url'=>['user/lahan_vegetasi',$row->id],'method'=>'DELETE']) !!}
                        <div class="btn-group" role="group">
                            <a href="{{ url('user/lahan_vegetasi/show',$row->id) }}" class="btn btn btn-default btn-minier">
                                <i class="icon fa fa-search"></i>
                            </a>
                            <a href="{{ url('user/lahan_vegetasi/edit',$row->id) }}" class="btn btn btn-warning btn-minier">
                                <i class="icon fa fa-pencil"></i>
                            </a>
                            <button type="submit" class="btn btn btn-danger btn-minier">
                                <i class="icon fa fa-trash"></i>
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        data tidak ditemukan
    @endif
</div>