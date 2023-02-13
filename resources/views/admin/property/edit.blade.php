@extends('admin.layout')
@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Update property') }}</h1>
   </div>
   @if(count($errors) > 0)
   @include('admin.includes.alerts')
   @endif
   <div class="container">
      <form action="{{ route('admin.properties.update') }}"
         method="post">
         @csrf
         @method('put')
         <div class="card mb-3">
            <div class="card-body">
               <div class="row mb-2">
                  <div class="col">
                     <label class="col-sm-6 col-form-label">{{ __('Title') }}</label>
                     <div class="col-sm">
                        <input type="text"
                           name="title"
                           value="{{$property->title}}"
                           class="form-control"
                           placeholder="{{ __('A Nice Appartment') }}">
                     </div>
                     <label class="col-sm-6 col-form-label">{{ __('Price') }}</label>
                     <div class="col-sm">
                        <input type="number"
                           name="price"
                           class="form-control"
                           value="{{$property->price}}"
                           min="1"
                           placeholder="$">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <label class="col-form-label">{{ __('Type of Transaction') }}</label>
                     <select class="custom-select"
                        name="transaction_type">
                        <option selected>Open this select menu</option>
                        @foreach ($transactionTypes as $transactionType)
                           <option value="{{ $transactionType->id }}">{{ $transactionType->name }}
                           </option>
                        @endforeach
                     </select>
                  </div>
                  <div class="col">
                     <label class="col-form-label">{{ __('Type of Property') }}</label>
                     <select class="custom-select"
                        name="type_id">
                        <option selected>Open this select menu</option>
                        @foreach ($propertyTypes as $propertyType)
                           <option value="{{ $propertyType->id }}">{{ $propertyType->name }}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="row mb-3">
                  <div class="col-sm">
                     <label class="col-form-label">{{ __('Description') }}</label>
                     <textarea name="description"
                        class="form-control"
                        value="{{$property->description}}"
                        placeholder="{{ __('Exemple: Greate Neighborhoode') }}"></textarea>
                  </div>
               </div>
            </div>
         </div>
         <div class="card mb-3">
            <div class="card-body">
               <div class="row mb-2">
                  <div class="col-5">
                     <label class="col-form-label">{{ __('Address') }}</label>
                     <input type="text"
                        class="form-control"
                        aria-label="address"
                        value="{{$property->address}}"
                        placeholder="{{ __('Address') }}"
                        name="address">
                  </div>
                  <div class="col-5">
                     <label class="col-form-label">{{ __('City') }}</label>
                     <input type="text"
                        class="form-control"
                        aria-label="City"
                        value="{{$property->city}}"
                        placeholder="{{ __('City') }}"
                        name="city">
                  </div>
                  <div class="col-2">
                     <label class="col-form-label">{{ __('Postal Code') }}</label>
                     <input type="number"
                        class="form-control"
                        aria-label="postal_code"
                        placeholder="23034"
                        value="{{$property->postal-code}}"
                        name="postale_code">
                  </div>
               </div>
            </div>
         </div>
         <div class="card mb-3">
            <div class="card-body">
               <div class="row mb-2">
                  <div class="col-12">
                     <label for="amenities">{{ __('Amenities') }}
                        <button type="button"
                           class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"
                           data-toggle="modal"
                           data-target="#createModal"
                           data-whatever="@mdo">
                           <span class="icon text-white-50">
                              <i class="fas fa-plus fa-sm text-white-50"></i>
                           </span></button></label> <small
                        class="text-muted">{{ 'The page will be refreched!' }}</small>
                     <select name="amenities[]"
                        id="amenities"
                        multiple>
                        @foreach ($property->amenities() as $amenitie)
                           <option value="{{ $amenitie->id }}">{{ $amenitie->name }}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="row py-3">
                  <div class="col-sm-4">
                     <label class="form-label">{{ __('Balconies') }}</label>
                     <input type="number"
                        class="form-control"
                        max="10"
                        min="0"
                        value="{{$property->balconies}}"
                        placeholder="{{ __('Balconies') }}"
                        name="balconies">
                  </div>
                  <div class="col-sm-4">
                     <label class="form-label">{{ __('Bedrooms') }}</label>
                     <input type="number"
                        value="{{$property->bedrooms}}"
                        class="form-control"
                        placeholder="{{ __('Bedrooms') }}"
                        max="10"
                        min="0"
                        name="bedrooms">
                  </div>
                  <div class="col-sm-4">
                     <label class="form-label">{{ __('Bathrooms') }}</label>
                     <input type="number"
                        value="{{$property->bathrooms}}"
                        class="form-control"
                        placeholder="{{ __('Bathrooms') }}"
                        max="10"
                        min="0"
                        name="bathrooms">
                  </div>
               </div>
               <div class="row py-3">
                  <div class="col-4">
                     <label class="form-label">{{ __('Garages') }}</label>
                     <input type="number"
                        value="{{$property->garages}}"
                        class="form-control"
                        placeholder="{{ __('Garages') }}"
                        max="10"
                        min="0"
                        name="garages">
                  </div>
                  <div class="col-4">
                     <label class="form-label">{{ __('Property Space') }}</label>
                     <input type="number"
                        value="{{$property->space}}"
                        class="form-control"
                        placeholder="{{ __('100 m') }}"
                        max="10"
                        min="0"
                        name="space">
                  </div>
                  <div class="col-4">
                     <label class="form-label">{{ __('Parking spaces') }}</label>
                     <input type="number"
                        value="{{$property->parking_spaces}}"
                        class="form-control"
                        placeholder="{{ __('Parking spaces') }}"
                        max="10"
                        min="0"
                        name="parking_spaces">
                  </div>
               </div>
               <div class="row p-3">
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox"
                        class="custom-control-input"
                        name="pets_allowed"
                        id='pets_allowed'
                        value='1'
                        >
                     <label class="custom-control-label"
                        for="pets_allowed">Check this if pets are allowed</label>
                  </div>
               </div>
            </div>
         </div>
         <div class="input-group mb-3">
            <div class="input-group-prepend">
               <span class="input-group-text"
                  id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
               <input type="file"
                  class="custom-file-input"
                  id="inputGroupFile01"
                  name="media"
                  aria-describedby="inputGroupFileAddon01" multiple>
               <label class="custom-file-label"
                  for="inputGroupFile01">Choose Property Images</label>
            </div>
         </div>
         <button type="submit"
            class="btn btn-primary btn-lg btn-block">{{ __('Create new Property') }}</button>
      </form>

       <!-- begin create new amenity modal 
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
      end create model  -->
   </div>
@endsection
