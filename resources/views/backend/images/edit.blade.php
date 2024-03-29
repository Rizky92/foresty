@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Image
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($image, ['route' => ['dashboard.images.update', $image->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('backend.images.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection