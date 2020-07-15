@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Treetexa
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($treetexa, ['route' => ['treetexas.update', $treetexa->id], 'method' => 'patch']) !!}

                        @include('backend.treetexas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection