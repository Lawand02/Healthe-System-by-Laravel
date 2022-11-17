<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreHealtheRequest;
use App\Models\Healthe;
use Illuminate\Http\Request;

class HealtheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $variable = Namemodel::function all()
        $healthe = Healthe::all();
        //return $healthe;
        /* Two way
        $healthe = Healthe::get();
        return $healthe;
        */
        return view('index', compact('healthe'));
        // compact for send variable to index view

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHealtheRequest $request)
    {
        // one way for insert data to database

       /* $healthe=new Healthe();
        $healthe->First_name=$request->First_name;
        $healthe->Last_name=$request->Last_name;
        $healthe->State=$request->State;
        $healthe->The_disease=$request->The_disease;
        $healthe->Address=$request->Address;
        $healthe->Birthday=$request->Birthday;
        $healthe->Doctor_name=$request->Doctor_name;
        $healthe->Blood_Type=$request->Blood_Type;
        $healthe->Phone=$request->Phone;
        $healthe->Nationality=$request->Nationality;
        $healthe->Email=$request->Email;
        $healthe->Gender=$request->Gender;
        $healthe->save();
        return response('successfully');*/
        // Added validation:
        // $request->validate([
        //     'First_name'=>'required',
        //     'Last_name'=>'required',
        //     'State'=>'required',
        //     'The_disease'=>'required', 
        //     'Address'=>'required',
        //     'Birthday'=>'required', 
        //     'Doctor_name'=>'required',
        //     'Blood_Type'=>'required',
        //     'Phone'=>'required', 
        //     'Email'=>'required', 
        //     'Gender'=>'required', 
        //     'BlooNationalityd_Type'=>'required'  
        //  ]);

        // two way for insert data to database

        Healthe::create([
            //Name_column in database => Name text in form
            'First_name'=>$request->First_name,
            'Last_name'=>$request->Last_name,
            'State'=>$request->State,
            'The_disease'=>$request->The_disease,
            'Address'=>$request->Address,
            'Birthday'=>$request->Birthday,
            'Doctor_name'=>$request->Doctor_name,
            'Blood_Type'=>$request->Blood_Type,
            'Phone'=>$request->Phone,
            'Email'=>$request->Email,
            'Gender'=>$request->Gender,
            'Nationality'=>$request->Nationality

        ]);
        return redirect()->route('healthe.index');
        /* for added all column can we used this way:
         Post::create(request->all());
         but if used this way Should be name column in database same name text name in form*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Healthe  $healthe
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $healthe = Healthe::onlyTrashed()->get();
        return view('trush',compact('healthe')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Healthe  $healthe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        /* I can use also  :
        $healthe = Healthe::where('id',$id)->first(); 
        */
        $healthe = Healthe::find($id);
        /* if I want show error when don't find id use :
         $healthe = Healthe::findorFail($id); 
         if don't find id go to 404 page.*/


        return view('edit' , compact('healthe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Healthe  $healthe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $healthe = Healthe::findorFail($id);
        $healthe-> First_name = $request-> First_name;
        $healthe-> Last_name = $request-> Last_name;
        $healthe-> State = $request-> State;
        $healthe-> The_disease = $request-> The_disease;
        $healthe-> Address = $request-> Address;
        $healthe-> Birthday = $request-> Birthday;
        $healthe-> Doctor_name = $request-> Doctor_name;
        $healthe-> Blood_Type = $request-> Blood_Type;
        $healthe-> Email = $request-> Email;
        $healthe-> Nationality = $request-> Nationality;
        $healthe-> Phone = $request-> Phone;
        $healthe-> Gender = $request-> Gender;
        $healthe->save();
        /* can we used upddta function fpr save data :
        $post -> update(
            $request->all();
        )  */
        return redirect()->route('healthe.index');
        //return response("successfully");
    
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Healthe  $healthe
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        /* The first way :
        Healthe::findorFail($id)->delete();
         return redirect()->route('healthe.index');
         */
        // the second way :
        Healthe::destroy($id);
        return redirect()->route('healthe.index');
    }

    
      
    public function restore($id)
    {
        Healthe::withTrashed()->where('id',$id)->restore();
        return redirect()->back();
    // function back () : for back to last page vistited

    }
    public function forceDelete($id)
    {
        Healthe::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();

    }

    public function view($id){

        $healthe = Healthe::find($id);
    
        return view('view' , compact('healthe'));
        
    }

}
