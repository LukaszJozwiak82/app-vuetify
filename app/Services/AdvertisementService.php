<?php

namespace App\Services;

use App\Repositories\AdvertisementRepository;

class AdvertisementService
{
    protected $advertisementRepository;

    public function __construct(AdvertisementRepository $advertisementRepository)
    {
        $this->advertisementRepository = $advertisementRepository;
    }

    public function show($id)
    {
        return $this->advertisementRepository->find($id);
    }
}
