@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Carousels
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($carousels, ['route' => ['carousels.update', $carousels->id], 'method' => 'patch']) !!}

                        @include('backend.carousels.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection