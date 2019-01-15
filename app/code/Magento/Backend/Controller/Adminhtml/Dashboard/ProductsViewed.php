<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Backend\Controller\Adminhtml\Dashboard;

class ProductsViewed extends AjaxBlock
{
    /**
     * Gets most viewed products list
     *
     * @return \Magento\Framework\Controller\Result\Raw
     */
    public function execute()
    {
        $output = $this->layoutFactory->create()
            ->createBlock(\Magento\Backend\Block\Dashboard\Tab\Products\Viewed::class)
            ->toHtml();
        $resultRaw = $this->resultRawFactory->create();
        return $resultRaw->setContents($output);
    }
}
