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
                <th>Luas Wilayah Kabupaten/Kota</th>
                <th>Hutan Suaka Alam</th>
                <th>Hutan Lindung</th>
                <th>Hutan Produksi Terbatas</th>
                <th>Hutan Produksi Tetap</th>
                <th>Hutan Produksi Yang Dikonservasi</th>
                <th>Jumlah Luas Kawasan Hutan</th>
                <th>Persentase terhadap luas wilayah %</th>
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
                    {{--<td>{!! $row->tahun !!}</td>--}}
                    <td>{!! $row->luas !!}</td>
                    <td>{!! $row->suaka_alam !!}</td>
                    <td>{!! $row->lindung !!}</td>
                    <td>{!! $row->produksi_terbatas !!}</td>
                    <td>{!! $row->produksi_tetap !!}</td>
                    <td>{!! $row->produksi_konservasi !!}</td>
                    <td>{!! $row->jumlah_luas !!}</td>
                    <td>{!! $row->persentase !!}</td>
                    <td class="text-center">

                        {!! Form::open(['url'=>['user/kawasan_hutan',$row->id],'method'=>'DELETE']) !!}
                        <div class="btn-group" role="group">
                            <a href="{{ url('user/kawasan_hutan/show',$row->id) }}" class="btn btn btn-default btn-minier">
                                <i class="icon fa fa-search"></i>
                            </a>
                            <a href="{{ url('user/kawasan_hutan/edit',$row->id) }}" class="btn btn btn-warning btn-minier">
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