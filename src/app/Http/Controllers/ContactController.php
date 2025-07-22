<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        // return $contact;
        // return view('confirm');
        // return view('confirm', ['contact' => $contact]);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        // フォームから送られてきたデータの中で必要な項目を取り出し、$contactにまとめる
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}
