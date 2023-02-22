@extends('admin.layout')
@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Users') }}</h1>
      @if (count($errors) > 0)
         @include('app.includes.alerts')
      @endif
      <div>
         <button class="btn btn-sm btn-danger btn-icon-split delete_all"
            data-url="{{ route('admin.users.bulk-delete') }}">
            <span class="icon text-white-50">
               <i class="fas fa-trash"></i>
            </span>
            <span class="text">{{ __('Bulk delete') }}</span>
         </button>
      </div>
   </div>
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">{{ __('Users') }}</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered"
               id="dataTable"
               width="100%"
               cellspacing="0">
               <thead>
                  <tr>
                     <th>{{ __('Name') }}</th>
                     <th>{{ __('Email') }}</th>
                     <th>{{ __('Role') }}</th>
                     <th>{{ __('Actions') }}</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($users as $user)
                     <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles }}</td>
                        <td>
                           <form
                              action="{{ route('admin.users.destroy', ['user' => $user->id]) }}"
                              method="post"
                              class="d-inline">
                              @csrf
                              @method('delete')
                              <button type="submit"
                                 class="btn btn-sm btn-danger shadow-sm">
                                 <i class="fas fa-trash"></i>
                              </button>
                           </form>
                           <button type="submit"
                              class="d-inline btn btn-sm btn-primary shadow-sm"
                              data-toggle="modal"
                              data-target="#editModal">
                              <i class="fas fa-pencil"></i>
                           </button>
                        </td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection
