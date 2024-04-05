<?php
/* Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop-project.org/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

// Workaround for redirection on init
$_POST['id_shop'] = 1;

require_once '/var/www/html/config/config.inc.php';

if (!defined('_PS_VERSION_'))
	exit;

if (!$argv) {
    return false;
}

if (!$options=getopt('', ["redirect:"])) {
    error_log('set_canonical.php : --redirect <val> option is required.');
    die();
}

if (isset($options['redirect'])) {
    // Set canonical redirect
    error_log('Setting PS_CANONICAL_REDIRECT to: '. $options['redirect']);
    Configuration::updateValue('PS_CANONICAL_REDIRECT',$options['redirect']);
}


die();