<?php


namespace App\Http\Controllers\Blade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\CountryModel;
use App\Models\District;
use App\Models\Region;
use App\Models\EducationalLevelModel;
use App\Models\FamilyMembers;
use App\Models\Registration;
use App\Models\VisaDeadline;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
class PagesController extends Controller
{
    //
    
    public function index()
    {
        return view('pages.index');
    }

    public function registration(Request $request)
    {
        $locale = App::getLocale('locale');
        $countries = CountryModel::get()->all();
        $districts = District::get()->all();
        $districts = json_encode($districts);
        $districts = addslashes($districts);
        //dd($districts);
        //dd($locale);
        $regions = Region::get()->all();
        //dd($regions);
        $regions = json_encode($regions);
        
        
        $education = EducationalLevelModel::get()->all();
        //dd($country);
        
        $days = VisaDeadline::get()->all();
        $disabledDates = [];
        foreach ($days as $day):
            $disabledDates[] = $day->deadline;
        endforeach;
        $disabledDates = json_encode($disabledDates);
        //dd($disabledDates);
        return view('pages.registration', compact('countries', 'education', 'regions', 'districts', 'disabledDates', 'days'));
    }
    
    public function registrationForm(Request $request)
    {
        //dd($request);
        $file= $request->file('user_image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('images', $filename);
        //dd($file);
        
        // 
        $characters = "0123456789";
        $confCode = $characters[rand(0, 9)].$characters[rand(0, 9)].$characters[rand(0, 9)].$characters[rand(0, 9)].$characters[rand(0, 9)].$characters[rand(0, 9)].$characters[rand(0, 9)].$characters[rand(0, 9)].$characters[rand(0, 9)].$characters[rand(0, 9)].$characters[rand(0, 9)].$characters[rand(0, 9)];
        //dd($confCode);
        $ldate = date('m-d');
        $year = date('Y');
        
        $date1 = Carbon::createFromFormat('m-d', '12-11');
        $date2 = Carbon::createFromFormat('m-d', $ldate);

        $result = $date1->gt($date2);
        //var_dump($result);
        $visa_date = "";
        if($result)
        {
            $year += 2;
            $items = (string)$year;
            $test = "$items$confCode";
            $visa_date = $test;
        }
        
        else
        {
            $year += 1;
            $items = (string)$year;
            $test = "$items$confCode";
            $visa_date = $test;
        }
        
        $registration = Registration::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'user_image' => $filename,
            'birthdate' => date('Y-m-d', strtotime($request->birthdate)),
            'country_id' => $request->country_id,
            'region_id' => $request->region_id,
            'district_id' => $request->district_id,
            'passport_number' => $request->passport_number,
            'expired_date' => date('Y-m-d', strtotime($request->expired_date)),
            'passport_given_address' => $request->passport_given_address,
            'full_address' => $request->full_address,
            'phone' => $request->phone,
            'email' => $request->email,
            'education_level' => $request->education_level,
            'family_status' => $request->family_status,
            'registration_id' => $visa_date,
        ]);
        
        
        $registrationId = $registration->id;
        
        if($request->family_status == "Married")
        {
            $file_second= $request->file('user_image_secondry');
            //dd($file_second);
            $extention_second = $file_second->getClientOriginalExtension();
            $filename_second = date('YmdHi').'.'.$extention_second;
            $file_second->move('images', $filename_second);
            //dd($filename_second);
            $data = [];
            $data[] = [
                'user_id'         => $registrationId,
                'last_name'       => $request->last_name_secondry,
                'first_name'      => $request->first_name_secondry,
                'gender'          => $request->gender_secondry,
                'birthdate'       => date('Y-m-d', strtotime($request->birthdate_secondry)),
                'user_image'      => $filename_second,
                'education_level' => $request->education_level_secondry,
                'country_id'      => $request->country_id_secondry,
                'region_id'       => $request->region_id_secondry,
                'district_id'     => $request->district_id_secondry,
                'created_at'      => NOW(),
                'updated_at'      => NOW()
            ];
            FamilyMembers::insert($data);
        }
        
        
        $numberOfItems = sizeof($request->last_name_secondry_child);
        $dataChild = [];
        $is_child = "";
        $is_child = 1;
        
