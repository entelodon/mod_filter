<?php


namespace ModFilter\Interfaces;

/**
 * Interface FilterEngineInterface
 * @package ModFilter\Interfaces
 */
interface FilterEngineInterface
{
    /**
     * @param FilteredItemInterface[] $filteredItems
     * @param FilterInterface[] $filters
     * @return FilteredItemInterface[]
     */
    public function filterArray(array $filteredItems, array $filters): array;
}
