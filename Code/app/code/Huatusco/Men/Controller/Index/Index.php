<?php
namespace Huatusco\Men\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultJsonFactory;
    protected $_pageFactory;
    protected $_resultPageFactory;
    public function __construct(
       \Magento\Framework\App\Action\Context $context,
       \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
       \Magento\Framework\View\Result\PageFactory $pageFactory,
       \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
       $this->resultJsonFactory = $resultJsonFactory;
       $this->_pageFactory = $pageFactory;
       $this->_resultPageFactory = $resultPageFactory;
       parent::__construct($context);
    }
    public function execute()
    {
       /*return json*/
       /*$result = $this->resultJsonFactory->create();
       $data = ['message' => 'Hello world!'];
       return $result->setData($data['message']);*/

       /*return view*/
       // return $this->_pageFactory->create();

       /**/
       $resultPage = $this->_resultPageFactory->create();
       $resultPage->getConfig()->getTitle()->prepend(__(' heading '));

       $block = $resultPage->getLayout()
                ->createBlock('Huatusco\Men\Block\Index')
                ->setTemplate('Huatusco_Men::index.phtml')
                ->toHtml();
        $this->getResponse()->setBody($block);

     }
}
// https://magento.stackexchange.com/questions/232177/magento2-how-to-call-template-from-a-controller/232182
// https://www.ostraining.com/blog/magento/blocks-widgets/
