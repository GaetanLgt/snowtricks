<?php

namespace App\Components;

use App\Repository\FigureRepository;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;

#[AsLiveComponent]
class FigureSearch
{

    use DefaultActionTrait;

    #[LiveProp]
    public ?string $query = null;

    public function __construct(private FigureRepository $figureRepository)
    {
    }

    public function getPackages(): array
    {
        return $this->figureRepository->findAll($this->query);
    }
}