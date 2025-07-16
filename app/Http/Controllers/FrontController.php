<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PackageRepository;
use Storage;

class FrontController extends Controller
{
    public function home(PackageRepository $repo)
    {
        $packages = $repo->all();
        // return $packages;
        return view('page.home', compact('packages'));
    }
    public function about()
    {

        return view('page.about');

    }
    public function destination(PackageRepository $repo)
    {
        $packages = $repo->all();
        return view('page.destination', compact('packages'));
    }
    public function contact(PackageRepository $repo)
    {

        return view('page.contact');
    }
    public function privacyPolicy(PackageRepository $repo)
    {

        return view('page.privacy');
    }
    public function destinationFilter($dest, PackageRepository $repo)
    {
        // return $repo->all();
        $packages = $repo->findByDestinationSlug($dest);
        // return $packages;

        return view('page.tour-filter', compact('packages'));

    }

}
