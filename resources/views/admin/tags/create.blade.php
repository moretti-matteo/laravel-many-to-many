@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="card-header">
         <h1>Insersci tag</h1>
         <a href="{{ route('admin.tags.index') }}" class="btn btn-primary">Visualizza tags</a>

      </div>
      <div class="card-body">
         <form action="{{ route('admin.tags.store') }}" method="POST">
            @csrf

            <div class="form-group">
               <label for="title" class="">Nome</label>
               <input type="text" class="form-control" name="name" value="{{ old('name') }}">

            </div>


            <div class="form-group">
               <button type="submit" class="btn btn-primary">Crea</button>

            </div>

         </form>
      </div>
   </div>
@endsection
