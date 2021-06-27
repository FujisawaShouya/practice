<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function thanks(Request $request)
    {
        $content = $request->content;
        $data = [
            'content'=>'入力が完了しました'
        ];
        return view(contact.thanks,$data);
    }
}
