@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Koleksi Herbarium
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'koleksiHerbaria.store']) !!}

                        @include('backend.koleksi_herbaria.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
