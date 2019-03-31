<?php

namespace App\Http\Controllers;

use App\Country;
use App\City;
use App\Area;
use App\Company;
use App\Brand;
use App\Branch;
use App\Stand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('index', compact('countries'));
    }

    
    public function cities($id)
    {
        $country = Country::find($id);
        $cities = $country->cities;
        $toReturn = '';
        $toReturn .= '<option disabled selected>select city</option>';
        foreach ($cities as $city) {
            $toReturn .= '<option value="'.$city->id.'">'.$city->name.'</option>';
        }
        return $toReturn;
    }



    public function areas($id)
    {
        $city = City::find($id);
        $areas = $city->areas;
        $toReturn = '';
        $toReturn .= '<option disabled selected>select area</option>';
        foreach ($areas as $area) {
            $toReturn .= '<option value="'.$area->id.'">'.$area->name.'</option>';
        }
        return $toReturn;
    }


    public function companies($id)
    {
        $area = Area::find($id);
        $companies = $area->companies;
        $toReturn = '';
        $toReturn .= '<option disabled selected>select company</option>';
        foreach ($companies as $company) {
            $toReturn .= '<option value="'.$company->id.'">'.$company->name.'</option>';
        }
        return $toReturn;
    }


    public function brands($id)
    {
        $company = Company::find($id);
        $brands = $company->brands;
        $toReturn = '';
        $toReturn .= '<option disabled selected>select brand</option>';
        foreach ($brands as $brand) {
            $toReturn .= '<option value="'.$brand->id.'">'.$brand->name.'</option>';
        }
        return $toReturn;
    }



    public function branches($id)
    {
        $brand = Brand::find($id);
        $branches = $brand->branches;
        $toReturn = '';
        $toReturn .= '<option disabled selected>select branch</option>';
        foreach ($branches as $branch) {
            $toReturn .= '<option value="'.$branch->id.'">'.$branch->name.'</option>';
        }
        return $toReturn;
    }



    public function stands($id)
    {
        $branch = Branch::find($id);
        $stands = $branch->stands;
        $toReturn = '';
        $toReturn .= '<option disabled selected>select stand</option>';
        foreach ($stands as $stand) {
            $toReturn .= '<option value="'.$stand->id.'">'.$stand->name.'</option>';
        }
        return $toReturn;
    }

    
}
