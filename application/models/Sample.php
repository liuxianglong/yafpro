<?php
/**
 * @name SampleModel
 * @desc sample数据获取类, 可以访问数据库，文件，其它系统等
 * @author root
 */
class SampleModel {
	public $db;
    public function __construct() {
//	Yaf_Registry::set('db',Yaf_Application::app()->getConfig());
	$this->db = Yaf_Registry::get('config');
    }   
    
    public function selectSample() {
/*	$sql = 'select * from t';
	$data = $this->db->get_one($sql);
	var_dump($data);exit;
	return $data['id'];
*/
	var_dump($this->db);exit;
	return $this->db->get_one(); 
    }

    public function insertSample($arrInfo) {
        return true;
    }
}
