@extends('layouts.app');

@section('content')
   <div class="container">
      <div class="card">
         <div class="card-header">
            <h1>Lista Tags</h1>
            <a href="{{ route('admin.tags.create') }}" class="btn btn-warning">Crea tag</a>
         </div>
         <div class="card-body">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Name</th>
                     <th scope="col">Slug</th>
                     <th scope="col">Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($tags as $tag)
                     <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>{{ $tag->slug }}</td>
                        <td>
                           <a href="{{ route('admin.tags.show', $tag->id) }}" class="btn btn-primary">Visualizza</a>
                           <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-success">Modifica</a>
                           <form style="display: inline-block" action="{{ route('admin.tags.destroy', $tag->id) }}"
                              method="POST">
                              @csrf
                              @method('DELETE')

                              <button type="submit" class="btn btn-danger">Cancella</button>
                           </form>
                        </td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection
