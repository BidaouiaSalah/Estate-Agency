@extends('admin.layout')
@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Property Types') }}</h1>
      @if (count($errors) > 0)
         @include('admin.includes.alerts')
      @endif
      <div>
         <button class="btn btn-sm btn-danger btn-icon-split delete_all"
            data-url="{{ route('admin.property-types.bulk-delete') }}">
            <span class="icon text-white-50">
               <i class="fas fa-trash"></i>
            </span>
            <span class="text">{{ __('Bulk delete') }}</span>
         </button>
         <button type="button"
            class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"
            data-toggle="modal"
            data-target="#createModal"
            data-whatever="@mdo">
            <span class="icon text-white-50">
               <i class="fas fa-plus fa-sm text-white-50"></i>
            </span>
            {{ __('Add new') }}</button>
      </div>
   </div>
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">{{ __('Property Types') }}</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered"
               id="dataTable"
               width="100%"
               cellspacing="0">
               <thead>
                  <tr>
                     <th><input type="checkbox"
                           id="master"></th>
                     <th>{{ __('Name') }}</th>
                     <th>{{ __('Actions') }}</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($propertyTypes as $type)
                     <tr>
                        <td><input type="checkbox"
                              class="sub_chk checkbox"
                              data-id="{{ $type->id }}"></td>
                        <td>{{ $type->name }}</td>
                        <td>
                           <form
                              action="{{ route('admin.property-types.destroy', ['property_type' => $type->id]) }}"
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
                              data-target="#editModal"
                              data-whatever="{{ $type->name }}">
                              <i class="fas fa-pencil"></i>
                           </button>
                        </td>
                     </tr>
                     {{-- begin edit Property type modal --}}
                     <div class="modal fade"
                        id="editModal"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="editModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog"
                           role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title"
                                    id="editModalLabel">{{ __('Update Type') }}</h5>
                                 <a class="close"
                                    data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                 </a>
                              </div>
                              <div class="modal-body">
                                 <form
                                    action="{{ route('admin.property-types.update', [$type->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                       <label for="recipient-name"
                                          class="col-form-label">{{ __('Name') }}:</label>
                                       <input type="text"
                                          class="form-control"
                                          value="{{ $type->name }}"
                                          name="name">
                                    </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="button"
                                    class="btn btn-secondary"
                                    data-dismiss="modal">{{ __('Close') }}</button>
                                 <button type="submit"
                                    class="btn btn-primary">{{ __('Update') }}</button>
                              </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     {{-- end modal --}}
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
   {{-- begin create new Property type modal --}}
   <div class="modal fade"
      id="createModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="createModalLabel"
      aria-hidden="true">
      <div class="modal-dialog"
         role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title"
                  id="createModalLabel">{{ __('New Type') }}</h5>
               <a class="close"
                  data-dismiss="modal"
                  aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </a>
            </div>
            <div class="modal-body">

               <form action="{{ route('admin.property-types.store') }}"
                  method="post">
                  @csrf
                  <div class="form-group">
                     <label for="recipient-name"
                        class="col-form-label">{{ __('Name') }}</label>
                     <input type="text"
                        class="form-control"
                        name="name">
                  </div>
            </div>
            <div class="modal-footer">
               <button type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal">{{ __('Close') }}</button>
               <button type="submit"
                  class="btn btn-primary">{{ __('Save') }}</button>
            </div>
            </form>
         </div>
      </div>
   </div>
   {{-- end create model --}}
@endsection
