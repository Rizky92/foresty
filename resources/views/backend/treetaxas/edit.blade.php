@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Treetaxa
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($treetaxa, ['route' => ['dashboard.treetaxas.update', $treetaxa->id], 'method' => 'patch']) !!}

                        @include('backend.treetaxas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection