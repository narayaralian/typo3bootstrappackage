<?php
return array(
    'ctrl' => array(
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item',
        'type' => 'item_type',
        'delete' => 'deleted',
        'versioningWS' => true,        
        'origUid' => 't3_origuid',
        'hideAtCopy' => false,
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'dividers2tabs' => true,
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'typeicon_classes' => array(
            'header' => 'EXT:bootstrap_package/Resources/Public/Icons/i/tt_content_header.gif',
            'html' => 'EXT:bootstrap_package/Resources/Public/Icons/i/tt_content_html.gif',
            'textandimage' => 'EXT:bootstrap_package/Resources/Public/Icons/i/tt_content_textpic.gif',
            'backgroundimage' => 'EXT:bootstrap_package/Resources/Public/Icons/i/tt_content_image.gif',
        ),
        'iconfile' => 'EXT:bootstrap_package/Resources/Public/Icons/bootstrap_package_item_teaser.gif',        
    ),
    'interface' => array(
        'showRecordFieldList' => '
            hidden,
            tt_content,
            header,
            header_layout,
            bodytext,
            image,
            text_color,
            background_color,
            background_image
        ',
    ),
    'types' => array(
        '1' => array(
            'showitem' => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
            bodytext,
            image,
            text_color,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
            background_color,
            background_image,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        '
        ),
        'header' => array(
            'showitem' => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
            text_color,
            link,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
            background_color,
            background_image,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        '
        ),
        'textandimage' => array(
            'showitem' => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
            bodytext,
            text_color,
            image,
            link,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
            background_color,
            background_image,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        '
        ),
        'backgroundimage' => array(
            'showitem' => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
            background_image,
            background_color,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        '
        ),
        'html' => array(
            'columnsOverrides' => array(
                'bodytext' => array(
                    'config' => array(
                        'format' => 'html',
                        'renderType' => 't3editor',
                        'wrap' => 'off'
                    ),                    
                ),
            ),
            'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            '
        ),
    ),
    'palettes' => array(
        '1' => array(
            'showitem' => ''
        ),
        'access' => array(
            'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
            'canNotCollapse' => 1
        ),
        'header' => array(
            'showitem' => '
                header,
                header_layout,
            ',
            'canNotCollapse' => 1
        ),
        'general' => array(
            'showitem' => '
                tt_content,
                item_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
            ',
            'canNotCollapse' => 1
        ),
        'visibility' => array(
            'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item
            ',
            'canNotCollapse' => 1
        ),
    ),
    'columns' => array(
        'tt_content' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.tt_content',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType="bootstrap_package_carousel"',
                'maxitems' => 1,
            ),
        ),
        'item_type' => array(
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array(
                        'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.header',
                        'header',
                        'EXT:bootstrap_package/Resources/Public/Icons/i/tt_content_header.gif'
                    ),
                    array(
                        'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.textandimage',
                        'textandimage',
                        'EXT:bootstrap_package/Resources/Public/Icons/i/tt_content_textpic.gif'
                    ),
                    array(
                        'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.backgroundimage',
                        'backgroundimage',
                        'EXT:bootstrap_package/Resources/Public/Icons/i/tt_content_image.gif'
                    ),
                    array(
                        'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.html',
                        'html',
                        'EXT:bootstrap_package/Resources/Public/Icons/i/tt_content_html.gif'
                    ),
                ),
                'default' => 'header',
                'authMode' => $GLOBALS['TYPO3_CONF_VARS']['BE']['explicitADmode'],
                'authMode_enforce' => 'strict',
                'fieldWizard' => array(
                    'selectIcons' => array (
                        'disabled' => true
                    ),
                ),                
            )
        ),
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
                'items' => array(
                    '1' => array(
                        '0' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0'
                    )
                )
            )
        ),
        'starttime' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => '13',               
                'eval' => 'datetime',
                'default' => '0',
                'renderType' => 'inputDateTime'
            ),
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ),
        'endtime' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => '13',                
                'eval' => 'datetime',
                'default' => '0',
                'range' => array(
                    'upper' => mktime(0, 0, 0, 12, 31, 2020)
                ),
                'renderType' => 'inputDateTime'
            ),
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ),
        'sys_language_uid' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array(
                        'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1
                    ),
                    array(
                        'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                        0
                    )
                )
            )
        ),
        'l10n_parent' => Array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
            'config' => Array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => Array(
                    Array('', 0),
                ),
                'foreign_table' => 'tx_bootstrappackage_carousel_item',
                'foreign_table_where' => 'AND tx_bootstrappackage_carousel_item.uid=###REC_FIELD_l10n_parent### AND tx_bootstrappackage_carousel_item.sys_language_uid IN (-1,0)',
            )
        ),
        'l10n_diffsource' => Array(
            'config' => array(
                'type' => 'passthrough'
            )
        ),
        'link' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.link',
            'config' => array(
                'eval' => 'trim',
                'max' => 256,
                'size' => 50,
                'softref' => 'typolink',
                'type' => 'input',
                'renderType' => 'inputLink',
                'fieldControl' => array(
                    'linkPopup' => array(
                        'options' => array(
                            'blindLinkOptions' => 'folder',
                            'blindLinkFields' => 'class, target',
                            'allowedExtensions' => 'jpg',
                        ),
                    ),
                ),
                'wizards' => array(
                    'link' => array(
                        'module' => array(
                            'name' => 'wizard_link'
                        ),
                        'icon' => 'actions-wizard-link'
                    ),
                ),
            ),
        ),
        'header' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim,required'
            ),
        ),
        'header_layout' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_layout',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array(
                        'H1',
                        '1'
                    ),
                    array(
                        'H2',
                        '2'
                    ),
                    array(
                        'H3',
                        '3'
                    ),
                    array(
                        'H4',
                        '4'
                    ),
                ),
                'default' => '1'
            ),
        ),
        'bodytext' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.bodytext',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'wizards' => array(
                    't3editor' => array(
                        'enableByTypeConfig' => 1,
                        'type' => 'userFunc',
                        'userFunc' => 'TYPO3\\CMS\\T3editor\\FormWizard->main',
                        'title' => 't3editor',
                        'icon' => 'wizard_table.gif',
                        'module' => array(
                            'name' => 'wizard_table'
                        ),
                        'params' => array(
                            'format' => 'html',
                            'style' => 'width:98%; height: 60%;'
                        ),
                    ),
                ),
            ),
        ),
        'image' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                array(
                    'appearance' => array(
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ),
                    'overrideChildTca' => array(
                        'types' => array(
                            'aForeignType' => array(
                                \TYPO3\CMS\Core\Resource\File::FILETYPE_UNKNOWN => array(
                            'showitem' => '
                                --palette--;;filePalette
                            '
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
                            'showitem' => '
                                --palette--;;filePalette
                            '
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
                            'showitem' => '
                                title,
                                alternative,
                                 --palette--;;filePalette
                            '
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
                            'showitem' => '
                                --palette--;;filePalette
                            '
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
                            'showitem' => '
                                --palette--;;filePalette
                            '
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
                            'showitem' => '
                                --palette--;;filePalette
                            '
                        ),
                            ),
                        ),
                    ),                    
                    'minitems' => 0,
                    'maxitems' => 1,
                ),
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ),
        'text_color' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.text_color',
            'config' => array(
                'type' => 'input',
                'renderType' => 'colorpicker',                
            ),
        ),
        'background_color' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.background_color',
            'config' => array(
                'type' => 'input',
                'renderType' => 'colorpicker',                
            ),
        ),
        'background_image' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.background_image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'background_image',
                array(
                    'appearance' => array(
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ),
                    'overrideChildTca' => array(
                        'types' => array(
                            'aForeignType' => array(
                                \TYPO3\CMS\Core\Resource\File::FILETYPE_UNKNOWN => array(
                            'showitem' => '
                                --palette--;;filePalette
                            '
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
                            'showitem' => '
                                --palette--;;filePalette
                            '
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
                            'showitem' => '
                                title,
                                alternative,
                                 --palette--;;filePalette
                            '
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
                            'showitem' => '
                                --palette--;;filePalette
                            '
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
                            'showitem' => '
                                --palette--;;filePalette
                            '
                        ),
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
                            'showitem' => '
                                --palette--;;filePalette
                            '
                        ),
                            ),
                        ),
                    ), 
                    'minitems' => 0,
                    'maxitems' => 1
                ),
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ),
    ),
);
