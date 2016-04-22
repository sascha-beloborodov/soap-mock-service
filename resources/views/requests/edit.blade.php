@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                Request
            </div>

            <div class="col-md-10 col-md-offset-1">
                <b>From service:</b> {{$request->service}}
            </div>

            <div class="col-md-10 col-md-offset-1">
                <b>When?:</b> {{date('Y-m-d H:i:s', $request->time)}}
            </div>

            <div class="col-md-10 col-md-offset-1">
                <b>Code ns1:</b> {{$request->request_code}}
            </div>
        </div>
        <form class="form-horizontal" method="post" action="{{ url("/requests/{$request->id}/edit") }}">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Request Body:</label>
                <div class="col-md-10">
                    <textarea type="email" class="form-control" style="height: 450px;" disabled>{{$request->body}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Projects:</label>
                <div class="col-md-10">
                    <select name="project_id" id="" class="form-control">
                        <option value="">The request does not have a project</option>
                        @foreach($projects as $project)
                            @if ($project->id == $request->project_id)
                                <option value="{{$project->id}}" selected>{{$project->name}}</option>
                            @else
                                <option value="{{$project->id}}">{{$project->name}}</option>
                            @endif
                        @endforeach
                    </select>
                    <select name="entity" id="" class="form-control">
                        <option value="">No entity</option>
                        @foreach($types as $type)
                            <option value="{{$type}}">{{$type}}</option>
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-md-10">
                    <button type="submit" class="btn btn-default">Apply</button>
                </div>
            </div>
        </form>
    </div>
@endsection