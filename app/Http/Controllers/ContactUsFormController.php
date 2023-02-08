<?php
namespace App\Http\Controllers;
use A17\Twill\Facades\TwillAppSettings;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsFormController extends Controller
{
  public function ContactUsForm(Request $request)
  {
    // Form validation
    $this->validate($request, [
      "email" => "required|email",
      "message" => "required",
    ]);
    //  Store data in database
    Contact::create($request->all());

    if (TwillAppSettings::get("homepage.email.receiver")) {
      // Send mail
      \Mail::send(
        "mail",
        [
          "email" => $request->get("email"),
          "user_query" => $request->get("message"),
        ],
        function ($message) use ($request) {
          $message->from($request->email);
          $message
            ->to(
              TwillAppSettings::get("homepage.email.receiver"),
              TwillAppSettings::get("homepage.email.receiver_name")
            )
            ->subject("Basar Rain Kontakt Email");
        }
      );
    }

    return back()->with(
      "success",
      TwillAppSettings::get("homepage.email.success")
    );
  }
}
