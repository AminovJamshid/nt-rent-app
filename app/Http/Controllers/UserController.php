<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function toggleBookmark($id)
    {
        $user = auth()->user();

        if ($user->bookmarkedAds()->where('ad_id', $id)->exists()) {
            $user->bookmarkedAds()->detach($id);
            return back()->with('message', "E'lon o'chirildi");
        } else {
            $user->bookmarkedAds()->attach($id);
            return back()->with('message', "E'lon qo'shildi");
        }
    }
}
