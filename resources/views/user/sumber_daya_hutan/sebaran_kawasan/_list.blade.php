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
                <th>Taman Nasional Jumlah</th>
                <th>Taman Nasional Luas</th>
                <th>Taman Wisata Jumlah</th>
                <th>Taman Wisata Luas</th>
                <th>Taman Buru</th>
                <th>Cagar Alam Jumlah</th>
                <th>Cagar Alam Luas</th>
                <th>Suaka Margasatwa Jumlah</th>
                <th>Suaka Margasatwa Luas</th>
                <th>Taman Hutan Jumlah</th>
                <th>Taman Hutan Luas</th>
                <th>Total Luas</th>
                <th>Keterangan</th>
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
                    <td>{!! $row->taman_nasional_jumlah !!}</td>
                    <td>{!! $row->taman_nasional_luas !!}</td>
                    <td>{!! $row->taman_wisata_jumlah !!}</td>
                    <td>{!! $row->taman_wisata_luas !!}</td>
                    <td>{!! $row->taman_buru !!}</td>
                    <td>{!! $row->cagar_alam_jumlah !!}</td>
                    <td>{!! $row->cagar_alam_luas !!}</td>
                    <td>{!! $row->suaka_margasatwa_jumlah !!}</td>
                    <td>{!! $row->suaka_margasatwa_luas !!}</td>
                    <td>{!! $row->taman_hutan_jumlah !!}</td>
                    <td>{!! $row->taman_hutan_luas !!}</td>
                    <td>{!! $row->total_luas !!}</td>
                    <td>{!! $row->keterangan !!}</td>
                    <td class="text-center">

                        {!! Form::open(['url'=>['user/sebaran_kawasan',$row->id],'method'=>'DELETE']) !!}
                        <div class="btn-group" role="group">
                            <a href="{{ url('user/sebaran_kawasan/show',$row->id) }}" class="btn btn btn-default btn-minier">
                                <i class="icon fa fa-search"></i>
                            </a>
                            <a href="{{ url('user/sebaran_kawasan/edit',$row->id) }}" class="btn btn btn-warning btn-minier">
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