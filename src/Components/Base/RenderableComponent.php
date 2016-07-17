<?php
namespace Persiang\Grids\Components\Base;

/**
 * Class RenderableComponent
 *
 * Base class for components that can be rendered.
 *
 * @package Persiang\Grids\Components\Base
 */
class RenderableComponent implements RenderableComponentInterface
{
    use TComponent;
    use TComponentView;
}
