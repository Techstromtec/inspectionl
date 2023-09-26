<?php

namespace App\Http\Controllers\Agreement;

use Illuminate\Http\Request;
use App\Models\Agreement;
use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DataTables;
class AgreementController extends Controller
{
    function getStatusBasedOnDueDate($dueDate,$status)
    {
        $now = now();
        $dueDate = Carbon::parse($dueDate);
        if($status !='paid'){            
            if ($dueDate < $now) {
                return 'Overdue';
            } elseif ($dueDate->isToday()) {
                return 'Due Today';
            } elseif ($dueDate->isTomorrow()) {
                return 'Due Tomorrow';
            } else {
                return 'Pending';
            }
        }else{
            return 'Paid';
        }
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $invoices = Agreement::all();
           
            return DataTables::of($invoices)
                ->addColumn('status', function ($invoice) {
                    return  $this->getStatusBasedOnDueDate($invoice->doc_expiry,$invoice->doc_status) ;
                })
                ->addColumn('action', function ($invoice) {
                    return '<td><div class="d-inline-block text-nowrap ">
                    <a href="'.route("agreements.edit", $invoice->id).'" ><button class="btn btn-sm btn-icon edit-record user_id" data-id="'.$invoice->id.'" ><i class="bx bx-edit"></i></button></a><button class="btn btn-sm btn-icon delete-record" data-id="'.route("agreements.edit", $invoice->id).'"><i class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="'.route("invoices.edit", $invoice->id).'" class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a></div></div></td>';
                })
                ->toJson();
        }
        return view('content.agreement.index');
    }
    
    public function download($id)
    {
        $document = Document::findOrFail($id);
        return Storage::download($document->file_path, $document->document_name);
    }
    
    public function create()
    {
        $Agreement = new Agreement;
        $data = $Agreement->AgreementTypeAll();
        $userdata = $Agreement->UsersAll();
        return view('content.agreement.create')->with('data', $data)->with('userdata', $userdata);
    }

    public function store(Request $request)
    {
        $agreement = new Agreement();
        $agreement->fill($request->except('document'));
        $agreement->save();
        $id = $agreement->id;
        if ($request->hasFile('document')) {
            foreach ($request->file('document') as $file) {
                $filename = $file->getClientOriginalName();
                $path = $file->store('documents/'.date("Y")."/".date("m")."/".$request->input('doc_serial_no'));
                Document::create(['document_name' => $filename, 'file_path' => $path,'agreement_id' => $id]);
            }
        }
        return redirect()->route('agreements')->with('success', 'Agreement created successfully.');
    }
    public function edit($id)
    {
        $agreement = Agreement::findOrFail($id);
        $documents = Document::where('agreement_id', $id)->get();

        foreach ($documents as $document) {
            $document->extension = pathinfo($document->document_name, PATHINFO_EXTENSION);
        }
    
        return view('content.agreement.edit', compact('agreement','documents'));
    }
    public function update(Request $request, $id)
    {

        $data = $request->except('_token'); // Exclude _token field
        $agreement = Agreement::findOrFail($id);
        $agreement->update($data);
        
        if ($request->hasFile('document')) {
            foreach ($request->file('document') as $file) {
                $filename = $file->getClientOriginalName();
                $path = $file->store('documents/'.date("Y")."/".date("m")."/".$request->input('doc_serial_no'));
                Document::create(['document_name' => $filename, 'file_path' => $path,'agreement_id' => $id]);
            }
        }

        return redirect()->route('agreements.index')->with('success', 'Agreement updated  successfully.');
    }
}
?>