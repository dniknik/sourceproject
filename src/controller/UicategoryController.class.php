<?php

class UicategoryController extends lmbController
{
    protected $_object_class_name = 'Objoftree';

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

//    protected function _validateLoginForm()
//    {
//        $this->validator->addRequiredRule('login');
//        $this->validator->addRequiredRule('password');
//        $this->validator->validate($this->request);
//    }
}
