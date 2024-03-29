@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Berita
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($berita, ['route' => ['dashboard.beritas.update', $berita->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('backend.beritas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
