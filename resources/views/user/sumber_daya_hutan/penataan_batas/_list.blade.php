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
                <th>Fungsi</th>
                <th>Luar</th>
                <th>Jumlah</th>
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
                    <td>{!! $row->fungsi !!}</td>
                    <td>{!! $row->luar !!}</td>
                    <td>{!! $row->jumlah !!}</td>
                    <td class="text-center">

                        {!! Form::open(['url'=>['user/penataan_batas',$row->id],'method'=>'DELETE']) !!}
                        <div class="btn-group" role="group">
                            <a href="{{ url('user/penataan_batas/show',$row->id) }}" class="btn btn btn-default btn-minier">
                                <i class="icon fa fa-search"></i>
                            </a>
                            <a href="{{ url('user/penataan_batas/edit',$row->id) }}" class="btn btn btn-warning btn-minier">
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