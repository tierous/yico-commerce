<?php

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
);

?>

<h1>Manage Products</h1>
<div>
    <?php echo CHtml::link('Add Product', array('product/create'));?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'summaryText' => '',
        'pager' => array(
        'header' => '',
        'firstPageLabel' => '| <',
        'lastPageLabel' => '> |',
        'nextPageLabel' => '>',
        'prevPageLabel' => '<',
    ),
    'columns'=>array(
		'product_id',
		array(  'name'=>'category_id', 
                        'type'=>'html', 
			'value'=>'$data->category->category_name','sortable'=>TRUE,
			'filter' => CHtml::listData(Category::model()->findAll(),'category_id','category_name'),
                ),
		array(  'name'=>'manufacturer_id', 
                        'type'=>'html', 
			'value'=>'$data->manufacturer->manufacturer_name','sortable'=>TRUE,
			'filter' => CHtml::listData(Manufacturer::model()->findAll(),'manufacturer_id','manufacturer_name'),
                ),
		'product_name',
		'product_model',
		'product_price',
		/*
		'product_description',
		'product_image',
		'date_added',
		'date_modified',
		*/
		array(
			'class'=>'CButtonColumn',
                        'template' => '{update}&nbsp;&nbsp;{delete}'
        ),
	),
)); ?>
