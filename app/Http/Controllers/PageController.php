<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('/welcome');
    }

    public function contact($id)
    {
        if ($id == "eric") {
            return view('contacts/contact-eric');
        }
      elseif ($id == "christophe") {
            return view('contacts/contact-christophe');
      }
        elseif ($id == "mel") {
            return view('/contacts/contact-mel');
        }
      elseif ($id == "cedric") {
            return view('/contacts/contact-cedric');
      }
      else {
            return view('/welcome');
      }
    }

}

