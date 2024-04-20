<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke(Request $request)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-bob.png');

        return view('pages.about', [
            'title' => 'About $BOB on Solana',
            'description' => 'Find out more about $BOB on Solana, a leading meme coin on the Solana Blockchain for we are all Bob. I am Bob. You are Bob. We are all Bob.',
            'canonical' => route('about'),
            'ogimage' => $image === null ? url('img/og-bob.png') : $image,
        ]);
    }
}