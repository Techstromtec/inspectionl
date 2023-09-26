	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
 <style>
	  @media print {
		  .page1 {page-break-after: always;}
		  .page2 {page-break-after: always;}
	}
	.img-size-32 {
    width: 32px;
}
.img-size-32, .img-size-50, .img-size-64 {
    height: auto;
}
	  body{font-size:12px !important;font-family: 'Varela Round', sans-serif !important;}
         @media print {
         tr.vendorListHeading {
         background-color: #1a4567 !important;
         -webkit-print-color-adjust: exact; 
         }
         }
         @media print {
         .vendorListHeading th {
         color: white !important;
         }
         }
         /*.table td, .table th {padding:0 !important;}*/
         .table-striped tbody tr{background-color:#fff !important;border-bottom: 1px solid lightgray;}
         .table td, .table th{border-top:none !important;}
         .scheduler-border{
         border-radius:10px;
         padding:10px;
         }
         .table.table-valign-middle tbody>tr>td{border-bottom:1px solid lightgrey;}
         legend{margin: 0 0 0 13px;}
         #overallgrade td{padding:10px !important;}
         .fa-star{color:lightgray;}
         .scheduler-border{color:#25356F;font-weight:bold;}
         .excellent{color:#224D17 !important} /*5*/
         .good{color:#099441 !important}/*4.5*/
         .above_avg{color:#FFCC00 !important}/*4*/
         .available{color:#FFCC00 !important}/*4*/
         .average{color:#FFCC00 !important}/*3.7*/
         .below_avg{color:#FFA500 !important}/*3.2*/
         .satisfactory{color:#FFA500 !important}/*3*/
         .bad_working{color:#FE0000 !important}/*2*/
         .not_check{color:#888888 !important}/*2*/
         .scrap{color:#FE0000 !important}/*1*/
         .option_na{color:#888888 !important}/*NA*/
		 .table td, .table th {
   padding: 3px;
    vertical-align: middle;
    border-top: 1px solid #dee2e6;
}
      </style>
      <?php 
         if($this->input->post()){
          
           foreach ($this->input->post() as $key => $value) {
             $$key = @htmlspecialchars($this->input->post($key));
           } 
         
         } else {
          
         $FieldsArray = array('entity_id','lender_name','client','state','city','instype','vehiclecategory','registrationstatus','loannumber','lengine_number','lchassnumber',
         'mfgdate','registrationNumber','make','numberofowners','regdate','customeraddress','customername','executivename','customeraddress1','customermobilenumber','executiveNumber','pincode','customerCity',
         'customerState','report_id','created_date');
           foreach ($FieldsArray as $key) {
             $$key = @htmlspecialchars($edit_records->$key);
           }
         
           $FieldsArray = array('lead_id',"front_image","rear_image","right_image","left_side","dashboard","seats","odo_meter","engine_room","eng_regi_plate","chassis_imp","chassis_num","rc_front","rc_back","type1","type2","type3","type4","d1","d2","d3","d4","selfi");
           foreach ($FieldsArray as $key) {
             $$key = @htmlspecialchars($edit_records_image->$key);
           }
         
         $FieldsArray = array('form_type','report_type','vehicle_type','makes','models','make','model_name','varient_name','vehicle_variant_type','transmission','mfg_date','gengine_number','chassis_number','odometer_reading','registration_number_g','customer_name','rc_book_status','number_of_owners','roof','client_name','vehicle_condition_g','fuel_type','key_status','tyre_condition','battery_status','colours','over_all_condition','registration_status','valuation_price','ex_show_room_price','period','reg_date','ginsurance_status','insurance_detail','hpa_status','hpa_bank','inspection_location','engine_start','structural_damages');
           foreach ($FieldsArray as $key) {
         if($key=='engine_number'){}
            $$key = @htmlspecialchars($edit_records_general->$key);
           }
         
         $FieldsArray = array('form_type','owner_name','purchase_deivery_date','maker','maker_model','laden_weight','sleeper_capacity','registration_date','engine_number','body_type','unladen_weight','mfg_year','chassis_number','fitness_valid_upto','insurance_type','insurance_company_name','insurance_from','insurance_to','policy_number','insurance_value','tax_paid_date','receipt_date','amount','fc_issue_date','tax_clear_upto','permit_type','route_length','permit_category','number_of_trips','service_type','permit_domain','insurer_name','total_claim_amount','registration_number','claim_intimation_date','accident_loss_date','expense_paid','parivahan_status','insurance_status','tax_status','permit_status','claim_status');
           foreach ($FieldsArray as $key) {
             $$key = @htmlspecialchars($edit_records_client->$key);
          }
         
         $FieldsArray = array('form_type','left_fender','right_fender','left_quarter','right_quarter','roof','right_front_door','left_front_door','right_rear_door','left_rear_door');
           foreach ($FieldsArray as $key) {
             $$key = @htmlspecialchars($edit_records_paint->$key);
          }
         
         
         $FieldsArray = array('form_type','purchased_year','owner_type','estimated_year_of_ownership','hypotheciation_bank_name','purchased_year2','purchased_year3','owner_type2','owner_type3','estimated_year_of_ownership2','hypotheciation_bank_name2','estimated_year_of_ownership3','hypotheciation_bank_name3');
           foreach ($FieldsArray as $key) {
             $$key = @htmlspecialchars($edit_records_owerhistory->$key);
          }
         
         $FieldsArray = array('form_type','this_vehicle_price','this_vehicle_km','another_one_vehicle_price','another_one_vehicle_km','another_two_vehicle_price','another_two_vehicle_km');
           foreach ($FieldsArray as $key) {
             $$key = @htmlspecialchars($edit_records_market->$key);
          }
         
         $FieldsArray = array('form_type','insurancer_name','insurancer_type','insurancer_license_number','remarks','police_record');
           foreach ($FieldsArray as $key) {
             $$key = @htmlspecialchars($edit_records_additional->$key);
          }
         
         $FieldsArray = array('parivahan_status','insurance_status','tax_status','permit_status','claim_status');
           foreach ($FieldsArray as $key) {
             $$key = @htmlspecialchars($edit_records_statusdetails->$key);
          }
         
         
         }
         ?>
   </head>
   <title><?php echo $this->lang->line('site_title');?> - Invoice - <?php echo $report_id;?></title>
<div class="dropdown">
								<!--<a class="btn btn-primary" href="<?php echo base_url().ADMIN_URL;?>leads/getInvoice/<?php echo $entity_id;?>" role="button" onclick="resizeChanges()">
									Print
								</a>-->
								<a class="btn btn-primary" href="javascript:void()" role="button" onclick="resizeChanges()">
									Print
								</a>
							</div>
	<div class="">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<div id="invoice-wrap" class="invoice-wrap">
					<div class="invoice-box" style="width: 1000px;">
					<div class="invoice-header">
							<div class="logo text-left">
								<img src="<?php echo base_url();?>assets/admin/deskapp/vendors/images/deskapp-logo.png" style="width:300px" alt="">
							</div>
						</div>
						<section class="invoice">
			<div class="page1">
            <!-- title row -->
			<div class="row pb-30">
				<div class="col-md-6">
					<h5 class="mb-15" style="font-family: 'Varela Round', sans-serif !important;font-size:14px">Conditions Report ID : <?php echo $report_id;?></h5>
				
				</div>
				<div class="col-md-6">
					<div class="text-right">
						<p class="font-14 mb-5"><b>InspekDate :</b> <?php echo date("d/m/Y",strtotime($created_date));?> </p>
						
					</div>
				</div>
			</div>
			<div class="row pb-30">
				<div class="col-md-6">
					<p class="mb-5"><h5 style="font-family: 'Varela Round', sans-serif !important;"><b><?php echo $mfgdate;?> <?php echo ucwords(strtolower($makes));?> <?php echo ucwords(strtolower($models));?> <?php echo $varient_name;?> &nbsp <?php echo $registration_number;?></b></h5></p>
					<p class="mb-5"><b>Registration No :</b> <?php echo $registrationNumber;?></p>
                     <p class="mb-5"><b>Registration Year :</b> <?php echo $regdate;?></p>
                     <p class="mb-5"><b>Engine No :</b> <?php if($engine_number!=''){echo $engine_number;}else{ echo $lengine_number;}?></p>
                     <p class="mb-5"><b>Chassis No :</b> <?php if($chassnumber!=''){echo $chassnumber;}else{echo $lchassnumber;}?></p>
                     <p class="mb-5"><b>Insurancer name :</b> <?php echo $insurancer_name;?> | <b>Insurancer Surveyor :</b> <?php echo $insurancer_type;?> | <b>License No :</b> <?php echo $insurancer_license_number;?></p>	
				
				</div>
				<div class="col-md-6">
					<div class="text-right">
						<p class="font-14 mb-5"><b style="font-size: 18px;color: green;">Valution Price :  <span style="font-size:18px">Rs.<?php echo $valuation_price;?></span></b></p>
						<p><b>
							<?php 
							 if($vehiclecategory=='farm'){
								echo 'Utility Tractor';
							 }elseif($vehiclecategory=='3'){
								echo 'Auto';
							 }elseif($vehiclecategory=='4'){
								echo ucfirst($vehicle_type);
							 }
							 ?>
							</b>
						</p>
						<p style="margin:0 0 6px !important">
							<img src="<?php echo base_url();?>assets/admin/img/tick.png?<?php echo date('h:m:s');?>" style="width:20px;height:auto"> <b><?php $e=str_replace('_',' ',$over_all_condition);echo ucwords($e);?></b>
						</p>
						<p  style="margin:0 0 6px !important">
							<img src="<?php echo base_url();?>assets/admin/img/tick.png?<?php echo date('h:m:s');?>" style="width:20px;height:auto"> <b><?php $e=str_replace('_',' ',$vehicle_condition_g);echo ucwords($e);?></b>
						</p>
					</div>
				</div>
			</div>
               <div class="row">
                  <div class="col-6 col-md-6 col-lg-6 order-2 order-md-1">
                     <div class="card-body table-responsive p-0">
                        <table class="table table-striped">
                           <thead>
                           </thead>
                           <tbody>
                              <tr>
                                 <td style="font-weight:bold;" >
                                    <img src="<?php echo base_url();?>assets/admin/img/bank.png?<?php echo date('h:m:s');?>" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    
                                 </td>
                                 <td><b>Lender</b></td>
                                 <td>
                                    <?php echo ucwords($lender_name);?>				
                                 </td>
                              </tr>
                              <tr>
                                 <td  style="font-weight:bold;">
                                    <img src="<?php echo base_url();?>assets/admin/img/agreement.png?<?php echo date('h:m:s');?>" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    
                                 </td>
                                 <td><b>Prospect No</b></td>
                                 <td>
                                    <?php echo ucwords($loannumber);?>
                                 </td>
                              </tr>
                              <tr>
                                 <td  style="font-weight:bold;">
                                    <img src="<?php echo base_url();?>assets/admin/img/document.png?<?php echo date('h:m:s');?>" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    
                                 </td>
                                 <td><b>Applicant Name</b></td>
                                 <td  >
                                    <?php echo ucwords($customer_name);?>
                                 </td>
                              </tr>
                              <tr>
                                 <td  style="font-weight:bold;">
                                    <img src="<?php echo base_url();?>assets/admin/img/owners.png?<?php echo date('h:m:s');?>" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    
                                 </td>
                                 <td><b>RC Owner Name</b></td>
                                 <td >
                                    <?php echo ucwords($owner_name);?>
                                 </td>
                              </tr>
                              <tr>
                                 <td  style="font-weight:bold;">
                                    <img src="<?php echo base_url();?>assets/admin/img/rc-status.png?<?php echo date('h:m:s');?>" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    
                                 </td>
                                 <td><b>RC Status</b></td>
                                 <td >
                                    <?php echo ucwords($rc_book_status);?>		
                                 </td>
                              </tr>
                              <tr>
                                 <td  style="font-weight:bold;">
                                    <img src="<?php echo base_url();?>assets/admin/img/rc-status.png?<?php echo date('h:m:s');?>" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    
                                 </td>
                                 <td><b>HPA Status</b></td>
                                 <td >
                                    <?php echo ucwords($hpa_status);?>	
                                 </td>
                              </tr>
                              <tr>
                                 <td  style="font-weight:bold;">
                                    <img src="<?php echo base_url();?>assets/admin/img/hpa_bank.png?<?php echo date('h:m:s');?>" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    
                                 </td>
                                 <td><b>HPA Bank</b></td>
                                 <td>
                                    <?php echo ucwords($hpa_bank);?>	
                                 </td>
                              </tr>
                              <tr>
                                 <td  style="font-weight:bold;">
                                    <img src="<?php echo base_url();?>assets/admin/img/register.png?<?php echo date('h:m:s');?>" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    
                                 </td>
                                 <td><b>Registered</b></td>
                                 <td>
                                    <?php echo ucwords($registration_status);?>	
                                 </td>
                              </tr>
                              <tr>
                                 <td  style="font-weight:bold;">
                                    <img src="<?php echo base_url();?>assets/admin/img/insurance_status.png?<?php echo date('h:m:s');?>" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    
                                 </td>
                                 <td><b>Insurance Status</b></td>
                                 <td>
                                    <?php echo str_ireplace("_"," ",ucwords($ginsurance_status));?>	
                                 </td>
                              </tr>
                              <tr>
                                 <td style="font-weight:bold;">
                                    <img src="<?php echo base_url();?>assets/admin/img/insurance-date.png?<?php echo date('h:m:s');?>" alt="Product 1" class=" img-size-32 mr-2">
                                    
                                 </td>
                                 <td><b>Insurance Dt.</b></td>
                                 <td>
                                    <?php if($insurance_from!=''){echo $insurance_from;}else{echo 'Not Available';}?>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="col-6 col-md-6 col-lg-6 order-1 order-md-2" style="width:600px;height:350px;text-align:center;">
                     <img onError="this.onerror=null;this.src='<?php echo base_url()?>assets/img/NoImageAvailable.png';" src="<?php echo base_url();?>uploads/leads/<?php echo $lead_id;?>/front_image/<?php echo $front_image;?>" style="max-width:100%;max-height:100%">
                  </div>
               </div>

             <div class="row" style="font-weight:bold;text-align:center;padding-top: 30px;">
               <div class="col-2">
                  <img src="<?php echo base_url();?>assets/admin/img/meter.png?<?php echo date("s");?>" alt="Product 1" class="img-circle  mr-2" style="width:85px;height:85px;"><br>
                  <?php echo ($odometer_reading=="") ? "-" : $odometer_reading;?>
               </div>
               <div class="col-2">
                  <img src="<?php echo base_url();?>assets/admin/img/fuel.jpg" alt="Product 1" class="img-circle  mr-2" style="width:85px;height:85px;"><br>
                  <?php echo ($fuel_type=="")? "-" : ucfirst($fuel_type);?>
               </div>
               <div class="col-2">
                  <img src="<?php echo base_url();?>assets/admin/img/gear.jpg" alt="Product 1" class="img-circle  mr-2" style="width:85px;height:85px;"><br>
                  <?php echo ($transmission=="") ? "-" : ucfirst($transmission);?>
               </div>
               <div class="col-2">
                  <img src="<?php echo base_url();?>assets/admin/img/paintgun.jpg" alt="Product 1" class="img-circle  mr-2" style="width:85px;height:85px;"><br>
                  <?php echo ($colours=="") ? "-" : ucfirst($colours);?>
               </div>
               <div class="col-4" style="text-align:center">
			   <?php if($numberofowners==1){?>
                  <img src="<?php echo base_url();?>assets/admin/img/single-owner.png" alt="Product 1" class="  mr-2" style="width:100%;height:130px"><br>
			   <?php }else{?>
			   <img src="<?php echo base_url();?>assets/admin/img/owners-multiple.jpg" alt="Product 1" class="  mr-2" style="width:100%;height:130px"><br>
			   <?php }?>
                  <span style="top: -46px;
                     z-index: 999;
                     position: inherit;
                     margin-left: 110px;"><b>Calculated Owners:<?php echo $numberofowners;?></b><span>
               </div>
            </div>
            <?php
               if($vehiclecategory=='farm'){ /*Tractor Report*/
               	$FieldsArray=array('seats','dash_board','seat_functions','bumber','head_lights','front_gril','brand_logo','front_mud_guard','right_mud_guard','cabin_conditions','cabin_type','running_board','wind_shield','fender_right','fender_left','fuel_tank','rear_tail_and_work_lights','posture_design_seats','foot_plates_right_side','foot_plates_left_side','cluster_meter','right_side_panel','left_side_panel','roof_canopy','roof_canopy_conditions','trailer_hydraulic_jack','trailer_hydraulic_jack','trolley_house','power_takeoff','tow_bar','hydralic_hitch','hydralic_rams','hydraulic_connections_to_implements','seats','dash_board','seat_functions','engine_conditions','drive_train','engine_compartment_condition','drive_options','undercarriage','pto_–_power_take_off','for_pto_-_master_shield_is_in_place_and_in_working_condition','hoses_damaged','fron_break','rear_break','transmission_working','gear_shift','noleakage_in_hydraulics_/_transmission','tandem_axles','gear_shift_leaver','high_speed_shift_leaver','clutch_leaver','clutch_pedal','clutch_pedal_play','tractor_trolley','trolley_hook','tractor_rotavator','tractor_trailer','front_axle','rear_axle','rear_tractor_suspension','trailer_suspension_1','trailer_suspension_2','starts','drives_forward','drives_backward','brake_pedal_functions','horse_power','battery','cubic_capacity_(cc','strearing_wheel','power_strearing','stearing_wheel','streaing_conditions','electrical_conditions','battery_conditions','ignitations_system','no_of_tires','front_right_tyres_conditions','front_left_tyres_conditions','back_right_tyres_conditions','back_left_tyres_conditions','tractor_tyre_conditions','front_right_tyres_life','front_left_tyres_life','back_right_tyres_life','back_left_tyres_life');
               	foreach ($FieldsArray as $key) {
               	   $$key = @htmlspecialchars($edit_records_tractor->$key);
               	}
               
                }elseif($vehiclecategory=='3'){ /*3 Wheeler*/
               	
               	$FieldsArray=array('glass_frame','right_side_mud_guard','left_side_mud_guard','front_side_mud_guard','rear_engine_door','right_side_panel','left_side_panel','passenger_body','top_hood_canopy_conditions','top_hood_canopy','rikshaw_passenger_body','body_paints','running_board','cabin_type','load_body_type','refregeration_unit_in_load_body','front_wind_screen','driver_seat','passenger_seats','meter_conditions','dash_board','interior_paint_conditions','seat_flooring','front_floor','rear_flooring','no_of_seats','meter_type','dash_board_panel','chassis_conditions','engine_conditions','engine_running','accelerator_conditions','vehicle_condition','front_break_lever','rear_break_lever','electrical_condition','head_lights','tail_lights','indicators','switches','electric_start','metre_type_digital','ignitions','fuel_guage','meter_type_electric','steering_condition','steering_vibration','power_steering','transmission_working','gear_shifting_conditions','transmission','clutch_conditions','front_suspension','rear_susppension','shock_absorber','no_of_tires','front_right_tyres_conditions','back_left_tyres_conditions','back_right_tyres_conditions','front_break','rear_break','abs','audio_system','remote_locking','reverse_camers_sensor','seet_covers'); 
               	foreach ($FieldsArray as $key) {
               	   $$key = @htmlspecialchars($edit_records_review->$key);
               	}
                }elseif($vehiclecategory=='4'){ /*4 Wheeler*/
               
					$FieldsArray=array('grill','head_light','hood','front_bumber','left_fender','right_fender','right_quarter','left_quarter','front_windshield','right_front_door','left_front_door','right_rear_door','left_rear_door','roof','rear_windshield','rear_tail_light','rear_bumber','body_paints','deck_lid','dash_board_conditions','dash_board_warning_lights_gauges','front_left_seat','front_right_seat','rear_left_seat','rear_right_seat','3rd_row_seat_conds','trunk_cargo','air_bag','carpets_floor_mats','power_windows','rear_door_glass_operation_left','front_door_glass_operation_right','rear_door_glass_operation_right','front_door_glass_operation_left','engine_conditions','engine_running','engine_oil_level','engine_oil_functions','transmission_gear_box_conditions','transmission_working','gear_shift','electrical_conditions','ignition_fuel_system','head_lamp_tail_lamp','starter_motor','battery_','battery_conditions','ac_cooling','power_windows','left_fender','left_quarter','roof','left_front_door','left_rear_door','right_fender','right_quarter','right_front_door','right_rear_door','streering_play','power_streering','steering','streaing_conditions','front_right_tire','back_right_tire','front_left_tire','back_left_tire','spare_tire','front_right_wheel','back_right_wheel','front_left_wheel','back_left_wheel','front_suspension','rear_suspension','audio_system','remote_locking','reverse_camers_sensor','seet_covers');
               	foreach ($FieldsArray as $key) {
               	   $$key = @htmlspecialchars($edit_records_car->$key);
               	}
                }elseif($vehiclecategory=='commercial'){ /*4 Wheeler*/
               
					$FieldsArray=array("load_body_type","cabin_type","wheel_base","engine_description","power","geerbox","engine_displacement","axle_config","load_body_build","load_body_type","load_body_build","refrigeration_unit_fitted_in_load_vehicle","front_windshield","bumber","door_left","door_right","dashboard","driver_seat","co_driver_seat","floor_mat","tail_gate","left_fender","right_fender","hood","wind_shield","left_side_gate_fixed","right_side_gate_fixed","load_floor","overall_load_body","body_paints","fuel_tank","trailer_body","trailer_conditions","chassis_condition","a_c_heater_blower_fan","cooling_system_radiator","electric_cooling_fan","engine_conditions","engine_running","engine_oil_level","engine_oil_functions","diesel_pump","radiator_conditions","abs","transmission_gear_box_conditions","transmission_working","gear_shift","front_suspension","rear_susppension","rear_tractor_suspendion","front_wheel","rear_wheel","rear_tractor_wheel","trailer_wheel","strearing_play","power_strearing","streaing_conditions","electrical_conditions","a_c_cooling","power_windows","ignitations_system","battery_conditions","battery","year_purchased","type_of_owner","no_of_tires","front_right_tyres_condition","front_left_tyre_condition","back_right_tyre_condition","back_left_tyre_condition");
               	foreach ($FieldsArray as $key) {
               	   $$key = @htmlspecialchars($edit_records_car->$key);
               	}
                }	
               
               ?>
            <div class="row">
               <fieldset class="scheduler-border" style="width:100%;border:none">
                  <legend class="scheduler-border overallhtml">
                  </legend>
                  <div class="col-12">
                     <table class="table" id="overallgrade">
                        <tbody>
                           <tr>
                              <td class="exteriorall_html"></td>
                              <td class="interiorall_html"></td>
                              <td class="electricall_html"></td>
                              <td class="engineall_html"></td>
                              <!--<td class="seats_html"></td>
                                 <td class="transmission_html"></td>-->
                           </tr>
                           <tr>
                              <td class="steering_html"></td>
                              <td class="transmission_html"></td>
                              <td class="tyres_html"></td>
                              <td class="suspension_html"></td>
                              <!--<td class="exteriorall_html"></td>
                                 <td class="tiers_html"></td>-->
                           </tr>
                           <tr>
                              <td class="accessories_html"></td>
							  
							  <?php if($vehiclecategory!='4'){ ?>
								<td class="break_html"></td>
							  <?php } ?>
							  
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </fieldset>
            </div>
            <div class="row">
               <div class="col-md-7 remarks-section">
                  <p class="pd-tp-10 font-wt-6"><b>Remarks</b></p>
                  <p class="pd-tp-10"><?php echo $remarks;?></p>
               </div>
               <div class="col-md-5" style="text-align:right">
                  <div class="col-md-3">
                     <h4>&emsp;</h4>
                     <img src="<?php echo base_url();?>assets/admin/img/seal.png" style="margin: -30px;" width="100%" alt="AdminLTE Logo">
                  </div>
                  <div class="col-md-9">
                     <h4 class="pd-tp-10 font-wt-6">Approved By</h4>
                     <p class="font-wt-6 font-16"><b>C.Anand Kumar</b></p>
                     <p>Head Digital Inspection</p>
                  </div>
               </div>
            </div>
			<p style="page-break-after:always"> </p>
            <style>
               .table thead th{vertical-align: inherit;}
            </style>
            
			</div>
			<div class="page2 card-box">
            <!-- Table row -->
            <div class="row">
               <div class="col-12 table-responsive">
                  <table class="table table-striped">
                     <thead id="headerbg" bgcolor="#25356F" style="color:#fff;font-weight:bold;background-image: url(../../../assets/admin/img/blue_bg.png">
                        <tr>
                           <th>
                              <div style="background-image: url('../../../assets/admin/img/blue_bg.png');padding: 0 0 0 9px !important;">
                                 <b>OTOgrade Ownership History</b>
                                 <br/>The Number of owners is Estimated
                              </div>
                           </th>
                           <th style="background-image: url('../../../assets/admin/img/blue_bg.png');">
                              <div style="background-image: url('../../../assets/admin/img/blue_bg.png');padding: 0 0 0 9px !important;">Owner 1</div>
                           </th>
                           <th style="background-image: url('../../../assets/admin/img/blue_bg.png');">
                              <div style="background-image: url('../../../assets/admin/img/blue_bg.png');">Owner 2</div>
                           </th >
                           <th style="background-image: url('../../../assets/admin/img/blue_bg.png');">
                              <div style="background-image: url('../../../assets/admin/img/blue_bg.png');">Owner 3</div>
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Year Purchased</td>
                           <td><?php echo $purchased_year;?></td>
                           <td><?php echo $purchased_year2;?></td>
                           <td><?php echo $purchased_year3;?></td>
                        </tr>
                        <tr>
                           <td>Type of Owner</td>
                           <td><?php echo $owner_type;?></td>
                           <td><?php echo $owner_type2;?></td>
                           <td><?php echo $owner_type3;?></td>
                        </tr>
                        <tr>
                           <td>Estimated years of Ownership</td>
                           <td><?php echo $estimated_year_of_ownership;?></td>
                           <td><?php echo $estimated_year_of_ownership2;?></td>
                           <td><?php echo $estimated_year_of_ownership3;?></td>
                        </tr>
                        <tr>
                           <td>Last reported Kms Reading</td>
                           <td>REF</td>
                           <td>No Data</td>
                           <td>No Data</td>
                        </tr>
                        <tr>
                           <td>Hypotheciation Bank Name</td>
                           <td><?php echo $hypotheciation_bank_name;?>	</td>
                           <td><?php echo $hypotheciation_bank_name2;?></td>
                           <td><?php echo $hypotheciation_bank_name3;?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="col-12 table-responsive">
                  <table class="table table-striped">
                     <thead style="background-image: url('../../../assets/admin/img/blue_bg.png');color:#fff;font-weight:bold">
                        <tr >
                           <th colspan="3" style="padding:10px !important;width:77%;background-image: url('../../../assets/admin/img/blue_bg.png');">
                              <div style="background-image: url('../../../assets/admin/img/blue_bg.png');">PARIVAHAN details</div>
                           </th>
                           <?php if($parivahan_status=='completed'){$pari_st='right.png';$text="Record Available";$bg_color=" url('../../../assets/admin/img/green_bg.png')";}else{$pari_st='wrong.png';$text="Record Not Available";$bg_color=" url('../../../assets/admin/img/red_bg.png')";}?>
                           <th colspan="1" style="background-image:<?php echo $bg_color;?>"><img style="width: 54px;height: 44px;padding:9px" src="<?php echo base_url();?>assets/admin/img/<?php echo $pari_st;?>?<?php echo date('h:m:s');?>">&nbsp&nbsp&nbsp <b style="font-size:13px"><?php echo $text;?></b></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Owner Name</td>
                           <td><?php echo $owner_name;?></td>
                           <td>Engine NO</td>
                           <td><?php echo $engine_number;?></td>
                        </tr>
                        <tr>
                           <td>Purchase Deivery Date</td>
                           <td><?php echo $purchase_deivery_date;?></td>
                           <td>Body Type</td>
                           <td><?php echo $body_type;?></td>
                        </tr>
                        <tr>
                           <td>Maker</td>
                           <td><?php echo $maker;?></td>
                           <td>Unladen Weight</td>
                           <td><?php echo $laden_weight;?></td>
                        </tr>
                        <tr>
                           <td>Maker Model</td>
                           <td><?php echo $maker_model;?></td>
                           <td>Mfg Year</td>
                           <td><?php echo $mfg_year;?></td>
                        </tr>
                        <tr>
                           <td>Laden Weight (kG)</td>
                           <td><?php echo $laden_weight;?></td>
                           <td>Chassis NO</td>
                           <td><?php echo $chassis_number;?></td>
                        </tr>
                        <tr>
                           <td>Sleeper Capacity</td>
                           <td><?php echo $sleeper_capacity;?></td>
                           <td>Vehicle  Category</td>
                           <td><?php echo $permit_category;?></td>
                        </tr>
                        <tr>
                           <td>Registrations Date</td>
                           <td><?php echo $registration_date;?></td>
                           <td>Fitness Valid upto</td>
                           <td><?php echo $fitness_valid_upto;?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <!-- /.col -->
            </div>
            <div class="row">
               <div class="col-12 table-responsive">
                  <table class="table table-striped">
                     <thead style="background-image: url('../../../assets/admin/img/blue_bg.png');color:#fff;font-weight:bold">
                        <tr>
                           <th colspan="3" style="padding:10px !important;width:77%;background-image: url('../../../assets/admin/img/blue_bg.png');">Insurance Details</th>
                           <?php if($insurance_status=='completed'){$pari_st='right.png';$text="Record Available";$bg_color=" url('../../../assets/admin/img/green_bg.png')";}else{$pari_st='wrong.png';$text="Record Not Available";$bg_color=" url('../../../assets/admin/img/red_bg.png')";}?>
                           <th colspan="1" style="background-image:<?php echo $bg_color;?>"><img style="width: 54px;height: 44px;padding:9px" src="<?php echo base_url();?>assets/admin/img/<?php echo $pari_st;?>?<?php echo date('h:m:s');?>">&nbsp&nbsp&nbsp <b style="font-size:13px"><?php echo $text;?></b></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Insurance Type</td>
                           <td><?php echo $insurancer_type;?></td>
                           <td>Insurance Company Name</td>
                           <td><?php echo $insurance_company_name;?></td>
                        </tr>
                        <tr>
                           <td>Insurance From</td>
                           <td><?php echo $insurance_from;?></td>
                           <td>Insurance UPTO</td>
                           <td><?php echo $insurance_to;?></td>
                        </tr>
                        <tr>
                           <td>Policy NO</td>
                           <td><?php echo $policy_number;?></td>
                           <td>Insurance Declared Value</td>
                           <td><?php echo $insurance_value;?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <!-- /.col -->
            </div>
            <div class="row">
               <div class="col-12 table-responsive">
                  <table class="table table-striped">
                     <thead style="background-image: url('../../../assets/admin/img/blue_bg.png');color:#fff;font-weight:bold">
                        <tr>
                           <th  colspan="3" style="padding:10px !important;width:77%;background-image: url('../../../assets/admin/img/blue_bg.png');">Tax & FC Details</th>
                           <?php if($tax_status=='completed'){$pari_st='right.png';$text="Record Available";$bg_color=" url('../../../assets/admin/img/green_bg.png')";}else{$pari_st='wrong.png';$text="Record Not Available";$bg_color=" url('../../../assets/admin/img/red_bg.png')";}?>
                           <th colspan="1" style="background-image:<?php echo $bg_color;?>"><img style="width: 54px;height: 44px;padding:9px" src="<?php echo base_url();?>assets/admin/img/<?php echo $pari_st;?>?<?php echo date('h:m:s');?>">&nbsp&nbsp&nbsp <b style="font-size:13px"><?php echo $text;?></b></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Tax Paid Dt.</td>
                           <td><?php echo $tax_paid_date;?></td>
                           <td>Receipt Date</td>
                           <td><?php echo $receipt_date;?></td>
                        </tr>
                        <tr>
                           <td>Amount</td>
                           <td><?php echo $amount;?></td>
                           <td>Fine</td>
                           <td><?php echo $amount;?></td>
                        </tr>
                        <tr>
                           <td>Tax Clear Upto</td>
                           <td><?php echo $tax_clear_upto;?></td>
                           <td>Insurance Declared Value</td>
                           <td><?php echo $tax_paid_date;?></td>
                        </tr>
                        <tr>
                           <td>FC Issue Dt</td>
                           <td><?php echo $fc_issue_date;?></td>
                           <td>FC Valid UpTo</td>
                           <td><?php echo $tax_paid_date;?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <!-- /.col -->
            </div>
            <div class="row">
               <div class="col-12 table-responsive">
                  <table class="table table-striped">
                     <thead style="background-image: url('../../../assets/admin/img/blue_bg.png');color:#fff;font-weight:bold">
                        <tr class="vendorListHeading">
                           <th  colspan="3" style="padding:10px !important;width:77%;background-image: url('../../../assets/admin/img/blue_bg.png');">Permit Details</th>
                           <?php if($permit_status=='completed'){$pari_st='right.png';$text="Record Available";$bg_color=" url('../../../assets/admin/img/green_bg.png')";}else{$pari_st='wrong.png';$text="Record Not Available";$bg_color=" url('../../../assets/admin/img/red_bg.png')";}?>
                           <th colspan="1" style="background-image:<?php echo $bg_color;?>"><img style="width: 54px;height: 44px;padding:9px" src="<?php echo base_url();?>assets/admin/img/<?php echo $pari_st;?>?<?php echo date('h:m:s');?>">&nbsp&nbsp&nbsp <b style="font-size:13px"><?php echo $text;?></b></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Permit Type</td>
                           <td><?php echo $permit_type;?></td>
                           <td>Permit No</td>
                           <td><?php echo $tax_paid_date;?></td>
                        </tr>
                        <tr>
                           <td>Permit ISSUE DT</td>
                           <td><?php echo $tax_paid_date;?></td>
                           <td>NO of Trips</td>
                           <td><?php echo $number_of_trips;?></td>
                        </tr>
                        <tr>
                           <td>Service Type</td>
                           <td><?php echo $permit_type;?></td>
                           <td>Permit Valid up to</td>
                           <td><?php echo $tax_paid_date;?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <!-- /.col -->
            </div>
            <div class="row">
               <div class="col-12 table-responsive">
                  <table class="table table-striped">
                     <thead style="background-image: url('../../../assets/admin/img/blue_bg.png');color:#fff;font-weight:bold">
                        <tr>
                           <th colspan="3" style="padding:10px !important;width:77%;background-image: url('../../../assets/admin/img/blue_bg.png');">Claim Details</th>
                           <?php if($claim_status=='completed'){$pari_st='right.png';$text="Record Available";$bg_color=" url('../../../assets/admin/img/green_bg.png')";}else{$pari_st='wrong.png';$text="Record Not Available";$bg_color=" url('../../../assets/admin/img/red_bg.png')";}?>
                           <th colspan="1" style="background-image:<?php echo $bg_color;?>"><img style="width: 54px;height: 44px;padding:9px" src="<?php echo base_url();?>assets/admin/img/<?php echo $pari_st;?>?<?php echo date('h:m:s');?>">&nbsp&nbsp&nbsp <b style="font-size:13px"><?php echo $text;?></b></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Insurer name</td>
                           <td><?php echo $insurer_name;?></td>
                           <td>Total Claim Amt</td>
                           <td><?php echo $total_claim_amount;?></td>
                        </tr>
                        <tr>
                           <td>Registration No</td>
                           <td><?php echo $registration_number;?></td>
                           <td>Claim Intimation Dt</td>
                           <td><?php echo $claim_intimation_date;?></td>
                        </tr>
                        <tr>
                           <td>Accident Loss Dt</td>
                           <td><?php echo $accident_loss_date;?></td>
                           <td>Expense Paid</td>
                           <td><?php echo $expense_paid;?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <!-- /.col -->
            </div>
            
            </div>
			<p style="page-break-after:always"> </p>
			<div class="row">
               <div class="col-6">
                  <fieldset class="scheduler-border" style="width:100%">
                  <?php if($vehiclecategory!='commercial'){ ?>
					<legend class="scheduler-border ">Exterior</legend>
				  <?php }else{ ?>
				    <legend class="scheduler-border ">Vehicle Description</legend>
				  <?php } ?>	
				  
                  <table class="table table-striped">
                     <tbody>
                        <?php
                           if($vehiclecategory=='farm'){ /*Tractor Report*/
                           	$exterior_Array=array('seats','dash_board','seat_functions','bumber','head_lights','front_gril','brand_logo','front_mud_guard','right_mud_guard','cabin_conditions','cabin_type','running_board','wind_shield','fender_right','fender_left','fuel_tank','rear_tail_and_work_lights','posture_design_seats','foot_plates_right_side','foot_plates_left_side','cluster_meter','right_side_panel','left_side_panel','roof_canopy','roof_canopy_conditions','trailer_hydraulic_jack','trailer_hydraulic_jack','trolley_house','power_takeoff','tow_bar','hydralic_hitch','hydralic_rams','hydraulic_connections_to_implements','seat_functions');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_tractor->$key);
                           	}
                            }elseif($vehiclecategory=='3'){ /*3 Wheeler*/
                           	
                           	$exterior_Array = array('glass_frame','right_side_mud_guard','left_side_mud_guard','front_side_mud_guard','rear_engine_door','right_side_panel','left_side_panel','passenger_body','top_hood_canopy_conditions','top_hood_canopy','rikshaw_passenger_body','body_paints','running_board','cabin_type','load_body_type','refregeration_unit_in_load_body','front_wind_screen');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_review->$key);
                           	}
                            }elseif($vehiclecategory=='4'){ /*4 Wheeler*/
								$exterior_Array=array('grill','head_light','hood','front_bumber','left_fender','right_fender','right_quarter','left_quarter','front_windshield','right_front_door','left_front_door','right_rear_door','left_rear_door','roof','rear_windshield','rear_tail_light','rear_bumber','body_paints','deck_lid');
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_car->$key);
								}
                            }elseif($vehiclecategory=='commercial'){ /*Commercial*/
								$exterior_Array=array("load_body_type","cabin_type","wheel_base","engine_description","power","geerbox","engine_displacement","axle_config","load_body_build","refrigeration_unit_fitted_in_load_vehicle");
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_commercial->$key);
								}
                            }	
                           $count=count($exterior_Array);
                           $intotal=0;
                           foreach($exterior_Array as $key =>$value){
                           ?>
                        <tr>
                           <td style="width:40%"><?php $sen=str_ireplace("_",' ',$value); echo ucwords($sen);?></td>
                           <td >
                              <?php 
                                 $val=0;
                                 if($$value=='excellent'){
                                 	$val=5;
                                 }elseif($$value=='good'){
                                 	$val=4;
                                 }elseif($$value=='above_avg' || $$value=='available'){
                                 	$val=4;
                                 }elseif($$value=='below_avg'){
                                 	/*$val=3.2;*/$val=3;
                                 }elseif($$value=='average'){
                                 	/*$val=3.7;*/$val=3;
                                 }elseif($$value=='satisfactory'){
                                 	$val=3;
                                 }elseif($$value=='bad_working' || $$value=='not_check'){
                                 	$val=2;
                                 }elseif($$value=='scrap'){
                                 	$val=1;
                                 }elseif($$value=='option_na'){
                                 	$val='NA';
                                 }
								 
                                 $intotal +=$val;
								 if($val!=0){
									 for($i=1;$i<=5;$i++){
										if($val==5){$scolor='excellent';
										}elseif($val < 5 && $val > 4){$scolor='good';
										}elseif($val < 5 && $val >= 4){$scolor='above_avg';
										}elseif($val > 3 && $val <= 3.2){$scolor='below_avg';
										}elseif($val > 3.2 && $val <= 3.7){$scolor='average';
										}elseif($val > 2 && $val <= 3){$scolor='satisfactory';
										}elseif($val > 1 && $val <= 2){$scolor='bad_working';
										}elseif($val == 1 ){$scolor='scrap';}
									 
										if($val <$i){
										$scolor='';?>
											<span class="fa fa-star"></span>
									  <?php	
										}else{?>
											<span class="fa fa-star <?php echo $$value;?>"></span>
									  <?php	
										}
									  }
								 }
                                 ?>
                           </td>
                           <td><?php $sen=str_ireplace("_",' ',$$value); echo ucwords($sen);?></td>
                           <td><?php echo number_format((float)$val, 2, '.', '');?></td>
                        </tr>
                        <?php }
                           $inavg = $intotal/$count;
                           $inavgr = round($inavg);
                           
                           if($inavgr==1){$avg_col='scrap';}
                           if($inavgr==2){$avg_col='bad_working';}
                           if($inavgr==3){$avg_col='satisfactory';}
                           if($inavgr==4){$avg_col='good';}
                           	if($inavgr==5){$avg_col='excellent';}
                           
                           ?>
                        <input type="hidden" name="exteriorall_avg" id="exteriorall_avg" value="<?php echo round($inavg);?>" class="<?php echo $avg_col;?>">    
                     </tbody>
                  </table>
               </div>
               <div class="col-6">
                  <fieldset class="scheduler-border" style="width:100%">
                  <?php if($vehiclecategory=='farm'){ /*Tractor Report*/?>
					<legend class="scheduler-border">Engine Conditions</legend>
                  <?php }elseif($vehiclecategory=='3'){ /*3 Wheeler*/?>
					<legend class="scheduler-border">Interior</legend>
                  <?php }elseif($vehiclecategory=='4'){ /*4 Wheeler*/?>
					<legend class="scheduler-border">Interior</legend>
				  <?php }elseif($vehiclecategory=='commercial'){ /*Commercial*/?>
				    <legend class="scheduler-border">Cabin / Interior</legend>
                  <?php }?>
                  <table class="table table-striped">
                     <tbody>
                        <?php
                           if($vehiclecategory=='farm'){ /*Tractor Report*/
                           	$exterior_Array=array('engine_conditions','drive_train','engine_compartment_condition','drive_options','undercarriage','pto_power_take_off','for_pto_master_shield_is_in_place_and_in_working_condition','hoses_damaged');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_tractor->$key);
                           	}
                            }elseif($vehiclecategory=='3'){ /*3 Wheeler*/
                           	$exterior_Array = array('driver_seat','passenger_seats','meter_conditions','dash_board','interior_paint_conditions','seat_flooring','front_floor','rear_flooring','no_of_seats','meter_type','dash_board_panel');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_review->$key);
                           	}
                            }elseif($vehiclecategory=='4'){ /*4 Wheeler*/
								$exterior_Array=array('dash_board_conditions','dash_board_warning_lights_gauges','front_left_seat','front_right_seat','rear_left_seat','rear_right_seat','3rd_row_seat_conds','trunk_cargo','air_bag','carpets_floor_mats','power_windows','rear_door_glass_operation_left','front_door_glass_operation_right','rear_door_glass_operation_right','front_door_glass_operation_left');
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_car->$key);
								}
                            }elseif($vehiclecategory=='commercial'){ /*Commercial*/
								$exterior_Array=array("front_windshield","bumber","door_left","door_right","dashboard","driver_seat","co_driver_seat","floor_mat");
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_commercial->$key);
								}
                            }	
                           
                           $count=count($exterior_Array);						
                           $intotal=0;
                           $intotal1=0;
                           foreach($exterior_Array as $key =>$value){
                           ?>
                        <tr>
                           <td><?php $sen=str_ireplace("_",' ',$value); echo ucwords($sen);?></td>
                           <td style="width:22%">
                              <?php 
                                 $inar=array('passenger_seats','driver_seat');
                                 $intotal='';
                                 foreach($inar as $key =>$inval){
                                 	
                                 	if($$inval=='excellent'){
                                 		$inval=5.0;
                                 	}elseif($$inval=='good'){
                                 		$inval=4.0;
                                 	}elseif($$inval=='above_avg' || $$inval=='available'){
                                 		$inval=4.0;
                                 	}elseif($$inval=='below_avg'){
                                 		/*$val=3.2;*/$inval=3.0;
                                 	}elseif($$inval=='average'){
                                 		/*$val=3.7;*/$inval=3.0;
                                 	}elseif($$inval=='satisfactory'){
                                 		$inval=3.0;
                                 	}elseif($$inval=='bad_working' || $$inval=='not_check'){
                                 		$inval=2.0;
                                 	}elseif($$inval=='scrap'){
                                 		$inval=1.0;
                                 	}elseif($$inval=='option_na'){
                                 		$inval='NA';
                                 	}
                                 	$intotal +=$inval;
                                 	
                                 }
                                 $inavg = $intotal/2;
                                 $inavgr = round($inavg);
                                 if($inavgr==1){$avg_col='scrap';}
                                 if($inavgr==2){$avg_col='bad_working';}
                                 if($inavgr==3){$avg_col='satisfactory';}
                                 if($inavgr==4){$avg_col='good';}
                                 if($inavgr==5){$avg_col='excellent';}
                                 
                                  ?>
                              <input type="hidden" name="interior_avg" id="interior_avg" value="<?php echo $inavg;?>" class="<?php echo $avg_col;?>">
                              <?php 
                                 $val=0;
                                 if($$value=='excellent'){
                                 	$val=5.0;
                                 }elseif($$value=='good'){
                                 	$val=4.0;
                                 }elseif($$value=='above_avg' || $$value=='available'){
                                 	$val=4.0;
                                 }elseif($$value=='below_avg'){
                                 	/*$val=3.2;*/$val=3.0;
                                 }elseif($$value=='average'){
                                 	/*$val=3.7;*/$val=3.0;
                                 }elseif($$value=='satisfactory'){
                                 	$val=3.0;
                                 }elseif($$value=='bad_working' || $$value=='not_check'){
                                 	$val=2.0;
                                 }elseif($$value=='scrap'){
                                 	$val=1.0;
                                 }elseif($$value=='option_na'){
                                 	$val='NA';
                                 }
                                 $intotal1 +=$val;
                                 for($i=1;$i<=5;$i++){
                                 	if($val==5){$scolor='excellent';
                                 	}elseif($val < 5 && $val > 4){$scolor='good';
                                 	}elseif($val < 5 && $val >= 4){$scolor='above_avg';
                                 	}elseif($val > 3 && $val <= 3.2){$scolor='below_avg';
                                 	}elseif($val > 3.2 && $val <= 3.7){$scolor='average';
                                 	}elseif($val > 2 && $val <= 3){$scolor='satisfactory';
                                 	}elseif($val > 1 && $val <= 2){$scolor='bad_working';
                                 	}elseif($val == 1 ){$scolor='scrap';}
                                 ?>
                              <?php 
                                 // 3.2 < 1
                                 if($val <$i){
                                 	$scolor='';?>
                              <span class="fa fa-star"></span>
                              <?php	
                                 }else{?>
                              <span class="fa fa-star <?php echo $$value;?>"></span>
                              <?php	}
                                 ?>
                              <?php }
                                 ?>
                           </td>
                           <td><?php $sen=str_ireplace("_",' ',$$value); echo ucwords($sen);?></td>
                           <td><?php echo number_format((float)$val, 2, '.', '');?></td>
                        </tr>
                        <?php }
                           $inavg = $intotal1/$count;
                           $inavgr = round($inavg);
                           
                           if($inavgr==1){$avg_col='scrap';}
                           if($inavgr==2){$avg_col='bad_working';}
                           if($inavgr==3){$avg_col='satisfactory';}
                           if($inavgr==4){$avg_col='good';}
                           if($inavgr==5){$avg_col='excellent';}
                           
                           
                           ?>
                        <input type="hidden" name="interiorall_avg" id="interiorall_avg" value="<?php echo round($inavg);?>" class="<?php echo $avg_col;?>">
                     </tbody>
                  </table>
               </div>
            
            <!-- /.row -->
            
               <div class="col-6">
                  <fieldset class="scheduler-border" style="width:100%">
                  
				  
					<legend class="scheduler-border">Electric & Working Condition</legend>
				  
				  
                  <table class="table table-striped">
                     <tbody>
                        <?php
                           if($vehiclecategory=='farm'){ /*Tractor Report*/
                           	$exterior_Array=array('electrical_conditions','battery_conditions','ignitations_system');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_tractor->$key);
                           	}
                            }elseif($vehiclecategory=='3'){ /*3 Wheeler*/
                           	$exterior_Array = array('electrical_condition','head_lights','tail_lights','indicators','switches','electric_start','metre_type_digital','ignitions','fuel_guage','meter_type_electric');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_review->$key);
                           	}
                            }elseif($vehiclecategory=='4'){ /*4 Wheeler*/
								$exterior_Array = array('electrical_conditions','ignition_fuel_system','head_lamp_tail_lamp','starter_motor','battery_','battery_conditions');
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_car->$key);
								}
                            }elseif($vehiclecategory=='commercial'){ /*Commercial*/
								$exterior_Array = array("electrical_conditions","a_c_cooling","power_windows","ignitations_system");
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_commercial->$key);
								}
                            }
                           $count=count($exterior_Array);
                           $intotal1=0;
                           foreach($exterior_Array as $key =>$value){
                           	
                           
                           ?>
                        <tr>
                           <td><?php $sen=str_ireplace("_",' ',$value); echo ucwords($sen);?></td>
                           <td>
                              <?php
                                 $val=0;
                                 if($$value=='excellent'){
                                 	$val=5.0;
                                 }elseif($$value=='good'){
                                 	$val=4.0;
                                 }elseif($$value=='above_avg' || $$value=='available'){
                                 	$val=4.0;
                                 }elseif($$value=='below_avg'){
                                 	/*$val=3.2;*/$val=3.0;
                                 }elseif($$value=='average'){
                                 	/*$val=3.7;*/$val=3.0;
                                 }elseif($$value=='satisfactory'){
                                 	$val=3.0;
                                 }elseif($$value=='bad_working' || $$value=='not_check'){
                                 	$val=2.0;
                                 }elseif($$value=='scrap'){
                                 	$val=1.0;
                                 }elseif($$value=='option_na'){
                                 	$val='NA';
                                 }
                                 $intotal1 +=$val;
                                 for($i=1;$i<=5;$i++){
                                 	if($val==5){$scolor='excellent';
                                 	}elseif($val < 5 && $val > 4){$scolor='good';
                                 	}elseif($val < 5 && $val >= 4){$scolor='above_avg';
                                 	}elseif($val > 3 && $val <= 3.2){$scolor='below_avg';
                                 	}elseif($val > 3.2 && $val <= 3.7){$scolor='average';
                                 	}elseif($val > 2 && $val <= 3){$scolor='satisfactory';
                                 	}elseif($val > 1 && $val <= 2){$scolor='bad_working';
                                 	}elseif($val == 1 ){$scolor='scrap';}
                                 ?>
                              <?php 
                                 // 3.2 < 1
                                 if($val <$i){
                                 	$scolor='';?>
                              <span class="fa fa-star"></span>
                              <?php	
                                 }else{?>
                              <span class="fa fa-star <?php echo $$value;?>"></span>
                              <?php	}
                                 ?> 
                              <?php }
                                 ?>
                           </td>
                           <td><?php $sen=str_ireplace("_",' ',$$value); echo ucwords($sen);?></td>
                           <td><?php echo number_format((float)$val, 2, '.', '');?></td>
                        </tr>
                        <?php }
                           $inavg = $intotal1/$count;
                           $inavgr = round($inavg);
                           
                           if($inavgr==1){$avg_col='scrap';}
                           if($inavgr==2){$avg_col='bad_working';}
                           if($inavgr==3){$avg_col='satisfactory';}
                           if($inavgr==4){$avg_col='good';}
                           if($inavgr==5){$avg_col='excellent';}
                           ?>
                        <input type="hidden" name="electric_avg" id="electricall_avg" value="<?php echo round($inavg);?>" class="<?php echo $avg_col;?>">
                     </tbody>
                  </table>
               </div>
			   <?php
				   $exterior_Array=array();
				   if($vehiclecategory=='3'){ /*4 Wheeler*/
						$exterior_Array = array('chassis_conditions','engine_conditions','engine_running','accelerator_conditions','vehicle_condition','front_break_lever','rear_break_lever');
						foreach ($exterior_Array as $key) {
						   $$key = @htmlspecialchars($edit_records_review->$key);
						}
				   }elseif($vehiclecategory=='4'){
						$exterior_Array = array('engine_conditions','engine_running','engine_oil_level','engine_oil_functions');
						foreach ($exterior_Array as $key) {
						   $$key = @htmlspecialchars($edit_records_car->$key);
						}
				   }elseif($vehiclecategory=='commercial'){
						$exterior_Array = array("engine_conditions","engine_running","engine_oil_level","engine_oil_functions","diesel_pump","radiator_conditions","abs");
						foreach ($exterior_Array as $key) {
						   $$key = @htmlspecialchars($edit_records_commercial->$key);
						}
				   }
				   $count = count($exterior_Array);
				   $intotal=0;
				   if($count>0){
				   ?>
               <div class="col-6">
                  <fieldset class="scheduler-border" style="width:100%">
                  <legend class="scheduler-border">Engine & Mechanical Condition</legend>
                  <table class="table table-striped">
                     <tbody>
                        <?php
                           
							foreach($exterior_Array as $key =>$value){
								
					   ?>
                        <tr>
                           <td><?php $sen=str_ireplace("_",' ',$value); echo ucwords($sen);?></td>
                           <td>
                              <?php 
                                 $val=0;
                                 if($$value=='excellent'){
                                 	$val=5.0;
                                 }elseif($$value=='good'){
                                 	$val=4.0;
                                 }elseif($$value=='above_avg' || $$value=='available'){
                                 	$val=4.0;
                                 }elseif($$value=='below_avg'){
                                 	/*$val=3.2;*/$val=3.0;
                                 }elseif($$value=='average'){
                                 	/*$val=3.7;*/$val=3.0;
                                 }elseif($$value=='satisfactory'){
                                 	$val=3.0;
                                 }elseif($$value=='bad_working' || $$value=='not_check'){
                                 	$val=2.0;
                                 }elseif($$value=='scrap'){
                                 	$val=1.0;
                                 }elseif($$value=='option_na'){
                                 	$val='NA';
                                 }
                                 $intotal +=$val;
                                 for($i=1;$i<=5;$i++){
                                 	if($val==5){$scolor='excellent';
                                 	}elseif($val < 5 && $val > 4){$scolor='good';
                                 	}elseif($val < 5 && $val >= 4){$scolor='above_avg';
                                 	}elseif($val > 3 && $val <= 3.2){$scolor='below_avg';
                                 	}elseif($val > 3.2 && $val <= 3.7){$scolor='average';
                                 	}elseif($val > 2 && $val <= 3){$scolor='satisfactory';
                                 	}elseif($val > 1 && $val <= 2){$scolor='bad_working';
                                 	}elseif($val == 1 ){$scolor='scrap';}
                                 ?>
                              <?php 
                                 // 3.2 < 1
                                 if($val <$i){
                                 	$scolor='';?>
                              <span class="fa fa-star"></span>
                              <?php	
                                 }else{?>
                              <span class="fa fa-star <?php echo $$value;?>"></span>
                              <?php	}
                                 ?>  
                              <?php }
                                 ?>
                           </td>
                           <td><?php $sen=str_ireplace("_",' ',$$value); echo ucwords($sen);?></td>
                           <td><?php echo number_format((float)$val, 2, '.', '');?></td>
                        </tr>
                        <?php }
                           $inavg = $intotal/$count;
                           $inavgr = round($inavg);
                           
                           if($inavgr==1){$avg_col='scrap';}
                           if($inavgr==2){$avg_col='bad_working';}
                           if($inavgr==3){$avg_col='satisfactory';}
                           if($inavgr==4){$avg_col='good';}
                           if($inavgr==5){$avg_col='excellent';}
                           
                           
                           ?>
                        
						<input type="hidden" name="engine_avg" id="engineall_avg" value="<?php echo round($inavg);?>" class="<?php echo $avg_col;?>">
						
                     </tbody>
                  </table>
               </div>
				   <?php }else{
				   if($vehiclecategory=='farm'){
					?>
					   <input type="hidden" name="engine_avg" id="engineall_avg" value="0" class="5">
				   <?php
					}
				   }
				   ?>
				   
            
               <div class="col-6">
                  <fieldset class="scheduler-border" style="width:100%">
                  
				  <?php if($vehiclecategory!='commercial'){ /*Tractor Report*/?>
					<legend class="scheduler-border">Steering Condition</legend>
                  <?php }else{ ?>
					<legend class="scheduler-border">A/C Heater Blower Fan</legend>
				  <?php } ?>
				  <table class="table table-striped">
                     <tbody>
                        <?php
                           if($vehiclecategory=='farm'){ /*Tractor Report*/
                           	$exterior_Array=array('strearing_wheel','power_strearing','stearing_wheel','streaing_conditions');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_tractor->$key);
                           	}
                            }elseif($vehiclecategory=='3'){ /*3 Wheeler*/
                           	$exterior_Array = array('steering_condition','steering_vibration','power_steering');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_review->$key);
                           	}
                            }elseif($vehiclecategory=='4'){ /*4 Wheeler*/
								$exterior_Array=array('streering_play','power_streering','steering','streaing_conditions');
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_car->$key);
								}
                            }elseif($vehiclecategory=='commercial'){ /*Commercial*/
								$exterior_Array=array("a_c_heater_blower_fan","cooling_system_radiator","electric_cooling_fan");
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_commercial->$key);
								}
                            }
                           
                           $count=count($exterior_Array);
                           $intotal = 0;
                           foreach($exterior_Array as $key =>$value){
                           ?>
                        <tr>
                           <td><?php $sen=str_ireplace("_",' ',$value); echo ucwords($sen);?></td>
                           <td>
                              <?php 
                                 $val=0;
                                 if($$value=='excellent'){
                                 	$val=5.0;
                                 }elseif($$value=='good'){
                                 	$val=4.0;
                                 }elseif($$value=='above_avg' || $$value=='available'){
                                 	$val=4.0;
                                 }elseif($$value=='below_avg'){
                                 	/*$val=3.2;*/$val=3.0;
                                 }elseif($$value=='average'){
                                 	/*$val=3.7;*/$val=3.0;
                                 }elseif($$value=='satisfactory'){
                                 	$val=3.0;
                                 }elseif($$value=='bad_working' || $$value=='not_check'){
                                 	$val=2.0;
                                 }elseif($$value=='scrap'){
                                 	$val=1.0;
                                 }elseif($$value=='option_na'){
                                 	$val='NA';
                                 }
                                 $intotal +=$val;
                                 for($i=1;$i<=5;$i++){
                                 	if($val==5){$scolor='excellent';
                                 	}elseif($val < 5 && $val > 4){$scolor='good';
                                 	}elseif($val < 5 && $val >= 4){$scolor='above_avg';
                                 	}elseif($val > 3 && $val <= 3.2){$scolor='below_avg';
                                 	}elseif($val > 3.2 && $val <= 3.7){$scolor='average';
                                 	}elseif($val > 2 && $val <= 3){$scolor='satisfactory';
                                 	}elseif($val > 1 && $val <= 2){$scolor='bad_working';
                                 	}elseif($val == 1 ){$scolor='scrap';}
                                 ?>
                              <?php 
                                 // 3.2 < 1
                                 if($val <$i){
                                 	$scolor='';?>
                              <span class="fa fa-star"></span>
                              <?php	
                                 }else{?>
                              <span class="fa fa-star <?php echo $$value;?>"></span>
                              <?php	}
                                 ?>  
                              <?php }
                                 ?>
                           </td>
                           <td><?php $sen=str_ireplace("_",' ',$$value); echo ucwords($sen);?></td>
                           <td><?php echo number_format((float)$val, 2, '.', '');?></td>
                        </tr>
                        <?php }
                           $inavg = $intotal/$count;
                           $inavgr = round($inavg);
                           
                           if($inavgr==1){$avg_col='scrap';}
                           if($inavgr==2){$avg_col='bad_working';}
                           if($inavgr==3){$avg_col='satisfactory';}
                           if($inavgr==4){$avg_col='good';}
                           if($inavgr==5){$avg_col='excellent';}
                           ?>
                        <input type="hidden" name="steering_avg" id="steering_avg" value="<?php echo $inavg;?>" class="<?php echo $avg_col;?>">
                     </tbody>
                  </table>
               </div>
               <div class="col-6">
                  <fieldset class="scheduler-border" style="width:100%">
				  
					<legend class="scheduler-border">Transmission / Gear Box Conditions </legend>
				  
                  <table class="table table-striped">
                     <tbody>
                        <?php
                           if($vehiclecategory=='farm'){ /*Tractor Report*/
                           	$exterior_Array=array('transmission_working','gear_shift','noleakage_in_hydraulics_/_transmission','tandem_axles','gear_shift_leaver','high_speed_shift_leaver','clutch_leaver','clutch_pedal','clutch_pedal_play','tractor_trolley','trolley_hook','tractor_rotavator','tractor_trailer');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_tractor->$key);
                           	}
                            }elseif($vehiclecategory=='3'){ /*3 Wheeler*/
                           	$exterior_Array = array('transmission_working','gear_shifting_conditions','transmission','clutch_conditions');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_review->$key);
                           	}
                            }elseif($vehiclecategory=='4'){ /*4 Wheeler*/
								$exterior_Array=array('transmission_gear_box_conditions','transmission_working','gear_shift');
								//$exterior_Array = array('transmission_working','gear_shifting_conditions','transmission','clutch_conditions');
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_car->$key);
								}
                            }elseif($vehiclecategory=='commercial'){ /*4 Wheeler*/
								$exterior_Array=array("transmission_gear_box_conditions","transmission_working","gear_shift");
								//$exterior_Array = array('transmission_working','gear_shifting_conditions','transmission','clutch_conditions');
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_commercial->$key);
								}
                            }
                           $count=count($exterior_Array);
                           $intotal=0;
                           foreach($exterior_Array as $key =>$value){
                           ?>
                        <tr>
                           <td><?php $sen=str_ireplace("_",' ',$value); echo ucwords($sen);?></td>
                           <td>
                              <?php 
                                 $val=0;
                                 if($$value=='excellent'){
                                 	$val=5.0;
                                 }elseif($$value=='good'){
                                 	$val=4.0;
                                 }elseif($$value=='above_avg' || $$value=='available'){
                                 	$val=4.0;
                                 }elseif($$value=='below_avg'){
                                 	/*$val=3.2;*/$val=3.0;
                                 }elseif($$value=='average'){
                                 	/*$val=3.7;*/$val=3.0;
                                 }elseif($$value=='satisfactory'){
                                 	$val=3.0;
                                 }elseif($$value=='bad_working' || $$value=='not_check'){
                                 	$val=2.0;
                                 }elseif($$value=='scrap'){
                                 	$val=1.0;
                                 }elseif($$value=='option_na'){
                                 	$val='NA';
                                 }
                                 $intotal +=$val;
                                 for($i=1;$i<=5;$i++){
                                 	if($val==5){$scolor='excellent';
                                 	}elseif($val < 5 && $val > 4){$scolor='good';
                                 	}elseif($val < 5 && $val >= 4){$scolor='above_avg';
                                 	}elseif($val > 3 && $val <= 3.2){$scolor='below_avg';
                                 	}elseif($val > 3.2 && $val <= 3.7){$scolor='average';
                                 	}elseif($val > 2 && $val <= 3){$scolor='satisfactory';
                                 	}elseif($val > 1 && $val <= 2){$scolor='bad_working';
                                 	}elseif($val == 1 ){$scolor='scrap';}
                                 ?>
                              <?php 
                                 // 3.2 < 1
                                 if($val <$i){
                                 	$scolor='';?>
                              <span class="fa fa-star"></span>
                              <?php	
                                 }else{?>
                              <span class="fa fa-star <?php echo $$value;?>"></span>
                              <?php	}
                                 ?>  
                              <?php }
                                 ?>
                           </td>
                           <td><?php $sen=str_ireplace("_",' ',$$value); echo ucwords($sen);?></td>
                           <td><?php echo number_format((float)$val, 2, '.', '');?></td>
                        </tr>
                        <?php 
                           }
                           
                           		$inavg = $intotal/$count;
                           		$inavgr = round($inavg);
                           		
                           		if($inavgr==1){$avg_col='scrap';}
                           		if($inavgr==2){$avg_col='bad_working';}
                           		if($inavgr==3){$avg_col='satisfactory';}
                           		if($inavgr==4){$avg_col='good';}
                           		if($inavgr==5){$avg_col='excellent';}
                           ?>
                        <input type="hidden" name="transmission_avg" id="transmission_avg" value="<?php echo $inavg;?>" class="<?php echo $avg_col;?>">
                     </tbody>
                  </table>
               </div>
            
            
               <div class="col-6">
                  <fieldset class="scheduler-border" style="width:100%">
				  
					<legend class="scheduler-border">Tyre Conditions</legend>
				  
                  <table class="table table-striped">
                     <tbody>
                        <?php
                           if($vehiclecategory=='farm'){ /*Tractor Report*/
                           	$exterior_Array=array('no_of_tires','front_right_tyres_conditions','front_left_tyres_conditions','back_right_tyres_conditions','back_left_tyres_conditions','tractor_tyre_conditions','front_right_tyres_life','front_left_tyres_life','back_right_tyres_life','back_left_tyres_life');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_tractor->$key);
                           	}
                            }elseif($vehiclecategory=='3'){ /*3 Wheeler*/
                           	$exterior_Array = array('no_of_tires','front_right_tyres_conditions','back_left_tyres_conditions','back_right_tyres_conditions');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_review->$key);
                           	}
                            }elseif($vehiclecategory=='4'){ /*4 Wheeler*/
								$exterior_Array=array('front_right_tire','back_right_tire','front_left_tire','back_left_tire','spare_tire','front_right_wheel','back_right_wheel','front_left_wheel','back_left_wheel');
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_car->$key);
								}
                            }elseif($vehiclecategory=='commercial'){ /*Commercial*/
								$exterior_Array=array("no_of_tires","front_right_tyres_condition","front_left_tyre_condition","back_right_tyre_condition","back_left_tyre_condition");
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_commercial->$key);
								}
                            }
                           $intotal1=0;
                           $count= count($exterior_Array);
                           foreach($exterior_Array as $key =>$value){
                           ?>
                        <tr>
                           <td><?php $sen=str_ireplace("_",' ',$value); echo ucwords($sen);?></td>
                           <td>
                              <?php 
                                 $val=0;
                                 if($$value=='excellent'){
                                 	$val=5.0;
                                 }elseif($$value=='good'){
                                 	$val=4.0;
                                 }elseif($$value=='above_avg' || $$value=='available'){
                                 	$val=4.0;
                                 }elseif($$value=='below_avg'){
                                 	/*$val=3.2;*/$val=3.0;
                                 }elseif($$value=='average'){
                                 	/*$val=3.7;*/$val=3.0;
                                 }elseif($$value=='satisfactory'){
                                 	$val=3.0;
                                 }elseif($$value=='bad_working' || $$value=='not_check'){
                                 	$val=2.0;
                                 }elseif($$value=='scrap'){
                                 	$val=1.0;
                                 }elseif($$value=='option_na'){
                                 	$val='NA';
                                 }
                                 $groupa=array('front_right_tire','back_right_tire','front_left_tire','back_left_tire','spare_tire');
                                 if(in_array($value,$groupa)){
                                 	$intotal1 +=$val;
                                 }
                                 
                                 for($i=1;$i<=5;$i++){
                                 	if($val==5){$scolor='excellent';
                                 	}elseif($val < 5 && $val > 4){$scolor='good';
                                 	}elseif($val < 5 && $val >= 4){$scolor='above_avg';
                                 	}elseif($val > 3 && $val <= 3.2){$scolor='below_avg';
                                 	}elseif($val > 3.2 && $val <= 3.7){$scolor='average';
                                 	}elseif($val > 2 && $val <= 3){$scolor='satisfactory';
                                 	}elseif($val > 1 && $val <= 2){$scolor='bad_working';
                                 	}elseif($val == 1 ){$scolor='scrap';}
                                 ?>
                              <?php 
                                 // 3.2 < 1
                                 if($val <$i){
                                 	$scolor='';?>
                              <span class="fa fa-star"></span>
                              <?php	
                                 }else{?>
                              <span class="fa fa-star <?php echo $$value;?>"></span>
                              <?php	}
                                 ?>
                              <?php }
                                 ?>
                           </td>
                           <td><?php $sen=str_ireplace("_",' ',$$value); echo ucwords($sen);?></td>
                           <td><?php echo number_format((float)$val, 2, '.', '');?></td>
                        </tr>
                        <?php }
                           $count=5;
                           $inavg = $intotal1/$count;
                           $inavgr = round($inavg);
                           
                           if($inavgr==1){$avg_col='scrap';}
                           if($inavgr==2){$avg_col='bad_working';}
                           if($inavgr==3){$avg_col='satisfactory';}
                           if($inavgr==4){$avg_col='good';}
                           if($inavgr==5){$avg_col='excellent';}
                           
                           
                           ?>
                        <input type="hidden" name="tyreall_avg" id="tyreall_avg" value="<?php echo round($inavg);?>" class="<?php echo $avg_col;?>">
                     </tbody>
                  </table>
               </div>
               <div class="col-6">
                  <fieldset class="scheduler-border" style="width:100%">
                  <legend class="scheduler-border">Suspension</legend>
                  <table class="table table-striped">
                     <tbody>
                        <?php
                           if($vehiclecategory=='farm'){ /*Tractor Report*/
                           	$exterior_Array=array('front_axle','rear_axle','rear_tractor_suspension','trailer_suspension_1','trailer_suspension_2');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_tractor->$key);
                           	}
                            }elseif($vehiclecategory=='3'){ /*3 Wheeler*/
                           	$exterior_Array = array('front_suspension','rear_susppension','shock_absorber');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_review->$key);
                           	}
                            }elseif($vehiclecategory=='4'){ /*4 Wheeler*/
								$exterior_Array=array('front_suspension','rear_suspension');
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_car->$key);
								}
                            }elseif($vehiclecategory=='commercial'){ /*Commercial*/
								$exterior_Array=array("front_suspension","rear_susppension","rear_tractor_suspendion");
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_commercial->$key);
								}
                            }
                           
                           $intotal=0;
                           $count=count($exterior_Array);
                           foreach($exterior_Array as $key =>$value){
                           ?>
                        <tr>
                           <td><?php $sen=str_ireplace("_",' ',$value); echo ucwords($sen);?></td>
                           <td>
                              <?php 
                                 $val=0;
                                 if($$value=='excellent'){
                                 	$val=5.0;
                                 }elseif($$value=='good'){
                                 	$val=4.0;
                                 }elseif($$value=='above_avg' || $$value=='available'){
                                 	$val=4.0;
                                 }elseif($$value=='below_avg'){
                                 	/*$val=3.2;*/$val=3.0;
                                 }elseif($$value=='average'){
                                 	/*$val=3.7;*/$val=3.0;
                                 }elseif($$value=='satisfactory'){
                                 	$val=3.0;
                                 }elseif($$value=='bad_working' || $$value=='not_check'){
                                 	$val=2.0;
                                 }elseif($$value=='scrap'){
                                 	$val=1.0;
                                 }elseif($$value=='option_na'){
                                 	$val='NA';
                                 }
                                 //if($value=='front_suspension' || $value=='rear_susppension'){
                                 	$intotal +=$val;
                                 //}
                                 
                                 for($i=1;$i<=5;$i++){
                                 	if($val==5){$scolor='excellent';
                                 	}elseif($val < 5 && $val > 4){$scolor='good';
                                 	}elseif($val < 5 && $val >= 4){$scolor='above_avg';
                                 	}elseif($val > 3 && $val <= 3.2){$scolor='below_avg';
                                 	}elseif($val > 3.2 && $val <= 3.7){$scolor='average';
                                 	}elseif($val > 2 && $val <= 3){$scolor='satisfactory';
                                 	}elseif($val > 1 && $val <= 2){$scolor='bad_working';
                                 	}elseif($val == 1 ){$scolor='scrap';}
                                 ?>
                              <?php 
                                 // 3.2 < 1
                                 if($val <$i){
                                 	$scolor='';?>
                              <span class="fa fa-star"></span>
                              <?php	
                                 }else{?>
                              <span class="fa fa-star <?php echo $$value;?>"></span>
                              <?php	}
                                 ?> 
                              <?php }
                                 ?>
                           </td>
                           <td><?php $sen=str_ireplace("_",' ',$$value); echo ucwords($sen);?></td>
                           <td><?php echo number_format((float)$val, 2, '.', '');?></td>
                        </tr>
                        <?php }
                           $inavg = $intotal/$count;
                           
                           if($inavgr==1){$avg_col='scrap';}
                           if($inavgr==2){$avg_col='bad_working';}
                           if($inavgr==3){$avg_col='satisfactory';}
                           if($inavgr==4){$avg_col='good';}
                           if($inavgr==5){$avg_col='excellent';}
                           
                           ?>
                        <input type="hidden" name="suspension_avg" id="suspension_avg" value="<?php echo number_format($inavg,2);?>" class="<?php echo $avg_col;?>">
                     </tbody>
                  </table>
               </div>
            
            
               <div class="col-6">
                  <fieldset class="scheduler-border" style="width:100%">
				  <?php if($vehiclecategory!='commercial'){ ?>
					<legend class="scheduler-border">Accessories</legend>
				  <?php }else{ ?>
				    <legend class="scheduler-border">Stearing</legend>
				  <?php } ?>
                  
                  <table class="table table-striped">
                     <tbody>
                        <?php
                           if($vehiclecategory=='3'){ /*3 Wheeler*/
                           	$exterior_Array = array('audio_system','remote_locking','reverse_camers_sensor','seet_covers');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_review->$key);
                           	}
                            }elseif($vehiclecategory=='4'){ /*4 Wheeler*/
								$exterior_Array=array('audio_system','remote_locking','reverse_camers_sensor','seet_covers');
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_car->$key);
								}
                            }elseif($vehiclecategory=='commercial'){ /*Commercial*/
								$exterior_Array=array("strearing_play","power_strearing","streaing_conditions");
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_commercial->$key);
								}
                            }
                            $count=count($exterior_Array);
                            $intotal=0;
                           foreach($exterior_Array as $key =>$value){
                           ?>
                        <tr>
                           <td><?php $sen=str_ireplace("_",' ',$value); echo ucwords($sen);?></td>
                           <td>
                              <?php 
                                 $val=0;
                                 if($$value=='excellent'){
                                 	$val=5.0;
                                 }elseif($$value=='good'){
                                 	$val=4.0;
                                 }elseif($$value=='above_avg' || $$value=='available'){
                                 	$val=4.0;
                                 }elseif($$value=='below_avg'){
                                 	/*$val=3.2;*/$val=3.0;
                                 }elseif($$value=='average'){
                                 	/*$val=3.7;*/$val=3.0;
                                 }elseif($$value=='satisfactory'){
                                 	$val=3.0;
                                 }elseif($$value=='bad_working' || $$value=='not_check'){
                                 	$val=2.0;
                                 }elseif($$value=='scrap'){
                                 	$val=1.0;
                                 }elseif($$value=='option_na'){
                                 	$val='NA';
                                 }
                                 $intotal +=$val;
                                 for($i=1;$i<=5;$i++){
                                 	if($val==5){$scolor='excellent';
                                 	}elseif($val < 5 && $val > 4){$scolor='good';
                                 	}elseif($val < 5 && $val >= 4){$scolor='above_avg';
                                 	}elseif($val > 3 && $val <= 3.2){$scolor='below_avg';
                                 	}elseif($val > 3.2 && $val <= 3.7){$scolor='average';
                                 	}elseif($val > 2 && $val <= 3){$scolor='satisfactory';
                                 	}elseif($val > 1 && $val <= 2){$scolor='bad_working';
                                 	}elseif($val == 1 ){$scolor='scrap';}
                                 ?>
                              <?php 
                                 // 3.2 < 1
                                 if($val <$i){
                                 	$scolor='';?>
                              <span class="fa fa-star"></span>
                              <?php	
                                 }else{?>
                              <span class="fa fa-star <?php echo $$value;?>"></span>
                              <?php	}
                                 ?> 
                              <?php }
                                 ?>
                           </td>
                           <td><?php $sen=str_ireplace("_",' ',$$value); echo ucwords($sen);?></td>
                           <td><?php echo number_format((float)$val, 2, '.', '');?></td>
                        </tr>
                        <?php }
                           $inavg = $intotal/$count;
                           $inavgr = round($inavg);
                           
                           if($inavgr==1){$avg_col='scrap';}
                           if($inavgr==2){$avg_col='bad_working';}
                           if($inavgr==3){$avg_col='satisfactory';}
                           if($inavgr==4){$avg_col='good';}
                           if($inavgr==5){$avg_col='excellent';}
                           
                           
                           ?>
                        <input type="hidden" name="accessoriesall_avg" id="accessoriesall_avg" value="<?php echo number_format($inavg,1);?>" class="<?php echo $avg_col;?>">
                     </tbody>
                  </table>
               </div>
			   
			   
               <div class="col-6">
                  <?php if($vehiclecategory!='4'){ ?>
				  <fieldset class="scheduler-border" style="width:100%">
                  <legend class="scheduler-border">Break</legend>
				  <?php } ?>
                  <table class="table table-striped">
                     <tbody>
                        <?php 
                           if($vehiclecategory=='farm'){ /*Tractor Report*/
								$exterior_Array = array('front_break','rear_break');
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_tractor->$key);
								}
                           }elseif($vehiclecategory=='3'){ /*3 Wheeler*/
								$exterior_Array = array('front_break','rear_break','abs');
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_review->$key);
								}
                           }elseif($vehiclecategory=='4'){ /*4 Wheeler*/
								$exterior_Array = array();
						   }elseif($vehiclecategory=='commercial'){ /*Commercial*/
								$exterior_Array = array("front_wheel","rear_wheel","rear_tractor_wheel","trailer_wheel");
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_commercial->$key);
								}
						   }
                           
                           $intotal=0;
                           $count = count($exterior_Array);
                           foreach($exterior_Array as $key =>$value){
                           ?>
                        <tr>
                           <td><?php $sen=str_ireplace("_",' ',$value); echo ucwords($sen);?></td>
                           <td>
                              <?php 
                                 $val=0;
                                 if($$value=='excellent'){
                                 	$val=5.0;
                                 }elseif($$value=='good'){
                                 	$val=4.0;
                                 }elseif($$value=='above_avg' || $$value=='available'){
                                 	$val=4.0;
                                 }elseif($$value=='below_avg'){
                                 	/*$val=3.2;*/$val=3.0;
                                 }elseif($$value=='average'){
                                 	/*$val=3.7;*/$val=3.0;
                                 }elseif($$value=='satisfactory'){
                                 	$val=3.0;
                                 }elseif($$value=='bad_working' || $$value=='not_check'){
                                 	$val=2.0;
                                 }elseif($$value=='scrap'){
                                 	$val=1.0;
                                 }elseif($$value=='option_na'){
                                 	$val='NA';
                                 }
                                 $intotal +=$val;
                                 for($i=1;$i<=5;$i++){
                                 	if($val==5){$scolor='excellent';
                                 	}elseif($val < 5 && $val > 4){$scolor='good';
                                 	}elseif($val < 5 && $val >= 4){$scolor='above_avg';
                                 	}elseif($val > 3 && $val <= 3.2){$scolor='below_avg';
                                 	}elseif($val > 3.2 && $val <= 3.7){$scolor='average';
                                 	}elseif($val > 2 && $val <= 3){$scolor='satisfactory';
                                 	}elseif($val > 1 && $val <= 2){$scolor='bad_working';
                                 	}elseif($val == 1 ){$scolor='scrap';}
                                 ?>
                              <?php 
                                 // 3.2 < 1
                                 if($val <$i){
                                 	$scolor='';?>
                              <span class="fa fa-star"></span>
                              <?php	
                                 }else{?>
                              <span class="fa fa-star <?php echo $$value;?>"></span>
                              <?php	}
                                 ?>
                              <?php }
                                 ?>
                           </td>
                           <td><?php $sen=str_ireplace("_",' ',$$value); echo ucwords($sen);?></td>
                           <td><?php echo number_format((float)$val, 2, '.', '');?></td>
                        </tr>
                        <?php }
							if($count==0){
								$inavg = 1;
								$inavgr = 1;
							}else{
								$inavg = $intotal/$count;
								$inavgr = round($inavg);
							}
                            
                           	if($inavgr==1){$avg_col='scrap';}
                           	if($inavgr==2){$avg_col='bad_working';}
                           	if($inavgr==3){$avg_col='satisfactory';}
                           	if($inavgr==4){$avg_col='good';}
                           	if($inavgr==5){$avg_col='excellent';}
                           	
                           	
                           ?>
                        <input type="hidden" name="breakall_avg" id="breakall_avg" value="<?php echo number_format($inavg,1);?>" class="<?php echo $avg_col;?>">
                     </tbody>
                  </table>
               </div>
			   <?php if($vehiclecategory=='commercial'){?>
			   <div class="col-6">
                  <fieldset class="scheduler-border" style="width:100%">
                  <legend class="scheduler-border">Battery</legend>
                  <table class="table table-striped">
                     <tbody>
                        <?php 
                           if($vehiclecategory=='commercial'){ /*Commercial*/
								$exterior_Array = array("battery_conditions","battery","type_of_owner");
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_commercial->$key);
								}
						   }
                            /*elseif($vehiclecategory=='4'){ //4 Wheeler
                           	$exterior_Array=array('dash_board_conditions','dash_board_warning_lights_gauges','front_left_seat','front_right_seat','rear_left_seat','rear_right_seat','3rd_row_seat_conds','trunk_cargo','air_bag','carpets_floor_mats','power_windows','rear_door_glass_operation_left','front_door_glass_operation_right','rear_door_glass_operation_right','front_door_glass_operation_left');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_car->$key);
                           	}
                            }*/
                           
                           $intotal=0;
                           $count = count($exterior_Array);
                           foreach($exterior_Array as $key =>$value){
                           ?>
                        <tr>
                           <td><?php $sen=str_ireplace("_",' ',$value); echo ucwords($sen);?></td>
                           <td>
                              <?php 
                                 $val=0;
                                 if($$value=='excellent'){
                                 	$val=5.0;
                                 }elseif($$value=='good'){
                                 	$val=4.0;
                                 }elseif($$value=='above_avg' || $$value=='available'){
                                 	$val=4.0;
                                 }elseif($$value=='below_avg'){
                                 	/*$val=3.2;*/$val=3.0;
                                 }elseif($$value=='average'){
                                 	/*$val=3.7;*/$val=3.0;
                                 }elseif($$value=='satisfactory'){
                                 	$val=3.0;
                                 }elseif($$value=='bad_working' || $$value=='not_check'){
                                 	$val=2.0;
                                 }elseif($$value=='scrap'){
                                 	$val=1.0;
                                 }elseif($$value=='option_na'){
                                 	$val='NA';
                                 }
                                 $intotal +=$val;
                                 for($i=1;$i<=5;$i++){
                                 	if($val==5){$scolor='excellent';
                                 	}elseif($val < 5 && $val > 4){$scolor='good';
                                 	}elseif($val < 5 && $val >= 4){$scolor='above_avg';
                                 	}elseif($val > 3 && $val <= 3.2){$scolor='below_avg';
                                 	}elseif($val > 3.2 && $val <= 3.7){$scolor='average';
                                 	}elseif($val > 2 && $val <= 3){$scolor='satisfactory';
                                 	}elseif($val > 1 && $val <= 2){$scolor='bad_working';
                                 	}elseif($val == 1 ){$scolor='scrap';}
                                 ?>
                              <?php 
                                 // 3.2 < 1
                                 if($val <$i){
                                 	$scolor='';?>
                              <span class="fa fa-star"></span>
                              <?php	
                                 }else{?>
                              <span class="fa fa-star <?php echo $$value;?>"></span>
                              <?php	}
                                 ?>
                              <?php }
                                 ?>
                           </td>
                           <td><?php $sen=str_ireplace("_",' ',$$value); echo ucwords($sen);?></td>
                           <td><?php echo number_format((float)$val, 2, '.', '');?></td>
                        </tr>
                        <?php }
							if($count==0){
								$inavg = 1;
								$inavgr = 1;
							}else{
								$inavg = $intotal/$count;
								$inavgr = round($inavg);
							}
                            
                           	if($inavgr==1){$avg_col='scrap';}
                           	if($inavgr==2){$avg_col='bad_working';}
                           	if($inavgr==3){$avg_col='satisfactory';}
                           	if($inavgr==4){$avg_col='good';}
                           	if($inavgr==5){$avg_col='excellent';}
                           	
                           	
                           ?>
                        <input type="hidden" name="batteryall_avg" id="batteryall_avg" value="<?php echo number_format($inavg,1);?>" class="<?php echo $avg_col;?>">
                     </tbody>
                  </table>
               </div>
			   <div class="col-6">
                  <fieldset class="scheduler-border" style="width:100%">
                  <legend class="scheduler-border">Load Body</legend>
                  <table class="table table-striped">
                     <tbody>
                        <?php 
                           if($vehiclecategory=='commercial'){ /*Commercial*/
								$exterior_Array = array("tail_gate","left_fender","right_fender","hood","wind_shield","left_side_gate_fixed","right_side_gate_fixed","load_floor","overall_load_body","body_paints","fuel_tank","trailer_body","trailer_conditions","chassis_condition");
								foreach ($exterior_Array as $key) {
								   $$key = @htmlspecialchars($edit_records_commercial->$key);
								}
						   }
                           
                           $intotal=0;
                           $count = count($exterior_Array);
                           foreach($exterior_Array as $key =>$value){
                           ?>
                        <tr>
                           <td><?php $sen=str_ireplace("_",' ',$value); echo ucwords($sen);?></td>
                           <td>
                              <?php 
                                 $val=0;
                                 if($$value=='excellent'){
                                 	$val=5.0;
                                 }elseif($$value=='good'){
                                 	$val=4.0;
                                 }elseif($$value=='above_avg' || $$value=='available'){
                                 	$val=4.0;
                                 }elseif($$value=='below_avg'){
                                 	/*$val=3.2;*/$val=3.0;
                                 }elseif($$value=='average'){
                                 	/*$val=3.7;*/$val=3.0;
                                 }elseif($$value=='satisfactory'){
                                 	$val=3.0;
                                 }elseif($$value=='bad_working' || $$value=='not_check'){
                                 	$val=2.0;
                                 }elseif($$value=='scrap'){
                                 	$val=1.0;
                                 }elseif($$value=='option_na'){
                                 	$val='NA';
                                 }
                                 $intotal +=$val;
                                 for($i=1;$i<=5;$i++){
                                 	if($val==5){$scolor='excellent';
                                 	}elseif($val < 5 && $val > 4){$scolor='good';
                                 	}elseif($val < 5 && $val >= 4){$scolor='above_avg';
                                 	}elseif($val > 3 && $val <= 3.2){$scolor='below_avg';
                                 	}elseif($val > 3.2 && $val <= 3.7){$scolor='average';
                                 	}elseif($val > 2 && $val <= 3){$scolor='satisfactory';
                                 	}elseif($val > 1 && $val <= 2){$scolor='bad_working';
                                 	}elseif($val == 1 ){$scolor='scrap';}
                                 ?>
                              <?php 
                                 // 3.2 < 1
                                 if($val <$i){
                                 	$scolor='';?>
                              <span class="fa fa-star"></span>
                              <?php	
                                 }else{?>
                              <span class="fa fa-star <?php echo $$value;?>"></span>
                              <?php	}
                                 ?>
                              <?php }
                                 ?>
                           </td>
                           <td><?php $sen=str_ireplace("_",' ',$$value); echo ucwords($sen);?></td>
                           <td><?php echo number_format((float)$val, 2, '.', '');?></td>
                        </tr>
                        <?php }
							if($count==0){
								$inavg = 1;
								$inavgr = 1;
							}else{
								$inavg = $intotal/$count;
								$inavgr = round($inavg);
							}
                            
                           	if($inavgr==1){$avg_col='scrap';}
                           	if($inavgr==2){$avg_col='bad_working';}
                           	if($inavgr==3){$avg_col='satisfactory';}
                           	if($inavgr==4){$avg_col='good';}
                           	if($inavgr==5){$avg_col='excellent';}
                           	
                           	
                           ?>
                        <input type="hidden" name="loadbodyall_avg" id="loadbodyall_avg" value="<?php echo number_format($inavg,1);?>" class="<?php echo $avg_col;?>">
                     </tbody>
                  </table>
               </div>
			   
			   
			<?php }?>
            </div>
			   
            <?php if($vehiclecategory=='farm'){?>
            <div class="row">
               <div class="col-6">
                  <fieldset class="scheduler-border" style="width:100%">
                  <legend class="scheduler-border">Functionality Test</legend>
                  <table class="table table-striped">
                     <tbody>
                        <?php 
                           if($vehiclecategory=='farm'){ /*Tractor Report*/
                           	$exterior_Array = array('starts','drives_forward','drives_backward','brake_pedal_functions','horse_power','battery','cubic_capacity_(cc');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_tractor->$key);
                           	}
                            }
                            
                            /*elseif($vehiclecategory=='4'){ //4 Wheeler
                           	$exterior_Array=array('dash_board_conditions','dash_board_warning_lights_gauges','front_left_seat','front_right_seat','rear_left_seat','rear_right_seat','3rd_row_seat_conds','trunk_cargo','air_bag','carpets_floor_mats','power_windows','rear_door_glass_operation_left','front_door_glass_operation_right','rear_door_glass_operation_right','front_door_glass_operation_left');
                           	foreach ($exterior_Array as $key) {
                           	   $$key = @htmlspecialchars($edit_records_car->$key);
                           	}
                            }*/
                           
                           $intotal=0;
                           $count = count($exterior_Array);
                           foreach($exterior_Array as $key =>$value){
                           ?>
                        <tr>
                           <td><?php $sen=str_ireplace("_",' ',$value); echo ucwords($sen);?></td>
                           <td>
                              <?php 
                                 $val=0;
                                 if($$value=='excellent'){
                                 	$val=5.0;
                                 }elseif($$value=='good'){
                                 	$val=4.0;
                                 }elseif($$value=='above_avg' || $$value=='available'){
                                 	$val=4.0;
                                 }elseif($$value=='below_avg'){
                                 	/*$val=3.2;*/$val=3.0;
                                 }elseif($$value=='average'){
                                 	/*$val=3.7;*/$val=3.0;
                                 }elseif($$value=='satisfactory'){
                                 	$val=3.0;
                                 }elseif($$value=='bad_working' || $$value=='not_check'){
                                 	$val=2.0;
                                 }elseif($$value=='scrap'){
                                 	$val=1.0;
                                 }elseif($$value=='option_na'){
                                 	$val='NA';
                                 }
                                 $intotal +=$val;
                                 for($i=1;$i<=5;$i++){
                                 	if($val==5){$scolor='excellent';
                                 	}elseif($val < 5 && $val > 4){$scolor='good';
                                 	}elseif($val < 5 && $val >= 4){$scolor='above_avg';
                                 	}elseif($val > 3 && $val <= 3.2){$scolor='below_avg';
                                 	}elseif($val > 3.2 && $val <= 3.7){$scolor='average';
                                 	}elseif($val > 2 && $val <= 3){$scolor='satisfactory';
                                 	}elseif($val > 1 && $val <= 2){$scolor='bad_working';
                                 	}elseif($val == 1 ){$scolor='scrap';}
                                 ?>
                              <?php 
                                 // 3.2 < 1
                                 if($val <$i){
                                 	$scolor='';?>
                              <span class="fa fa-star"></span>
                              <?php	
                                 }else{?>
                              <span class="fa fa-star <?php echo $$value;?>"></span>
                              <?php	}
                                 ?>
                              <?php }
                                 ?>
                           </td>
                           <td><?php $sen=str_ireplace("_",' ',$$value); echo ucwords($sen);?></td>
                           <td><?php echo number_format((float)$val, 2, '.', '');?></td>
                        </tr>
                        <?php }
                           $inavg = $intotal/$count;
                           	$inavgr = round($inavg);
                           	
                           	if($inavgr==1){$avg_col='scrap';}
                           	if($inavgr==2){$avg_col='bad_working';}
                           	if($inavgr==3){$avg_col='satisfactory';}
                           	if($inavgr==4){$avg_col='good';}
                           	if($inavgr==5){$avg_col='excellent';}
                           	
                           	
                           ?>
                        <input type="hidden" name="breakall_avg" id="breakall_avg" value="<?php echo number_format($inavg,1);?>" class="<?php echo $avg_col;?>">
                     </tbody>
                  </table>
               </div>
            </div>
            <?php }?>
			
            <div class="clear"></div>
			<p style="page-break-after:always"> </p>
            <a href="<?php echo base_url();?>uploads/leads/<?php echo $lead_id;?>/chassis_num/<?php echo $chassis_num;?>" data-toggle="lightbox" data-title="Chassis Number" data-gallery="gallery">
            <img style="" class="" title="<?php echo $value;?>" src="<?php echo base_url();?>uploads/leads/<?php echo $lead_id;?>/chassis_num/<?php echo $chassis_num;?>" id='chassis_num_upload' /><br/>
            <a>
               <div class="row">
                  <?php 
                     $ImgArray = array("front_image","rear_image","right_image","left_side","dashboard","seats","odo_meter","engine_room","eng_regi_plate","chassis_imp","rc_front","rc_back","type1","type2","type3","type4","d1","d2","d3","d4","selfi");
                     foreach($ImgArray as $key=>$value){
                     	$imagesDirectory = "./uploads/leads/".$lead_id."/".$value."/".$$value;
                                if(is_file($imagesDirectory)){
                     ?>
                  <div class="col-2">
                     <?php $e=str_replace('_',' ',$value);/*echo ucwords($e);*/?>
            <a href="<?php echo base_url();?>uploads/leads/<?php echo $lead_id;?>/<?php echo $value;?>/<?php echo $$value;?>" data-toggle="lightbox" data-title="<?php echo $e;?>" data-gallery="gallery">
            <img style="width:200px;height:200px;" onError="this.onerror=null;this.src='<?=base_url()?>assets/img/NoImageAvailable.png';" class="img-thumbnail" title="<?php echo $value;?>" src="<?php echo base_url();?>uploads/leads/<?php echo $lead_id;?>/<?php echo $value;?>/<?php echo $$value;?>" id='chassis_num_upload' />
            </a>
            </div>
            <?php }
               }?>
            </div>
         </section>
					</div>
				</div>
			</div>
		</div>
	</div>

   <?php $this->load->view(ADMIN_URL.'/footer');?>
   
   <script>
   $("#btn").show();
   function printDiv(){
   	$("#btn").hide();
   	 window.print();
   	 return false;
   }
     $(function () {
       $(document).on('click', '[data-toggle="lightbox"]', function(event) {
         event.preventDefault();
         $(this).ekkoLightbox({
           alwaysShowClose: true
         });
       });
   
       $('.filter-container').filterizr({gutterPixels: 3});
       $('.btn[data-filter]').on('click', function() {
         $('.btn[data-filter]').removeClass('active');
         $(this).addClass('active');
       });
   	
   	
   	
     })
     $(document).ready(function(){
   		var overall=0;
   		$.each({'accessories_html':'accessoriesall_avg','break_html':'breakall_avg','electricall_html':'electricall_avg','engineall_html':'engineall_avg','transmission_html':'transmission_avg','interiorall_html':'interiorall_avg', 'exteriorall_html':'exteriorall_avg' ,'suspension_html':'suspension_avg','steering_html':'steering_avg','tyres_html':'tyreall_avg'}, function( index, value ) {
   			var seatavg=$("#"+value).val();
   			var seatavgcls=$("#"+value).attr("class");
   			var html='';
   			var i;
   			var str=index.split("_");
   			stri = str[0].toLowerCase().replace(/\b[a-z]/g, function(letter) {
   				return letter.toUpperCase();
   			});
			
			
   			stri = stri.replace('all','');
   			for (i = 1; i <= 5 ; i++) {
   				if(seatavg <i){
   					html +='<span class="fa fa-star "></span>';
   				}else{
   					html +='<span class="fa fa-star '+seatavgcls+'"></span>';
   				}
   				
   			}
			var resulttxt = seatavgcls.replace("_", " ");
			var number = seatavg;
			var rounded = Math.round(number * 10) / 10;
			
   			html +='<span style="margin-left:20px;">'+stri+'</span><br>'+rounded+' - '+resulttxt+''
   			overall =parseInt(overall)+parseInt(seatavg);
   			$("."+index).html(html);
   		});
   		
   		var overall_avg=parseInt(overall)/10;
   		//alert(overall_avg)
   		var scolor='';html='';
   		if(overall_avg==5){scolor='excellent';
   		}else if(overall_avg > 4){scolor='good';
   		}else if(overall_avg < 5 && overall_avg >= 4){scolor='above_avg';
   		}else if(overall_avg > 3 && overall_avg <= 3.2){scolor='below_avg';
   		}else if(overall_avg > 3.2 && overall_avg <= 3.9){scolor='average';
   		}else if(overall_avg > 2 && overall_avg <= 3){scolor='satisfactory';
   		}else if(overall_avg > 1 && overall_avg <= 2){scolor='bad_working';
   		}else if(overall_avg == 1 ){scolor='scrap';}
   		
   		for (i = 1; i <= 5; ++i) {
   			//html +='<span class="fa fa-star '+scolor+'"></span>';
   			if(overall_avg <=i){
   				html +='<span class="fa fa-star "></span>';
   			}else{
   				html +='<span class="fa fa-star '+scolor+'"></span>';
   			}
   		}
   		html +='&nbsp OverAll Grade'
   		$(".overallhtml").html(html);
     });
	 function resizeChanges(){
	
           
   

  
window.print();
  
  
 }
</script>
<script>


    
    
</script>