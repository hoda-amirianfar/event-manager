@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-9">

            <div ><label for="title" class="text-primary font-weight-bold">Title :</label> {{ $event->title }}</div>
            

            <div ><label for="Category" class="text-primary font-weight-bold">Category :</label>

            @foreach($categories as $category)
                @if($category->id == $event->category_id)
                    {{ $category->title }}
                @endif
            @endforeach </div>

            <div ><label for="description" class="text-primary font-weight-bold">Description: </label>{{ $event->description }} </div>
            
            <div ><label for="link" class="text-primary font-weight-bold">URL: </label><a href="{{ $event->link}}" >Go to Link</a></div>

            <div ><label for="begin_at" class="text-primary font-weight-bold">Begin: </label>{{ $event->begin_at }}</div>

            <div ><label for="end_at" class="text-primary font-weight-bold">End: </label>{{ $event->end_at }}</div>

            <div ><label for="count_subscriber" class="text-primary font-weight-bold">Subscriber: </label>{{ $event->count_subscriber }}</div>

            <div ><label for="address" class="text-primary font-weight-bold">Address: </label>{{ $event->address }}</div>

            <div ><label for="price" class="text-primary font-weight-bold">Price: </label>{{ $event->price }} €</div>

        </div>
    </div>
</div>


@endsection