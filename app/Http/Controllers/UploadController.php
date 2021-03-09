<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageModel;
use Image;

class UploadController extends Controller
{
    public function upload(){
        $images = ImageModel::all();
        //dd($images);
        return view('upload',compact('images'));
    }

    public function uploadImage(Request $request){
        
        $images = $request->file('filename');
        
    //     dd($images);
            $time = time();
            $cnt = 1;
            foreach($images as $originalImage){
                
                $thumbnailImage = Image::make($originalImage);

                $thumbnailPath = public_path().'/thumbnail/';
                $originalPath = public_path().'/images/';

                
                $temp = $originalImage->getClientOriginalName(); //filename with extension

                $tmp_ext = explode(".",$temp);
                $ext = end($tmp_ext);
                $filename=$time.$cnt.'.'.$ext;

                $thumbnailImage->save($originalPath.$filename);

                $thumbnailImage->resize(150,150);
                $thumbnailImage->save($thumbnailPath.$filename);

                $imagemodel = new ImageModel();
                $imagemodel->filename = $filename;
                $imagemodel->save();
                $cnt++;
            }
       return redirect()->to('upload');

    }
}
