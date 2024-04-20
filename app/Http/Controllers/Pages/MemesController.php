<?php

namespace App\Http\Controllers\Pages;

use App\Models\Meme;
use App\Models\MemeType;
use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;

class MemesController extends Controller
{
    public function index()
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-bob.png');

        return view('pages.memes', [
            'title' => 'Memes for $BOB on Solana',
            'description' => 'Memes for $BOB on Solana are created by the Bob Community and available freely to share on the interwebs to promote Bob & Robert and all of us because we are all Bob.',
            'canonical' => route('memes'),
            'ogimage' => $image === null ? url('img/og-bob.png') : $image,
            'memeTypes' => MemeType::all(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(MemeType $memeType, Meme $meme)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-bob.png');

        return view('pages.meme', [
            'meme' => $meme,
            'title' => $meme->title,
            'description' => $meme->description,
            'image' => $meme->image->url . $meme->meme_image_type,
            'image_name' => $meme->image->filename . $meme->meme_image_type,
            'content' => $meme->content,
            'canonical' => env('APP_URL') . $meme->getPathAttribute(),
            'ogimage' => env('APP_URL') . '/img/og-bob.png',
        ]);
    }

    public function edit(Meme $meme)
    {
        //
    }

    public function update(Request $request, Meme $meme)
    {
        //
    }

    public function destroy(Meme $meme)
    {
        //
    }
}
