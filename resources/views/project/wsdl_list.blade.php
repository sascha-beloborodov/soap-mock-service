@extends('layouts.app')

@section('content')
    <div class="container">
        <link rel="" href="http://yandex.ru" type="text/html">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                WSDL print
            </div>
        </div>
        <div class="row">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <input type="hidden" name="project_id" id="project_id" value="{{$project_id}}" />
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-5">

                    </div>
                    <div class="col-md-7">
                        Entity instance
                    </div>
                </div>
                @foreach ($data as $wsdlOperation)
                    <div class="row item">
                        <div class="row wsdl-info">
                            <div class="col-md-5">
                                <div>
                                    <b>Response:</b>
                                    <span class="name-response">{{$wsdlOperation['response']}}</span>
                                </div>
                                <br>
                                <div>
                                    <b>Request (with params):</b>
                                    <span class="name-request-with-params">{{$wsdlOperation['request']}}</span>
                                </div>
                                <br>
                                <div>
                                    <b>SOAP method:</b>
                                    <span class="soap-method">{{$wsdlOperation['request_operation']}}</span>
                                </div>
                                <br>
                                <div>
                                    <b>Entity:</b>
                                    <span class="entity">{{$wsdlOperation['similar_entity']}}</span>
                                </div>

                            </div>
                            <div class="col-md-7 entity-area">
                                {{$wsdlOperation['entity_instance']}}
                            </div>
                        </div>
                        <div class="row wsdl-address">
                            <div class="col-md-5">
                                <input class="form-control" type="text" placeholder="Service address" name="address_service" id="address_service">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
{{--                                <button class="btn btn-primary js-get-response"@if(is_null($wsdlOperation['entity_instance'])) disabled @endif>--}}
                                <button class="btn btn-primary js-get-response">
                                    Get response
                                </button>
                            </div>
                            @if (is_null($wsdlOperation['entity_instance']))
                                <div class="col-md-5">
                                    <button class="btn btn-primary js-create-entity" id="{{$wsdlOperation['response']}}">
                                        Create Entity
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-7 result-response">
                                <pre><code></code></pre>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
    <script id="xml-response" type="application/xml"></script>
@endsection