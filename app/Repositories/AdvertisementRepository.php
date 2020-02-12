<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Advertisement;

class AdvertisementRepository
{
    protected $advertisement;

    public function __construct(Advertisement $advertisement)
    {
        $this->advertisement = $advertisement;
    }

    public function find($id)
    {
        return $this->advertisement->with('post_images')->find($id);
    }
}
