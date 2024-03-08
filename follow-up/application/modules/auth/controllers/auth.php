<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('url');
        // Load MongoDB library instead of native db driver if required
//        $this->config->item('use_mongodb', 'ion_auth') ?
//                        $this->load->library('mongo_db') :
//                        $this->load->database();
        $this->load->model('reference_model');
        $this->template = 'template';
        $this->template_login = 'template_login';
    }

    //redirect if needed, otherwise display the user list
    function index() {

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            redirect($this->config->item('app_url'), 'refresh');
        } elseif (!$this->ion_auth->is_admin()) {
            //redirect them to the home page because they must be an administrator to view this
            //redirect($this->config->item('base_url'), 'refresh');
            //set the flash data error message if there is one
            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            //list the users
            $user_id = $this->session->userdata('user_id');
            $data['users'] = $this->ion_auth->user($user_id)->result();
            foreach ($data['users'] as $k => $user) {
                $data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
                $data['users'][$k]->places = $this->ion_auth->get_users_places($user->id)->result();
                $data['users'][$k]->modules = $this->ion_auth->get_users_modules($user->id)->result();
            }


            show('auth/index', $data, $this->template);
        } else {
            //set the flash data error message if there is one
            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            //list the users
            $data['users'] = $this->ion_auth->users()->result();
            foreach ($data['users'] as $k => $user) {
                $data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
                $data['users'][$k]->places = $this->ion_auth->get_users_places($user->id)->result();
                $data['users'][$k]->modules = $this->ion_auth->get_users_modules($user->id)->result();
            }


            show('auth/index', $data, $this->template);
        }
    }

    //log the user in
    function login() {
        $data['title'] = "Login";

        //validate form input
        $this->form_validation->set_rules('identity', 'Identity', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) { //check to see if the user is logging in
            //check for "remember me"
            $remember = (bool) $this->input->post('remember');

            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) { //if the login is successful
                //redirect them back to the home page
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect(site_url() . '/home', 'refresh');
            } else { //if the login was un-successful
                //redirect them back to the login page
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect($this->config->item('app_url'), 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
            }
        } else {  //the user is not logging in so display the login page
            //set the flash data error message if there is one
            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $data['identity'] = array('name' => 'identity',
                'id' => 'identity',
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity'),
            );
            $data['password'] = array('name' => 'password',
                'id' => 'password',
                'type' => 'password',
            );

            show('login_1', $data, 'template_login');
            //show('tes', $data, 'template_login');
        }
    }

    //log the user out
    function logout() {
        $data['title'] = "Logout";

        //log the user out
        $logout = $this->ion_auth->logout();

        //redirect them back to the page they came from
        redirect('auth', 'refresh');
    }

    //change password
    function change_password() {
        $this->form_validation->set_rules('old', 'Old password', 'required');
        $this->form_validation->set_rules('new', 'New Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
        $this->form_validation->set_rules('new_confirm', 'Confirm New Password', 'required');

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }

        $user = $this->ion_auth->user()->row();

        if ($this->form_validation->run() == false) { //display the form
            //set the flash data error message if there is one
            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
            $data['old_password'] = array(
                'name' => 'old',
                'id' => 'old',
                'type' => 'password',
            );
            $data['new_password'] = array(
                'name' => 'new',
                'id' => 'new',
                'type' => 'password',
                'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
            );
            $data['new_password_confirm'] = array(
                'name' => 'new_confirm',
                'id' => 'new_confirm',
                'type' => 'password',
                'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
            );
            $data['user_id'] = array(
                'name' => 'user_id',
                'id' => 'user_id',
                'type' => 'hidden',
                'value' => $user->id,
            );

            //render
            show('auth/change_password', $data, $this->template);
        } else {
            $identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));

            $change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

            if ($change) { //if the password was successfully changed
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                $this->logout();
            } else {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('auth/change_password', 'refresh');
            }
        }
    }

    //forgot password
    function forgot_password() {
        $this->form_validation->set_rules('email', 'Email Address', 'required');
        if ($this->form_validation->run() == false) {
            //setup the input
            $data['email'] = array('name' => 'email',
                'id' => 'email',
            );
            //set any errors and display the form
            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            show('auth/forgot_password', $data, $this->template_login);
        } else {
            //run the forgotten password method to email an activation code to the user
            $forgotten = $this->ion_auth->forgotten_password($this->input->post('email'));

            if ($forgotten) { //if there were no errors
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect("auth/login", 'refresh'); //we should display a confirmation page here instead of the login page
            } else {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect("auth/forgot_password", 'refresh');
            }
        }
    }

    //reset password - final step for forgotten password
    public function reset_password($code = NULL) {
        if (!$code) {
            show_404();
        }

        $user = $this->ion_auth->forgotten_password_check($code);

        if ($user) {  //if the code is valid then display the password reset form
            $this->form_validation->set_rules('new', 'New Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
            $this->form_validation->set_rules('new_confirm', 'Confirm New Password', 'required');

            if ($this->form_validation->run() == false) {//display the form
                //set the flash data error message if there is one
                $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

                $data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
                $data['new_password'] = array(
                    'name' => 'new',
                    'id' => 'new',
                    'type' => 'password',
                    'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
                );
                $data['new_password_confirm'] = array(
                    'name' => 'new_confirm',
                    'id' => 'new_confirm',
                    'type' => 'password',
                    'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
                );
                $data['user_id'] = array(
                    'name' => 'user_id',
                    'id' => 'user_id',
                    'type' => 'hidden',
                    'value' => $user->id,
                );
                $data['csrf'] = $this->_get_csrf_nonce();
                $data['code'] = $code;

                //render
                show('auth/reset_password', $data, $this->template_login);
            } else {
                // do we have a valid request?
                if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post('user_id')) {

                    //something fishy might be up
                    $this->ion_auth->clear_forgotten_password_code($code);

                    show_404();
                } else {
                    // finally change the password
                    $identity = $user->{$this->config->item('identity', 'ion_auth')};

                    $change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

                    if ($change) { //if the password was successfully changed
                        $this->session->set_flashdata('message', $this->ion_auth->messages());
                        $this->logout();
                    } else {
                        $this->session->set_flashdata('message', $this->ion_auth->errors());
                        redirect('auth/reset_password/' . $code, 'refresh');
                    }
                }
            }
        } else { //if the code is invalid then send them back to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("auth/forgot_password", 'refresh');
        }
    }

    //activate the user
    function activate($id, $code = false) {
        if ($code !== false)
            $activation = $this->ion_auth->activate($id, $code);
        else if ($this->ion_auth->is_admin())
            $activation = $this->ion_auth->activate($id);

        if ($activation) {
            //redirect them to the auth page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect("auth", 'refresh');
        } else {
            //redirect them to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("auth/forgot_password", 'refresh');
        }
    }

    //deactivate the user
    function deactivate($id = NULL) {
        $id = $this->config->item('use_mongodb', 'ion_auth') ? (string) $id : (int) $id;

        $this->load->library('form_validation');
        $this->form_validation->set_rules('confirm', 'confirmation', 'required');
        $this->form_validation->set_rules('id', 'user ID', 'required|alpha_numeric');

        if ($this->form_validation->run() == FALSE) {
            // insert csrf check
            $data['csrf'] = $this->_get_csrf_nonce();
            $data['user'] = $this->ion_auth->user($id)->row();

            show('auth/deactivate_user', $data, $this->template);
        } else {
            // do we really want to deactivate?
            if ($this->input->post('confirm') == 'yes') {
                // do we have a valid request?
                if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id')) {
                    show_404();
                }

                // do we have the right userlevel?
                if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {
                    $this->ion_auth->deactivate($id);
                }
            }

            //redirect them back to the auth page
            redirect('auth', 'refresh');
        }
    }

    function deactivate_without_confirm($id = NULL, $code = false) {
        if ($code !== false)
            $activation = $this->ion_auth->deactivate($id, $code);
        else if ($this->ion_auth->is_admin())
            $activation = $this->ion_auth->deactivate($id);

        if ($activation) {
            //redirect them to the auth page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect("auth", 'refresh');
        } else {
            //redirect them to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("auth/forgot_password", 'refresh');
        }
    }

    //create a new user
    function create_user() {
        $data['title'] = "Menambahkan Pengguna";

//        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
//            redirect('auth', 'refresh');
//        }
        //validate form input
        $this->form_validation->set_rules('first_name', 'Nama Depan', 'required|xss_clean');
        $this->form_validation->set_rules('last_name', 'Nama Belakang', 'xss_clean');
        $this->form_validation->set_rules('email', 'Alamat Email', 'valid_email');
        $this->form_validation->set_rules('nip', 'NIP', 'required|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
        //$this->form_validation->set_rules('phone2', 'Second Part of Phone', 'required|xss_clean|min_length[3]|max_length[3]');		
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required');

        if ($this->form_validation->run() == true) {
            //$username = strtolower($this->input->post('first_name')) . '.' . strtolower($this->input->post('last_name'));
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $additional_data = array('first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'nip' => $this->input->post('nip'),
            );

            $groups = array('group_id' => $this->input->post('user_group'));
            $places = array('place_id' => $this->input->post('user_place'));
            $modules = array('module_id' => $this->input->post('user_module'));
        }

        if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email, $additional_data, $groups, $places, $modules)) { //check to see if we are creating the user
            //redirect them back to the admin page
            $this->session->set_flashdata('message', "User Berhasil Dibuat");
            redirect("auth", 'refresh');
        } else { //display the create user form
            //set the flash data error message if there is one
            $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            $data['first_name'] = array('name' => 'first_name',
                'id' => 'first_name',
                'type' => 'text',
                'value' => $this->form_validation->set_value('first_name'),
                'onblur' => 'create_username();',
            );
            $data['last_name'] = array('name' => 'last_name',
                'id' => 'last_name',
                'type' => 'text',
                'value' => $this->form_validation->set_value('last_name'),
                'onblur' => 'create_username();',
            );
            $data['email'] = array('name' => 'email',
                'id' => 'email',
                'type' => 'text',
                'value' => $this->form_validation->set_value('email'),
            );
            $data['username'] = array('name' => 'username',
                'id' => 'username',
                'type' => 'text',
                'value' => $this->form_validation->set_value('username'),
            );
            $data['nip'] = array('name' => 'nip',
                'id' => 'nip',
                'type' => 'text',
                'value' => $this->form_validation->set_value('nip'),
            );
            $data['password'] = array('name' => 'password',
                'id' => 'password',
                'type' => 'password',
                'value' => $this->form_validation->set_value('password'),
            );
            $data['password_confirm'] = array('name' => 'password_confirm',
                'id' => 'password_confirm',
                'type' => 'password',
                'value' => $this->form_validation->set_value('password_confirm'),
            );
            //show('auth/create_user', $data, $this->template);
            show('tes', $data, $this->template);
        }
    }

    function _get_csrf_nonce() {
        $this->load->helper('string');
        $key = random_string('alnum', 8);
        $value = random_string('alnum', 20);
        $this->session->set_flashdata('csrfkey', $key);
        $this->session->set_flashdata('csrfvalue', $value);

        return array($key => $value);
    }

    function _valid_csrf_nonce() {
        if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
                $this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue')) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function user_check() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
    }

    function delete_user($id) {
        if ($this->ion_auth->is_admin()) {
            $this->ion_auth->delete_user($id);
            redirect("auth", 'refresh');
        } else {
            redirect("auth", 'refresh');
        }
    }

    function change_user($user_id = null) {
        $this->form_validation->set_rules('first_name', 'Nama Depan', 'required');
        $this->form_validation->set_rules('last_name', 'Nama Belakang', 'required');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }

        if ($this->form_validation->run() == false) {

            $readonly = ($this->ion_auth->is_admin()) ? 'false' : 'true';


            $userdata = $this->ion_auth->user($user_id)->row();
            //echo $user->id;
            //display the form
            //set the flash data error message if there is one
            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $data['id'] = $user_id;
            $data['userdata'] = $userdata;

            $data['first_name'] = array(
                'name' => 'first_name',
                'id' => 'first_name',
                'type' => 'text',
                'value' => $userdata->first_name,
                'onblur' => 'create_username();'
            );
            $data['last_name'] = array(
                'name' => 'last_name',
                'id' => 'last_name',
                'type' => 'text',
                'value' => $userdata->last_name,
                'onblur' => 'create_username();'
            );
            $data['username'] = array(
                'name' => 'username',
                'id' => 'username',
                'type' => 'text',
                'readonly' => $readonly,
                'value' => $userdata->username,
            );
            $data['nip'] = array(
                'name' => 'nip',
                'id' => 'nip',
                'type' => 'text',
                'value' => $userdata->nip,
            );
            $data['email'] = array(
                'name' => 'email',
                'id' => 'email',
                'type' => 'text',
                'value' => $userdata->email,
                'style' => 'width:300px;'
            );
            $data['password'] = array(
                'name' => 'password',
                'id' => 'password',
                'type' => 'password',
            );
            $data['user_id'] = array(
                'name' => 'user_id',
                'id' => 'user_id',
                'type' => 'hidden',
                'value' => $userdata->id,
            );

            //render
            show('auth/change_user', $data, $this->template);
        } else {
            $data = array('first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'nip' => $this->input->post('nip'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'username' => $this->input->post('username'),
                'group' => $this->input->post('user_group'),
                'place' => $this->input->post('user_place'),
                'module' => $this->input->post('user_module')
            );


            if ($this->form_validation->run() == true && $this->ion_auth->update($user_id, $data)) { //if the password was successfully changed
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                //redirect('auth/change_user/'.$user_id, 'refresh');		
                redirect('auth', 'refresh');
            } else {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('auth/change_user/' . $user_id, 'refresh');
            }
            //print_r($data);
        }
    }

    /* MOBILE */

    //log the user in
    function login_mobile() {
        $data['title'] = "Login";

        //validate form input
        $this->form_validation->set_rules('identity', 'Identity', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) { //check to see if the user is logging in
            //check for "remember me"
            $remember = (bool) $this->input->post('remember');

            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) { //if the login is successful
                //redirect them back to the home page
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect(site_url() . '/mobile', 'refresh');
            } else { //if the login was un-successful
                //redirect them back to the login page
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect($this->config->item('app_url'), 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
            }
        } else {  //the user is not logging in so display the login page
            //set the flash data error message if there is one
            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $data['identity'] = array('name' => 'identity',
                'id' => 'identity',
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity'),
            );
            $data['password'] = array('name' => 'password',
                'id' => 'password',
                'type' => 'password',
            );

            show('auth/login_mobile', $data, 'mobile/template_mobile');
        }
    }

    //log the user out
    function logout_mobile() {
        $data['title'] = "Logout";

        //log the user out
        $logout = $this->ion_auth->logout();

        //redirect them back to the page they came from
        redirect('auth', 'refresh');
    }

}
