<?php

namespace persian\Grids\Build\Instructions;

use LogicException;
use persian\Builder\Instructions\Base\Instruction;
use persian\Builder\Scaffold;

/**
 * Class BuildDataProvider
 *
 * This class is a build instruction for persian/build package
 * that defines how to setup grids data provider
 *
 * @internal
 * @package persian\Grids\Build\Instructions
 */
class BuildDataProvider extends Instruction
{
    protected $phase = self::PHASE_PRE_INST;

    /**
     * @param Scaffold $scaffold
     * @throws LogicException
     */
    public function apply(Scaffold $scaffold)
    {
        $src = $scaffold->getInput('src');
        $scaffold->excludeInput('src');
        $class = null;
        $arg = null;

        if (is_object($src)) {
            if (is_a($src, '\Illuminate\Database\Eloquent\Builder')) {
                $class = '\persian\Grids\EloquentDataProvider';
                $arg = $src;
            } elseif (is_a($src, '\Doctrine\DBAL\Query\QueryBuilder')) {
                $class = '\persian\Grids\DbalDataProvider';
                $arg = $src;
            }

        } elseif (is_string($src)) {
            // model name
            if (
                class_exists($src, true) &&
                is_subclass_of($src, '\Illuminate\Database\Eloquent\Model')
            ) {
                $class = '\persian\Grids\EloquentDataProvider';
                $model = new $src;
                $arg = $model->newQuery();
            }
        }
        if ($class !== null && $arg !== null) {
            $provider = new $class($arg);
            $scaffold->input['data_provider'] = $provider;
        } else {
            throw new LogicException('Invalid Data Provider Configuration');
        }
    }
}

