<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    
    protected $table = 'registrations';
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'birthdate',
        'user_image',
        'country_id',
        'region_id',
        'district_id',
        'passport_number',
        'expired_date',
        'passport_given_address',
        'full_address',
        'phone',
        'email',
        'education_level',
        'family_status',
        'registration_id'
    ];
    
    
    public static function deepFilters(){


        $tiyin = [
        ];

        $obj = new self();
        $request = request();

        $query = self::where('id','!=','0');

        foreach ($obj->fillable as $item) {
            //request operator key
            $operator = $item.'_operator';

            if ($request->has($item) && $request->$item != '')
            {
                if (isset($tiyin[$item])){
                    $select = $request->$item * 100;
                    $select_pair = $request->{$item.'_pair'} * 100;
                }else{
                    $select = $request->$item;
                    $select_pair = $request->{$item.'_pair'};
                }
                //set value for query
                if ($request->has($operator) && $request->$operator != '')
                {
                    if (strtolower($request->$operator) == 'between' && $request->has($item.'_pair') && $request->{$item.'_pair'} != '')
                    {
                        $value = [
                            $select,
                            $select_pair];

                        $query->whereBetween($item,$value);
                    }
                    elseif (strtolower($request->$operator) == 'wherein')
                    {
                        $value = explode(',',str_replace(' ','',$select));
                        $query->whereIn($item,$value);
                    }
                    elseif (strtolower($request->$operator) == 'like')
                    {
                        if (strpos($select,'%') === false)
                            $query->where($item,'like','%'.$select.'%');
                        else
                            $query->where($item,'like',$select);
                    }
                    else
                    {
                        $query->where($item, $request->$operator,$select);
                    }
                }
                else
                {
                    $query->where($item,$select);
                }
            }
        }
        return $query;
    }

    public function family_members()
    {
        return $this->hasMany(FamilyMembers::class, 'user_id', 'id');
    }
    public function country()
    {
        return $this->hasOne(CountryModel::class, 'id', 'country_id');
    }
    public function region_name()
    {
        return $this->hasOne(Region::class, 'id', 'region_id');
    }
    public function district_name()
    {
        return $this->hasOne(District::class, 'id', 'district_id');
    }
    public function education_name()
    {
        return $this->hasOne(EducationalLevelModel::class, 'id', 'education_level');
    }
    use HasFactory;
}
