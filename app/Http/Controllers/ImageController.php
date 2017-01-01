<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $images = Image::orderBy('created_at','desc')->paginate(12);
        return view('dashboard.gallery.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        // $this->validate($request, [
        //     'image' => 'required|mimes:jpg,png,gif,tif,jpeg,bmp|max:3000',
        //     ]);

 
        $inputs = $request->all();

        // // $input['path']=$input['image'];

        // if($file = $request->file('image[]')){


        //     return count($file);
            
        //     }
        // return $request->get('image');
        // return $inputs;
        $nbr = $inputs['total'];
        if($nbr>1){
            $rules['image'] = 'required|mimes:jpg,png,gif,tif,jpeg,bmp|max:3000';
        foreach(range(1, $nbr-1) as $index) {
            // echo  $inputs['image'.$index]->getClientOriginalName();

            $rules['image' . $index] = 'required|mimes:jpg,png,gif,tif,jpeg,bmp|max:3000';

            }


            // $messages = array(
            //         // 'required'=>'check if the '
            // );  
   // dd($rules);
            $validator = Validator::make($inputs,$rules);
        // return $nbr;

                      if($validator->fails()){

                        // Session::flash('error','File size should not exceed 2MB & file type must be of (doc/pdf/ppt)');
                        // return 'fail';
                        // $error['fail'] = 'File mismatches requirement';
                        // return $error;
                        return redirect()->route('dashboard-gallery.create')->withErrors($validator);
                        }else {

                            $inputs = $request->file();
                            // return $nbr;
                            $image=$inputs['image'];             
                            $name=time().'.'.str_replace(' ','', ucwords(($image->getClientOriginalName())));
                            $image->move('gallery-images',$name);
                            Image::create(['path'=>$name]);


                            foreach (range(1,$nbr-1) as $index) {

                            $image = $inputs['image'.$index];

                            $name=time().'.'.str_replace(' ','', ucwords(($image->getClientOriginalName())));
                            // $name = time().'.'. $name. $image->getClientOriginalExtension();
                            $image->move('gallery-images',$name);
                            Image::create(['path'=>$name]);
                            }

                            Session::flash('added_image','New pictures has been added.');
                            return redirect()->route('dashboard-gallery.index');

                        }
        

        }else{
            $this->validate($request, [
            'image' => 'required|mimes:jpg,png,gif,tif,jpeg,bmp|max:3000',
            ]);
            }
                $images = $request->file();
                // return $image;
                foreach ($images as $image) {
                            
                            $name=time().'.'.str_replace(' ','', ucwords(($image->getClientOriginalName())));
                            // $name = time().'.'. $name. $image->getClientOriginalExtension();
                            $image->move('gallery-images',$name);
                            Image::create(['path'=>$name]);
                            
                    Session::flash('added_image','A new picture has been added.');
                    return redirect()->route('dashboard-gallery.index');
                }

        // foreach($inputs['image'] as $file) {
        //     return $file->getClientOriginalName();
        // }

        
        // $nbr = count($this->input('image')) - 1;
        
        // foreach(range(0, $nbr) as $index) {
        //     $this->validate($request, [
        //     'image'.$index => 'required|mimes:jpg,png,gif,tif,jpeg,bmp|max:3000',
        //     ]);
        // }

        // foreach($inputs->file('image') as $file) {
        //     return $file;
        // }
        
        // return $inputs;
        // Session::flash('created_project','Existing project has been updated.');
        // return redirect()->route('dashboard-projects.index');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $image = Image::findOrFail($id);

        if(File::exists(public_path().$image->path)){         //if image file exists
        unlink(public_path().$image->path);
        }
        
        $image->delete();
        
        Session::flash('deleted_image','Image deleted successfully.');


        return redirect()->route('dashboard-gallery.index');

    }
}
