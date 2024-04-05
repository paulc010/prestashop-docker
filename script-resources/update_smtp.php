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

// Configure shop to use maildev
Configuration::updateValue('PS_MAIL_METHOD','2'); // 1 - Use sendmail (default), 2 - Use SMTP, 3 - Never send
Configuration::updateValue('PS_MAIL_SMTP_ENCRYPTION','off'); // For simplicity, unless you want to configure maildev with ssl
Configuration::updateValue('PS_MAIL_SMTP_PORT','1025'); // The default port set in docker-compose.yml
Configuration::updateValue('PS_MAIL_SERVER', 'maildev'); // The name of our maildev container, default maildev

die();