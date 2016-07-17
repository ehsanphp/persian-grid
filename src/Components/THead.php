<?php
namespace persian\Grids\Components;

/**
 * Class THead
 *
 * The component for rendering THEAD html tag inside grid.
 *
 * @package persian\Grids\Components
 */
class THead extends HtmlTag
{
    const NAME = 'thead';

    /**
     * Returns default set of child components.
     *
     * @return \persian\Grids\Components\Base\ComponentInterface[]
     */
    protected function getDefaultComponents()
    {
        return [

            new FiltersRow
        ,new ColumnHeadersRow
        ];
    }
}
