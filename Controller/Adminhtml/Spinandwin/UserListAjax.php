<?php

namespace Knowband\Spinandwin\Controller\Adminhtml\Spinandwin;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\LayoutFactory;

class UserListAjax extends \Magento\Framework\App\Action\Action
{
    protected $sp_resultRawFactory;
    protected $sp_request;
    protected $sp_helper;
    protected $sp_scopeConfig;
    protected $inlineTranslation;
    protected $sp_transportBuilder;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\App\Request\Http $request,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Knowband\Spinandwin\Helper\Data $helper,
        \Magento\Framework\View\Result\PageFactory $resultRawFactory,
        \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation,
        \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder,
        \Magento\Framework\View\Asset\Repository $assetRepo,
        LayoutFactory $viewLayoutFactory
    ) {
        parent::__construct($context);
        $this->sp_request = $request;
        $this->sp_scopeConfig = $scopeConfig;
        $this->sp_helper = $helper;
        $this->sp_resultRawFactory = $resultRawFactory;
        $this->inlineTranslation = $inlineTranslation;
        $this->sp_transportBuilder = $transportBuilder;
        $this->assetRepo = $assetRepo;
        $this->_viewLayoutFactory = $viewLayoutFactory;
    }

    public function execute() {
        //Grid Class: Knowband\Rma\Adminhtml\Tab\ArchivedRequests
        $block = $this->_viewLayoutFactory->create()->createBlock('Knowband\Spinandwin\Block\Adminhtml\Tab\UserList');
        $this->getResponse()->appendBody($block->toHtml());
    }
    
//    public function execute() {
//        $response_array = array();
//        if ($this->getRequest()->isPost()) {
//            $post_data = $this->getRequest()->getPost();
//            $response_array = $this->sp_helper->getLineChartFilteredData($post_data['start_date'], $post_data['end_date']);
//        }
//        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);
//        $resultJson->setData($response_array);
//        return $resultJson;
//    }
}
