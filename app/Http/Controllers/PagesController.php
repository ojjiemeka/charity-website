<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{
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
        $donorsApi = "https://randomuser.me/api/?results=4";
        $response = Http::get($donorsApi);
        $data = $response->json();

        $volunteers = collect($data['results'])->map(function ($volunteers) {
            $amount = rand(10, 2000); // Random amount between $500 and $5000
            return [
                'name' => $volunteers['name']['first'] . ' ' . $volunteers['name']['last'],
                'thumbnail' => $volunteers['picture']['medium'],
                'amount' => $amount,
            ];
        });
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
        $donorsApi = "https://randomuser.me/api/?results=5";
        $response = Http::get($donorsApi);
        $data = $response->json();

        $volunteers = collect($data['results'])->map(function ($volunteers) {
            $amount = rand(10, 2000); // Random amount between $500 and $5000
            return [
                'name' => $volunteers['name']['first'] . ' ' . $volunteers['name']['last'],
                'thumbnail' => $volunteers['picture']['medium'],
                'amount' => $amount,
            ];
        });

        $title = 'cause1';
        return view('pages.cause1', [

            'title' => $title,
            'volunteers' => $volunteers
        ]);
    }
    
    public function becomeAVolunteer()
    {
        $title = 'volunteer';
        return view('pages.becomeAVolunteer', [

            'title' => $title
        ]);
    }
    
    public function faq()
    {
        $title = 'faq';
        return view('pages.faq', [

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
        $title = 'payments';
        return view('pages.payment', [

            'title' => $title
        ]);
    }
}
