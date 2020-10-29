@extends('layouts.app')

@section('content')

@auth
<div class="container">
    <div class="row">
        <div class="col-9">
        <form method="post" action="/events" name="add-form" >
            @csrf
            <label for="title">Title</label>
            <input type="text" class="form-control form-control-sm" maxlength="50" name="title" id="title" value="" placeholder="Title" required />

            <div class="input-group mb-3">
            <select class="custom-select" id="category_id" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            <div class="input-group-append">
                <label class="input-group-text" for="category_id">Category</label>
            </div>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            
            <label for="link">Enter an https:// URL:</label>
            <input type="url" name="link" id="link" placeholder="https://example.com" pattern="https://.*" size="40" class="form-control form-control-sm">

            <div class="form-group">
                <div class='input-group date' id='begin_at'>
                    <input type='date' class="form-control" name="begin_at" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

                    <script type="text/javascript">
                        $(function () {
                            $('#begin_at').datetimepicker();
                        });
                    </script>
            
            <div class="form-group">
                <div class='input-group date' id='end_at'>
                    <input type='date' class="form-control" name="end_at" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

                    <script type="text/javascript">
                        $(function () {
                            $('#end_at').datetimepicker();
                        });
                    </script>

            <label for="count_subscriber">Subscriber</label>
            <input type="number" class="form-control form-control-sm" name="count_subscriber" id="count_subscriber" value="" min="0" max="1000" step="10" placeholder="100" />


            <label for="address">Address</label>
            <input type="text" class="form-control form-control-sm" name="address" id="address" value="" placeholder="City Zip Street no."  />


            <div class="input-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" aria-label="Euro amount (with dot and two decimal places)">
                <div class="input-group-append">
                    <span class="input-group-text">€</span>
                    <span class="input-group-text">0.00</span>
                </div>
            </div>

            <button type="submit" class="btn btn-success btn-rounded btn-sm my-0">Add</button>   

        </form>
        </div>
    </div>
</div>
@endauth

@endsection