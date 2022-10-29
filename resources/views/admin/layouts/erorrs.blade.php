@if (Session::has('errors'))
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>erorr !</strong><br>

            {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <br>
    @endforeach
@endif
@if (Session::has('messege'))
    {{ $messege }}
@endif
