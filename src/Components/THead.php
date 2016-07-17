<?php
namespace Persiang\Grids\Components;

/**
 * Class THead
 *
 * The component for rendering THEAD html tag inside grid.
 *
 * @package Persiang\Grids\Components
 */
class THead extends HtmlTag
{
    const NAME = 'thead';

    /**
     * Returns default set of child components.
     *
     * @return \Persiang\Grids\Components\Base\ComponentInterface[]
     */
    protected function getDefaultComponents()
    {
        return [

            new FiltersRow
        ,new ColumnHeadersRow
        ];
    }
}
