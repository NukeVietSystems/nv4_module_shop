<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2017 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 04/18/2017 09:47
 */

if (!defined('NV_IS_FILE_MODULES')) {
    die('Stop!!!');
}
global $op, $db;
$sql_drop_module = array();
$sql_create_module = $sql_drop_module;
// Default config
$data = array();
$data['image_size'] = '100x100';
$data['home_view'] = 'view_home_all';
$data['per_page'] = 20;
$data['per_row'] = 3;
$data['money_unit'] = 'VND';
$data['weight_unit'] = 'g';
$data['post_auto_member'] = 0;
$data['auto_check_order'] = 1;
$data['format_order_id'] = strtoupper(substr($module_name, 0, 1)) . '%06s';
$data['format_code_id'] = strtoupper(substr($module_name, 0, 1)) . '%06s';
$data['facebookappid'] = '';
$data['active_guest_order'] = 0;
$data['active_showhomtext'] = 1;
$data['active_order'] = 1;
$data['active_order_popup'] = 1;
$data['active_order_non_detail'] = 1;
$data['active_guest_order'] = 1;
$data['active_price'] = 1;
$data['active_order_number'] = 0;
$data['order_day'] = 0;
$data['order_nexttime'] = 0;
$data['active_payment'] = 1;
$data['groups_price'] = '3';
$data['active_tooltip'] = 1;
$data['timecheckstatus'] = 0;
$data['show_product_code'] = 1;
$data['show_compare'] = 0;
$data['show_displays'] = 0;
$data['use_shipping'] = 0;
$data['use_coupons'] = 0;
$data['active_wishlist'] = 1;
$data['active_gift'] = 1;
$data['active_warehouse'] = 1;
$data['tags_alias'] = 0;
$data['auto_tags'] = 1;
$data['tags_remind'] = 0;
$data['point_active'] = 0;
$data['point_conversion'] = 0;
$data['point_new_order'] = 0;
$data['money_to_point'] = 0;
$data['review_active'] = 1;
$data['review_check'] = 1;
$data['review_captcha'] = 1;
$data['group_price'] = '';
$data['groups_notify'] = '3';
$data['template_active'] = '0';
$data['download_active'] = '0';
$data['download_groups'] = '6';
$data['sortdefault'] = 0;

foreach ($data as $config_name => $config_value) {
    $sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', " . $db->quote($module_name) . ", " . $db->quote($config_name) . ", " . $db->quote($config_value) . ")";
}

$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'alias_lower', '1')";

// Comments config
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'auto_postcomm', '1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'allowed_comm', '-1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'view_comm', '6')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'setcomm', '4')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'activecomm', '1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'emailcomm', '0')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'adminscomm', '')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'sortcomm', '0')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'captcha', '1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'allowattachcomm', '0')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'alloweditorcomm', '0')";
