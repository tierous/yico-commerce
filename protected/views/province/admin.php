<?php

$this->breadcrumbs=array(
	'Provinces'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Province', 'url'=>array('index')),
	array('label'=>'Create Province', 'url'=>array('create')),
);

?>

<h1>Manage Provinces</h1>
<div>
    <?php echo CHtml::link('Add Product', array('product/create'));?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'province-grid',
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
		'province_id',
		'province_name',
		array(
			'class'=>'CButtonColumn',
			'template' => '{update}&nbsp;&nbsp;{delete}'
		),
	),
)); ?>
