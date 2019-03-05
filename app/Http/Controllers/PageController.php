<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
require 'catalogue.php';

class PageController extends Controller
{

    public function index()
    {
        return view('/welcome');
    }

    public function contact($id)
    {
        global $board;
//        if ($id == "eric") {
            return view("contacts/contact", [
                'contacts' => $board,
                'id' => $id
            ]);

    }

    public function contacts()
    {
    global $board;
//    dd($board);
        return view('contacts.ListContact', [
            'contacts' => $board
        ]);
    }





    public function admin(){
        $admin = true;
        return view('admin.welcome');
    }
    public function adminP($id) {
        if ($id == 'create'){
            return view('admin.add-product');
        }
//        if ($id == 'contact')
    }
}

