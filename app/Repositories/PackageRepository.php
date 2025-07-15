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
    public function findByDestination(string $destinationSlug): Collection
    {
        return $this->destinations
            ->firstWhere('slug', $destinationSlug)['packages']
            ?? collect();
    }


    public function findPackage(string $destinationSlug, string $packageSlug): ?array
    {
        return $this->findByDestination($destinationSlug)
            ->firstWhere('slug', $packageSlug);
    }
}
