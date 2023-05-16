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
                id="exampleModalLongTitle">{{ __('Agent Details') }}</h5>
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
                      <h6 class="text-dark">{{ __('Name') }} :</h6>
                   </div>
                   <div class="col-md-6 mr-auto">
                      <p>{{ $agent->name }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Email') }} :</h6>
                   </div>
                   <div class="col-md-6 mr-auto">
                      <p>{{ $agent->email }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Role') }} :</h6>
                   </div>
                   <div class="col-md-6 mr-auto">
                      <p>{{ $agent->roles()->first()->name }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Address') }} :</h6>
                   </div>
                   <div class="col-md-6 mr-auto">
                      <p>{{ $agent->address }}</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <h6 class="text-dark">{{ __('Phone') }} :</h6>
                   </div>
                   <div class="col-md-6 mr-auto">
                      <p>{{ $agent->phone }}</p>
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
