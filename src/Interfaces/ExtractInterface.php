<?php

namespace Edbizarro\BiExtract\Interfaces;

use Tightenco\Collect\Support\Collection;

interface ExtractInterface
{
    /**
     * @return Collection
     */
    public function extract(): Collection;
}
