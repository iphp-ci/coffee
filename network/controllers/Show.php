<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Omweb Website Management System
 *
 * @since		version 2.0.2
 * @author		Omooo <kefu@omooo.com>
 * @license     http://www.omooo.com/license
 * @copyright   Copyright (c) 2011 - 9999, Omooo.Com, Inc.
 */
require FCPATH.'omooo/helpers/system_helper.php';
class Show extends M_Controller {

    /**
     * 构造函数
     */
    public function __construct() {
        parent::__construct();
    }
	
	/**
     * 内容
     */
    public function index($id = 0, $page = 0, $return = FALSE) {
		$id = $id ? $id : (int)$this->input->get('id');
		$page = $page ? $page : max(1, (int)$this->input->get('page'));
        return $this->_show($id, $page, $return);
    }
	
	/**
     * 创建html
     */
    public function create_html() {
        $this->_create_show_file((int)$this->input->get('id'), FALSE);
    }
	
	/**
     * 生成html
     */
    public function html() {
        $this->_show_html();
    }
}