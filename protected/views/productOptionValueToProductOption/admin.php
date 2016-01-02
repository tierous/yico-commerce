<?php
$this->breadcrumbs = array(
    'Product Option Value To Product Options' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List ProductOptionValueToProductOption', 'url' => array('index')),
    array('label' => 'Create ProductOptionValueToProductOption', 'url' => array('create')),
);
?>

<h1>Manage Product Option Value To Product Options</h1>
<div>
<?php echo CHtml::link('Add Product Option Value To Product Options', array('productOptionValueToProductOption/create')); ?>
</div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'product-option-value-to-product-option-grid',
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
        'product_option_value_to_product_option_id',
        array(  'name'=>'product_option_id', 
                        'type'=>'html', 
            'value'=>'$data->productOption->product_option_name','sortable'=>TRUE,
            'filter' => CHtml::listData(ProductOption::model()->findAll(),'product_option_id','product_option_name'),
                ),           
        array(  'name'=>'product_option_value_id', 
                        'type'=>'html', 
            'value'=>'$data->productOptionValue->product_option_value_name','sortable'=>TRUE,
            'filter' => CHtml::listData(ProductOptionValue::model()->findAll(),'product_option_value_id','product_option_value_name'),
                ),        
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}&nbsp;&nbsp;{delete}'
        ),
    ),
));
?>
