<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Ma for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Ma\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Ma\Model\Model1;

class MaController extends AbstractActionController
{
    public function indexAction()
    {
        
    	
    	return array();
    }
    
    
    public function helloAction ()
    {
    	//$helloRetazec= 'Hello world';
    	//echo $helloRetazec;
    	
    	$Model = new Model1();
    	$x = $Model->sayHello('Peter');
    	echo $x;
    	
    	$x = new Model1();
  	
    	
    	return array('x'=> $x->sayHello('Peter'));
    }


}
