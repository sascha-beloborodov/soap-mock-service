@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                List of projects
                <br>
                <a href="{{ url('/project/create') }}">Add project</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <thead>
                        <tr>
                            <td>id project</td>
                            <td>project name</td>
                            <td>wsdl name</td>
                            <td>wsdl path</td>
                            <td>username</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{$project->id}}</td>
                                <td>{{$project->name}}</td>
                                <td>{{$project->wsdl_name}}</td>
                                <td>{{$project->wsdl_path}}</td>
                                <td>{{$project->user->name}}</td>
                                <td>
                                    <a href="{{url('/projects/'.$project->id.'/edit')}}">Edit</a><br>
                                    <a href="">Delete</a><br>
                                    <a href="{{url('/projects/'.$project->id.'/wsdl')}}">Go to advanture</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection