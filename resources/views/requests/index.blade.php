@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                List of requests
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <thead>
                    <tr>
                        <td>id project</td>
                        <td>service name</td>
                        <td>soap action</td>
                        <td>soap body</td>
                        <td>time request</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($requests as $request)
                        <tr>
                            <td>{{$request->id}}</td>
                            <td>{{$request->service}}</td>
                            <td>{{$request->soap_action}}</td>
                            <td>{{$request->body}}</td>
                            <td>{{$request->time}}</td>
                            <td>
                                <a href="{{url('/projects/'.$request->id.'/edit')}}">Edit</a><br>
                                <a href="">Delete</a><br>
                                <a href="{{url('/projects/'.$request->id.'/wsdl')}}">Go to advanture</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection