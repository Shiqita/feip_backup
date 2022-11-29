<?php

namespace App\Http\Controllers;

use App\Models\InfoPage;
use Illuminate\Http\Request;

class InfoPageController extends Controller
{
    public function show(string $slug)
    {
        $page = InfoPage::query()
            ->where('slug', $slug)->first();

        if ($page === null) {
            abort(404);
        }

        return view('infopage', ['page' => $page]);
    }
}