        if($numberOfItems > 0)
        {
            // Child Images
            $files = $request->file('user_image_child');
            $user_img= [];
            if($files)
            {
                foreach($files as $file){
                    $name = time().rand(1,100).'.'.$file->extension();
                    //$extension = $file->getClientOriginalName();
                    $user_img[] = $name;
                    $file->move('images', $name);
                }
                
            }
            //dd($test);
            // Child Information Array
            for($i = 0; $i < $numberOfItems; $i ++)
            {
                if(is_null($request->first_name_secondry_child[$i])) continue;
                // var_dump($numberOfItems);
                $dataChild[] = [
                    'user_id'         => $registrationId,
                    'last_name'       => $request->last_name_secondry_child[$i],
                    'first_name'      => $request->first_name_secondry_child[$i],
                    'gender'          => $request->client_gender[$i],
                    'birthdate'       => date('Y-m-d', strtotime($request->birthdate_secondry_child[$i])),
                    'user_image'      => $user_img[$i],
                    'country_id'      => $request->country_id_secondry_child[$i],
                    'region_id'       => $request->region_id_secondry_child[$i],
                    'district_id'     => $request->district_id_secondry_child[$i],
                    'is_child'        => $is_child,
                    'created_at'      => NOW(),
                    'updated_at'      => NOW()
                ];
                //dd($test);
            }
            // Child Information Array
            //dd($dataChild);
            FamilyMembers::insert($dataChild);
            
        }
        $registration->save();
        session([
            'registration_id' => $registrationId
        ]);
        session()->save();
        return redirect()->route('siteRegistrationReceipt');
        //registration->save();
        //dd($registration);
    }
    
    public function registrationReceipt()
    {
        
        $registartionId = session('registration_id');
        //dd($registartionId);
        $registration = Registration::where('id', '=', $registartionId)
        ->with('country')
        ->with('region_name')
        ->with('district_name')
        ->with('education_name')
        ->get()
        ->all();

        $familyMembers = FamilyMembers::where('user_id', '=' , $registartionId)
        ->with('family_country_name')
        ->with('family_region_name')
        ->with('family_district_name')
        ->with('education_name')
        ->get()
        ->all();
        //dd($familyMembers);
        //dd($registration);
        return view('pages.registrationReceipt', compact('registration', 'registartionId', 'familyMembers'));
    }
    
    public function registrationEdit()
    {
        $registartionId = session('registration_id');
        //dd($registartionId);
        $registration = Registration::where('id', '=', $registartionId)->with('country')->get()->first();
        $countries = CountryModel::get()->all();
        $regions = Region::get()->all();
        $regions = json_encode($regions);
        //dd($regions);
        
        $districts = District::get()->all();
        $districts = json_encode($districts);
        $education = EducationalLevelModel::get()->all();
        $members = FamilyMembers::where('user_id', '=', $registartionId)
               // ->where('is_child', '=', '1')
                ->with('family_country_name')
                ->with('family_region_name')
                ->with('family_district_name')
                ->with('education_name')
                ->get()->all();
        
        $wife = FamilyMembers::where('user_id', '=', $registartionId)
                ->where('is_child', '=', '0')
                ->with('family_country_name')
                ->with('family_region_name')
                ->with('family_district_name')
                ->with('education_name')
                ->get()->first();
        //dd($members);
        
        return view('pages.registrationEdit', compact('registration', 'countries', 'regions', 'districts', 'education', 'members', 'wife'));
    }
    
    
    public function registrationUpdate(Request $request)
    {
        //dd($request);
        $registartionId = session('registration_id');
        $registration = Registration::where('id', '=', $registartionId)->get()->first();
        $members = FamilyMembers::where('user_id', '=', $registartionId)->get()->first();
        // $registration->delete();
        // $members->delete();
        //dd($request);
        
        $file= $request->file('user_image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('images', $filename);

        $registration->first_name = $request->first_name;
        $registration->last_name = $request->last_name;
        $registration->gender = $request->gender;
        $registration->user_image = $filename;
        $registration->birthdate = date('Y-m-d', strtotime($request->birthdate));
        $registration->country_id = $request->country_id;
        $registration->region_id = $request->region_id;
        $registration->district_id = $request->district_id;
        $registration->passport_number = $request->passport_number;
        $registration->expired_date = date('Y-m-d', strtotime($request->expired_date));
        $registration->passport_given_address = $request->passport_given_address;
        $registration->full_address = $request->full_address;
        $registration->phone = $request->phone;
        $registration->email = $request->email;
        $registration->education_level = $request->education_level;
        $registration->family_status = $request->family_status;
        $registration->registration_id = $registration->registration_id;
        $registration->save();
        
        //dd($registration);
        // dd($registration->family_status = $request->family_status);
        if($request->family_status == "Married")
        {
            if($registration->family_status == "Married" && $request->family_status == "Married")
            {
                $file_second= $request->file('user_image_secondry');
                //dd($file_second);
                $extention_second = $file_second->getClientOriginalExtension();
                $filename_second = time().'.'.$extention_second;
                $file_second->move('images', $filename_second);
                
                $members->user_id         = $registartionId;
                $members->last_name       = $request->last_name_secondry;
                $members->first_name      = $request->first_name_secondry;
                $members->gender          = $request->gender_secondry;
                $members->birthdate       = date('Y-m-d', strtotime($request->birthdate_secondry));
                $members->user_image      = $filename_second ? $filename_second : $members->user_image;
                $members->education_level = $request->education_level_secondry;
                $members->country_id      = $request->country_id_secondry;
                $members->region_id       = $request->region_id_secondry;
                $members->district_id     = $request->district_id_secondry;
                $members->created_at      = NOW();
                $members->updated_at      = NOW();
                $members->save();
            }
            else if($request->family_status !== "Married")
            {
                $members = FamilyMembers::where('user_id', '=', $registartionId)->get()->first();
                // $image = FamilyMembers::where('user_id', '=', $registartionId)->get()->first();
                // unlink("images/".$image->user_image);
                $members->delete();
            }
            else if($request->family_status == "Married")
            {
                $file_second= $request->file('user_image_secondry');
                //dd($file_second);
                $extention_second = $file_second->getClientOriginalExtension();
                $filename_second = date('YmdHi').'.'.$extention_second;
                $file_second->move('images', $filename_second);
            
                $data = [];
                $data[] = [
                    'user_id'         => $registartionId,
                    'last_name'       => $request->last_name_secondry,
                    'first_name'      => $request->first_name_secondry,
                    'gender'          => $request->gender_secondry,
                    'birthdate'       => date('Y-m-d', strtotime($request->birthdate_secondry)),
                    'user_image'      => $filename_second,
                    'education_level' => $request->education_level_secondry,
                    'country_id'      => $request->country_id_secondry,
                    'region_id'       => $request->region_id_secondry,
                    'district_id'     => $request->district_id_secondry,
                    'created_at'      => NOW(),
                    'updated_at'      => NOW()
                ];
                
                FamilyMembers::insert($data);
            }
        }
        //$numberOfItems = sizeof($request->last_name_secondry_child);
        $dataChild = [];
        $is_child = "";
        $is_child = 1;
        $numberOfItems = 0;
        if(isset($request->last_name_secondry_child)) $numberOfItems = sizeof($request->last_name_secondry_child);
         
        if($numberOfItems > 0)
        {
            // Child Images
            $files = $request->file('user_image_child');
            if($files)
            {
                foreach($files as $file){
                    $name = time().rand(1,100).'.'.$file->extension();
                    //$extension = $file->getClientOriginalName();
                    $file->move('images', $name);
                }
                
            }
            //dd($filename);

            // Child Information Array
            for($i = 0; $i < $numberOfItems; $i ++)
            {
                if(is_null($request->first_name_secondry_child[$i])) continue;
                // var_dump($numberOfItems);
                $dataChild[] = [
                    'user_id'         => $registartionId,
                    'last_name'       => $request->last_name_secondry_child[$i],
                    'first_name'      => $request->first_name_secondry_child[$i],
                    'gender'          => $request->client_gender[$i],
                    'birthdate'       => date('Y-m-d', strtotime($request->birthdate_secondry_child[$i])),
                    'user_image'      => $name,
                    'country_id'      => $request->country_id_secondry_child[$i],
                    'region_id'       => $request->region_id_secondry_child[$i],
                    'district_id'     => $request->district_id_secondry_child[$i],
                    'is_child'        => $is_child,
                    'created_at'      => NOW(),
                    'updated_at'      => NOW()
                ];
                
            }
            // Child Information Array
            //dd($dataChild);
            FamilyMembers::insert($dataChild);
            
        }

        session([
            'registration_id' => $registartionId
        ]);
        session()->save();
        return redirect()->route('siteRegistrationReceipt');
    }
    
    
    public function completeRegistration()
    {
        $registartionId = session('registration_id');
        //dd($registartionId);
        $registration = Registration::where('id', '=', $registartionId)
        ->get()
        ->all();
        $data =  "Anketa tasdiqlandi";
        $test = Registration::where('id', '=', $registartionId)
        ->update(array('application_status' => $data));
        return view('pages.completeRegistration', compact('registration'));
    }
    
    public function services()
    {
        return view('pages.services');
    }
    public function news()
    {
        return view('pages.news');
    }
    
    public function questions()
    {
        return view('pages.questions');
    }
    
    public function contactus()
    {
        return view('pages.contactus');
    }
    
    public function information()
    {
        return view('pages.information');
    }
}
