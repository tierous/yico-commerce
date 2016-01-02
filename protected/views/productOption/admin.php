<?php
$this->breadcrumbs = array(
    'Product Options' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List ProductOption', 'url' => array('index')),
    array('label' => 'Create ProductOption', 'url' => array('create')),
);
?>

<h1>Manage Product Options</h1>
<div>
<?php echo CHtml::link('Add Product Option', array('ProductOption/create')); ?>
</div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'product-option-grid',
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
        'product_option_id',
        'product_option_name',
        array(
            'class' => 'CButtonColumn',
            'template'=>'{update}&nbsp;&nbsp;{delete}'
        ),
    ),
));
?>
