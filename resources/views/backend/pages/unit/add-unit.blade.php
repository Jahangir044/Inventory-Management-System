@extends('backend.layout.template')

@section('body')
@if(session()->has('success'))

<script type="text/javascript">

 $(function(){
   $.notify("{{ session()->get('success') }}",{globalPosition:'top right',className:'success'});
 });

</script>

@endif

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Add Unit</h4>

    </div>
  </div>

  <div class="br-pagebody">
    <div class="row row-sm">
        <div class="card col-md-12 shadow-base bd-0 mg-t-20 widget-4">
            <div class="card-header">
              <div class="hidden-xs-down">
                <h2 class="text-secondary">Add Unit</h2>
              </div>
              <div class="tx-24 hidden-xss-down">
                <a href="{{ route('units.view') }}" class="btn btn-info btn-sm float-right text-white"><i class="fa fa-list"></i>Unit List</a>
            
              </div>
            </div><!-- card-header -->
           
              <form action="{{ route('units.store') }}" method="POST" id="form" data-parsley-validate="" >
                @csrf
                <div class="br-section-wrapper">
                  <div class="form-layout form-layout-1">

                    <div class="row mg-b-25">
                     
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Name<span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="name" value="{{ old('name') }}"   data-parsley-trigger="keyup" required="" >

                          @error('name')
                          <span class="invalid-feedback " role="alert">
                              <strong > {{ $message }}</strong>
                          </span>        
                          @enderror 
                        </div>
                      </div>
  
                    </div>
        
                    <div class="form-layout-footer">
                      <button class="btn btn-info" type="submit" value="submit">Submit</button>

                    </div>
  
                  </div>
                </div>
                
              </form>
            
          </div>

    </div>

  </div>

  <script type="text/javascript">
    $(function () {
      $('#form').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
      })
      .on('form:submit', function() {
        return false; // Don't submit form for this demo
      });
    });
    </script>
  
@endsection

