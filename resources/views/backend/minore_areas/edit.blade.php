@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Minore Area
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($minoreArea, ['route' => ['minoreAreas.update', $minoreArea->id], 'method' => 'patch']) !!}

                        @include('backend.minore_areas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection