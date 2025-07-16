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
        return $this->findByDestination($destinationSlug);

    }
}
