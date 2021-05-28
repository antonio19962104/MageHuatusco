<?php 
namespace Huatusco\CustomWidget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface; 
 
class Productos extends Template implements BlockInterface {
	protected $_template = "widget/productos.phtml";
	public function getproducts(){
		$listproductos = [];
		array_push($listproductos, "producto 1");
		array_push($listproductos, "producto 2");
		return $listproductos;
	}
}