@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="card-header">
         <h1>Modifica: {{ $tag->id }}</h1>
         <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Visualizza tags</a>
      </div>
      <div class="card-body">
         <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
               <label for="title" class="">Nome</label>
               <input type="text" class="form-control " name="name" value="{{ old('name', $tag->name) }}">
            </div>

            <div class="form-group">
               <button type="submit" class="btn btn-success">Modifica</button>
            </div>

         </form>
      </div>
   </div>
@endsection
