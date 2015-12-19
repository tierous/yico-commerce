<?php

$this->breadcrumbs=array(
	'Manufacturers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Manufacturer', 'url'=>array('index')),
	array('label'=>'Create Manufacturer', 'url'=>array('create')),
);

?>

<h1>Manage Manufacturers</h1>

<div>
    <?php echo CHtml::link('Add Manufacturer', array('manufacturer/create'));?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'manufacturer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'summaryText'=>'',
        'pager'=>array(
        'header'=> '',
        'firstPageLabel'=>'| <',
        'lastPageLabel'=>'> |',
        'nextPageLabel'=>'>',
        'prevPageLabel'=>'<',
        ),
	'columns'=>array(
		'manufacturer_id',
		'manufacturer_name',
		'date_added',
		'date_modified',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update}&nbsp;&nbsp;{delete}'
		),
	),
)); ?>
