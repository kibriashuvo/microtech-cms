<?php

namespace App\Http\Controllers;
use App\User;
use App\Image;
use App\Project;
use App\Pjcategory;
// use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        //
       
        $projects = Project::paginate(6);
        // return $projects;
        return view('dashboard.project.index',compact('projects'));

    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */


    public function create()
    {
        //
        
        $pjcategories = Pjcategory::all();
        return view('dashboard.project.create',compact('pjcategories'));
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    

    public function store(Request $request)
    {
        //

        // return $request->all();
        $this->validate($request, [
            'name' => 'required',
            'details' => 'required',
            'category' => 'required',
            'image' => 'required|mimes:jpg,png,gif,tif,jpeg,bmp|max:3000',
            ]);

        $input = $request->all();
        $project =  new Project;
        $project->name = $input['name'];
        $project->details = $input['details'];


        if($file = $request->file('image')){

            $name=str_replace(' ','', ucwords($input['name']));
            $name = $name.time().'.'. $file->getClientOriginalExtension();
            $file->move('project-images',$name);
            $project->path = $name;
            
            }
         $project->save();
         if(isset($request->category)){
         $project->pjcategories()->sync($request->category,false); 
        }else{
            $project->pjcategories()->sync([]);
        }
        // $project = Project::create($input);



        Session::flash('created_project','A new project has been created.');
        return redirect()->route('dashboard-projects.index');

    }










// MODDDDD


       // if($file = $request->file('images')){

       //      // $nbr = count($input('images')) - 1;
            
       //      // foreach(range(0, $nbr) as $index) {

       //      //     $this->validate($request,[
       //      //     'images.' . $index => 'image|max:4000',
       //      //     ]);
       //      // }
       //      foreach ($request['images'] as $file) {
            
       //      $name = time() . $file->getClientOriginalExtension();
       //      // $prodImgPath = 'images/Product/'.$request->category_id;
       //      $file->move('project-images',$name);
       //      $image = Image::create(['path'=>$name]);
       //      // $input['photo_id'] = $image->id;
       //      }
       //      Session::flash('created_project','Existing project has been updated.');
       //      return redirect()->route('projects.index');

       //      }



        // if($files = $request->file('images')){

        //     $num = count($files)-1;


        //     $filepaths=[];
        //     // foreach(range(0, $num) as $index) {

        //             foreach ($files as $file) {
      
        //             $name = time().'.'. $file->getClientOriginalExtension();
        //            $file->path = $name;
        //            // dd ($file);
        //             // $file['path'] = $name;
                    
        //             $filepaths[]=$file;        
            
        //             }
            
        //     // }
        //     // return $filepaths;
        //         foreach ($filepaths as $file) {
        //            $project->images()->create($file);
        //         }
        //     // $project = Project::create($input);
        //     // $project->Photo::create($file);
        //     // Session::flash('created_project','Existing project has been updated.');
        //     // return redirect('/create-project');
        // }

            
      

        // return $input;

        // if($file = $request->file('images')){

            
        //     $name = time() . $file->getClientOriginalName();
        //     // $prodImgPath = 'images/Product/'.$request->category_id;
        //     $file->move('images',$name);
        //     $image = Photo::create(['file'=>$name]);
        //     // $input['photo_id'] = $image->id;
        // }

        //     Session::flash('created_project','Existing project has been updated.');
        //     return redirect()->route('projects.index');
        // }


      


        // Project::create($input);
        // // Session::flash('created_project','New project has been added.');
        // return redirect('/create-project');
    
    













//MODDDDD











    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    











    // public function show($id)
    // {
    //     //
    // }

    // *
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
        //

        $project = Project::findOrFail($id);
        // $project->category = $project->pjcategory_id;

        $pjcategories =Pjcategory::pluck('category','id')->all();

        return view('dashboard.project.edit',compact('project','pjcategories'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, $id)
    {

        //
        // return $request->all();

        $this->validate($request, [    
            'category'=>'required',
            'image' => 'mimes:jpg,png,gif,tif,jpeg,bmp|max:3000',
            ]);
            
        $input = $request->all();
        $project =  Project::findOrFail($id);
        $project->name = $input['name'];
        $project->details = $input['details'];
        
        if($file = $request->file('image')){

            $name=str_replace(' ','', ucwords($input['name']));
            $name = $name.time().'.'. $file->getClientOriginalExtension();
            $file->move('project-images',$name);
            $project->path = $name;
            
            }
         $project->save();
         // return $request->category;
        if(isset($request->category)){
         $project->pjcategories()->sync($request->category,false); 
        }else{
            $project->pjcategories()->sync([]);
        }
    

        Session::flash('updated_project','Project updated successfully!');

        return redirect()->route('dashboard-projects.index');

    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        //

        $project = Project::findOrFail($id);

        if($project->path){

        if(File::exists(public_path().$project->path)){         //if image file exists
        unlink(public_path().$project->path);
        // $project->photos()->delete(); 
            }
        }
        
        $project->delete();
        
        Session::flash('deleted_project','Project deleted successfully.');


        return redirect()->route('dashboard-projects.index');

    }



 public function pjcindex()
    {
        //

        $pjcategories = Pjcategory::paginate(10);
        
        return view('dashboard.project.pjc-index',compact('pjcategories'));   

    }
    
    public function pjcrename($id)
    {
        //

        $pjc = Pjcategory::findOrFail($id);
        
        return view('dashboard.project.pjc-edit',compact('pjc'));   

    }

    public function pjcupdate(Request $request,$id)
    {
        //
        $this->validate($request, [    
            'category'=>'required',
            ]);
        
        $input = $request->all();
        
        $pjc = Pjcategory::findOrFail($id);
        
        $pjc->update($input);


        Session::flash('updated_category','Category has been renamed successfully!');
        return redirect()->route('pjc.index'); 

    }







    public function populate_public_page_projects(){
            
            $categories = Pjcategory::all();
            $projects = Project::all();
            return view('projects',compact('categories', 'projects' ));
            
        }




    

}
