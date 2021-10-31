<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){

        $countries = DB::table('Countries')
        ->select('Country AS name')
        ->get()->toArray();

        $regions = DB::table('Regions')
        ->select('Region AS name')
        ->get()->toArray();

        $villas = DB::table('Properties')
        ->select('Name AS name')
        ->where('SearchableOntheWeb', '=' , 1)
        ->whereNotNull('Page_URL')
        ->get()->toArray();


        $search =  array_merge($countries, $regions,$villas);
         return view('Eterna.index',['search'=>$search]);

    }


    public function about(){
        return view('Eterna.about');
    }


    public function blog_single(){
        return view('Eterna.blog-single');
    }


    public function blog(){
        return view('Eterna.blog');
    }


    public function contact(){
        return view('Eterna.contact');
    }


    public function portfolio_details(){
        return view('Eterna.portfolio-details');
    }


    public function portfolio(){
        return view('Eterna.portfolio');
    }


    public function pricing(){
        return view('Eterna.pricing');
    }


    public function property($id){

        $query = DB::table('Taverna_forum.dbo.HolidayReviews AS HR')
        ->select('Properties.Property_ID','Properties.Name as Villa','Countries.Country','islands.island','clientReview','reviewDate','holidayRating','P.Name','P.Surname','Img1','recommendProperty','cleaningRating','a.source')
        ->where('Properties.property_id', '=',  $id  )
        ->Join('AccomR AS a','a.Requirement_id','=','HR.Requirement_ID')
        ->leftJoin('Properties','Properties.Property_ID','=','HR.propertyID')
        ->leftJoin('AgniTravelSQL.dbo.PersonalDetails AS P','HR.clientID','=','P.Person_ID')
        ->Join('islands','islands.Island_id','=','Properties.Island')
        ->Join('Regions','Regions.Region_id','=','islands.Region')
        ->Join('Countries','Countries.Country_id','=','Regions.Country')
        ->Join('PropertyImagesCache','PropertyImagesCache.Property_ID','=','Properties.Property_ID')
        ->orderBy('reviewDate', 'desc')
        ->get();



        $count = DB::table('Taverna_forum.dbo.HolidayReviews AS HR')
        ->select( DB::raw('COUNT(reviewDate) as numRev'))
        ->where('Properties.Property_ID', '=',  $id)
        ->Join('Properties','Properties.Property_ID','=','HR.propertyID')
        ->get();

        return view('Eterna.property',['query'=>$query , 'count'=>$count]);

    }


    public function name($name){

        $villa = DB::table('Properties')
        ->select('Property_ID')
        ->where('Name',$name)
        ->first();

        $island = DB::table('islands')
        ->select('island')
        ->where('island',$name)
        ->first();

        $country = DB::table('Countries')
        ->select('Country')
        ->where('Country',$name)
        ->first();







        if(isset($villa)){
            $id=$villa->Property_ID;
            return redirect()->route('property', ['id' => $id]);
        } else if(isset($island))
        {
            $search=$island->island;
            return redirect()->route('review', ['search' => $search]);
        }else if(isset($country))
        {
            $search=$country->Country;
            return redirect()->route('review', ['search' => $search]);
        }
        else{
            $search=$name;
            return redirect()->route('review', ['search' => $search]);
        }



    }


    public function review($search){

        $a=$search;

        // $test = DB::table('Taverna_forum.dbo.HolidayReviews AS HR')
        // ->select('Properties.Property_ID','Properties.Name as Villa','Countries.Country','islands.island','clientReview','reviewDate','holidayRating','P.Name','P.Surname')
        // ->where('Countries.Country', 'like', '%' . $a . '%')
        // ->orWhere('Properties.Name', 'like', '%' . $a . '%')
        // ->orWhere('islands.island', 'like', '%' . $a . '%')
        // ->LeftJoin('Properties','Properties.Property_ID','=','HR.propertyID')
        // ->LeftJoin('AgniTravelSQL.dbo.PersonalDetails AS P','HR.clientID','=','P.Person_ID')
        // ->Join('islands','islands.Island_id','=','Properties.Island')
        // ->Join('AccomR AS a','a.Requirement_id','=','HR.Requirement_ID')
        // ->Join('Regions','Regions.Region_id','=','islands.Region')
        // ->Join('Countries','Countries.Country_id','=','Regions.Country')
        // ->take(20)->get();



        $test = DB::table('Taverna_forum.dbo.HolidayReviews AS HR')
        ->select('Properties.Property_ID','Properties.Name as Villa','Countries.Country','islands.island','clientReview','reviewDate','holidayRating','P.Name','P.Surname')
        ->where('Countries.Country', 'like', '%' . $a . '%')
        ->orWhere('Properties.Name', 'like', '%' . $a . '%')
        ->orWhere('islands.island', 'like', '%' . $a . '%')
        ->LeftJoin('Properties','Properties.Property_ID','=','HR.propertyID')
        ->LeftJoin('AgniTravelSQL.dbo.PersonalDetails AS P','HR.clientID','=','P.Person_ID')
        ->Join('islands','islands.Island_id','=','Properties.Island')
        ->Join('Regions','Regions.Region_id','=','islands.Region')
        ->Join('Countries','Countries.Country_id','=','Regions.Country')
        ->take(20)->get();




        return view('Eterna.review',['test'=>$test, 'a'=>$a]);
    }


    // public function review_post(){
    //     $villas = request('villa');
    //     return $villas;
    //     return redirect('/review-details')->with(['villas',$villas]);
    // }


    public function review_details(Request $request){
        // return $request;
        $a=$request;
        return view('Eterna.review-details',['a'=>$a]);


        return response();

        return response()->view('Eterna.review-details', compact('a'));
    }

    public function services(){
        return view('Eterna.services');
    }

    public function team(){
        return view('Eterna.team');
    }

    public function store(){
        $search = request('name');
        return redirect()->route('review', ['search' => $search]);
    }

    public function postRev(Request $request){

        $a= $request;
        // return $a;
        return redirect('/review-details')->with(['a',$a]);
    }

    public function ajax(){
        return view('Eterna.ajax');
    }

    public function write(){
        return view('Eterna.write');
    }

}
