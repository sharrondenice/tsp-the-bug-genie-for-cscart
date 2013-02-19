<?php
/*
 * TSP The Bug Genie for CS-Cart Addon
 *
 * @package		TSP The Bug Genie for CS-Cart Addon
 * @filename	config.php
 * @version		1.0.0
 * @author		Sharron Denice, The Software People, LLC on 2013/02/09
 * @copyright	Copyright © 2013 The Software People, LLC (www.thesoftwarepeople.com). All rights reserved
 * @license		APACHE v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @brief		Config file for addon
 * 
 */

if ( !defined('AREA') )	{ die('Access denied');	}

require_once 'lib/fn.the_bug_genie_for_cscart.php';

// Field types: 
// admin_only (hidden on customer side), type [S (selectbox), H(selectbox, hash values),T (textarea),I (input),D (date),C (checkbox), U (URL)], 
// options (single dim array), options_func (function name to call at run-time, use with type H or S), 
// title, name (field name), value, icon (used with type U), width (with of field), class (css), hint, readonly (show text only)
Registry::set('tsptbg_product_data_field_names', array(
	'tsptbg_submit_project' => array(
		'type' => 'H',
		'options_func' => 'fn_tsptbg_get_bug_genie_projects', // options generated on product page load
		'admin_only' => true
	),
	'tsptbg_submit_issue_type' => array(
		'type' => 'H',
		'options_func' => 'fn_tsptbg_get_bug_genie_issue_types', // options generated on product page load
		'admin_only' => true
	),
	'tsptbg_submit_issue_name' => array(
		'type' => 'H',
		'options_func' => 'fn_tsptbg_get_product_input_options', // options generated on product page load
		'admin_only' => true
	),
	'tsptbg_submit_issue_text' => array(
		'type' => 'T',
		'admin_only' => true
	),
	'tsptbg_issues_url' => array(
		'type' => 'U',
		'icon' => true,
		'width' => '450px',
		'class' => 'tsptbg_issues',
		'hint' => 'http://www.company.com/thebuggenie/product/issues/open'
	),
	'tsptbg_project_url' => array(
		'type' => 'U',
		'icon' => true,
		'width' => '450px',
		'class' => 'tsptbg_project',
		'hint' => 'http://www.company.com/thebuggenie/product'
	),
	'tsptbg_report_url' => array(
		'type' => 'U',
		'icon' => true,
		'width' => '450px',
		'class' => 'tsptbg_report',
		'hint' => 'http://www.company.com/thebuggenie/product/issues/new'
	),
	'tsptbg_wiki_url' => array(
		'type' => 'U',
		'icon' => true,
		'width' => '450px',
		'class' => 'tsptbg_wiki',
		'hint' => 'http://www.company.com/thebuggenie/wiki/product-mainpage'
	)
));

?>