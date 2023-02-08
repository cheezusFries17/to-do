@extends('layouts.app')

@section('title')
    Details
@endsection

@section('content')

<div class="card text-center mt-5">
    <div class="card-header">
        <b>TODO DETAILS</b>
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$todos->name}}</h5>
        <p class="card-text">{{$todos->description}}.</p>
        <a href="{{route('todo.edit',[$todos->id])}}"><span class="btn btn-primary">Edit</span></a>
        <a href="{{route('todo.delete',[$todos->id])}}"><span class="btn btn-danger">Delete</span></a>
    </div>
</div>

@endsection
