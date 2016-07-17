<?php # ========== FILTERS ROW ==========
/**
 * @var persiang\Grids\Components\FiltersRow $component
 * @var persiang\Grids\FieldConfig $column
 */
?>
<?php if($grid->getFiltering()->available()): ?>
    <tr>
        <?php foreach($columns as $column): ?>
            <td
                class="column-<?= $column->getName() ?>"
                <?= $column->isHidden()?'style="display:none"':'' ?>
                >
                <?php if ($column->hasFilters()): ?>
                    <?php foreach($column->getFilters() as $filter):
                        $content_type = $filter->getContentType() ; ?>
                        <div class="input-group">
                        <input  class="top_filter_name top-input input-xs col-xs-8"   name="filter_value" id="filter_text_<?= $column->getName() ?>"
                                col_name="<?= $column->getName() ?>"  grid_name="<?= $grid->getConfig()->getName() ?>" >
                        <select class="top-input  input-xs col-xs-4"   name="filter_type"  id="filter_type_<?= $column->getName() ?>">
                            <option value="==">=</option>
                            <option value="00">?</option>
                            <option value="--9"><</option>
                        </select>
                    </div>
                    <?php endforeach ?>
                <?php endif ?>
                <?= $component->renderComponents('filters_row_column_' . $column->getName()) ?>
            </td>
        <?php endforeach ?>
        <?= $grid->getInputProcessor()->getSortingHiddenInputsHtml() ?>
    </tr>
<?php endif ?>
