<?php
use Persiang\Grids\Components\TotalsRow;
/** @var TotalsRow $component */
?>
<tr>
    <?php foreach($columns as $column): ?>
        <td
            class="column-<?= $column->getName() ?>"
            <?= $column->isHidden()?'style="display:none"':'' ?>
            >
            <?php
            if ($component->uses($column)):
                $label = '';
                switch($component->getFieldOperation($column->getName())) {
                    case \Persiang\Grids\Components\TotalsRow::OPERATION_SUM:
                        $label = '∑';
                        break;
                    case \Persiang\Grids\Components\TotalsRow::OPERATION_COUNT:
                        $label = 'Count';
                        break;
                    case \Persiang\Grids\Components\TotalsRow::OPERATION_AVG:
                        $label = 'Avg.';
                        break;
                }
                echo $label, '&nbsp;', $column->getValue($component);
            endif;
            ?>
        </td>
    <?php endforeach ?>
</tr>
