@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                WSDL print
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        Entity instance
                    </div>
                </div>
                @foreach ($data as $wsdlOperation)
                    <div class="row">
                        <div class="col-md-6">
                            {{$wsdlOperation['response']}}<br>
                            {{$wsdlOperation['request']}}<br>
                            {{$wsdlOperation['similar_entity']}}
                        </div>
                        <div class="col-md-6">
                            {{var_dump($wsdlOperation['entity_instance'])}}
                        </div>
                    </div>
                    <div>
                        <input class="form-control" type="text" placeholder="Service address" name="address_service" id="address_service">
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <button class="btn btn-primary">
                                Get response
                            </button>
                        </div>
                        @if (is_null($wsdlOperation['entity_instance']))
                        <div class="col-md-3">
                            <button class="btn btn-primary">
                                Create Entity
                            </button>
                        </div>
                        @endif
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection