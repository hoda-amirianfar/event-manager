@extends('layouts.app')

@section('content')

@php $counter = 1; @endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Categories</h3>
            <div class="card-body">
                <div id="table" class="table-editable">
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td class="pt-3-half" contenteditable="true">{{ $counter++ }}</td>
                        <td class="pt-3-half" contenteditable="true">{{ $category->title }}</td>
                        <td class="pt-3-half">
                            <a href="/categories/{{ $category->id }}/update" onclick="event.preventDefault();
                                document.getElementById('update-form-{{ $category->id }}').submit();">
                                <i data-feather="edit" aria-hidden="true"></i>
                            </a>
                            <form id="update-form-{{ $category->id }}" action="/categories/{{ $category->id }}/update" method="POST" class="d-none">
                                @csrf
                                @method('PUT')
                            </form>
                        </td>
                        <td class="pt-3-half">
                            <form id="delete-form-{{ $category->id }}" action="/categories/{{ $category->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button>
                            </form>    
                        </td> 
                    </tr>
                    @endforeach
                    
                    @include('categories.create')
                    </tbody>
                </table>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>

@endsection