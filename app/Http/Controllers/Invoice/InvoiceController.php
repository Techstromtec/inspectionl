<?php

namespace app\Http\Controllers\Invoice;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\User;
use DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class InvoiceController extends Controller
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

            $invoices = Invoice::all();
           
            return DataTables::of($invoices)
                ->addColumn('status', function ($invoice) {
                    return  $this->getStatusBasedOnDueDate($invoice->due_date,$invoice->invoice_status) ;
                })
                ->addColumn('action', function ($invoice) {
                  
                    return '<td><div class="d-inline-block text-nowrap ">
                <a href="'.route("invoices.edit", $invoice->id).'" ><button class="btn btn-sm btn-icon edit-record user_id" data-id="'.$invoice->id.'" ><i class="bx bx-edit"></i></button></a>
                
                
                <button class="btn btn-sm btn-icon delete-record" data-id="'.route("invoices.edit", $invoice->id).'"><i class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="'.route("invoices.edit", $invoice->id).'" class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a></div></div></td>';
                })
                ->toJson();
        }
        return view('content.invoices.index');
    }

    public function create()
    {
        // Fetch users here
        $users = User::all();
        return view('content.invoices.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'customer_name' => 'required',
            'invoice_number' => 'required|unique:invoices',
            'amount' => 'required|numeric|min:0.01',
            'issue_date' => 'required|date',
            'due_date' => 'required|date|after:issue_date',
            'invoice_status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('invoices.index')->withErrors($validator)->withInput();
        }

        Invoice::create($request->all());

        return redirect()->route('invoices.index')->with('success', 'Invoice created successfully.');
    }

    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);
        $users = User::all();
        return view('content.invoices.edit', compact('invoice'));
    }

    public function update(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);

        $validator = \Validator::make($request->all(), [
            
            'invoice_number' => 'required|unique:invoices,invoice_number,'.$id,
            'amount' => 'required|numeric|min:0.01',
            'issue_date' => 'required|date',
            'due_date' => 'required|date|after:issue_date',
            'invoice_status' => 'required',
            'customer_name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('invoices.edit', $id)->withErrors($validator)->withInput();
        }
        
        $invoice->update($request->all());

        return redirect()->route('invoices.index')->with('success', 'Invoice updated successfully.');
    }

    public function destroy($id)
    {
        Invoice::findOrFail($id)->delete();
        return redirect()->route('invoices.index')->with('success', 'Invoice deleted successfully.');
    }
}    
