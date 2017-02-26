<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use Cake\Utility\Text;
use Cake\Utility\Security;
use Cake\Routing\Router;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{    
    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['BadgesUsers', 'FinalScores', 'Forecasts', 'HistoricalForecasts', 'Profiles', 'StatesUsers', 'Stats', 'TeamsUsers', 'WeeklyContestForecasts', 'WeeklyScores']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    // Login
    public function login() {
        if ($this->request->is('ajax') || $this->request->query('provider')) {
            if ($this->request->query('provider')) {
                $config_file_path = '/home/jkaplan/public_html/forecast_clash/vendor/hybridauth/hybridauth/hybridauth/config.php';
                set_include_path('/home/jkaplan/public_html/');
                require_once( "forecast_clash/vendor/hybridauth/hybridauth/hybridauth/Hybrid/Auth.php" );
                $hybridauth = new \Hybrid_Auth( $config_file_path );
            }
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $query = TableRegistry::get('Avatars')->find()->where(['id' => $user['avatar_id']]);
                $result = $query->first();
                $session = $this->request->session();
                $session->write([
                    'User.id' => $user['id'],
                    'User.first_name'=> h($user['first_name']),
                    'User.last_name'=> h($user['last_name']),
                    'User.avatar' => $result['avatar_img']
                ]);
                echo json_encode(['msg' => 'Logged in!', 'result' => 1, 'regLog' => 1]);
                die;
            } else {
                echo json_encode(['msg' => 'Invalid login.', 'result' => 0, 'regLog' => 1]);
                die;
            } 
        }
    }
 
    // Logout
    public function logout() {
        $this->Auth->logout();
        $this->request->session()->destroy();
        $this->redirect(['controller' => 'pages', 'action' => 'home']);
    }
    
    // Registration
    public function register() {
        if ($this->request->is('ajax')) {
            $user = $this->Users->newEntity();
            $user = $this->Users->patchEntity($user, $this->request->data);
            if($user->errors()){
                $error_msg = [];
                foreach( $user->errors() as $errors){
                    if(is_array($errors)){
                        foreach($errors as $error){
                            $error_msg[] = $error;
                        }
                    }else{
                        $error_msg[] = $errors;
                    }
                }
            }
            if ($this->Users->save($user)) {
                echo json_encode(['msg' => 'Registered!', 'result' => 1, 'regLog' => 0]);
            } else {
                echo json_encode(['msg' => $error_msg, 'result' => 0, 'regLog' => 0]);
            }
            $this->set(compact('user'));
            $this->set('_serialize', ['user']);
            die;
        }
    }
    
    //Function to send email to provided address with link to reset password.
    public function forgotPassword() {
        if ($this->request->is('ajax')) {
            if (!empty($this->request->data)) {
                $email = $this->request->data['email'];
                $user = $this->Users->findByEmail($email)->first();
                if (!empty($user)) {
                    $password = sha1(Text::uuid());
                    $password_token = Security::hash($password, 'sha256', true);
                    $hashval = sha1($user->username . rand(0, 100));
                    $user->password_reset_token = $password_token;
                    $user->hashval = $hashval;
                    $reset_token_link = Router::url(['controller' => 'Users', 'action' => 'resetPassword'], TRUE) . '/' . $password_token . '#' . $hashval;
                    $email = new Email();
                    $email->from('donotreply@forecastclash.com', 'Forecast Clash')
                        ->to('john.liotta@gmail.com', 'John')
                        ->template('default', 'default')
                        ->subject('Reset your Forecast Clash password')
                        ->send($reset_token_link);
                    $this->Users->save($user);
                    echo json_encode(['msg' => 'Email sent with password reset instructions!', 'result' => 1, 'regLog' => 0]);
                    die;
                } else {
                    echo json_encode(['msg' => 'Provided email not associated with an active Forecast Clash account.', 'result' => 0, 'regLog' => 1]);
                    die;
                }
            }
        }
    }
    
    public function resetPassword() {
        if ($this->request->is('ajax')) {
            if (!empty($this->request->data)) {
                $token = $this->request->data['token'];
                $user = $this->Users->findByPasswordResetToken($token)->first();
                if ($user) {
                    $user = $this->Users->patchEntity($user, [
                        'password' => $this->request->data['new_password'],
                        'new_password' => $this->request->data['new_password'],
                        'confirm_password' => $this->request->data['confirm_password']
                    ]);
                    if($user->errors()){
                        $error_msg = [];
                        foreach( $user->errors() as $errors){
                            if(is_array($errors)){
                                foreach($errors as $error){
                                    $error_msg[] = $error;
                                }
                            }else{
                                $error_msg[] = $errors;
                            }
                        }
                    }
                    $hashval_new = sha1($user->username . rand(0, 100));
                    $user->password_reset_token = $hashval_new;
                    if ($this->Users->save($user)) {
                        echo json_encode(['msg' => 'Your password has been changed successfully', 'result' => 1, 'regLog' => 0]);
                    } else {
                        echo json_encode(['msg' => $error_msg, 'result' => 0, 'regLog' => 0]);
                    }
                } else {
                    echo json_encode(['msg' => 'Sorry your password token has expired.', 'result' => 0, 'regLog' => 3]);
                }
            } else {
                echo json_encode(['msg' => 'Error loading password reset.', 'result' => 0, 'regLog' => 1]);
            }
            $this->set(compact('user'));
            $this->set('_serialize', ['user']);
            die;
        } else {
            $url = Router::url("",true);
            $toke = explode('reset-password/', $url);
            $token = $toke[1];
            $this->set('token', $token);
        }
    }
    
    public function beforeFilter(Event $event){
        $this->Auth->allow();
    }

}
