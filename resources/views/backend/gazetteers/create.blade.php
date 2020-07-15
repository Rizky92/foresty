@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Gazetteer
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'gazetteers.store']) !!}

                        @include('backend.gazetteers.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
