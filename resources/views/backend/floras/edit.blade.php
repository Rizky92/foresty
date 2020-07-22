@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Flora
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($flora, ['route' => ['dashboard.floras.update', $flora->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('backend.floras.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection