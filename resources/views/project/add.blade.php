@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form method="post" action="/projects/store" enctype="multipart/form-data">
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    <div class="form-group">
                        <label for="name">Project name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Project name" required>
                    </div>

                    <div class="form-group">
                        <label for="wsdl_file">File input</label>
                        <input type="file" id="wsdl_file" name="wsdl_file" required>
                        <p class="help-block">put file with extension *.wsdl</p>
                    </div>

                    <div class="form-group">
                        <label for="wsdl_name">Wsdl name</label>
                        <input type="text" class="form-control wsdl_name" id="wsdl_name" placeholder="wsdl name" disabled required>
                        <input type="hidden" class="form-control wsdl_name" name="wsdl_name">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection