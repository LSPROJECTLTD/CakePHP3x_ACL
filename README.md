# CakePHP3x_ACL
Sistema de permissões de usuários para ser utilizado no cakephp 3

Inicie o componente Auth

Vá até ApController 
Quando carregar o componente auth insira 
 'authorize' => ['Controller'].
Ex:
public function initialize(){
this->loadComponent('Auth', [
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
        }
Inicie a função isAuthorized

    public function isAuthorized()
    {  }
   
   
Trabalharemos com ACOS (Controle de Acesso de Objetos) e AROS (Requisições de Acesso a Objetos)
Irémos dar permissões por "papeis" (roles) dentro dessa ACL, podendo cada usuario ter N papeis.
Para criar nossa ACO Utilizaremos as tabelas, "actions", "controllers" e obiviamente nossa "acos".
Para criar nossa ARO utilizaremos a table "Users", "roles" e "aros".

Nos metodos getAros e getAcos buscamos nossos registros no DB e no getArosRoles é que verificamos se ele existe e se tem permisão.

Recomendo que leia "o Aviso para desenvolvedor" dentro da App Controller.
Dê apenas permissões nas controllers/actions que você queria ter controlle de acesso, caso alguma role não tenha permissão para acessar algum acosroles defina o "allowed" como 0.


Link de apoio: https://book.cakephp.org/3.0/pt/tutorials-and-examples/blog-auth-example/auth.html
