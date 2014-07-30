<?php

class UicategoryController extends lmbController
{
    protected $_object_class_name = 'Objoftree';

//    function doEdit()
//    {
//        $this->setFormDatasource($this->toolkit->getUser(), 'profile_form');
//
//        if($this->request->has('change_password'))
//            $this->_changeUserPassword();
//        if($this->request->has('edit'))
//            $this->_updateUserProfile();
//    }

    protected function _updateUserProfile()
    {
        $this->useForm('profile_form');
        $this->setFormDatasource($this->toolkit->getUser());

        $user_properties = $this->request->getPost(
            array('login', 'name', 'email', 'password', 'address')
        );
        $user = $this->toolkit->getUser();
        $user->import($user_properties);

        if($user->trySave($this->error_list))
        {
            $this->flashMessage('Your profile was changed');
            $this->toolkit->redirect();
        }
    }

//    protected function _validateChangePasswordForm()
//    {
//        $this->validator->addRequiredRule('old_password');
//        $this->_validatePasswordField();
//
//        $user = $this->toolkit->getUser();
//        if($old_password = $this->request->get('old_password'))
//        {
//            $hashed_password = User :: cryptPassword($old_password);
//            if($user->getHashedPassword() != $hashed_password)
//                $this->error_list->addError('Wrong old password', array('old_password'));
//        }
//    }
//
//    function doLogin()
//    {
//        if(!$this->request->hasPost())
//            return;
//
//        $user = $this->toolkit->getUser();
//
//        $this->useForm('login_form');
//        $this->setFormDatasource($this->request);
//
//        $this->_validateLoginForm();
//
//        if(!$this->error_list->isValid())
//            return;
//
//        $login = $this->request->get('login');
//        $password = $this->request->get('password');
//
//        if(!$user->login($login, $password))
//        {
//            $this->addError('Login or password incorrect!');
//        }
//        else
//        {
//            $this->toolkit->getSession()->set('user_id', $user->getId());
//            $this->flashAndRedirect('You were logged in!', '/');
//        }
//    }
//
//    protected function _validateLoginForm()
//    {
//        $this->validator->addRequiredRule('login');
//        $this->validator->addRequiredRule('password');
//        $this->validator->validate($this->request);
//    }
//
//    function doShowOrder()
//    {
//        try
//        {
//            $order = new Order($this->request->getInteger('id'));
//            if(!$order->belongsToUser($this->toolkit->getUser()))
//                $this->flashAndRedirect('You can see only your orders!', '/');
//            else
//                $this->order = $order;
//        }
//        catch(lmbARException $e)
//        {
//            $this->flashAndRerdirect('Can\'t load order!', '/');
//        }
//    }
}
