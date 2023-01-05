@extends('app.layout')
@section('content')
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered"
               id="dataTable"
               width="100%"
               cellspacing="0">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Slug</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th>Name</th>
                     <th>Slug</th>
                     <th>Actions</th>
                  </tr>
               </tfoot>
               <tbody>
                  @forelse ($estateTypes as $type)
                     <tr>
                        <td>{{ $type->name }}</td>
                        <td>{{ $type->slug }}</td>
                        <td>
                           <a href="#"
                              class="btn btn-info btn-circle">
                              <i class="fa-solid fa-pen-to-square"></i>
                           </a>
                           <a href="#"
                              class="btn btn-danger btn-circle">
                              <i class="fas fa-trash"></i>
                           </a>
                        </td>
                     </tr>
                  @empty
                     <h1 class="h3 mb-1 text-gray-800">Nothing Found</h1>
                  @endforelse
               </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection
