<?php
namespace Weixin\Model;
use Think\Model;
class MagzineModel extends Model{
	/**
	 * 自动验证规则
	 */
	protected $_validate = array(
		array('token','require','token',self::VALUE_VALIDATE,'regex',self::MODEL_BOTH),
		array('keyword','require','关键词',self::VALUE_VALIDATE,'regex',self::MODEL_BOTH),
		array('title','require','标题',self::VALUE_VALIDATE,'regex',self::MODEL_BOTH),
		array('info','require','描述',self::VALUE_VALIDATE,'regex',self::MODEL_BOTH),
		array('c','require','首页遮盖图片',self::VALUE_VALIDATE,'regex',self::MODEL_BOTH),
		array('f','require','首页图片',self::VALUE_VALIDATE,'regex',self::MODEL_BOTH),
		);
	/**
	 * 自动完成规则
	 */
	protected $_auto = array(
		array('token','getToken',self::MODEL_INSERT,'callback'),
        array('createtime',NOW_TIME,self::MODEL_INSERT),
        array('updatetime',NOW_TIME,self::MODEL_BOTH),
		);

    protected function getToken(){
    	return session('token');
    }
}