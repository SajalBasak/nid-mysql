<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return view('index');
    }
    public function contact()
    {
    	return view('contact');
    }
    public function register()
    {
        return view('register');
    }
    public function welcome()
    {
    	return view('welcome');
    }
    public function insert(Request $req)
    {
        $nid_number = $req->input('nid_number');
        $first_name = $req->input('first_name');
        $middle_name = $req->input('middle_name');
        $last_name = $req->input('last_name');
        $father_name = $req->input('father_name');
        $mother_name = $req->input('mother_name');
        $contact_number = $req->input('contact_number');
        $birth_date = $req->input('birth_date');
        $blood_group = $req->input('blood_group');
        $gender = $req->input('gender');
        $village_id_no = $req->input('village_id_no');

        $data = array('nid_number'=>$nid_number,'first_name'=>$first_name,'middle_name'=>$middle_name,'last_name'=>$last_name,'father_name'=>$father_name,'mother_name'=>$mother_name,'contact_number'=>$contact_number,'birth_date'=>$birth_date,'blood_group'=>$blood_group,'gender'=>$gender,'village_id_no'=>$village_id_no);
        DB::table('citizen')->insert($data);

        $users = DB::select('select * from citizen');

        return view('success',['users'=>$users]);
    }
}
