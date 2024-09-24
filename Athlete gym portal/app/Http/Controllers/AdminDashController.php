<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class AdminDashController extends Controller
{
    public function index(){
        $users = User::latest()->take(10)->get();
        $reviews = Review::latest()->take(5)->get();

        if(Auth::check()){
            if(Auth::user()->usertype=='user'){
                return redirect('/home');
            }
        } else {
                return redirect('/login');
        }
       
        return view('dashboard', compact('users', 'reviews'));
    }

    public function addUserPage(){
        return view('add-user');
    }   

    public function newUser(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:5', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8'],
            'usertype' => 'required',
            'address' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'contract' => 'required',
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        User::create($formFields);

        return redirect('dashboard');
    }

    public function editUser(User $user){
        return view('edit-user', ['user' => $user]);
    }
    
    public function updateUserChanges(User $user, Request $request){
        
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'contract' => 'required',
        ]);

        $user->update($formFields);
        return redirect('/manage-user');
    }

    public function deleteUser(User $user){
        $user->delete();
        return redirect('manage-user');
    }
    
    
    public function manageUserPage()
    {
        $users = User::where('usertype', 'user')->get();

        return view('manage-user', ['users' => $users]);
    }

    public function createdAccountsPage()
    {
        $users = User::latest()->get();
        return view('created-accounts', ['users' => $users]);
    }

    public function userActivityPage()
    {
        $sessions = Session::whereNotNull('user_id')->get();
        return view('user-activity',['sessions' => $sessions]);
    }

    public function manageReviewsPage()
    {
        $reviews = Review::latest()->get();
        return view('manage-reviews',['reviews' => $reviews]);
    }

   
}
