@extends('admin.layout')
@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Properties') }}</h1>
      <div>
         <button class="btn btn-sm btn-danger btn-icon-split delete_all"
            data-url="{{ route('admin.properties.bulk-delete') }}">
            <span class="icon text-white-50">
               <i class="fas fa-trash"></i>
            </span>
            <span class="text">{{ __('Bulk delete') }}</span>
         </button>
         <a href="{{ route('admin.properties.create') }}"
            class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
            <span class="icon text-white-50">
               <i class="fas fa-plus fa-sm text-white-50"></i>
            </span>
            {{ __('Add new') }}</a>
            <a href="{{ route('admin.properties.create') }}"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <span class="icon text-white-50">
               <i class="fas fa-plus fa-sm text-white-50"></i>
            </span>
            {{ __('Export to Execl') }}</a>
      </div>
   </div>
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">{{ __('Properties') }}</h6>
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
                     <th>{{ __('Description') }}</th>
                     <th>{{ __('Address') }}</th>
                     <th>{{ __('City') }}</th>
                     <th>{{ __('Postale code') }}</th>
                     <th>{{ __('Property Type') }}</th>
                     <th>{{ __('Transaction Type') }}</th>
                     <th>{{ __('Responsble') }}</th>
                     <th>{{ __('Price') }}</th>
                     <th>{{ __('Space') }}</th>
                     <th>{{ __('Balconies') }}</th>
                     <th>{{ __('Bedrooms') }}</th>
                     <th>{{ __('Bathrooms') }}</th>
                     <th>{{ __('Garages') }}</th>
                     <th>{{ __('Parking spaces') }}</th>
                     <th>{{ __('Are Pets allowed') }}</th>
                     <th>{{ __('Available') }}</th>
                     <th>{{ __('Actions') }}</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($properties as $property)
                     <tr>
                        <td><input type="checkbox"
                              class="sub_chk checkbox"
                              data-id="{{ $property->id }}"></td>
                        <td>{{ $property->name }}</td>
                        <td>{{ substr($property->description, 0, 10) }}</td>
                        <td>{{ $property->address }}</td>
                        <td>{{ $property->city }}</td>
                        <td>{{ $property->postale_code }}</td>
                        <td>{{ $property->type->name }}</td>
                        <td>{{ $property->transactionType->name }}</td>
                        <td>{{ $property->responsble }}</td>
                        <td>{{ $property->price }}</td>
                        <td>{{ $property->space }}</td>
                        <td>{{ $property->balconies }}</td>
                        <td>{{ $property->bedrooms }}</td>
                        <td>{{ $property->bathrooms }}</td>
                        <td>{{ $property->garages }}</td>
                        <td>{{ $property->parking_spaces }}</td>
                        <td>{{ $property->pets_allowed }}</td>
                        <td>{{ $property->available }}</td>
                        <td>
                           <form
                              action="{{ route('admin.properties.destroy', ['property' => $property->id]) }}"
                              method="post"
                              class="d-inline">
                              @csrf
                              @method('delete')
                              <button type="submit"
                                 class="btn btn-sm btn-danger shadow-sm">
                                 <i class="fas fa-trash"></i>
                              </button>
                           </form>
                           <a href="{{ route('admin.properties.edit', ['property' => $property->id]) }}"
                              class="d-inline btn btn-sm btn-primary shadow-sm">
                              <i class="fas fa-pencil"></i>
                           </a>
                        </td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection
