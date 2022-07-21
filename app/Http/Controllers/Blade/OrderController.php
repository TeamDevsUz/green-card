<?php

namespace App\Http\Controllers\Blade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Stroage;
use App\Models\Registration;
use App\Models\FamilyMembers;


class OrderController extends Controller
{
    //
    public function index()
    {
        $registration = Registration::deepFilters()
        ->orderBy('id', 'DESC')
        ->paginate(10);
        //dd($registration);
        return view('pages.orders.index', compact('registration'));
    }
    
    public function details($id)
    {
        //dd($id);
        $registration = Registration::where('id', '=', $id)
        ->with('country')
        ->with('region_name')
        ->with('district_name')
        ->with('education_name')
        ->first();
        
        $wife = FamilyMembers::where('user_id', '=' , $id)
        ->where('is_child', '=', '0')
        ->with('family_country_name')
        ->with('family_region_name')
        ->with('family_district_name')
        ->with('education_name')
        ->get()
        ->first();
        
        $children = FamilyMembers::where('user_id', '=' , $id)
        ->where('is_child', '=', '1')
        ->with('family_country_name')
        ->with('family_region_name')
        ->with('family_district_name')
        ->with('education_name')
        ->get()
        ->all();
        //dd($children);
        return view('pages.orders.detail', compact('registration', 'wife', 'children'));
    }
    
    public function download(Request $request, $file)
    {
        return response()->download(public_path('images/'.$file));
    }
    
    public function deleteCheckedCandidats(Request $request)
    {
        $ids = $request->ids;
        Registration::whereIn('id',$ids)->delete();
        FamilyMembers::wherIn('user_id',$ids)->delete();
        return response()->json(['success'=>"Deleted"]);
    }
    
    public function destroy($id)
    {
        $registration = Registration::findOrFail($id);
        $members = FamilyMembers::find($id);
        // DB::table('role_has_permissions')->where('objects_id',$id)->delete();
        $registration->delete();
        $members->delete();
        message_set('Candidat is deleted!','success',2);
        return redirect()->back();
    }
}
