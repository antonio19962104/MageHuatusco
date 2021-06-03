<?php
/*namespace Huatusco\Productos\Controller\Adminhtml\Create;
class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;      
    public function __construct(
            \Magento\Backend\App\Action\Context $context,
            \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    } 
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Huatusco_Productos::menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Demo Menu'));
        return $resultPage;
    }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Huatusco_Productos::menu');
    }
}*/
namespace Testing\Basic\Controller\Adminhtml\Webpage;

use Magento\Framework\App\Action\HttpGetActionInterface as HttpGetActionInterface;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;
class Index extends Action implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Huatusco_Productos::menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Demo Menu'));
        return $resultPage;
    }
}