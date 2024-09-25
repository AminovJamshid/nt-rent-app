<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function toggleBookmark($id)
    {
        $user = auth()->user();

        // agar userni bookmarkedAds relationshipida ad_id $idga teng bo'lgan record bo'rmi?
        if ($user->bookmarkedAds()->where('ad_id', $id)->exists()) {
            $user->bookmarkedAds()->detach($id);
            return back()->with('message', "E'lon o'chirildi");
        } else {
            $user->bookmarkedAds()->attach($id);
            return back()->with('message', "E'lon qo'shildi");
        }
    }
}
