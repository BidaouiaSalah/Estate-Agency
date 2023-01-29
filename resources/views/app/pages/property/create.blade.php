@extends('app.layout')
@section('content')
   <div class="container">
      <div class="row py-4">
         <div class="col">
            <div class="text-center">
               <h1>{{ __('Create new property') }}</h1>
               <p class="lead">{{ __('Please folllow all the steps') }}</p>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-md-12 col-lg-12">
            <form action=""
               method="post"
               id="registration">
               <nav>
                  <div class="nav nav-pills nav-fill"
                     id="nav-tab"
                     role="tablist">
                     <a class="nav-link active"
                        id="step1-tab"
                        data-bs-toggle="tab"
                        href="#step1">Step 1</a>
                     <a class="nav-link"
                        id="step2-tab"
                        data-bs-toggle="tab"
                        href="#step2">Step 2</a>
                     <a class="nav-link"
                        id="step3-tab"
                        data-bs-toggle="tab"
                        href="#step3">Step 3</a>
                  </div>
               </nav>
               <div class="tab-content py-4">
                  <div class="tab-pane fade show active"
                     id="step1">
                     <div class="py-4">
                        <h5 class="text-dark">{{ __('Type of Transaction') }}</h5>
                        @foreach ($transactionTypes as $transaction)
                           <input type="radio"
                              name="field1"
                              class="form-radio"
                              value="{{ $transaction->id }}"
                              required>
                           <label for="field1">{{ $transaction->name }}</label>
                        @endforeach
                     </div>
                     <div>
                        <h5 class="text-dark">{{ __('Type of Property') }}</h5>
                        @foreach ($propertyTypes as $propertyType)
                           <input type="radio"
                              name="field1"
                              class="form-radio"
                              value="{{ $propertyType->id }}"
                              required>
                           <label for="field1">{{ $propertyType->name }}</label>
                        @endforeach
                     </div>
                  </div>
                  <div class="tab-pane fade"
                     id="step2">
                     <h4>Contact information</h4>
                     <div class="mb-3">
                        <label for="field4">Required field 1</label>
                        <input type="text"
                           name="field4"
                           class="form-control"
                           id="field4"
                           required>
                     </div>
                     <div class="mb-3">
                        <label for="field5">Optional field</label>
                        <input type="text"
                           name="field5"
                           class="form-control"
                           id="field5">
                     </div>
                     <div class="mb-3">
                        <label for="textarea1">Required field 2</label>
                        <textarea name="textarea1"
                           rows="5"
                           class="form-control"
                           id="textarea1"
                           required></textarea>
                     </div>
                  </div>
                  <div class="tab-pane fade"
                     id="step3">
                     <h4>Review your information</h4>
                     <div class="mb-3">
                        <label for="first_name">Required field 1</label>
                        <input type="text"
                           class="form-control-plaintext"
                           value="Lorem ipsum dolor sit amet">
                     </div>
                     <div class="mb-3">
                        <label for="first_name">Optional field</label>
                        <input type="text"
                           class="form-control-plaintext"
                           value="Lorem ipsum dolor sit amet">
                     </div>
                     <div class="mb-3">
                        <label for="first_name">Required field 2</label>
                        <input type="text"
                           class="form-control-plaintext"
                           value="Lorem ipsum dolor sit amet">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-between">
                  <div class="col-auto"><button type="button"
                        class="btn btn-secondary"
                        data-enchanter="previous">Previous</button></div>
                  <div class="col-auto">
                     <button type="button"
                        class="btn btn-primary"
                        data-enchanter="next">Next</button>
                     <button type="submit"
                        class="btn btn-primary"
                        data-enchanter="finish">Finish</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection
