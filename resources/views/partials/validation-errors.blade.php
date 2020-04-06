@if ($errors->any())
<div class="alert alert-info alert-dismissible fade show col-md-6 mx-auto" role="alert">
    <div class="row">
        @foreach ($errors->all() as $error)
            <div class="col-md-12">
                {{ $error }}
            </div>
        @endforeach
    </div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
