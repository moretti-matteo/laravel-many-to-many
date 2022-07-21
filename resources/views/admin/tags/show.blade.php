@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="card">
         <div class="card-header">
            <h1>Tag: {{ $tag->name }}</h1>
            <a href="{{ route('admin.tags.index') }}" class="btn btn-primary">Visualizza Tags</a>
            <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-success">Modifica Tag</a>

         </div>
         <div class="card-body">

            <div>
               Tag: {{ $tag->name }}
            </div>
         </div>
      </div>
   </div>
@endsection
