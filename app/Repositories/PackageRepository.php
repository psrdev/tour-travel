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

    public function findRelatedPackages(string $destinationSlug, string $packageSlug, int $limit = 6): \Illuminate\Support\Collection
    {
        $match = $this->destinations->first(function ($item) use ($destinationSlug) {
            return $item['destination']['slug'] === $destinationSlug;
        });

        if (!$match || empty($match['packages'])) {
            return collect(); // return empty collection
        }

        return collect($match['packages'])
            ->filter(function ($package) use ($packageSlug) {
                return $package['slug'] !== $packageSlug; // exclude current package
            })
            ->take($limit);
    }
}
