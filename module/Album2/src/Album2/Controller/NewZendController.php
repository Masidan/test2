<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * NewZendController
 *
 * @author
 *
 * @version
 *
 */
class NewZendController extends AbstractActionController {
	/**
	 * The default action - show the home page
	 */
	public function indexAction() {
		// TODO Auto-generated NewZendController::indexAction() default action
		return new ViewModel ();
	}
}