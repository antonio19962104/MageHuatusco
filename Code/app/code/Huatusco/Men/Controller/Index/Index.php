<?php
namespace Huatusco\Men\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultJsonFactory;
    protected $_pageFactory;
    public function __construct(
       \Magento\Framework\App\Action\Context $context,
       \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
       \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
       $this->resultJsonFactory = $resultJsonFactory;
       $this->_pageFactory = $pageFactory;
       parent::__construct($context);
    }
    public function execute()
    {
       /*
       return json
       $result = $this->resultJsonFactory->create();
       $data = ['message' => 'Hello world!'];
       return $result->setData($data['message']);*/

       /*return view*/
       return $this->_pageFactory->create();

     }
}
