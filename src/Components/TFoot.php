<?php
namespace Persiang\Grids\Components;
use Illuminate\Foundation\Application;

/**
 * Class TFoot
 *
 * The component for rendering TFOOT html tag inside grid.
 *
 * @package Persiang\Grids\Components
 */
class TFoot extends HtmlTag
{
    const NAME = 'tfoot';

    /**
     * Returns default set of child components.
     *
     * @return \Persiang\Grids\Components\Base\ComponentInterface[]
     */
    protected function getDefaultComponents()
    {
        if (version_compare(Application::VERSION, '5', '<')) {
            $pagerClass = 'Persiang\Grids\Components\Pager';
        } else {
            $pagerClass = 'Persiang\Grids\Components\Laravel5\Pager';
        }
        return [
            (new OneCellRow)
                ->addComponent(new $pagerClass)
        ];
    }
}
