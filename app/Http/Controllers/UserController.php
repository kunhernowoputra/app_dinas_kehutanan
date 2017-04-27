<?php

namespace App\Http\Controllers;

use App\Data;
use App\Kawasan_hutan;

use App\Lahan_vegetasi;
use App\Penataan_batas;
use App\Sebaran_kawasan;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('user.index');
    }

    public function index($category)
    {
        if($category == 'kawasan_hutan')
        {
            $data = Kawasan_hutan::where('user_id', Auth::user()->id)->get();
            return view('user.sumber_daya_hutan.'.$category.'.index',compact('data'));
        }

        if($category == 'lahan_vegetasi')
        {
            $data = Lahan_vegetasi::where('user_id', Auth::user()->id)->get();
            return view('user.sumber_daya_hutan.'.$category.'.index',compact('data'));
        }

        if($category == 'sebaran_kawasan')
        {
            $data = Sebaran_kawasan::where('user_id', Auth::user()->id)->get();
            return view('user.sumber_daya_hutan.'.$category.'.index',compact('data'));
        }

        if($category == 'penataan_batas')
        {
            $data = Penataan_batas::where('user_id', Auth::user()->id)->get();
            return view('user.sumber_daya_hutan.'.$category.'.index',compact('data'));
        }
    }

    public function store($category, Request $request)
    {
        $message = 'Berhasil disimpan';
        if($category == 'kawasan_hutan') {
            if($request->isMethod('POST'))
            {
                Auth::user()->kawasan_hutan()->create($request->all());
                return redirect('user/'.$category)->with('message',$message);
            }
        }

        if($category == 'lahan_vegetasi') {
            if($request->isMethod('POST'))
            {
                Auth::user()->lahan_vegetasi()->create($request->all());
                return redirect('user/'.$category)->with('message',$message);
            }
        }

        if($category == 'sebaran_kawasan') {
            if($request->isMethod('POST'))
            {
                Auth::user()->sebaran_kawasan()->create($request->all());
                return redirect('user/'.$category)->with('message',$message);
            }
        }

        if($category == 'penataan_batas') {
            if($request->isMethod('POST'))
            {
                Auth::user()->penataan_batas()->create($request->all());
                return redirect('user/'.$category)->with('message',$message);
            }
        }
    }

    public function show($category,$id)
    {
        if($category == 'kawasan_hutan') {
            $data = Kawasan_hutan::find($id);
            return view('user.sumber_daya_hutan'.$category.'.show',compact('data'));
        }

        if($category == 'lahan_vegetasi') {
            $data = Lahan_vegetasi::find($id);
            return view('user.sumber_daya_hutan'.$category.'.show',compact('data'));
        }

        if($category == 'sebaran_kawasan') {
            $data = Sebaran_kawasan::find($id);
            return view('user.sumber_daya_hutan'.$category.'.show',compact('data'));
        }

        if($category == 'penataan_batas') {
            $data = Penataan_batas::find($id);
            return view('user.sumber_daya_hutan'.$category.'.show',compact('data'));
        }
    }

    public function edit($category,$id)
    {
        if($category == 'kawasan_hutan') {
            $data = Kawasan_hutan::find($id);
            return view('user.sumber_daya_hutan.'.$category.'.edit',compact('data'));
        }

        if($category == 'lahan_vegetasi') {
            $data = Lahan_vegetasi::find($id);
            return view('user.sumber_daya_hutan.'.$category.'.edit',compact('data'));
        }

        if($category == 'sebaran_kawasan') {
            $data = Sebaran_kawasan::find($id);
            return view('user.sumber_daya_hutan.'.$category.'.edit',compact('data'));
        }

        if($category == 'penataan_batas') {
            $data = Penataan_batas::find($id);
            return view('user.sumber_daya_hutan.'.$category.'.edit',compact('data'));
        }
    }

    public function update($category,$id, Request $request)
    {
        $message = 'Berhasil diupdate';
        if($category == 'kawasan_hutan') {
            $data = Kawasan_hutan::find($id);
            $data->update($request->all());
            return redirect('user/'.$category)->with('message',$message);
        }

        if($category == 'lahan_vegetasi') {
            $data = Lahan_vegetasi::find($id);
            $data->update($request->all());
            return redirect('user/'.$category)->with('message',$message);
        }

        if($category == 'sebaran_kawasan') {
            $data = Sebaran_kawasan::find($id);
            $data->update($request->all());
            return redirect('user/'.$category)->with('message',$message);
        }

        if($category == 'penataan_batas') {
            $data = Penataan_batas::find($id);
            $data->update($request->all());
            return redirect('user/'.$category)->with('message',$message);
        }
    }

    public function delete($category,$id)
    {
        $message = 'Berhasil dihapus';
        if($category == 'kawasan_hutan') {
            $data = Kawasan_hutan::find($id);
            $data->delete();
            return redirect('user/'.$category)->with('message',$message);
        }

        if($category == 'lahan_vegetasi') {
            $data = Lahan_vegetasi::find($id);
            $data->delete();
            return redirect('user/'.$category)->with('message',$message);
        }

        if($category == 'sebaran_kawasan') {
            $data = Sebaran_kawasan::find($id);
            $data->delete();
            return redirect('user/'.$category)->with('message',$message);
        }

        if($category == 'penataan_batas') {
            $data = Penataan_batas::find($id);
            $data->delete();
            return redirect('user/'.$category)->with('message',$message);
        }
    }
}
