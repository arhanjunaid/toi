<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
 
use Datatables;

class DataTableAjaxCRUDController extends Controller
{
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Company::select('*'))
            ->addColumn('action', 'company-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('companies');
    }


        public function store(Request $request)
    {  
 
        $companyId = $request->id;
 
        $company   =   Company::updateOrCreate(
                    [
                     'id' => $companyId
                    ],
                    [
                    'name' => $request->name, 
                    'email' => $request->email,
                    'address' => $request->address
                    ]);    
                         
        return Response()->json($company);
 
    }


      public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Company::where($where)->first();
      
        return Response()->json($company);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $company = Company::where('id',$request->id)->delete();
      
        return Response()->json($company);
    }


}//end controller
