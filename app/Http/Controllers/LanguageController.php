<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Utilities\Translator;

class LanguageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.administration.language.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.administration.language.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		@ini_set('max_execution_time', 0);
		@set_time_limit(0);
		
        $this->validate($request, [
            'language_name' => 'required|alpha|string|max:30',
            //'flag' => 'required|image|dimensions:min_width=64,min_height=42',
        ]);
		
		$name = $request->language_name;
		$direction = $request->language_direction;
		
		if(file_exists(resource_path() . "/language/$name.php")){
			return redirect()->back()->with('error',_lang('Language already exists !'));
		}
		
		$language = file_get_contents(resource_path() . "/language/language.php");
		$language = str_replace('$language["SYSDIRECTIONDIR"] = "ltr";', '$language["SYSDIRECTIONDIR"] = "'.$direction.'";', $language);
		$new_file = fopen(resource_path() . "/language/$name.php",'w+');
		fwrite($new_file,$language);
		fclose($new_file);
        
		//Store Flag image
		if ($request->hasFile('flag')){
            $image = $request->file('flag');
            $file_name = $name.'.'.$image->getClientOriginalExtension();
            Image::make($image)->crop(24,24)->save(base_path('public/uploads/flags/') .$file_name);
        }
		
		return redirect('languages')->with('success',_lang('Language Created Sucessfully'));
    
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        if(file_exists(resource_path() . "/language/$id.php")){
			require (resource_path() . "/language/$id.php");
			
			//Find New Language key
			$language_2 = Translator::get_language_key();	
			$new_keys = array_diff_key($language_2, $language);
            
            $language = array_merge($language, $new_keys);
            
            // foreach($language as $key => $lang){
            //     echo '$language["'.$key.'"] = "'.$lang.'";';
            //     echo '<br />';
            // }
            // exit;

            
			
		    return view('backend.administration.language.edit',compact('language','id'));
		}
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
	    @ini_set('max_execution_time', 0);
		@set_time_limit(0);
		@ini_set('max_input_vars', 5000);
		
		$contents="<?php \n\n";
		$contents.='$language = array();'."\n\n";	  
		foreach($_POST['language'] as $key => $value){
		  $l_value = str_replace('"','',$value);
		  $contents.='$language["'.str_replace("_"," ",$key).'"] = "'.$l_value.'";'."\n";
		}
        if( @ini_get('max_input_vars') < 2000 ){
            return redirect('languages')->with('error',_lang('Error! You must need to set max_input_vars = 2000 for updating translations'));
        }else{
            $file = fopen(resource_path() . "/language/$id.php","w");
            if(fwrite($file, $contents)){
            return redirect('languages')->with('success',_lang('Updated Sucessfully'));
            }else{
            return redirect('languages')->with('success',_lang('Update failed !'));
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(file_exists(resource_path() . "/language/$id.php")){
			unlink(resource_path() . "/language/$id.php");
			return redirect('languages')->with('success',_lang('Removed Sucessfully'));
		}
    }
}
