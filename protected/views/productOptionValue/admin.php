<?php
$this->breadcrumbs = array(
    'Product Option Values' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List ProductOptionValue', 'url' => array('index')),
    array('label' => 'Create ProductOptionValue', 'url' => array('create')),
);
?>

<h1>Manage Product Option Values</h1>
<div>
<?php echo CHtml::link('Add Product Option Value', array('ProductOptionValue/create')); ?>
</div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'product-option-value-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'summaryText' => '',
    'pager' => array(
        'header' => '',
        'firstPageLabel' => '| <',
        'lastPageLabel' => '> |',
        'nextPageLabel' => '>',
        'prevPageLabel' => '<',
    ),
    'columns' => array(
        'product_option_value_id',
        'product_option_value_name',
        array(
            'class' => 'CButtonColumn',
            'template'=>'{update}&nbsp;&nbsp;{delete}'
        ),
    ),
));
?>
