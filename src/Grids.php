<?php
namespace persian\Grids;

use persian\Builder\Env;
use persian\Grids\Build\Setup;

/**
 * Class Grids
 *
 * Facade for constructing grids using configurations.
 *
 * @package persian\Grids
 */
class Grids {

    protected static $builder;

    /**
     * Returns builder instance.
     *
     * @return \persian\Builder\Builder
     */
    protected static function getBuilder()
    {
        if (self::$builder === null) {
            $setup = new Setup();
            self::$builder = $setup->run();
        }
        return self::$builder;
    }

    /**
     * Creates grid using configuration.
     *
     * @param array $config
     * @return Grid
     */
    public static function make(array $config)
    {
        $builder = self::getBuilder();
        $configObject = $builder->build($config);
        $grid = new Grid($configObject);
        return $grid;
    }

    /**
     * Returns collection containing
     * blueprints required to construct grids from configuration.
     *
     * @return \persian\Builder\BlueprintsCollection
     */
    public static function blueprints()
    {
        self::getBuilder();
        return Env::instance()->blueprints();
    }
}
