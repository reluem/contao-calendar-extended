<?php

namespace reluem\calendarExtended\classes\modules;


class navbarSignup extends \Module
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_navbarSignup';
    
    /**
     * Compile the current element
     */
    protected function compile()
    {
        
        $date = strtotime(date("Y-m-d H:i:s"));
        $pageId = $GLOBALS['objPage']->id;
        $objEvent = \Database::getInstance()->prepare("SELECT pid, title, id, signupUrl, signupLabel, signupStart, signupEnd from tl_calendar_events where pid = (select id FROM tl_calendar WHERE jumpto = (Select pid from tl_page where id = ?)) ORDER BY id DESC")
            ->limit(1)
            ->execute($pageId);
        
        
        if (($date >= $objEvent->signupStart) && ($date <= $objEvent->signupEnd)) {
            $this->Template->navbarSignup = $objEvent->fetchAllAssoc();
        }
    }
    
}

