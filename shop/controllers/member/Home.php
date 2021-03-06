<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * omooo Website Management System
 *
 * @since		version 2.0.0
 * @author		omooo <omooo@gmail.com>
 * @license     http://www.omooo.com/license
 * @copyright   Copyright (c) 2011 - 9999, omooo.Com, Inc.
 * @filesource	svn://www.omooo.net/v2/news/controllers/member/home.php
 */

require FCPATH.'omooo/core/D_Member_Home.php';
 
class Home extends D_Member_Home {
	
    /**
     * 构造函数
     */
    public function __construct() {
        parent::__construct();
    }
	
	public function add() {
		$catid = (int)$this->input->get('catid');
		if ($catid == 0 || $this->get_cache('module-'.SITE_ID.'-'.APP_DIR, 'category', $catid, 'child')) {
			$this->template->assign(array(
				'error' => $error,
				'verify' => 0,
				'myfield' => $this->field_input($this->get_cache('module-'.SITE_ID.'-'.APP_DIR, 'field'), $data, TRUE),
				'meta_name' => lang('mod-00')
			));
			$this->template->display('content_category.html');
		} else {
			parent::add();
		}
	}
	
	/**
     * 动态调用栏目商品品牌
     */
	public function brand() {
		$this->_brand();
	}
	
	/**
     * 动态调用栏目商品规格
     */
	public function format() {
		$this->_format();
	}
	
	/**
     * 动态组合商品规格
     */
	public function format_value() {
		$this->_format_value();
	}
	
}