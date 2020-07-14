<?php

namespace ModFilter\Interfaces;

/**
 * Interface FilterInterface
 * @package ModFilter\Interfaces
 */
interface FilterInterface
{
    /**
     * @param FilteredItemInterface $filteredItem
     * @return bool
     */
    public function valid(FilteredItemInterface $filteredItem): bool;
}
