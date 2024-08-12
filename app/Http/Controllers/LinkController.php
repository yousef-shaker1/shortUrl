<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url',
        ]);

        $shortUrl = Str::random(3);
        Link::create([
            'original_url' => $request->original_url,
            'short_url' => $shortUrl,
        ]);

        return redirect()->route('create')->with('short_url', $shortUrl);
    }

    public function redirect($shortUrl)
    {
        $link = Link::where('short_url', $shortUrl)->firstOrFail();
        return redirect($link->original_url);
    }
    
}