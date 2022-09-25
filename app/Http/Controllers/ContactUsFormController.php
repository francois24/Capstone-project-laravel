<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
class ContactUsFormController extends Controller {
    // Create Contact Form
    public function createForm(Request $request) {
      return view('contact');
    }
    // Store Contact Form data
    public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'date_pickup' => 'required',
            'drop_off_date' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'license_no' => 'required',
            'car_brand' => 'required',
            // 'email' => 'required|email',
            // 'phone' => 'required',
            // 'subject'=>'required',
            // 'message' => 'required'
         ]);
        //  Store data in database
        Contact::create($request->all());
        //  Send mail to admin
        \Mail::send('mail', array(
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'date_pickup' => $request->get('date_pickup'),
            'drop_off_date' => $request->get('drop_off_date'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'license_no' => $request->get('license_no'),
            'car_brand' => $request->get('car_brand'),
            
            // 'subject' => $request->get('subject'),
            // 'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('rentcar@gmail.com', 'Admin')->subject($request->get('email'));
        });
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}