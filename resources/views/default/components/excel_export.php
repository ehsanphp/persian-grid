<?php
/**
 * @author: Vitaliy Ofat <i@vitaliy-ofat.com>
 *
 * @var $grid persiang\Grids\Grid
 */
use persiang\Grids\Components\ExcelExport;
?>
<span>
    <a
        href="<?= $grid
            ->getInputProcessor()
            ->getUrl([ExcelExport::INPUT_PARAM => 1])
        ?>"
        class="btn btn-sm btn-default"
        >
        <span class="glyphicon glyphicon-export"></span>
        Excel Export
    </a>
</span>
