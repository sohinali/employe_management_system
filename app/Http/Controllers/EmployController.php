<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployController extends Controller
{
    public function addEmp( request $req){
        $user=DB::table('departments')
            ->insert([
                 "d_name" => $req->dpart
            ]);
            if($user){
                return redirect()->route('department');
            }else{
                echo "error";
            }
    }

    public function show(){
        $data=DB::table('departments')->simplePaginate(4);
        return view('department',['data'=>$data]);
        

    
    }


    public function dp(){
        $data=DB::table('departments')->get();
        return view('staffAdd',['data'=>$data]);
        

    
    }

    public function deleteEmp(string $id){
        $data=DB::table('departments')->where('id',$id)->delete();
        if($data){
            return redirect()->route('department');
        }

    
    }

    public function deletestaff(string $id){
        $data=DB::table('staffs')->where('id',$id)->delete();
        if($data){
            return redirect()->route('staff');
        }

    
    }


    public function updateEmp(string $id){
        $data=DB::table('departments')->where('id',$id)->get();
        return view('update',['data'=>$data]);
        
    }


    public function updatedEmp( request $req ,$id){
        $user=DB::table('departments')->where('id',$id)
        ->update([
                 "d_name" => $req->d_name
            ]);
            if($user){
                return redirect()->route('department');
            }else{
                echo "error";
            }
    }

    public function updatedstaff(Request $req, $id) {
        if ($req->hasFile('image') && $req->file('image')->isValid()) {
            $imagePath = $req->file('image')->store('uploads', 'public');
        }
        
        $userData = [
            'name' => $req->name,
            'department' => $req->department,
            'gender' => $req->gender,
            'email' => $req->email,
            'mobile' => $req->mobile,
            'dob' => $req->dob,
            'doj' => $req->doj,
            'address' => $req->address,
            'city' => $req->city,
            'state' => $req->state,
            'country' => $req->country,
        ];
    
      
        if (isset($imagePath)) {
            $userData['image'] = $imagePath;
        }
        
        $user = DB::table('staffs')
            ->where('id', $id)
            ->update($userData);
        
        if ($user) {
            return redirect()->route('staff');
        } else {
            return "error";
        }
    }
    
    
   public function login(Request $req)
        {
            $user = $req->input('username');
            $pass = $req->input('password');
            if ($user == 'admin' && $pass == 'admin') {
                $req->session()->put('username', $user);
                return redirect()->route('department')->with('success', 'Login successful!');
            } else {
                return redirect()->back()->with('error', 'Invalid username or password.');
            }
        }


    public function addstaff(Request $req) {

        if ($req->hasFile('image')) {
            $imagePath =$req->file('image')->store('uploads','public');
        }
      
    
        $user = DB::table('staffs')
            ->insert([
                'name'=> $req->name,
                'department'=> $req->department,
                'gender'=> $req->gender,
                'email' => $req->email,
                'mobile'=> $req->mobile,
                'dob'=> $req->dob,
                'doj' => $req->doj,
                'address'=> $req->address,
                'city'=> $req->city,
                'state' => $req->state,
                'country'=> $req->country,
                'image'=>$imagePath
            ]);
    
        if($user){
            return redirect()->route('staff');
        } else {
            echo "error";
        }
    }
    
    public function staffShow(){
        $data=DB::table('staffs')->get();
        return view('staff',['data'=>$data]);
        

    
    }


    public function updatestaff(string $id){
        $data=DB::table('staffs')->where('id',$id)->get();
        $sql=DB::table('departments')->get();

        return view('updatestaff',['data'=>$data,'sql'=>$sql]);
        
    }



}
