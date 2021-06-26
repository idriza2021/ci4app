<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // $faker = \Faker\Factory::create();
        // dd($faker->name);
        $data = [
            'title' => 'home | WebProgamming',
            'tes'   => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. abc No.123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe'  => 'Kantor',
                    'alamat' => 'Jl. Setiaku N0. 589',
                    'kota' => 'Bandung'
                ]
            ]
        ];



        return view('pages/Contact', $data);
    }

    public function Komik()
    {
        $data = [
            'title' => 'Komik'
        ];
        return view('pages/Komik');
    }
}
