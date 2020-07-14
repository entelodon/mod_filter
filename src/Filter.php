<?php


namespace ModFilter;


use ModFilter\Interfaces\FilterEngineInterface;

/**
 * Class Filter
 * @package ModFilter
 */
class Filter implements FilterEngineInterface
{
    /**
     * @inheritDoc
     */
    public function filterArray(array $filteredItems, array $filters): array
    {
        return array_filter($filteredItems, function ($item) use ($filters) {
            foreach ($filters as $filter) {
                if (!$filter->valid($item)) {
                    return false;
                }
            }
            return true;
        });
    }
}
