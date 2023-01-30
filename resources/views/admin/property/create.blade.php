@extends('admin.layout')
@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Add new property') }}</h1>
   </div>
   <div class="container">
      <form>
         <div class="row mb-2">
            <div class="col">
               <label class="col-sm col-form-label">{{ __('Title') }}</label>
               <div class="col-sm">
                  <input type="text"
                     name="name"
                     class="form-control">
               </div>
            </div>
            <div class="col">
               <label class="col-sm col-form-label">{{ __('Price') }}</label>
               <div class="col-sm">
                  <input type="number"
                     name="price"
                     class="form-control">
               </div>
            </div>
         </div>
         <div class="row mb-3">
            <div class="col-sm">
            <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
               <textarea name="description"
                  class="form-control"></textarea>
            </div>
         </div>
         <div class="row mb-3">
            <div class="col-sm-7">
               <label class="col-sm-2 col-form-label">{{ __('Address') }}</label>
               <input type="text"
                  class="form-control"
                  aria-label="address"
                  name="address">
            </div>
            <div class="col-sm">
               <label class="col-sm-2 col-form-label">{{ __('City') }}</label>
               <input type="text"
                  class="form-control"
                  aria-label="City"
                  name="city">
            </div>
            <div class="col-sm">
               <label class="col col-form-label">{{ __('Postal Code') }}</label>
               <input type="text"
                  class="form-control"
                  aria-label="postale_code"
                  name="postale_code">
            </div>
         </div>
         <div class="row gx-3 gy-2 align-items-center">
            <div class="col-sm-3">
               <label class="form-label">{{ __('Balconies') }}</label>
               <input type="number"
                  class="form-control"
                  name="balconies">
            </div>
            <div class="col-sm-3">
               <label class="form-label">{{ __('Bedrooms') }}</label>
               <input type="number"
                  class="form-control"
                  name="bedrooms">
            </div>
            <div class="col-sm-2">
               <label class="form-label">{{ __('Bathrooms') }}</label>
               <input type="number"
                  class="form-control"
                  name="bathrooms">
            </div>
            <div class="col-sm-2">
               <label class="form-label">{{ __('Garages') }}</label>
               <input type="number"
                  class="form-control"
                  name="garages">
            </div>
            <div class="col-sm-2">
               <label class="form-label">{{ __('Parking spaces') }}</label>
               <input type="number"
                  class="form-control"
                  name="parking_spaces">
            </div>
         </div>
         <hr>
         <div class="row mb-3">
            <label class="col-form-label col-sm-2 pt-0">{{ __('Type of Transaction') }}</label>
            <div class="form-check mx-3">
               <input class="form-check-input"
                  type="radio"
                  name="transactionType"
                  id="transactionType">
               <label class="form-check-label"
                  for="transactionType">
                  First radio
               </label>
            </div>
         </div>
         <div class="row mb-3">
            <label class="col-form-label col-sm-2 pt-0">{{ __('Type of Property') }}</label>
            <div class="form-check mx-3">
               <input class="form-check-input"
                  type="radio"
                  name="propertyType"
                  id="propertyType"
                  value="option">
               <label class="form-check-label"
                  for="propertyType">
                  First radio
               </label>
            </div>
         </div>
         <div class="row mb-3">
            <label
               class="col-form-label col-sm-2 pt-0">{{ __('Are Pets Allowed') . ' ' . '?' }}</label>
            <div class="form-check mx-3">
               <input class="form-check-input"
                  type="radio"
                  name="pets_allowed"
                  id="pets_allowed"
                  value="option">
               <label class="form-check-label"
                  for="pets_allowed">
                  Yes
               </label>
            </div>
            <div class="form-check mx-3">
               <input class="form-check-input"
                  type="radio"
                  name="pets_allowed"
                  id="pets_allowed"
                  value="option">
               <label class="form-check-label"
                  for="pets_allowed">
                  No
               </label>
            </div>
         </div>
         <button type="submit"
            class="btn btn-primary">Sign in</button>
      </form>
   </div>
@endsection
