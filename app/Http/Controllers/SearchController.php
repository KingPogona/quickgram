<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function show($searchTerm)
    {
        $profiles = Profile::where('title', 'like', "%{$searchTerm}%")->get();

        foreach ($profiles as $profile) {
            $searchResult[] = (object) array(
                'followers' => $profile->followers->count(),
                'posts' => $profile->user->posts->count(),
                'title' => $profile->title,
                'image' => $profile->profileImage(),
                'id' => $profile->id
            );
        };

        return $searchResult;
    }
}
