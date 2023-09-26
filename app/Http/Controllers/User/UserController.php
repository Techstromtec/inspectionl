<?php



namespace App\Http\Controllers\user;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  public function index()
  {
    return view('content.user.list');
  }
  public function view()
  {
    return view('content.user.view');
  }
  public function create()
  {
    return view('content.user.add');
  }
  
  public function showBulkUploadForm()
    {
        return view('content.user.bulk-upload');
    }

    public function processBulkUpload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        // Get the file and read its contents
        $file = $request->file('csv_file');
        $path = $file->getRealPath();
        $data = array_map('str_getcsv', file($path));

        // Process the data and insert into the database
        foreach ($data as $row) {
            // Assuming the CSV file has columns in the order: username, password, email, etc.
            // Adjust the column indexes as per your CSV file structure

            $user = [
                'username' => $row[0],
                'password' => bcrypt($row[1]), // Assuming the password needs to be hashed
                'email' => $row[2],
                // Add other user fields here...
            ];

            // Insert the user data into the database
            DB::table('users')->insert($user);
        }

        return response()->json(['message' => 'Users uploaded successfully']);
    }
    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'mobile' => 'required|digits:10|unique:users',
            'username' => 'required|string|max:255|unique:users',
        ]);

        $user = new User();
        $user->name = $request->input('fullName');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->user_type = $request->input('user_type');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        /*$user->state = $request->input('state');
        $user->city = $request->input('city');
        $user->locality = $request->input('locality');*/
        $user->address = $request->input('address');
        //$user->pincode = $request->input('pincode');
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('profile', $filename, 'public');
            $agreement->document = 'public/' . $filename;
        }
        $user->save();

        return redirect('users.index')->with('success', 'User created successfully.');
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
            /*$request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
                */
        }else{
            return response()->json([
                'error' => 'Invalid Username / Password.'
            ], 200);
        }

        /*return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');*/

    } 
    
    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
       /* if(Auth::check())
        {*/

            return view('content.dashboard.dashboards-analytics');
        /*}
        return redirect()->route('login')
                ->withSuccess('You have successfully logged in!');
        */
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
        return redirect()->route('login')
                ->withSuccess('You have successfully logged in!');
    }    
}
