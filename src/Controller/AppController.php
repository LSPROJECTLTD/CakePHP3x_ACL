<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public function beforeRender(\Cake\Event\Event $event)
    {
        $this->viewBuilder()->setTheme('AdminEx');

    }

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'index',
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
            ],
        ]);

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

/**
 * Use this method to get ArosRegistry on table Aros using logged user id as parameter
 */

    public function getAros($param)
    {
        $aros = TableRegistry::get('Aros')->find()->where(['user_id' => $param]);
        if (isset($aros)) {
            return $aros;
        } else {
            $aros = false;
        }
    }
    /**
     * Use this method to get AcosRegistry on table Acos using request->getParam to
     * know what controller and action the user wants to acess
     */

    public function getAcos($params)
    {

        $acos = TableRegistry::get('Acos')->find()->contain(['Actions', 'Controllers'])->where(['Controllers.controller' => $params->controller, 'Actions.action' => $params->action]);
        foreach ($acos as $key => $aco) {

        }
        if (isset($aco)) {
            return $aco;
        } else {
            $aco = false;
        }

    }

    /**
     *This method get getAcos result and search if user has or not permission to access his requision on getAcos
     *
     */
    public function getArosRoles($aco, $aro)
    {

        $acosroles = TableRegistry::get('AcosRoles')->find()->contain(['Acos', 'Roles'])->where(['Acos.id' => $aco->id, 'Roles.id' => $aro->role_id]);
        foreach ($acosroles as $key => $acosrole) {

        }
        if (isset($acosrole)) {
            return $acosrole;
        } else {
            $acosrole = false;
        }
    }

/**
 * Default cakephp method, using seted permission for what user has access
 *
 *
 */

/* Aviso para o Programador:
//Descomente a seção a baixo, cole no methodo, exclua o parametro $param e subistitua o 46 pelo seu id de usuario,
// durante a sua programação, para que não seja necessario criar permissões para cada controller que você criar durante o desenvolvimento.
//
// $user = $this->Auth->user('id');
// if (isset($user) && $user == '46') {
//     return true;
// }return false;

 */

    public function isAuthorized($param)
    {

        $acos = (object) array();
        $acos->action = $action = $this->request->getParam('action');
        $acos->controller = $controller = $this->request->getParam('controller');
        $aco = $this->getAcos($acos);
        if ($aco) {
            $aros = $this->getAros($this->Auth->user('id'));
            foreach ($aros as $key => $aro) {
                $acosrole = $this->getArosRoles($aco, $aro);
                if ($acosrole) {
                    break;
                }
            }
            if (isset($acosrole)) {
                if ($acosrole->allowed == 1) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        return false;
    }
}
