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
        $validPackages = collect($packages)->filter();

        if ($validPackages->isEmpty()) {
            abort(404);
        }

        return view('page.tour-filter', ['packages' => $validPackages]);

    }
    public function destinationPackageFilter($dest, $pack, PackageRepository $repo)
    {
        $package = $repo->findPackage($dest, $pack);
        abort_if(!$dest || !$pack || !$package, 404);

        $relatedPackages = $repo->findRelatedPackages($pack, 6);
        // return $relatedPackages;

        return view('page.tour-detail', [
            'dest' => $dest,
            'package' => $package,
            'relatedPackages' => $relatedPackages,
        ]);

    }




}
