<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Contracts\Service\Attribute\Required;

class email extends Controller
{
  public function sendemail(Request $req)
  {

    // $validated = $req->validate([
    //   'name' => 'required|max:30',
    //   'email' => 'required|max:30',
    //   'contact' => 'required|max:10',
    //   'msg' => 'required|max:500',
    // ]);
    $data = stripslashes(file_get_contents("php://input"));
    $mydata = json_decode($data, true);

    $data = [
      'name' => $mydata["name"],
      'email' => $mydata["email"],
      'contact' => $mydata["contact"],
      'msg' => $mydata["message"]
    ];



    $user['to'] = 'rajesh.mandal123@gmail.com';
    Mail::send("sendmailview", $data, function ($message) use ($user) {
      $message->to($user['to']);
      $message->subject('Enquiry on website');
    });
    return 'success';
  }
}
