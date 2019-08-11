<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Album2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Album2\Controller;

use Zend\Mvc\Controller\AbstractActionController;
//use Zend\Db\TableGateway\TableGateway;

class Album2Controller extends AbstractActionController
{
    
	protected $dataTable;
	
	public function indexAction()
    {
        
    	$data = "popo";
    	//$data = $this->getDataTable()->fetchAll();
    	
    	var_dump($data);
    	
    	
    	return array('data' => $data, 'xxx' => "xcxc");
    }
    
    
    public function getDataTable()
    {
    	if (!$this->dataTable) {
    		$sm = $this->getServiceLocator();
    		$this->dataTable = $sm->get('Album\Model\AlbumTable');
    	}
    	return $this->dataTable;
    }


}
