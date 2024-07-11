<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function getVolunteers($num = 4)
    {
        $donorsApi = "https://randomuser.me/api/?results=$num";
        $response = Http::get($donorsApi);
        $data = $response->json();

        $volunteers = collect($data['results'])->map(function ($volunteers) {
            $amount = rand(500, 5000); // Random amount between $500 and $5000
            return [
                'name' => $volunteers['name']['first'] . ' ' . $volunteers['name']['last'],
                'thumbnail' => $volunteers['picture']['medium'],
                'amount' => $amount,
            ];
        });

        return $volunteers;
    }

    public function index()
    {
        $title = 'index';
        $donorsApi = "https://randomuser.me/api/?gender=female&results=25";
        $response = Http::get($donorsApi);
        $data = $response->json();

        $women = collect($data['results'])->map(function ($woman) {
            $amount = rand(10, 2000); // Random amount between $500 and $5000
            return [
                'name' => $woman['name']['first'] . ' ' . $woman['name']['last'],
                'thumbnail' => $woman['picture']['medium'],
                'amount' => $amount,
            ];
        });

        // dd($women);

        return view('pages.index', [
            'users' => $women,
            'title' => $title
        ]);
    }

    public function aboutUs()
    {
       

        $volunteers = $this->getVolunteers();

        $title = 'aboutUs';
        return view('pages.aboutUs', [

            'title' => $title,
            'volunteers' => $volunteers
        ]);
    }

    public function causes()
    {
        $title = 'causes';
        return view('pages.causes', [

            'title' => $title
        ]);
    }

    public function cause1()
    {

        $volunteers = $this->getVolunteers();

        $title = 'cause1';
        return view('pages.cause1', [

            'title' => $title,
            'volunteers' => $volunteers
        ]);
    }

    public function cause2()
    {

        $volunteers = $this->getVolunteers();

        $title = 'cause2';
        return view('pages.cause2', [

            'title' => $title,
            'volunteers' => $volunteers
        ]);
    }

    public function cause3()
    {

        $volunteers = $this->getVolunteers();

        $title = 'cause3';
        return view('pages.cause3', [

            'title' => $title,
            'volunteers' => $volunteers
        ]);
    }

    public function cause4()
    {

        $volunteers = $this->getVolunteers();

        $title = 'cause4';
        return view('pages.cause4', [

            'title' => $title,
            'volunteers' => $volunteers
        ]);
    }

    public function cause5()
    {

        $volunteers = $this->getVolunteers();

        $title = 'cause5';
        return view('pages.cause5', [

            'title' => $title,
            'volunteers' => $volunteers
        ]);
    }

    public function cause6()
    {

        $volunteers = $this->getVolunteers();

        $title = 'cause6';
        return view('pages.cause6', [

            'title' => $title,
            'volunteers' => $volunteers
        ]);
    }

    public function error()
    {

        $volunteers = $this->getVolunteers();

        $title = '404';
        return view('pages.404', [

            'title' => $title,
        ]);
    }

    public function becomeAVolunteer()
    {
        $title = 'volunteer';
        return view('pages.becomeAVolunteer', [

            'title' => $title
        ]);
    }

    public function paymentSuccessMail()
    {
        $title = 'success';
        return view('pages.mail.paymentSuccessMail', [

            'title' => $title
        ]);
    }

    public function contact()
    {
        $title = 'contact';
        return view('pages.contact', [

            'title' => $title
        ]);
    }

    public function donations()
    {
        $title = 'donation';
        return view('pages.donations', [

            'title' => $title
        ]);
    }

    public function payments()
    {
         // Get today's date
        $title = 'payments';
        return view('pages.payment', [

            'title' => $title
        ]);
    }
}
