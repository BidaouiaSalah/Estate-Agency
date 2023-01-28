@extends('app.layout')
@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Amenities') }}</h1>
      <div>
         <button class="btn btn-sm btn-danger btn-icon-split delete_all"
            data-url="{{ route('admin.amenities.bulk-delete') }}">
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
         <h6 class="m-0 font-weight-bold text-primary">{{ __('Amenities') }}</h6>
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
                           id="master"> <span class="px-3">{{ __('Select all') }}</span></th>
                     <th>{{ __('Name') }}</th>
                     <th>{{ __('Actions') }}</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($amenities as $amenity)
                     <tr>
                        <td><input type="checkbox"
                              class="sub_chk checkbox"
                              data-id="{{ $amenity->id }}"></td>
                        <td>{{ $amenity->name }}</td>
                        <td>
                           <form
                              action="{{ route('admin.amenities.destroy', ['amenity' => $amenity->id]) }}"
                              method="post"
                              class="d-inline">
                              @csrf
                              @method('delete')
                              <button type="submit"
                                 class="btn btn-sm btn-danger shadow-sm show_confirm">
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
                     {{-- begin edit Amenity modal --}}
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
                                    id="editModalLabel">{{ __('Update Amenity') }}</h5>
                                 <a class="close"
                                    data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                 </a>
                              </div>
                              <div class="modal-body">
                                 <form action="{{ route('admin.amenities.update', [$amenity->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                       <label for="recipient-name"
                                          class="col-form-label">{{ __('Name') }}:</label>
                                       <input type="text"
                                          class="form-control"
                                          value="{{ $amenity->name }}"
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
   {{-- begin create new amenity modal --}}
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
                  id="createModalLabel">{{ __('New amenity') }}</h5>
               <a class="close"
                  data-dismiss="modal"
                  aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </a>
            </div>
            <div class="modal-body">
               <form action="{{ route('admin.amenities.store') }}"
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
