<?php
namespace App\Repositories;
use App\Services\JsonDataService;
use Illuminate\Support\Collection;

class PackageRepository
{
    protected Collection $destinations;

    public function __construct()
    {
        $data = JsonDataService::get('packages')->get('packages', []);
        $this->destinations = collect($data);
    }

    /** @return Collection of all destinations */
    public function all(): Collection
    {
        return $this->destinations;
    }

    /** @return Collection of packages for one destination */
    public function findByDestinationSlug(string $destinationSlug): ?array
    {
        $match = $this->destinations->first(function ($item) use ($destinationSlug) {
            return $item['destination']['slug'] === $destinationSlug;
        });

        return [$match] ?? [];
    }


    public function findPackage(string $destinationSlug, string $packageSlug): ?array
    {
        $match = $this->destinations->first(function ($item) use ($destinationSlug) {
            return $item['destination']['slug'] === $destinationSlug;
        });

        if (!$match || empty($match['packages'])) {
            return null;
        }

        // Now search inside the packages array
        $package = collect($match['packages'])->first(function ($package) use ($packageSlug) {
            return $package['slug'] === $packageSlug;
        });

        return $package ?: null;

    }

    public function findRelatedPackages(string $packageSlug, int $limit = 6)
    {
        // Flatten all packages and attach destination info
        $allPackages = collect($this->destinations)
            ->flatMap(function ($destinationItem) {
                return collect($destinationItem['packages'])->map(function ($pkg) use ($destinationItem) {
                    $pkg['destination_name'] = $destinationItem['destination']['name'];
                    $pkg['destination_slug'] = $destinationItem['destination']['slug'];
                    return $pkg;
                });
            });

        // Exclude the current package and return limited related packages
        return $allPackages
            ->filter(fn($pkg) => $pkg['slug'] !== $packageSlug)
            ->take($limit);
    }
}
