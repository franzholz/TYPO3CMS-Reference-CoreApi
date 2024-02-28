<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use TYPO3\CMS\Core\Context\Context;

final class MyController
{
    /**
     * @var Context
     */
    protected Context $context;

    public function __construct(
        private readonly Context $context
    )
    {
        $this->context = $context;
    }
}
