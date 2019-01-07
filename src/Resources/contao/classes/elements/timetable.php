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
     * Front end content element "ce_timetable".
     *
     * @author Leo Feyer <https://github.com/leofeyer>
     */
    class timetable extends \ContentElement
    {
        /**
         * Template
         * @var string
         */
        protected $strTemplate = 'ce_timetable';
        
        /**
         * Compile the content element
         */
        protected function compile()
        {
            
            $timetable = deserialize($this->timetable);
            $this->Template->timetable = $timetable;
            
        }
    }