@extends('layouts.master')
@section('content')
    <div class="container">
        <form action="store" method="post">
            {{ csrf_field() }}
            <label for="name">Nam</label>
            <input type="text" class="form-control" id="name">
            <label for="age">Age</label>
            <input type="text" class="form-control" id="age">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" id="description" class="form-controller"></textarea>
            <div class="text-center"  style="padding-top: 15px">
                <button class="btn-primary btn" type="submit">Create New</button>
            </div>
        </form>
    </div>
@endsection 