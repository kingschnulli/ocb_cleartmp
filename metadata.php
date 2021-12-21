<?php
/**
 * @package   ocb_cleartmp
 * @category  OXID Module
 * @version   2.0.2
 * @license   GNU License http://opensource.org/licenses/GNU
 * @author    Joscha Krug <krug@marmalade.de> / OXID Community
 * @link      https://github.com/OXIDprojects/ocb_cleartmp
 * @see       https://github.com/OXIDCookbook/ocb_cleartmp
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'ocb_cleartmp',
    'title'       => 'OXID Community Cleartmp (by OXID Cookbook)',
    'description' => 'Clear the tmp directory from the backend.',
    'thumbnail'   => 'cookbook.jpg',
    'version'     => '2.0.4',
    'author'      => 'OXID Community',
    'url'         => 'https://github.com/OXIDprojects/ocb_cleartmp',
    'email'       => '',
    'extend'      => [
        \OxidEsales\Eshop\Core\ShopControl::class                                  => \OxidCommunity\OcbClearTmp\Core\ShopControl::class,
        \OxidEsales\Eshop\Application\Controller\Admin\NavigationController::class => \OxidCommunity\OcbClearTmp\Controller\Admin\NavigationController::class,
    ],
    'settings'    => [
        ['group' => 'ocbcleartmp_main', 'name' => 'ocbcleartmpDevMode', 'type' => 'bool', 'value' => false],
        ['group' => 'ocbcleartmp_main', 'name' => 'ocbcleartmpPictureClear', 'type' => 'bool', 'value' => false],
        ['group' => 'ocbcleartmp_main', 'name' => 'ocbcleartmpRemoteHosts', 'type' => 'arr']
    ],
    'blocks'      => [
        [
            'template' => 'include/header_links.tpl',
            'block'    => 'admin_header_links',
            'file'     => '/views/blocks/header__admin_header_links.tpl',
        ],
    ],
];
