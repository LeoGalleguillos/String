<?php
namespace LeoGalleguillos\String\View\Helper;

use LeoGalleguillos\String\Model\Service as StringService;
use Zend\View\Helper\AbstractHelper;

class UrlFriendly extends AbstractHelper
{
    public function __construct(
        StringService\UrlFriendly $urlFriendlyService
    ) {
        $this->urlFriendlyService = $urlFriendlyService;
    }

    public function __invoke(string $string): string
    {
        return $this->urlFriendlyService->getUrlFriendly($string);
    }
}
