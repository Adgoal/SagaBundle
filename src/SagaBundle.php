<?php

declare(strict_types=1);

namespace AdgoalCommon\SagaBundle;

use AdgoalCommon\SagaBundle\DependencyInjection\SagaBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class SagaBundle.
 *
 * @category AdgoalCommon\SagaBundle
 */
class SagaBundle extends Bundle
{
    /**
     * @return SagaBundleExtension
     */
    public function getContainerExtension(): SagaBundleExtension
    {
        return new SagaBundleExtension();
    }
}
