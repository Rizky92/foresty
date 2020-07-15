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
                   {!! Form::model($gazetteer, ['route' => ['gazetteers.update', $gazetteer->id], 'method' => 'patch']) !!}

                        @include('backend.gazetteers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection