<?php

namespace App\Http\Controllers;
use App\User;
use App\Image;
use App\Product;
use App\Pdcategory;
// use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {


        $products = Product::paginate(6);
        return view('dashboard.product.index',compact('products'));

    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */


    public function create()
    {
        //
     
        $pdcategories = Pdcategory::pluck('category','id')->all();
        return view('dashboard.product.create',compact('pdcategories'));   
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

        $this->validate($request, [
            'name' => 'required',
            'details' => 'required',
            'category' => 'required',
            'image' => 'required|mimes:jpg,png,gif,tif,jpeg,bmp|max:3000',
            ]);

        $input = $request->all();
        $input['pdcategory_id']=$input['category'];

        if($file = $request->file('image')){

            $name=str_replace(' ','', ucwords($input['name']));
            $name = $name.time().'.'. $file->getClientOriginalExtension();
            $file->move('product-images',$name);
            $input['path'] = $name;
            
            }
    
        $product = Product::create($input);



        Session::flash('created_product','A new product has been created.');
        return redirect()->route('dashboard-products.index');

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
       //      $file->move('product-images',$name);
       //      $image = Image::create(['path'=>$name]);
       //      // $input['photo_id'] = $image->id;
       //      }
       //      Session::flash('created_product','Existing product has been updated.');
       //      return redirect()->route('products.index');

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
        //            $product->images()->create($file);
        //         }
        //     // $product = Product::create($input);
        //     // $product->Photo::create($file);
        //     // Session::flash('created_product','Existing product has been updated.');
        //     // return redirect('/create-product');
        // }

            
      

        // return $input;

        // if($file = $request->file('images')){

            
        //     $name = time() . $file->getClientOriginalName();
        //     // $prodImgPath = 'images/Product/'.$request->category_id;
        //     $file->move('images',$name);
        //     $image = Photo::create(['file'=>$name]);
        //     // $input['photo_id'] = $image->id;
        // }

        //     Session::flash('created_product','Existing product has been updated.');
        //     return redirect()->route('products.index');
        // }


      


        // Product::create($input);
        // // Session::flash('created_product','New product has been added.');
        // return redirect('/create-product');
    
    













//MODDDDD











    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    











    public function show($id)
    {
        //
    }

    // *
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
        //

        $product = Product::findOrFail($id);
        $product->category = $product->pdcategory_id;

        // return $product;
        $pdcategories =Pdcategory::pluck('category','id')->all();

        // echo $product.' '.$pdcategories;
        // return $pdcategories;

        return view('dashboard.product.edit',compact('product','pdcategories'));
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
            
        $this->validate($request, [    
            'category'=>'required',
            'image' => 'mimes:jpg,png,gif,tif,jpeg,bmp|max:3000',
            ]);
            
      
        $input = $request->all();
        $input['pdcategory_id']=$input['category'];

        // return $input;

        $product = Product::findOrFail($id);

        if($file = $request->file('image')){

        if($product->path){

        if(File::exists(public_path().'/product-images/'.$product->path)){         //if image file exists
            echo "ok";
            unlink(public_path().'/product-images/'.$product->path);
            // $product->photos()->delete(); 
            }
        }

            $name=str_replace(' ','', ucwords($input['name']));
            $name = $name.time().'.'. $file->getClientOriginalExtension();
            $file->move('product-images',$name);
            $input['path'] = $name;
            
        }


        // $user = Auth::user();
        // $user->posts()->whereId($id)->first()->update($input);

        $product->update($input);

        Session::flash('updated_product','Product updated successfully!');

        return redirect()->route('dashboard-products.index');

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

        $product = Product::findOrFail($id);

        if($product->path){

        if(File::exists(public_path().$product->path)){         //if image file exists
        unlink(public_path().$product->path);
     //   return "ok";
            }
        }
        
        $product->delete();
        
        Session::flash('deleted_product','Product deleted successfully.');


        return redirect()->route('dashboard-products.index'); 

    }

    public function pdcindex()
    {
        //

        $pdcategories = Pdcategory::paginate(10);
        
        return view('dashboard.product.pdc-index',compact('pdcategories'));   

    }
    
    public function pdcrename($id)
    {
        //

        $pdc = Pdcategory::findOrFail($id);
        
        return view('dashboard.product.pdc-edit',compact('pdc'));   

    }

    public function pdcupdate(Request $request,$id)
    {
        //
        $this->validate($request, [    
            'category'=>'required',
            ]);
        
        //============Slugging=============

        $cat = $request->input('category');
       

        $pdc = Pdcategory::findOrFail($id);
        $pdc->slug = null;
        $pdc->update(['category' => $cat]);
        
        //==================================

        Session::flash('updated_category','Category has been renamed successfully!');
        return redirect()->route('pdc.index'); 

    }


 /*   public function populate_public_page_products($cat=null){
        do{
             $categories = Pdcategory::all();

                if($cat==null)
                    $cat = 1;

                $products = Product::where('pdcategory_id', $cat)
                                       ->orderBy('name')->paginate(4);

            return view('products',array('datas' => $categories, 'products' => $products ));

            }while($cat!=null);
        
            
        }*/

        public function populate_public_page_products($slug=null){
        
             $categories = Pdcategory::all();

                if($slug==null){
                    $first_one = Pdcategory::first();
                    $url =  $first_one->slug;
                    $cat = $first_one->id;

                }else{
                    $row = Pdcategory::findBySlugOrFail($slug);
                    $cat = $row->id;
                }
                   

                $products = Product::where('pdcategory_id', $cat)
                                       ->orderBy('name')->paginate(4);
                
                

                return view('products',array('datas' => $categories, 'products' => $products ));

            }
        
            
        

}
