@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Minor Area
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($minorArea, ['route' => ['minorAreas.update', $minorArea->id], 'method' => 'patch']) !!}

                        @include('backend.minor_areas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection