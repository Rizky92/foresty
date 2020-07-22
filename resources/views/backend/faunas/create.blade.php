@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Fauna
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'dashboard.faunas.store', 'files' => true]) !!}

                        @include('backend.faunas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
