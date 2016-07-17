<?php
namespace persiang\Grids\Components\Base;

/**
 * Interface RenderableComponentInterface
 *
 * Interface for grid components that can be rendered.
 *
 * @package persiang\Grids\Components\Base
 */
interface RenderableComponentInterface extends
    RenderableInterface,
    ComponentInterface
{
    /**
     * Returns section (named placeholder in parent object markup)
     * where component must be rendered.
     *
     * @return string|null
     */
    public function getRenderSection();

    /**
     * Sets section (named placeholder in parent object markup)
     * where component must be rendered.
     *
     * @param string|null $sectionName
     * @return $this
     */
    public function setRenderSection($sectionName);
}
