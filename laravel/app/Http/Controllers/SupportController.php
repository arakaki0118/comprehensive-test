<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Support;

class SupportController extends Controller
{
    //

    public function support()
    {
        return view('/support');
    }

    public function supportCreate(Request $request)
    {
        Support::create([
            'user_id' => Auth::user()->user_id,
            'facility_name' => $request->facility_name,
            'department' => $request->department,
            'trouble_title' => $request->trouble_title,
            'trouble_content' => $request->trouble_content,
            'accrual_date' => $request->accrual_date,
        ]);
        return redirect('index');
    }

    public function supportShowPage(Request $request)
    {
        $support = Support::where('support_id', $request->support_id)->first();
        return view('supportShow',  ['support' => $support]);
    }

    public function supportEdit(Request $request)
    {
        $support = Support::where('support_id', $request->support_id)->first();
        return view('supportEdit',  ['support' => $support]);
    }

    public function Edit(Request $request)
    {

        Support::where('support_id', $request->support_id)->update([
            'facility_name' => $request -> facility_name,
            'department' => $request -> department,
            'trouble_title' => $request -> trouble_title,
            'trouble_content' => $request -> trouble_content,
        ]);

        return redirect()->route('index');
    }

    public function supportDestroy(Request $request)
    {
        Support::where('support_id', $request->support_id)->delete();
        return redirect()->route('index');
    }
}   