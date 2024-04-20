<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function __invoke(Request $request)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-bob.png');

        return view('pages.chart', [
            'title' => 'Chart for $BOB on Solana',
            'description' => 'View the DexScreener chart for $BOB on Solana. Look nowhere else for live updates on Robert trading activity..',
            'canonical' => route('chart'),
            'ogimage' => $image === null ? url('img/og-bob.png') : $image,
        ]);
    }
}