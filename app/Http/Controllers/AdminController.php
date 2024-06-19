<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
//use Spatie\Permission\Traits\HasRoles;
use App\Models\AccountantEntry;
use Spatie\Permission\Models\Role;


class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
     
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

      
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication successful
            $user = Auth::user();
           
            // Check if user has admin role
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            } elseif (!$user->hasRole('admin')) {
                $user->assignRole('accountant');
                return redirect()->route('admin.dashboard');
           
            } else {
                // Handle other roles or scenarios as needed
                return redirect()->route('admin.login');
            }
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function createAccountant()
    {
        return view('admin.add-accountant');
    }

    public function saveAccountant(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
   if($request->id != null)
   {

    $user = User::find($request->id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->save();

   }else{
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
   }

        return back();
    }

    public function viewAccountant()
    {
      
        // $role = Role::where('name', 'accountant')->first();

        //     $datas = User::role($role->name)->get();
        $datas = User::where('id','<>',1)->get();

        return view('admin.view-accountant',compact('datas'));
    }

    public function editAccountant($id=null)
    {
        $acc = User::find($id);
       
        return view('admin.add-accountant',compact('acc'));
    }


    public function deleteAccountant($id = null)
    {
        $acc = User::find($id);
        $acc->delete();
        return back();
    }



    public function addEntry()
    {
        return view('admin.add-entry');
    }

    public function saveEntry(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'in_ex' => 'required',
            'amount' => 'required',
        ]);
if($request->id != null)
{

    $acc = AccountantEntry::where('id',$request->id)->update(
        [
            'name' => $request->name,
            'type' => $request->type,
            'in_ex' => $request->in_ex,
            'amount' => $request->amount,
        ]
    );
    

}else{
        $acc = new AccountantEntry;
        $acc->name = $request->name;
        $acc->user_id= Auth::user()->id;
        $acc->type = $request->type;
        $acc->in_ex = $request->in_ex;
        $acc->amount = $request->amount;
        $acc->save();
}

        return back();

    }

    public function viewEntry()
    {
        $entries = AccountantEntry::get();
        return view('admin.view-entry',compact('entries'));
    }

    public function editEntry($id = null)
    {
        $acc = AccountantEntry::where('id',$id)->first();
       
        return view('admin.add-entry',compact('acc'));
    }

    public function deleteEntry($id = null)
    {
        $acc = AccountantEntry::where('id',$id)->delete();
        
        return back();
    }

    public function logout()
    {
        Auth::logout();
    	session()->flush();
        return redirect('admin/login');
    }

}
