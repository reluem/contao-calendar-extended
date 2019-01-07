<?php
    /**
     *
     *  Extended DCA Integration
     *
     **/
    
    $GLOBALS['TL_DCA']['tl_content']['palettes']['timetable'] = 'name,type,headline;{timetable_legend},timetable;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
    
    $GLOBALS['TL_DCA']['tl_content']['palettes']['prices'] = 'name,type,headline;{prices_legend},prices;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
    
    
    /**
     * Fields
     */
    
    $GLOBALS['TL_DCA']['tl_content']['fields']['timetable'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable'],
        'exclude' => true,
        'inputType' => 'multiColumnWizard',
        'eval' => [
            'columnFields' =>
                [
                    'timetable_date' =>
                        [
                            'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_date'],
                            'exclude' => true,
                            'inputType' => 'text',
                            'eval' => [
                                'rgxp' => 'date',
                                'datepicker' => true,
                                'tl_class' => 'w50 wizard',
                                'style' => 'width: 70%',
                            
                            ],
                        ],
                    'timetable_times' => [
                        
                        'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_times'],
                        'inputType' => 'multiColumnWizard',
                        'eval' => [
                            'columnFields' => [
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
                                            'style' => 'width: 70%',
                                            'valign' => 'top',
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
                                            'tl_class' => 'w50 wizard',
                                            'style' => 'width: 70%',
                                            'valign' => 'top',
                                        
                                        ],
                                    
                                    ],
                                'timetable_desc' =>
                                    [
                                        'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_desc'],
                                        'exclude' => true,
                                        'inputType' => 'textarea',
                                        'eval' => [
                                            'style' => 'width:150px',
                                            'preserveTags' => true,
                                        ],
                                    
                                    ],
                                'timetable_loc' =>
                                    [
                                        'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_loc'],
                                        'exclude' => true,
                                        'inputType' => 'text',
                                        'eval' => [
                                            'valign' => 'top',
                                            'style' => 'width: 100px',
                                        ],
                                    ],
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
        'inputType' => 'multiColumnWizard',
        'eval' => [
            'columnFields' =>
                [
                    'price_type' =>
                        [
                            'label' => &$GLOBALS['TL_LANG']['tl_content']['price_type'],
                            'exclude' => true,
                            'inputType' => 'text',
                            'eval' => [
                                'tl_class' => 'w50',
                                'style' => 'margin-top: 20px',
                                'valign' => 'top',
                            
                            ],
                        ],
                    'price_items' =>
                        [
                            'label' => &$GLOBALS['TL_LANG']['tl_content']['price_items'],
                            'exclude' => true,
                            'inputType' => 'multiColumnWizard',
                            'eval' => [
                                'columnFields' => [
                                    
                                    'price' =>
                                        [
                                            'label' => &$GLOBALS['TL_LANG']['tl_content']['price'],
                                            'exclude' => true,
                                            'inputType' => 'text',
                                            'eval' => array('maxlength' => 10, 'rgxp' => 'digit'),
                                            'sql' => "int(10) unsigned NOT NULL default '0'",
                                        ],
                                    'price_desc' =>
                                        [
                                            'label' => &$GLOBALS['TL_LANG']['tl_content']['price_desc'],
                                            'exclude' => true,
                                            'inputType' => 'text',
                                            'eval' => [
                                                'valign' => 'top',
                                                'style' => 'width: 100px',
                                            ],
                                        ],
                                    
                                    'price_valid_until' =>
                                        [
                                            'label' => &$GLOBALS['TL_LANG']['tl_content']['price_valid_until'],
                                            'exclude' => true,
                                            'inputType' => 'text',
                                            'eval' => [
                                                'rgxp' => 'date',
                                                'datepicker' => true,
                                                'tl_class' => 'w50 wizard',
                                                'style' => 'width: 70%',
                                                'valign' => 'top',
                                            
                                            ],
                                        
                                        ],
                                ],
                            ],
                        ],
                ],
        ],
        
        'sql' => 'blob NULL',
    ];