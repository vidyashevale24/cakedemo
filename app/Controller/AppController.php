<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	//public $helpers = array('Html','Form');
	public $components = array(
	    'Session',
	    'Auth' => array(
	        'authenticate' => array(
	            'Form' => array(
	                'userModel' => 'User',
	                'fields' => array(
	                    'username' => 'username',
	                    'password' => 'password'
	                )
	            )
	        ),
	        'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
	       // 'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
	        'loginAction' => array('admin' => false, 'controller' => 'users', 'action' => 'login')
	    )
	);

	public function beforeFilter() {
	    $this->Auth->allow('login');
	}
 	
 	/*public function isAuthorized($user) {
    // Here is where we should verify the role and give access based on role
	     
	    return true;
	}*/
	//public $components  = array('Session' , 'Auth' );
}