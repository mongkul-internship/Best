@extends('layouts.master')
@section('content')
    <div class="container">
        <form action="{{ 'store' }}" method="post">
            {{ csrf_field() }}
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
            <label for="age">Age</label>
            <input type="text" class="form-control" id="age" name="age">
            <label for="description">Description</label>
            <textarea type="text" id="description" class="form-control" rows="8" name="description">Say about you...</textarea>
            <div class="text-center"  style="padding-top: 15px">
                <button class="btn-primary btn" type="submit">Create New</button>
            </div>
        </form>
    </div>
@endsection 