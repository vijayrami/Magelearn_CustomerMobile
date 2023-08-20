<?php

namespace Magelearn\CustomerMobile\Block\Adminhtml\Customer\Edit\Tab\View;

use Magento\Customer\Api\AccountManagementInterface;
use Magento\Customer\Model\Address\Mapper;
use Magento\Backend\Block\Template\Context;
use Magento\Customer\Api\GroupRepositoryInterface;
use Magento\Customer\Api\Data\CustomerInterfaceFactory;
use Magento\Customer\Helper\Address;
use Magento\Framework\Stdlib\DateTime;
use Magento\Framework\Registry;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Customer\Model\Logger;

class PersonalInfo extends \Magento\Customer\Block\Adminhtml\Edit\Tab\View\PersonalInfo
{
    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param AccountManagementInterface $accountManagement
     * @param \Magento\Customer\Api\GroupRepositoryInterface $groupRepository
     * @param \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerDataFactory
     * @param \Magento\Customer\Helper\Address $addressHelper
     * @param \Magento\Framework\Stdlib\DateTime $dateTime
     * @param \Magento\Framework\Registry $registry
     * @param Mapper $addressMapper
     * @param \Magento\Framework\Api\DataObjectHelper $dataObjectHelper
     * @param \Magento\Customer\Model\Logger $customerLogger
     * @param array $data
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        Context $context,
        AccountManagementInterface $accountManagement,
        GroupRepositoryInterface $groupRepository,
        CustomerInterfaceFactory $customerDataFactory,
        Address $addressHelper,
        DateTime $dateTime,
        Registry $registry,
        Mapper $addressMapper,
        DataObjectHelper $dataObjectHelper,
        Logger $customerLogger,
        array $data = []
    ) {
        parent::__construct(
            $context,
            $accountManagement,
            $groupRepository,
            $customerDataFactory,
            $addressHelper,
            $dateTime,
            $registry,
            $addressMapper,
            $dataObjectHelper,
            $customerLogger,
            $data
        );
    }

    public function getCustomerObject()
    {
        return $this->getCustomer();
    }
}
