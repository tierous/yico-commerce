<?php
$this->breadcrumbs = array(
    'Product Attributes' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List ProductAttribute', 'url' => array('index')),
    array('label' => 'Create ProductAttribute', 'url' => array('create')),
);
?>

<h1>Manage Product Attributes</h1>
<div>
<?php echo CHtml::link('Add Product Attribute', array('ProductAttribute/create')); ?>
</div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'product-attribute-grid',
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
        'product_attribute_id',
        'product_id',
        'product_option_id',
        'option_value_id',
        'option_value_price',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}&nbsp;&nbsp;{delete}'
        ),
    ),
));
?>
