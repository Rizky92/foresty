@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Major Area
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($majorArea, ['route' => ['majorAreas.update', $majorArea->id], 'method' => 'patch']) !!}

                        @include('backend.major_areas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection