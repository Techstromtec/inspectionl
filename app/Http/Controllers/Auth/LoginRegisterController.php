<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Models\State;
use App\Models\City;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use DataTables;
class LoginRegisterController extends Controller
{
    /**
     * Instantiate a new LoginRegisterController instance.
     */
    public function __construct()
    {
        /*$this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);*/
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.register');
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = User::query();
            return DataTables::of($users)
            
            ->addColumn('action', function ($users) {
                return '<td><div class="d-inline-block text-nowrap ">
                <a href="'.route("users.edit", $users->id).'" ><button class="btn btn-sm btn-icon edit-record user_id" data-id="'.$users->id.'" ><i class="bx bx-edit"></i></button></a><button class="btn btn-sm btn-icon delete-record" data-id="'.route("users.edit", $users->id).'"><i class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="'.route("users.edit", $users->id).'" class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a></div></div></td>';
            })
            ->toJson();
        }
        return view('content.user.list');
    }
    public function getUsersData()
    {
        $users = User::select(['id', 'name', 'email', 'mobile']);

        return DataTables::of($users)->toJson();
    }
    public function view()
    {
      return view('content.user.view');
    }
    public function create()
    {
        $states = State::all(); // Retrieve all states 
      return view('content.user.add', compact('states'));
    }
    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->user_type = $request->input('user_type');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->address = $request->input('address');

        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->area = $request->input('area');
        $user->pincode = $request->input('pincode');
       
        if ($request->has('password')) {
            $user->password = Hash::make($request->input('password')); // Hash the new password
        }   

        if ($request->hasFile('profile')) {
            $profileImage = $request->file('profile');
            $profileImageName = time() . '.' . $profileImage->getClientOriginalExtension();
            $profileImage->storeAs('profile', $profileImageName);
            $imagePath = $request->file('profile')->store('profile', 'public');
            $user->document = 'profile/' .$profileImageName;
        }
        $user->save();
        return response()->json(['message' => 'User created successfully', 'redirect' => route('users.index')]);
    }
    public function show(User $user)
    {
        return response()->json($user);
    }
    
    public function edit(User $user)
    {
        return view('content.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        // Update other fields
        $user->fill($request->only(['name', 'username', 'user_type','mobile','email','address','city','state','area','pincode']));

        // Encrypt and update the password if provided
        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return response()->json(['message' => 'User updated successfully', 'redirect' => route('users.index')]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('content.authentications.login');
    }

    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt(['mobile' => request('email'), 'password' => request('password')]) ||
Auth::attempt(['email' => request('email'), 'password' => request('password')]) ||
Auth::attempt(['username' => request('email'), 'password' => request('password')])){
            $request->session()->regenerate();
            return response()->json([
                'success' => 'You have successfully logged in!'
            ], 200);
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
            
        }else{
            return response()->json([
                'error' => 'Invalid Username / Password.'
            ], 200);
        }

        return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');

    } 
    
    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        
            return view('content.dashboard.dashboards-analytics');
        
       
    } 
    
    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }  
    
    public function getCities($stateId)
    {
        // Assuming you have a State model and a City model with relationships defined
        // Fetch cities based on the selected state ID
        $cities = City::where('state_id', $stateId)->get();

        if (!$cities) {
            return response()->json(['error' => 'City not found'], 404);
        }

        return response()->json(['cities' => $cities]);
    }

    public function getAreas($cityId)
    {


        // Fetch areas based on the selected city ID
        $areas = Area::where('city_id', $cityId)->get();

        if (!$areas) {
            return response()->json(['error' => 'Area not found'], 404);
        }

        return response()->json(['areas' => $areas]);
    }

    public function getPincode($areaId)
    {

        // Fetch the pin code based on the selected area ID
        $area = Area::where('locality_id', $areaId)->get();
        if ($area) {
           // dd($area);
            $pincode = $area;
            return response()->json(['pincode' => $pincode]);
        } else {
            return response()->json(['pincode' => '']);
        }
    }

}