<?php
    /**
     * Contao Open Source CMS
     *
     * Copyright (c) 2005-2015 Leo Feyer
     *
     * @license LGPL-3.0+
     */
    
    
    namespace reluem\Controller\ContentElement;
    
    use Contao\ContentModel;
    use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
    use Contao\CoreBundle\ServiceAnnotation\ContentElement;
    use Contao\Template;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    
    /**
     * @ContentElement(category="texts")
     */
    class PricesController extends AbstractContentElementController
    {
        protected function getResponse(Template $template, ContentModel $model, Request $request): ?Response
        {
            $prices = deserialize($this->prices);
            $template->prices = $prices;
            
            return $template->getResponse();
        }
    }