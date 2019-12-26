<?php 
class ProductModel extends Models 
{
	public $tableName = 'product';
	public $columns = [
		['field' => 'create_date','type' => 'string'],
		['field' => 'update_create','type' => 'string'],
		['field' => 'product_sku','type' => 'string'],
		['field' => 'product_name','type' => 'string'],
		['field' => 'image','type' => 'string'],
		['field' => 'retail_price','type' => 'string'],
		['field' => 'brand','type' => 'int'],
		['field' => 'uom_id','type' => 'int'],
		['field' => 'on_hand','type' => 'int'],
		['field' => 'description','type' => 'string']
	];
	public $primaryKey = 'id'; 
} 