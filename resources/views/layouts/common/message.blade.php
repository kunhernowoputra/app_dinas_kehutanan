@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade in col-lg-3" role="alert" style="
    position: fixed;
    z-index: 1;
    top: 60px;
    right: 9px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <i class="fa fa-save"> </i> <strong class="alert-link">{{ Session::get('message') }}</strong>
    </div>
@endif