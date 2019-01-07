<?php
    /**
     * Contao Open Source CMS
     *
     * Copyright (c) 2005-2015 Leo Feyer
     *
     * @license LGPL-3.0+
     */
    
    namespace Reluem;
    
    /**
     * Front end content element "ce_prices".
     *
     * @author Leo Feyer <https://github.com/leofeyer>
     */
    class prices extends \ContentElement
    {
        /**
         * Template
         * @var string
         */
        protected $strTemplate = 'ce_prices';
        
        /**
         * Compile the content element
         */
        protected function compile()
        {
            
            $prices = deserialize($this->prices);
            $this->Template->prices = $prices;
            
        }
    }