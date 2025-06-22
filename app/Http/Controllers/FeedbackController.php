<?php


namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    function tampil()
    {
        return view('feedback.tampil');

       

    }

      function submit(Request $request)
    {
        $Feedback = new Feedback();
        $Feedback->nama = $request->nama;
        $Feedback->status = $request->status;
        $Feedback->email = $request->email;
        $Feedback->pesan = $request->pesan;
        $Feedback->save();

        return redirect()->route('home.tampil');
    }
}
