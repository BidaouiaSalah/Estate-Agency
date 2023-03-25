 <!-- Modal -->
 <div class="modal fade"
    id="propertyPreviewModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog"
       role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title"
                id="exampleModalLongTitle">{{ $property->title }}</h5>
             <button type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">
             <div class="container-fluid">
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Property Type:') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->type->name }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Transaction Type:') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->transactionType->name }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Address:') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->address }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('City:') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->city }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Postal code:') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->postal_code }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Price:') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ '$' . $property->price }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Space:') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->space }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Are Pets allowed?') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->pets_allowed ? 'Yes' : 'No' }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Still Availible?') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->availible ? 'Yes' : 'No' }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Balconies') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->balconies }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Bedrooms') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->bedrooms }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Bathrooms') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->bathrooms }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Garages') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->garages }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Still Availible?') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->availible ? 'Yes' : 'No' }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Parking spaces') }}</h6>
                   </div>
                   <div class="col-md-6 ml-auto">
                      <p>{{ $property->parking_spaces }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                      {{ $property->getFirstMedia('images') }}
                   </div>
                </div>
             </div>
          </div>
          <div class="modal-footer">
             <button type="button"
                class="btn btn-secondary"
                data-dismiss="modal">Close</button>
             <button type="button"
                class="btn btn-primary">Save changes</button>
          </div>
       </div>
    </div>
 </div>
