<?php

namespace Edbizarro\BiExtract\Interfaces;

interface ExtractInterface
{
    /**
     * @return \Generator
     */
    public function extract(): \Generator;
}
