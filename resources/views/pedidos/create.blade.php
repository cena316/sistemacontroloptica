@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{ route('articulos.store') }}" class="form-horizontal">

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection