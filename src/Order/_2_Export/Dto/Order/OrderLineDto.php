<?php

declare(strict_types=1);

namespace App\Order\_2_Export\Dto\Order;

use OpenApi\Attributes as OA;
use Symfony\Component\Validator\Constraints as Assert;

class OrderLineDto
{
    public readonly ?int $id;

    #[Assert\NotNull(groups: ['create'])]
    public readonly int $quantity;

    #[Assert\NotNull(groups: ['create'])]
    #[OA\Property(description: 'pallet length in [cm]')]
    public readonly int $length;

    #[Assert\NotNull(groups: ['create'])]
    #[OA\Property(description: 'pallet width in [cm]')]
    public readonly int $width;

    #[Assert\NotNull(groups: ['create'])]
    #[OA\Property(description: 'pallet height in [cm]')]
    public readonly int $height;

    #[Assert\NotNull(groups: ['create'])]
    #[OA\Property(description: 'pallet weight in [kg]')]
    public readonly float $weightOnePallet;

    #[OA\Property(description: 'total weight of all pallets of order line, in [kg]')]
    public readonly ?float $weightTotal;

    #[Assert\Length(min: 1, max: 250, groups: ['create'])]
    #[OA\Property(example: 'computers')]
    public readonly string $goodsDescription;

    public function __construct(
        ?int $id,
        int $quantity,
        int $length,
        int $width,
        int $height,
        float $weightOnePallet,
        ?float $weightTotal,
        string $goodsDescription
    ) {
        $this->id = $id;
        $this->quantity = $quantity;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->weightOnePallet = $weightOnePallet;
        $this->weightTotal = $weightTotal;
        $this->goodsDescription = $goodsDescription;
    }
}
