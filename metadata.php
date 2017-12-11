<?php

/**
 * This file is part of a OXID Cookbook project
 *
 * Version:    1.0
 * Author:     Joscha Krug <krug@marmalade.de>
 * Author URI: http://www.marmalade.de
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'           => 'ocb_cleartmp',
    'title'        => 'OXID Cookbook :: Clear tmp',
    'description'  => 'Clear the tmp directory from the backend.',
    'thumbnail'    => 'cookbook.jpg',
    'version'      => '2.0',
    'author'       => 'OXID Community',
    'url'          => 'http://www.oxid-kochbuch.de',
    'email'        => '',
    'extend'       => [
        \OxidEsales\Eshop\Application\Controller\Admin\NavigationController::class => \OxCom\OcbClearTmp\Controller\Admin\NavigationController::class,
        \OxidEsales\Eshop\Core\ShopControl::class => \OxCom\OcbClearTmp\Core\ShopControl::class,
    ],
    'templates' => [
        'ocb_header.tpl' => 'oxcom/ocbcleartmp/views/admin/ocb_header.tpl'
    ],
    'settings' => [
        ['group' => 'ocbcleartmp_main', 'name' => 'ocbcleartmpPictureClear', 'type' => 'bool', 'value' => 'false'],
        ['group' => 'ocbcleartmp_main', 'name' => 'ocbcleartmpRemoteHosts', 'type' => 'arr']
    ]
];