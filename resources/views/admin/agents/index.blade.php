@extends('admin.layout')
@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Agents') }}</h1>
      @if (count($errors) > 0)
         @include('app.includes.alerts')
      @endif
   </div>
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">{{ __('Agents') }}</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered"
               id="dataTable"
               width="100%"
               cellspacing="0">
               <tr>
                  <th>{{ __('Name') }}</th>
                  <th>{{ __('Email') }}</th>
                  <th>{{ __('Role') }}</th>
                  <th>{{ __('Actions') }}</th>
               </tr>
               </thead>
               <tbody>
                  @foreach ($agents as $agent)
                     <tr>
                        <td>{{ $agent->name }}</td>
                        <td>{{ $agent->email }}</td>
                        <td><span
                              class="badge badge-primary">{{ $agent->roles()->first()->name }}</span>
                        </td>
                        <td>
                           <form action="{{ route('admin.agents.destroy', ['agent' => $agent->id]) }}"
                              method="post"
                              class="d-inline">
                              @csrf
                              @method('delete')
                              <button type="submit"
                                 class="btn btn-sm btn-danger shadow-sm">
                                 <i class="fas fa-trash"></i>
                              </button>
                           </form>

                           <button type="button"
                              class="btn btn-sm btn-success shadow-sm"
                              data-toggle="modal"
                              data-target="#propertyPreviewModal"
                              data-whatever="@mdo">
                              <i class="fas fa-eye"></i></button>

                           @include('admin.agents.show', $agent)
                        </td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection
