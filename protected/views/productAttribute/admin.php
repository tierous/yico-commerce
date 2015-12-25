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
        array(  'name'=>'product_id', 
                        'type'=>'html', 
            'value'=>'$data->product->product_name','sortable'=>TRUE,
            'filter' => CHtml::listData(Product::model()->findAll(),'product_id','product_name'),
                ),        
        array(  'name'=>'product_option_id', 
                        'type'=>'html', 
            'value'=>'$data->productOption->product_option_name','sortable'=>TRUE,
            'filter' => CHtml::listData(ProductOption::model()->findAll(),'product_option_id','product_option_name'),
                ),        
        array(  'name'=>'option_value_id', 
                        'type'=>'html', 
            'value'=>'$data->productOptionValue->product_option_value_name','sortable'=>TRUE,
            'filter' => CHtml::listData(ProductOptionValue::model()->findAll(),'product_option_value_id','product_option_value_name'),
                ),
        'option_value_price',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}&nbsp;&nbsp;{delete}'
        ),
    ),
));
?>
