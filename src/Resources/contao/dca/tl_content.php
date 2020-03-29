<?php
    /**
     *
     *  Extended DCA Integration
     *
     **/
    
    $GLOBALS['TL_DCA']['tl_content']['palettes']['timetable'] = 'name,type,headline;{timetable_legend},timetable;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
    
    $GLOBALS['TL_DCA']['tl_content']['palettes']['prices'] = 'name,type;{prices_legend},prices;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
    
    
    /**
     * Fields
     */
    
    $GLOBALS['TL_DCA']['tl_content']['fields']['timetable'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable'],
        'exclude' => true,
        'inputType' => 'multiColumnEditor',
        'eval' => [
            
            'multiColumnEditor' =>
                [
                    'palettes' => [
                        'default' => 'timetable_date, timetable_start, timetable_end, timetable_desc, timetable_loc',
                    ],
                    'sortable' => true,
                    'fields' => [
                        'timetable_date' =>
                            [
                                'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_date'],
                                'exclude' => true,
                                'inputType' => 'text',
                                'eval' => [
                                    'rgxp' => 'date',
                                    'datepicker' => true,
                                    'tl_class' => 'w50 wizard',
                                
                                ],
                            ],
                        
                        'timetable_start' =>
                            [
                                'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_start'],
                                'required' => true,
                                'exclude' => true,
                                'inputType' => 'text',
                                'eval' => [
                                    'rgxp' => 'time',
                                    'datepicker' => true,
                                    'tl_class' => 'w50 wizard',
                                
                                ],
                            
                            ],
                        'timetable_end' =>
                            [
                                'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_end'],
                                'exclude' => true,
                                'inputType' => 'text',
                                'eval' => [
                                    'rgxp' => 'time',
                                    'datepicker' => true,
                                    'tl_class' => 'wizard w50 ',
                                
                                ],
                            
                            ],
                        'timetable_desc' =>
                            [
                                'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_desc'],
                                'exclude' => true,
                                'inputType' => 'textarea',
                                'eval' => [
                                    'preserveTags' => true,
                                    'groupStyle' => 'width:300px',
                                
                                ],
                            
                            ],
                        'timetable_loc' =>
                            [
                                'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_loc'],
                                'exclude' => true,
                                'inputType' => 'text',
                                'eval' => [
                                    'tl_class' => 'w50 ',
                                ],
                            ],
                    
                    ],
                ],
        ],
        
        'sql' => 'blob NULL',
    ];
    
    
    $GLOBALS['TL_DCA']['tl_content']['fields']['prices'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_content']['prices'],
        'exclude' => true,
        'inputType' => 'multiColumnEditor',
        'eval' => [
            
            'multiColumnEditor' =>
                [
                    'palettes' => [
                        'default' => 'price_type, price, price_desc, price_valid_until',
                    ],
                    'sortable' => true,
                    'fields' =>
                        [
                            'price_type' =>
                                [
                                    'label' => &$GLOBALS['TL_LANG']['tl_content']['price_type'],
                                    'exclude' => true,
                                    'inputType' => 'text',
                                    'eval' => [
                                        'tl_class' => 'w50',
                                    
                                    ],
                                ],
                            
                            'price' =>
                                [
                                    'label' => &$GLOBALS['TL_LANG']['tl_content']['price'],
                                    'exclude' => true,
                                    'inputType' => 'text',
                                    'eval' => ['maxlength' => 10, 'rgxp' => 'digit'],
                                    'sql' => "int(10) unsigned NOT NULL default '0'",
                                ],
                            'price_desc' =>
                                [
                                    'label' => &$GLOBALS['TL_LANG']['tl_content']['price_desc'],
                                    'exclude' => true,
                                    'inputType' => 'text',
                                    'eval' => [
                                        'tl_class' => 'w50',
                                    ],
                                ],
                            
                            'price_valid_until' =>
                                [
                                    'label' => &$GLOBALS['TL_LANG']['tl_content']['price_valid_until'],
                                    'exclude' => true,
                                    'inputType' => 'text',
                                    'eval' => [
                                        'rgxp' => 'datim',
                                        'datepicker' => true,
                                        'tl_class' => 'w50 wizard',
                                    
                                    ],
                                
                                ],
                        
                        ],
                ],
        ],
        'sql' => 'blob NULL',
    ];