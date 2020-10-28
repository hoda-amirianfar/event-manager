<div class="row flex-spaces">   
@if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endforeach
    @endif
</div>