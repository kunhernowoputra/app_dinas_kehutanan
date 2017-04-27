<div id="sidebar" class="sidebar responsive">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>
    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>
            <span class="btn btn-info"></span>
            <span class="btn btn-warning"></span>
            <span class="btn btn-danger"></span>
        </div>
    </div>
    <ul class="nav nav-list">
        <li class="active">
            <a href="{!! url('user') !!}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>
        @if(Auth::user()->role == 1)
            <li class="">
                <a href="{!! url('admin/buat_data') !!}">
                    <i class="menu-icon fa fa-folder"></i>
                    <span class="menu-text"> Buat Data </span>
                </a>

                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="{!! url('admin/setting') !!}">
                    <i class="menu-icon fa fa-users"></i>
                    <span class="menu-text"> Setting User </span>
                </a>

                <b class="arrow"></b>
            </li>
        @endif
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-file-o"></i>
                    <span class="menu-text">
                        Sumber Daya Hutan
                    </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    @if(Auth::user()->role == 1)
                        <a href="{{ url('admin/kawasan_hutan') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Kawasan Hutan
                        </a>
                    @else
                        <a href="{{ url('user/kawasan_hutan') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Kawasan Hutan
                        </a>
                    @endif
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="{{ url('user/lahan_vegetasi') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Penutupan Lahan/Vegetasi
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="{{ url('user/sebaran_kawasan') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Sebaran Kawasan Konservasi
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="{{ url('user/penataan_batas') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Penataan Batas Kawasan Hutan
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    </ul>
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>