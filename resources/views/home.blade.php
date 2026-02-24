@extends('layouts.content')

@section ('title', 'Home')

@section('content')
<div class="container mt-4">
    <h1>Laravel Features</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
            <th>ID</th>
            <th>Features Name</th>
            <th>Description</th>
            </tr>
        </thead>
        <tbody>
        @foreach($features as $feature)
                <tr>
                    <td>{{$feature -> id}}</td>
                    <td>{{$feature -> feature_name}}</td>
                    <td>{{$feature -> description}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection