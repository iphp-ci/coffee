<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * omooo Website Management System
 *
 * @since		version 2.0.0
 * @author		omooo <omooo@gmail.com>
 * @license     http://www.omooo.com/license
 * @copyright   Copyright (c) 2011 - 9999, omooo.Com, Inc.
 * @filesource	svn://www.omooo.net/v2/mall/controllers/admin/home.php
 */

require FCPATH.'omooo/core/D_Admin_Home.php';
 
class Home extends D_Admin_Home {
	
    /**
     * 构造函数
     */
    public function __construct() {
        parent::__construct();
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