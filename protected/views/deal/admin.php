<?php
$this->breadcrumbs = array(
    'Deals' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Deal', 'url' => array('index')),
    array('label' => 'Create Deal', 'url' => array('create')),
);
?>

<h1>Manage Deals</h1>
<div>
    <?php echo CHtml::link('Add Deal', array('deal/create')); ?>
</div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'deal-grid',
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
        'deal_id',
        array('name' => 'product_id',
            'type' => 'html',
            'value' => '$data->product->product_name', 'sortable' => TRUE,
            'filter' => CHtml::listData(Category::model()->findAll(), 'category_id', 'category_name'),
        ),
        'deal_price',
        'date_added',
        'date_expire',
        array(
            'name' => 'status',
            'type' => 'raw',
            'header' => 'Status',
            'value' => 'CHtml::encode($data->formatStatus())',
            'htmlOptions' => array('width' => '20'),
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}&nbsp;&nbsp;{delete}'
        ),
    ),
));
?>
