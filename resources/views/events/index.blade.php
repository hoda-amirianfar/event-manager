@extends('layouts.app')

@section('content')

@php $counter = 1; @endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Events</h3>
            <div class="card-body">
                <div id="table" >
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Begin</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Show</th>
                            @auth
                            <th class="text-center">Edit</th>
                            <th class="text-center">Remove</th>
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td class="pt-3-half" >{{ $counter++ }}</td>
                        <td class="pt-3-half" >{{ $event->title }}</td>
                        <td class="pt-3-half" >{{ $event->begin_at }}</td>
                        <td class="pt-3-half" >{{ $event->price }}</td>
                        <td class="pt-3-half" ><a href="/events/{{ $event->id }}" class="btn btn-warning btn-rounded btn-sm my-0">Show</a></td>
                        @auth
                        <td class="pt-3-half"> 
                            <form id="update-form-{{ $event->id }}" action="/events/{{ $event->id }}/edit" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-rounded btn-sm my-0">Edit</button>
                            </form>
                        </td>
                        <td class="pt-3-half">
                            <form id="delete-form-{{ $event->id }}" action="/events/{{ $event->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button>
                            </form> 
                        </td> 
                        @endauth 
                    </tr>
                    @endforeach
                    
                    @auth
                    <tr>
                        <td colspan="7" class="text-right">
                            <a href="/events/create" class="btn btn-success btn-rounded btn-sm my-0">Add New Event</a>
                        </td>
                    </tr>
                    @endauth
                    </tbody>
                </table>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>

@endsection