@extends('layouts/contentNavbarLayout')

 
@section('title', 'Lead - Valuation')

@section('content')
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css" />
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/flatpickr/flatpickr.css" />
<style>
.dz-message {
    font-weight: 1;
     margin: 0;
    text-align: center;
}
.dz-message {
    font-size:12px;
}
.dropzone:not(.dz-clickable) {
    cursor: pointer;
    opacity: 1;
}
</style>
<!-- Vendor Styles -->
<div class="col-xl-12">
    <h6 class="text-muted">valuation</h6>
    @if (Session::has('success'))
      <div class="alert alert-success">
          {{ Session::get('success') }}
      </div>
  @endif
    <div class="nav-align-top mb-4">
      <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true"><i class="tf-icons bx bx-car me-1"></i> Step 1 </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false"><i class="tf-icons bx bx-car me-1"></i>  Step 2</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-messages" aria-controls="navs-pills-justified-messages" aria-selected="false"><i class="tf-icons bx bx-car me-1"></i>  Step 3</button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <form action="{{ route('lead.upload', $lead_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
        @foreach($fields as $field)

        <div class="col-2 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <input style="width: 101px;" type="file" class="form-control" name="{{ $field }}" accept="image/*">
              </div>
              
            </div>
            <span class="d-block mb-1" style="font-size:12px;font-weight: bold;"> {{ ucfirst(str_replace('_', ' ', $field)) }}</span>
            <div class="preview-image">
                    
                    @foreach ($documents as $document)
                        @if ($document->type == $field && $document->file_path !='')
                            <img src="{{ asset('storage/' . $document->file_path) }}" alt="Preview" id="{{ $field }}Preview" class="img-thumbnail" style="border-radius: 0 0 10px 10px;">     
                        @endif
                    @endforeach
                    <img src="#" alt="Preview" id="{{ $field }}Preview" class="img-thumbnail" style="display:none;border-radius: 0 0 10px 10px;">
                </div>
          </div>
        </div>
      </div>  
        @endforeach
        </div>
        <button class="btn btn-primary viewImgs btn-lg pull-left" type="submit">Save Image</button>
    </form>
      </div>

      
        <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
        @error('field_name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
        <form id="myForm" method="POST" action="{{ route('valuations2.store', $lead_id) }}">
    @csrf
    <input type="hidden" name="lead_id" value="{{ $lead_id }}">
        <div class="row setup-content" id="step-2" >
              <!-- auto_foucus problem fixing -->
              <input type="text" autofocus="autofocus" style="display:none">
              <!-- auto_foucus problem fixing -->
              <div class="col-xs-12">
                  <div class="col-xs-12">
                  <small style=" float:right;color: red;">All fileds are Required (*)</small>
                  </div>
              </div>
   <div class="row">
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group">
            <label for="manufacture_ym">Month &amp; Year of Manufacture</label>
            <input type="text" class="form-control  step_page2 hasDatepicker" name="manufacture_ym" id="manufacture_ym" placeholder="MM/YYYY" data-name="manufacture_ym" required readonly="" value="{{ !empty($valuations2->manufacture_ym) ? $valuations2->manufacture_ym : '' }}">
          </div>
      </div>
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group">
            <label for="make">Make</label>       
            <select class="form-control  step_page2" name="make" id="make" required>
               <option value="">Select Make</option>
               <option value="1" {{ (!empty($valuations2->make) && $valuations2->make == 1 ) ? 'selected' : '' }}>Honda</option>
            </select>
         </div>
      </div>
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group">
            <label for="model">Model</label>       
            <select class="form-control  step_page2" name="model" id="model" required>
               <option value="">Select Model</option>
               <option value="1" {{ (!empty($valuations2->model) && $valuations2->model == 1) ? 'selected' : '' }}>City</option>
            </select>
         </div>
      </div>
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group">
            <label for="variant">variant</label>       
            <select class="form-control  step_page2" name="variant" id="variant" required>
               <option value="">Select Variant</option>
               <option value="2" {{ (!empty($valuations2->variant) && $valuations2->variant == 2) ? 'selected' : '' }}>500</option>
            </select>
         </div>
      </div>
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group">
            <label for="location">Location</label>       
            <select class="form-control  step_page2" name="location" id="location" required>
               <option value="">Select Type</option>
               <option value="958" {{ (!empty($valuations2->location) && $valuations2->location == 958 ) ? 'selected' : '' }}>ABOHAR</option>
            </select>
         </div>
      </div>
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group">
            <label for="color">Color</label>       
            <select class="form-control  step_page2" name="color" id="color" required>
               <option value="">Select Type</option>
               <option value="White" {{ (!empty($valuations2->color) && $valuations2->color == "White") ? 'selected' : '' }}>White</option>
               <option value="Silver" {{ (!empty($valuations2->color) && $valuations2->color == "Silver") ? 'selected' : '' }}>Silver</option>
               <option value="Beige" {{ (!empty($valuations2->color) && $valuations2->color == "Beige") ? 'selected' : '' }}>Beige</option>
               <option value="Brown" {{ (!empty($valuations2->color) && $valuations2->color == "Brown") ? 'selected' : '' }}>Brown</option>
               <option value="Grey" {{ (!empty($valuations2->color) && $valuations2->color == "Grey") ? 'selected' : '' }}>Grey</option>
               <option value="Black" {{ (!empty($valuations2->color) && $valuations2->color == "Black") ? 'selected' : '' }}>Black</option>
               <option value="Red" {{ (!empty($valuations2->color) && $valuations2->color == "Red") ? 'selected' : '' }}>Red</option>
               <option value="Blue" {{ (!empty($valuations2->color) && $valuations2->color == "Blue") ? 'selected' : '' }}>Blue</option>
               <option value="Green" {{ (!empty($valuations2->color) && $valuations2->color == "Green") ? 'selected' : '' }}>Green</option>
               <option value="Gold" {{ (!empty($valuations2->color) && $valuations2->color == "Gold") ? 'selected' : '' }}>Gold</option>
               <option value="Yellow" {{ (!empty($valuations2->color) && $valuations2->color == "Yellow") ? 'selected' : '' }}>Yellow</option>
               <option value="Others" {{ (!empty($valuations2->color) && $valuations2->color == "Others") ? 'selected' : '' }}>Others</option>
            </select>
         </div>
      </div>
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group">
            <label for="fuel_type">Fuel</label>       
            <select class="form-control  step_page2" name="fuel_type" id="fuel_type" required>
               <option value="">Select Type</option>
               <option value="1" {{ (!empty($valuations2->fuel_type) && $valuations2->fuel_type == "1") ? 'selected' : '' }}>Petrol</option>
               <option value="2" {{ (!empty($valuations2->fuel_type) && $valuations2->fuel_type == "2") ? 'selected' : '' }}>Diesel</option>
               <option value="3"{{ (!empty($valuations2->fuel_type) && $valuations2->fuel_type == "3") ? 'selected' : '' }}>LPG</option>
               <option value="4"{{ (!empty($valuations2->fuel_type) && $valuations2->fuel_type == "4") ? 'selected' : '' }}>CNG</option>
               <option value="5"{{ (!empty($valuations2->fuel_type) && $valuations2->fuel_type == "5") ? 'selected' : '' }}>Hybrid(P&amp;CNG)</option>
               <option value="6"{{ (!empty($valuations2->fuel_type) && $valuations2->fuel_type == "6") ? 'selected' : '' }}>Hybrid(D&amp;CNG)</option>
               <option value="7"{{ (!empty($valuations2->fuel_type) && $valuations2->fuel_type == "7") ? 'selected' : '' }}> Hybrid(P&amp;LPG) </option>
               <option value="8"{{ (!empty($valuations2->fuel_type) && $valuations2->fuel_type == "8") ? 'selected' : '' }}>Hybrid(D&amp;LPG)</option>
               <option value="9"{{ (!empty($valuations2->fuel_type) && $valuations2->fuel_type == "9") ? 'selected' : '' }}>BATTERY</option>
            </select>
         </div>
      </div>
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group">
            <label for="transmission">Transmission</label>       
            <select class="form-control  step_page2" name="transmission" id="transmission" required>
               <option value="">Select Type</option>
               <option value="1" {{ (!empty($valuations2->transmission) && $valuations2->transmission == "1") ? 'selected' : '' }}>Manual</option>
               <option value="2" {{ (!empty($valuations2->transmission) && $valuations2->transmission == "2") ? 'selected' : '' }}>Automatic</option>
               <option value="3" {{ (!empty($valuations2->transmission) && $valuations2->transmission == "3") ? 'selected' : '' }}>AMT</option>
            </select>
         </div>
      </div>
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group"><label for="odo_mtr">Odometer Reading</label>
            <input type="text" class="form-control  step_page2" name="odo_mtr" id="odo_mtr" placeholder="" value="{{ !empty($valuations2->odo_mtr) ?  $valuations2->odo_mtr : ''}}" required>
         </div>
      </div>
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group"><label for="reg_number">Vehicle Registration Number</label>
            <input type="text" class="form-control  step_page2" name="reg_number" id="reg_number" placeholder="" value="{{ !empty($valuations2->reg_number) ? $valuations2->reg_number : '' }}" required>
         </div>
      </div>
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group"><label for="reg_year_mon">Vehicle Registration Year</label><input type="text" class="form-control  step_page2 hasDatepicker" name="reg_year_mon" id="reg_year_mon" placeholder="MM/YYYY" data-name="reg_year_mon" required="" readonly="" value="{{ !empty($valuations2->reg_year_mon) ? $valuations2->reg_year_mon : '' }}"></div>
      </div>
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group"><label for="chassis_number">Chassis Number</label><input type="text" class="form-control  step_page2" name="chassis_number" id="chassis_number" placeholder="" value="{{ !empty($valuations2->chassis_number) ? $valuations2->chassis_number : ''  }}" required></div>
      </div>
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group"><label for="engine_number">Engine Number</label><input type="text" class="form-control  step_page2" name="engine_number" id="engine_number" placeholder="" value="{{ !empty($valuations2->engine_number) ? $valuations2->engine_number : '' }}" required></div>
      </div>
      <div class="col-sm-6 col-xs-12  p-2">
         <div class="form-group"><label for="vehicle_summary">Vehicle Summary</label><input type="text" class="form-control  step_page2" name="vehicle_summary" id="vehicle_summary" placeholder="" value="{{ !empty($valuations2->vehicle_summary) ? $valuations2->vehicle_summary : '' }}" required></div>
      </div>
      <div class="col-md-12 p-2">
         
         <button class="btn btn-primary nextBtn btn-lg pull-right" id="info_form_btn" type="submit">Save</button>

         </form>
      </div>
   </div>
</div>
        
      </div>
        <div class="tab-pane fade" id="navs-pills-justified-messages" role="tabpanel">
       
        <form id="myForm" method="POST" action="{{ route('valuations3.store', $lead_id) }}">
        @csrf
    <input type="hidden" name="lead_id" value="{{ $lead_id }}">
        <div class="row">
  <!-- auto_foucus problem fixing -->
  <input type="text" autofocus="autofocus" style="display:none">
  <!-- auto_foucus problem fixing -->
  <div class="col-sm-6 col-xs-12  p-2">
    <div class="form-group">
      <label for="keys">Keys</label>
      <select class="form-control  step_page3" name="keys" id="keys">
        <option value="">Select Type</option>
        <option value="1" {{ (!empty($valuations3->keys) && $valuations3->keys== "1")  ? 'selected' : '' }}>AVAILABLE</option>
        <option value="2" {{ (!empty($valuations3->keys) && $valuations3->keys== "2") ? 'selected' : '' }}>NOT AVAILABLE </option>
      </select>
    </div>
  </div>
  <div class="col-sm-6 col-xs-12  p-2">
    <div class="form-group">
      <label for="battery">Battery</label>
      <select class="form-control  step_page3" name="battery" id="battery">
        <option value="">Select Type</option>
        <option value="1" {{ (!empty($valuations3->battery) && $valuations3->battery== "1")  ? 'selected' : '' }}>Satisfactory</option>
        <option value="2" {{ (!empty($valuations3->battery) && $valuations3->battery== "2")  ? 'selected' : '' }}>Discharged</option>
        <option value="3" {{ (!empty($valuations3->battery) && $valuations3->battery== "3")  ? 'selected' : '' }}>Unplugged</option>
        <option value="4" {{ (!empty($valuations3->battery) && $valuations3->battery== "4")  ? 'selected' : '' }}>Key not available</option>
        <option value="5" {{ (!empty($valuations3->battery) && $valuations3->battery== "5")  ? 'selected' : '' }}>Missing</option>
      </select>
    </div>
  </div>
  <div class="col-sm-6 col-xs-12 p-2 ">
    <div class="form-group">
      <label for="mech_cond">Mechanical Condition</label>
      <select class="form-control  step_page3" name="mech_cond" id="mech_cond">
        <option value="">Select Type</option>
        <option value="1" {{ (!empty($valuations3->mech_cond) && $valuations3->mech_cond== "1")  ? 'selected' : '' }}>Very Bad</option>
        <option value="2" {{ (!empty($valuations3->mech_cond) && $valuations3->mech_cond== "2")  ? 'selected' : '' }}>Bad</option>
        <option value="3" {{ (!empty($valuations3->mech_cond) && $valuations3->mech_cond== "3")  ? 'selected' : '' }}>Average</option>
        <option value="4" {{ (!empty($valuations3->mech_cond) && $valuations3->mech_cond== "4")  ? 'selected' : '' }}>Good</option>
        <option value="5" {{ (!empty($valuations3->mech_cond) && $valuations3->mech_cond== "5")  ? 'selected' : '' }}>Very Good</option>
        <option value="6" {{ (!empty($valuations3->mech_cond) && $valuations3->mech_cond== "6")  ? 'selected' : '' }}>Missing</option>
        <option value="7" {{ (!empty($valuations3->mech_cond) && $valuations3->mech_cond== "7")  ? 'selected' : '' }}>NA</option>
      </select>
    </div>
  </div>
  <div class="col-sm-6 col-xs-12  p-2">
    <div class="form-group">
      <label for="body_frame">Body Frame</label>
      <select class="form-control  step_page3" name="body_frame" id="body_frame">
        <option value="">Select Type</option>
        <option value="1" {{ (!empty($valuations3->body_frame) && $valuations3->body_frame== "1")  ? 'selected' : '' }}>Bad</option>
        <option value="2" {{ (!empty($valuations3->body_frame) && $valuations3->body_frame== "2")  ? 'selected' : '' }}>Average</option>
        <option value="3" {{ (!empty($valuations3->body_frame) && $valuations3->body_frame== "3")  ? 'selected' : '' }}>Good</option>
        <option value="4" {{ (!empty($valuations3->body_frame) && $valuations3->body_frame== "4")  ? 'selected' : '' }}>NA</option>
      </select>
    </div>
  </div>
  <div class="col-sm-6 col-xs-12  p-2">
    <div class="form-group">
      <label for="starts">Starts</label>
      <select class="form-control  step_page3" name="starts" id="starts">
        <option value="">Select Type</option>
        <option value="1" {{ (!empty($valuations3->starts) && $valuations3->starts== "1")  ? 'selected' : '' }}>Yes</option>
        <option value="2" {{ (!empty($valuations3->starts) && $valuations3->starts== "2")  ? 'selected' : '' }}>No</option>
      </select>
    </div>
  </div>
  <div class="col-sm-6 col-xs-12  p-2">
    <div class="form-group">
      <label for="no_of_tyres">No.of Tyres/Track</label>
      <select class="form-control  step_page3  hide_and_show_publish_filter_func" name="no_of_tyres" id="no_of_tyres" data-id="no_of_tyres_hide_and_show_publish_filter_func">
        <option value="">Select Type</option>
        <option value="1" {{ (!empty($valuations3->no_of_tyres) && $valuations3->no_of_tyres== "1")  ? 'selected' : '' }}>1</option>
        <option value="2" {{ (!empty($valuations3->no_of_tyres) && $valuations3->no_of_tyres== "2")  ? 'selected' : '' }}>2</option>
        <option value="3" {{ (!empty($valuations3->no_of_tyres) && $valuations3->no_of_tyres== "3")  ? 'selected' : '' }}>3</option>
        <option value="4" {{ (!empty($valuations3->no_of_tyres) && $valuations3->no_of_tyres== "4")  ? 'selected' : '' }}>4</option>
        
      </select>
    </div>
  </div>
  <div class="col-sm-6 col-xs-12  p-2">
    <div class="form-group">
      <label for="engine_condition">Engine Condition</label>
      <select class="form-control  step_page3" name="engine_condition" id="engine_condition">
        <option value="">Select Type</option>
        <option value="1" {{ (!empty($valuations3->engine_condition) && $valuations3->engine_condition== "1")  ? 'selected' : '' }}>No Engine</option>
        <option value="2" {{ (!empty($valuations3->engine_condition) && $valuations3->engine_condition== "12")  ? 'selected' : '' }}>Bad</option>
        <option value="3" {{ (!empty($valuations3->engine_condition) && $valuations3->engine_condition== "3")  ? 'selected' : '' }}>Average</option>
        <option value="4" {{ (!empty($valuations3->engine_condition) && $valuations3->engine_condition== "4")  ? 'selected' : '' }}>Good</option>
        <option value="5" {{ (!empty($valuations3->engine_condition) && $valuations3->engine_condition== "5")  ? 'selected' : '' }}>Excellent</option>
      </select>
    </div>
  </div>
  <div class="col-sm-6 col-xs-12  p-2">
    <div class="form-group">
      <label for="mech_operational">Machine Operational</label>
      <select class="form-control  step_page3" name="mech_operational" id="mech_operational">
        <option value="">Select Type</option>
        <option value="1" {{ $valuations3->mech_operational == "1" ? 'selected' : '' }}>Yes</option>
        <option value="2" {{ $valuations3->mech_operational == "2" ? 'selected' : '' }}>No</option>
      </select>
    </div>
  </div>
  <div class="col-sm-6 col-xs-12 p-2 ">
    <div class="form-group">
      <label for="current_vehi_condition">Current Vehicle Condition</label>
      <select class="form-control  step_page3" name="current_vehi_condition" id="current_vehi_condition">
        <option value="">Select Type</option>
        <option value="1"  {{ $valuations3->current_vehi_condition == "1" ? 'selected' : '' }}>Running</option>
        <option value="2"{{ $valuations3->current_vehi_condition == "2" ? 'selected' : '' }}>Need Repairs</option>
        <option value="3"{{ $valuations3->current_vehi_condition == "3" ? 'selected' : '' }}>Breakdown</option>
        <option value="4"{{ $valuations3->current_vehi_condition == "4" ? 'selected' : '' }}>Towed (Key Na, Battery NA, Tyre Missing, Breakdown)</option>
      </select>
    </div>
  </div>
  <div class="col-sm-6 col-xs-12  p-2">
    <div class="form-group">
      <label for="rc_status">RC Status</label>
      <select class="form-control  step_page3" name="rc_status" id="rc_status">
        <option value="">Select Type</option>
        <option value="1" {{ $valuations3->rc_status == "1" ? 'selected' : '' }}>Original</option>
        <option value="2" {{ $valuations3->rc_status == "2" ? 'selected' : '' }}>Duplicate</option>
        <option value="3" {{ $valuations3->rc_status == "3" ? 'selected' : '' }}>Xerox Copy</option>
        <option value="4" {{ $valuations3->rc_status == "4" ? 'selected' : '' }}>None</option>
      </select>
    </div>
  </div>
  <div class="col-sm-6 col-xs-12  p-2">
    <div class="form-group">
      <label for="insurance">Insurance</label>
      <select class="form-control  step_page3  hide_and_show_func" name="insurance" id="insurance" data-id="insurance_hide_and_show">
        <option value="">Select Type</option>
        <option value="1" {{ $valuations3->insurance == "1" ? 'selected' : '' }}>Company</option>
        <option value="2" {{ $valuations3->insurance == "2" ? 'selected' : '' }}>Third Party</option>
        <option value="3" {{ $valuations3->insurance == "3" ? 'selected' : '' }}>None</option>
      </select>
    </div>
  </div>
  <div class="col-sm-6 col-xs-12  p-2">
			<div class=" form-group">
    <label for="insurance_validity">Insurance Validity</label>
    <input type="text" class="form-control  step_page3 hasDatepicker" name="insurance_validity" id="insurance_validity" placeholder="YYYY-MM-DD" data-name="insurance_validity" required="" readonly="" value="{{ $valuations3->insurance_validity }}">
  </div>
</div>
<div class="col-sm-6 col-xs-12  p-2">
  <div class="form-group">
    <label for="hpa">Hypothecation</label>
    <select class="form-control  step_page3  hide_and_show_func" name="hpa" id="hpa" data-id="hpa_hide_and_show">
      <option value="">Select Type</option>
      <option value="1" {{ $valuations3->hpa == "1" ? 'selected' : '' }}>Yes</option>
      <option value="2" {{ $valuations3->hpa == "2" ? 'selected' : '' }}>No</option>
    </select>
  </div>
</div>
<div class="col-sm-6 col-xs-12 p-2">
  <div class="form-group">
    <label for="hpa_bank">HPA Bank</label>
    <select class="form-control  step_page3" name="hpa_bank" id="hpa_bank">
      <option value="">Select Type</option>
      <option value="Others">Others</option>
      <option value="1" {{ $valuations3->hpa_bank == "1" ? 'selected' : '' }} >Cholamandalam Investment And Finance Company Limited</option>
      <option value="2" {{ $valuations3->hpa_bank == "2" ? 'selected' : '' }}>IndusInd Bank Ltd</option>
      <option value="3" {{ $valuations3->hpa_bank == "3" ? 'selected' : '' }}>Mahindra &amp; Mahindra Financial Services Ltd</option>
      
    </select>
  </div>
</div>
<div class="col-sm-6 col-xs-12  p-2">
  <div class="form-group">
    <label for="tax_validity">Tax Validity</label>
    <input type="text" class="form-control  step_page3 hasDatepicker" name="tax_validity" id="tax_validity" placeholder="YYYY-MM-DD" data-name="tax_validity" required="" readonly="" value=" {{ $valuations3->tax_validity  }}">
  </div>
</div>
<div class="col-sm-6 col-xs-12 p-2">
  <div class="form-group">
    <label for="tyre1_per">Tyre/Track 1 (Percentage)</label>
    <select class="form-control  step_page3" name="tyre1_per" id="tyre1_per">
      <option value="">Select Type</option>
      <option value="1" {{ $valuations3->tyre1_per == "1" ? 'selected' : '' }}>0%</option>
      <option value="2" {{ $valuations3->tyre1_per == "2" ? 'selected' : '' }}>25%</option>
      <option value="3" {{ $valuations3->tyre1_per == "3" ? 'selected' : '' }}>50%</option>
      <option value="4" {{ $valuations3->tyre1_per == "4" ? 'selected' : '' }}> 75%</option>
      <option value="5" {{ $valuations3->tyre1_per == "5" ? 'selected' : '' }}>90%</option>
    </select>
  </div>
</div>
<div class="col-sm-6 col-xs-12 p-2">
  <div class="form-group">
    <label for="tyre2_per">Tyre/Track 2 (Percentage)</label>
    <select class="form-control  step_page3" name="tyre2_per" id="tyre2_per">
      <option value="">Select Type</option>
      <option value="1" {{ $valuations3->tyre2_per == "1" ? 'selected' : '' }}>0%</option>
      <option value="2" {{ $valuations3->tyre2_per == "2" ? 'selected' : '' }}>25%</option>
      <option value="3" {{ $valuations3->tyre2_per == "3" ? 'selected' : '' }}>50%</option>
      <option value="4" {{ $valuations3->tyre2_per == "4" ? 'selected' : '' }}>75%</option>
      <option value="5" {{ $valuations3->tyre2_per == "5" ? 'selected' : '' }}>90%</option>
    </select>
  </div>
</div>
<div class="col-sm-6 col-xs-12  p-2">
  <div class="form-group">
    <label for="tyre3_per">Tyre/Track 3 (Percentage)</label>
    <select class="form-control  step_page3" name="tyre3_per" id="tyre3_per">
      <option value="">Select Type</option>
      <option value="1" {{ $valuations3->tyre3_per == "1" ? 'selected' : '' }}>0%</option>
      <option value="2" {{ $valuations3->tyre3_per == "2" ? 'selected' : '' }}>25%</option>
      <option value="3" {{ $valuations3->tyre3_per == "3" ? 'selected' : '' }}>50%</option>
      <option value="4" {{ $valuations3->tyre3_per == "4" ? 'selected' : '' }}>75%</option>
      <option value="5" {{ $valuations3->tyre3_per == "5" ? 'selected' : '' }}>90%</option>
    </select>
  </div>
</div>
<div class="col-sm-6 col-xs-12  p-2">
  <div class="form-group">
    <label for="tyre4_per">Tyre/Track 4 (Percentage)</label>
    <select class="form-control  step_page3" name="tyre4_per" id="tyre4_per">
      <option value="">Select Type</option>
      <option value="1" {{ $valuations3->tyre4_per == "1" ? 'selected' : '' }}>0%</option>
      <option value="2" {{ $valuations3->tyre4_per == "2" ? 'selected' : '' }}>25%</option>
      <option value="3" {{ $valuations3->tyre4_per == "3" ? 'selected' : '' }}>50%</option>
      <option value="4" {{ $valuations3->tyre4_per == "4" ? 'selected' : '' }}>75%</option>
      <option value="5" {{ $valuations3->tyre4_per == "5" ? 'selected' : '' }}>90%</option>
    </select>
  </div>
</div>

<div class="col-md-12">
  <button class="btn btn-primary btn-lg pull-right" id="finish" type="submit">Save</button>
</div>
</form>


</div>
      </div>
    </div>
  </div>
</div>

     
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/flatpickr/flatpickr.js"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/forms-pickers.js"></script>


<script>
    $(document).ready(function () {
      var manufact_mon_year = document.querySelector("#manufacture_ym");
      manufact_mon_year.flatpickr({
        altInput: true,
        altFormat: "m/Y",
        dateFormat: "m/Y",
      });
      var reg_year_mon = document.querySelector("#reg_year_mon");
      reg_year_mon.flatpickr({
        altInput: true,
        altFormat: "m/Y",
        dateFormat: "m/Y"
      });
      
        // File input change event
        $("input[type='file']").on("change", function () {
            const inputId = $(this).attr("name");
            const previewId = '#'+inputId+'Preview';
            const files = this.files;

            if (files && files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $(previewId).attr("src", e.target.result).css("display", "block");
                };
                reader.readAsDataURL(files[0]);
            } else {
                $(previewId).attr("src", "").css("display", "none");
            }
        });

        // Form submission
        $("#fileUploadForm").on("submit", function (e) {
            e.preventDefault();
            const formData = new FormData(this);
            $.ajax({
                url: "your-upload-url", // Replace with your server endpoint
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    // Handle success response
                    console.log(response);
                },
                error: function (error) {
                    // Handle error
                    console.error(error);
                }
            });
        });
    });
</script>
@endsection

