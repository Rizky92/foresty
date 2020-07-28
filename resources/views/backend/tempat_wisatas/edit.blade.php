@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tempat Wisata
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tempatWisata, ['route' => ['dashboard.tempatWisatas.update', $tempatWisata->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('backend.tempat_wisatas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
