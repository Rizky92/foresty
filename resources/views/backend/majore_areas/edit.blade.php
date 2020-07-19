@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Majore Area
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($majoreArea, ['route' => ['majoreAreas.update', $majoreArea->id], 'method' => 'patch']) !!}

                        @include('backend.majore_areas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection