<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class OaBOa extends Controller
{
    function OBOA(){
        return view("OaBOa");
    }
    function table(){
        return view("table1");
    }
    public function regis(Request $request){
        //dd($request);
         //$Page= Page::find(1);
         $input = request()->all();
       

        
        
        //  $Page=new Page;
        // $Page->logo= $request->logo;
        // $Page->video = $request->video;
        // $Page->heading1 = $request->heading1;
        // $Page->paragraph = $request->paragraph;
        // $Page->update();
        // return view('adminIndex');
        $input = request()->all();

        if(request('simg')){
            $input['simg'] = request('simg')->store('images');
        }
        if(request('NIDimg')){
            $input['NIDimg'] = request('NIDimg')->store('images');
        }
        if(request('psimg')){
            $input['psimg'] = request('psimg')->store('images');
        }
        if(request('psimg2')){
            $input['psimg2'] = request('psimg2')->store('images');
        }
        if(request('ssimg')){
            $input['ssimg'] = request('ssimg')->store('images');
        }
        // if ($request->hasFile('logo')) {
        //     foreach ($request->file('logo') as $image) {
        //         if ($upload = $image->store('images', 'public')) {
        //             $image = $upload;
        //             // more logic here
        //             return redirect()->back();
        //         }
        //     }
        // }
        // if(request('video')){
        //     $input['video'] = request('video')->store('videos');
        //  }

        // $Page->logo= $input['logo'];
        // $Page->video = $input['video'];
        // $Page->heading1 = $input['heading1'];
        // $Page->paragraph = $input['paragraph'];

        $Page=new Page($input);
        $Page->save();
        return view('table1',['Pages'=> $input]);
    }
}
