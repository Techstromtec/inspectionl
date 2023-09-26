<?php

namespace App\Http\Controllers\lead;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use DataTables;
use App\Models\Lead;
use App\Models\VehicleCategory; // Make sure to import your VehicleCategory model
use App\Models\VehicleType;
use App\Models\ClientCompany;
use App\Models\Document;
use App\Models\Valuations2;
use App\Models\Valuations3;

class LeadController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
         $leads = Lead::with(['vehicleCategory', 'vehicleType','clientCompany'])->get();
          return DataTables::of($leads)

          ->addColumn('client_company', function ($lead) {
            return optional($lead->clientCompany)->name ?? 'N/A';
        })
        ->addColumn('vehicle_type', function ($lead) {
            return optional($lead->vehicleType)->name ?? 'N/A';
        })
        ->addColumn('vehicle_category', function ($lead) {
            return optional($lead->vehicleCategory)->category_name ?? 'N/A';
        })
             ->addColumn('action', function ($leads) {     
                  return '<td><div class="d-inline-block text-nowrap ">
              <a href="'.route("leads.edit", $leads->id).'" ><button class="btn btn-sm btn-icon edit-record user_id" data-id="'.$leads->id.'" ><i class="bx bx-edit"></i></button></a><button class="btn btn-sm btn-icon delete-record" data-id="'.route("leads.edit", $leads->id).'"><i class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu dropdown-menu-end m-0">
              <a href="'.route("leads.valuate", $leads->id).'" class="dropdown-item">View</a><a href="'.route("leads.valuate", $leads->id).'" class="dropdown-item">Valuation</a></div></div></td>';
              })
              ->toJson();
      }
        return view('content.lead.index');
    }
    
    
    public function create()
    {
      $vehicleCategories = VehicleCategory::all();
      $vehicleTypes = VehicleType::all();
      $clientCompanies = ClientCompany::all();
      return view('content.lead.create', compact('vehicleCategories','vehicleTypes','clientCompanies'));
    }
    public function store(Request $request)
    {
        
        $lead = new Lead();
        $lead->fill($request->all());
        $lead->save();

        // Redirect to the leads index page or show a success message
        return redirect()->route('leads.index')->with('success', 'Lead created successfully.');
    }
    public function edit($id)
    {
        $leads = Lead::findOrFail($id);
        $vehicleCategories = VehicleCategory::all();
        $vehicleTypes = VehicleType::all();
        $clientCompanies = ClientCompany::all();
        return view('content.lead.edit', compact('leads','vehicleCategories','vehicleTypes','clientCompany'));
    }
    public function update(Request $request, $id)
    {

        $data = $request->except('_token'); // Exclude _token field
        $lead = Lead::findOrFail($id);
        $lead->update($data);

        return redirect()->route('leads.index')->with('success', 'Lead updated  successfully.');
    }
    public function valuate(Request $request, $id)
    {
        DB::enableQueryLog(); 
        $fields = [
            'front_side',
            'right_side',
            'left_side',
            'back_side',
            'chassis_number',
            'chassis_imprint',
            'dashboard',
            'odometer',
            'selfie_with_vehicle',
            'engine_image',
            'rc',
            'rc_back',
            'tyre_track_1',
            'tyre_track_2',
            'tyre_track_3',
            'tyre_track_4',
            'tyre_track_5',
            'tyre_track_6',
            'tyre_track_7',
            'tyre_track_8',
            'damage_1',
            'damage_2',
            'damage_3',
            'damage_4',
        ];
        
        $documents = Document::where('lead_id', $id)->get();
        $valuations2 = Valuations2::where('lead_id', $id)->first();
        $valuations3 = Valuations3::where('lead_id', $id)->first();
        
        return view('content.lead.valuate', ['fields' => $fields,'lead_id' => $id,'documents'=>$documents,'valuations2' => $valuations2,'valuations3' => $valuations3]);
    }
    public function report(Request $request, $leadId){
        return view('content.lead.report');
    }
    public function upload(Request $request, $leadId)
    {
        try {
            //$lead = Lead::findOrFail($leadId);
            $fileFields = [
            'front_side',
            'right_side',
            'left_side',
            'back_side',
            'chassis_number',
            'chassis_imprint',
            'dashboard',
            'odometer',
            'selfie_with_vehicle',
            'engine_image',
            'rc',
            'rc_back',
            'tyre_track_1',
            'tyre_track_2',
            'tyre_track_3',
            'tyre_track_4',
            'tyre_track_5',
            'tyre_track_6',
            'tyre_track_7',
            'tyre_track_8',
            'damage_1',
            'damage_2',
            'damage_3',
            'damage_4'];

            foreach ($fileFields as $fieldName) {
                
                if ($request->hasFile($fieldName)) {
                    $files = $request->file($fieldName);
                   
                    // Generate a unique filename
                    $fileName = uniqid() . '_' . $files->getClientOriginalName();
                    
                    // Store the file in the lead-specific folder
                    $filePath = $leadId . '/' . $fieldName . '/' . $fileName;
                    $files->storeAs('public/' . $filePath, '');
                    
                    $conditions = ['lead_id' => $leadId];
                    // Store the file information in the documents table
                    $data = [   
                        'document_name' => $fileName,
                        'file_path' => $filePath,
                        'type' => $fieldName, 
                    ];

                    Document::updateOrInsert($conditions, $data);
                }
            }

           return redirect()->back()->with('success', 'Files uploaded successfully.');
        }catch (\Exception $e) {
            dd($e->getMessage());exit;
            return redirect()->back()->with('error', 'File upload failed: ' . $e->getMessage());
        }
    }
    public function valuate3(Request $request, $leadId){
        $valuation = new Valuations3();
        $conditions = ['lead_id' => $leadId];
        $data = [
            'keys'=> $request->input('keys'),
            'battery'=> $request->input('battery'),
            'mech_cond'=> $request->input('mech_cond'),
            'body_frame'=> $request->input('body_frame'),
            'starts'=> $request->input('starts'),
            'no_of_tyres'=> $request->input('no_of_tyres'),
            'engine_condition'=> $request->input('engine_condition'),
            'mech_operational'=> $request->input('mech_operational'),
            'current_vehi_condition'=> $request->input('current_vehi_condition'),
            'rc_status'=> $request->input('rc_status'),
            'insurance'=> $request->input('insurance'),
            'insurance_validity'=> $request->input('insurance_validity'),
            'hpa'=> $request->input('hpa'),
            'hpa_bank'=> $request->input('hpa_bank'),
            'tax_validity'=> $request->input('tax_validity'),
            'tyre1_per'=> $request->input('tyre1_per'),
            'tyre2_per'=> $request->input('tyre2_per'),
            'tyre3_per'=> $request->input('tyre3_per'),
            'tyre4_per'=> $request->input('tyre4_per'),
            'tyre5_per'=> $request->input('tyre5_per'),
            'tyre6_per'=> $request->input('tyre6_per'),
            'tyre7_per'=> $request->input('tyre7_per'),
            'tyre8_per'=> $request->input('tyre8_per'),
        ];
        Valuations3::updateOrInsert($conditions, $data);

        // Redirect or perform other actions
        return redirect()->back()->with('success', 'Data saved successfully.');
    }
    public function valuate2(Request $request, $leadId)
    {
        $valuation = new Valuations2();
        $conditions = ['lead_id' => $leadId];
        $data = [
            'manufacture_ym' => $request->input('manufacture_ym'),
            'make' =>  $request->input('make'),
            'model' => $request->input('model'),
            'variant' => $request->input('variant'),
            'location' => $request->input('location'),
            'color' => $request->input('color'),
            'fuel_type' => $request->input('fuel_type'),
            'transmission' => $request->input('transmission'),
            'odo_mtr' => $request->input('odo_mtr'),
            'reg_number' => $request->input('reg_number'),
            'reg_year_mon' => $request->input('reg_year_mon'),
            'engine_number'  => $request->input('engine_number'),
            'chassis_number' => $request->input('chassis_number'),
            'vehicle_summary' => $request->input('vehicle_summary'),
        ];

        Valuations2::updateOrInsert($conditions, $data);

        // Redirect or perform other actions
       return redirect()->back()->with('success', 'Data saved successfully.');
    }
}
