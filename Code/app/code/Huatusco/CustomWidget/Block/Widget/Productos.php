<?php 
namespace Huatusco\CustomWidget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface; 
 
class Productos extends Template implements BlockInterface {
	protected $_template = "widget/productos.phtml";
	public function getproducts(){
		$listproductos = array();
		for ($i = 0; $i < 10; $i++){
			$listproductos[$i]["nombre"] = "Producto";
			$listproductos[$i]["precio"] = 50;
		}
		return $listproductos;
	}
}