<?php

namespace App\Http\Controllers;

use App\Mail\paymentSuccessMail;
use App\Mail\volunteerMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Str;
class FormsController extends Controller
{
    public function donate(Request $request)
    {
        // $validatedData = $request->validate([
        //     'amount' => 'required',
        //     'desc' => 'required',
        //     // Add validation rules for other fields
        // ]);

        $data = $request->all();

        // dd($data);

        // return view('pages.payment', [
        //     'data' => $data
        // ]);
        $email = $data['email'];
        $name = $data['fname'];

        $todayDate = Carbon::now()->toDateString(); // e.g., 2024-07-08
        $transactionID = Str::upper(Str::random(12));

        $mailFrom           =   'info@eurasiawildlifealliance.online';
        $fromName           =   env('APP_NAME', 'Eurasia Wildlife Alliance');
        $subject            =   "Thank You for Your Generous Donation!!";
        $viewData           =   [
                                    'recipientName' => $name,
                                    'data' => $data,
                                    'date' => $todayDate,
                                    'transactionID' => $transactionID
                                ];
        $body               = view("pages.mail.paymentSuccessMail", $viewData)->render();
        $receiverName       =   $name;
        $receiverEmail      =   $email;

        try {
            $message = $body instanceof HtmlString ? $body->__toString() : $body;
            
            // dd($message);
            Mail::to($receiverEmail)->send(
                new paymentSuccessMail(
                    fromAddress: $mailFrom,
                    fromName: $fromName,
                    theSubject: $subject,
                    theMessage: $message,
                    recipientName: $receiverName
                    )
                );

                return view('pages.mail.paymentSuccessMail', [
                    'data' => $viewData['data'],
                    'date' => $viewData['date'],
                    'transactionID' => $viewData['transactionID']
                ]);
        
            // Email sent successfully, flash a success message
            // Session::flash('success', 'Invoice sent successfully.');

        } catch (\Exception $e) {
            // Log the error
        Log::error('Error sending invoice: ' . $e->getMessage());

        // Flash an error message
        Session::flash('error', 'Failed to send invoice. Please try again.');
            // Email sending failed, flash an error message
            // Session::flash('error', 'Failed to send invoice. Please try again.');
        }
    }

    public function volunteer(Request $request)
    {
        
        $data = $request->all();

        $email = $data['email'];
        $name = $data['name'];
        // dd($data);
        
        $mailFrom           =   'info@eurasiawildlifealliance.online';
        $fromName           =   env('APP_NAME', 'Eurasia Wildlife Alliance');
        $subject            =   "Thank You for Volunteering with Eurasia Wildlife Alliance!";
        $viewData           =   ['recipientName' => $name];
        $body               = view("pages.mail.volunteerMail", $viewData)->render();
        $receiverName       =   $name;
        $receiverEmail      =   $email;
        
        try {
            $message = $body instanceof HtmlString ? $body->__toString() : $body;
            
            Mail::to($receiverEmail)->send(
                new volunteerMail(
                    fromAddress: $mailFrom,
                    fromName: $fromName,
                    theSubject: $subject,
                    theMessage: $message,
                    recipientName: $receiverName
                    )
                );
                // dd('works');

            // return view('pages.mail.volunteerMail', [
            //     'recipientName' => $receiverName
            // ]);

            return view('pages.volunteer', [
                'recipientName' => $receiverName
            ]);
        } catch (\Exception $e) {
            // Log the error
        Log::error('Error sending invoice: ' . $e->getMessage());

        // Flash an error message
        Session::flash('error', 'Failed to send invoice. Please try again.');
            // Email sending failed, flash an error message
            // Session::flash('error', 'Failed to send invoice. Please try again.');
        }
        

        // return view('pages.mail.volunteerMail', [
        //     'data' => $data
        // ]);
    }
}
