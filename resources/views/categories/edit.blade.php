@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-5 ">
            @auth
            <form method="post" action="/categories/{{ $category->id }}" name="add-form" >
                @csrf
                @method('PUT')
                <label for="title" >Title</label>
                <input type="text" class="form-control form-control-sm" maxlength="50" name="title" id="title" value="{{ $category->title }}" placeholder="Title" required />
                <button type="submit" class="btn btn-primary btn-rounded btn-sm my-0 mt-2">Update</button>                                     
            </form>
            @endauth
        </div>    
    </div>
</div>


@endsection