<?php

class UitreeController extends lmbController
{
    protected $_object_class_name = 'Objoftree';

    function doRegister()
    {
        $this->useForm('register_form');
        $this->setFormDatasource($this->request);

        if ($this->request->hasPost()) {
            $user_properties = $this->request->getPost(
                array('login', 'name', 'email', 'password', 'address')
            );

            $user = new User($user_properties);
            $user->trySave($this->error_list);

            $this->_validatePasswordField();

            if ($this->error_list->isValid()) {
                $this->toolkit->getUser()->login($user->login, $user->password);
                $this->toolkit->getSession()->set('user_id', $user->getId());

                $this->flashMessage('Thank you for your registration!');
                $this->toolkit->redirect('/');
            }
        }
    }

    function _validatePasswordField()
    {
        $this->validator->addRequiredRule('password');
        $this->validator->addRequiredRule('repeat_password');
        lmb_require('limb/validation/src/rule/lmbMatchRule.class.php');
        $this->validator->addRule(new lmbMatchRule('password', 'repeat_password'));
        $this->validator->validate($this->request);
    }

    function doEdit()
    {
        $this->setFormDatasource($this->toolkit->getUser(), 'profile_form');

        if ($this->request->has('change_password'))
            $this->_changeUserPassword();
        if ($this->request->has('edit'))
            $this->_updateUserProfile();
    }

    protected function _changeUserPassword()
    {
        $this->useForm('change_password_form');

        $this->_validateChangePasswordForm();

        if ($this->error_list->isValid()) {
            $user = $this->toolkit->getUser();
            $user->setPassword($this->request->get('password'));
            $user->save();

            $this->flashMessage('Your password was changed');
            $this->toolkit->redirect();
        }
    }

    protected function _updateUserProfile()
    {
        $this->useForm('profile_form');
        $this->setFormDatasource($this->toolkit->getUser());

        $user_properties = $this->request->getPost(
            array('login', 'name', 'email', 'password', 'address')
        );
        $user = $this->toolkit->getUser();
        $user->import($user_properties);

        if ($user->trySave($this->error_list)) {
            $this->flashMessage('Your profile was changed');
            $this->toolkit->redirect();
        }
    }

    protected function _validateChangePasswordForm()
    {
        $this->validator->addRequiredRule('old_password');
        $this->_validatePasswordField();

        $user = $this->toolkit->getUser();
        if ($old_password = $this->request->get('old_password')) {
            $hashed_password = User :: cryptPassword($old_password);
            if ($user->getHashedPassword() != $hashed_password)
                $this->error_list->addError('Wrong old password', array('old_password'));
        }
    }

    function doLogin()
    {
        if (!$this->request->hasPost())
            return;

        $user = $this->toolkit->getUser();

        $this->useForm('login_form');
        $this->setFormDatasource($this->request);

        $this->_validateLoginForm();

        if (!$this->error_list->isValid())
            return;

        $login = $this->request->get('login');
        $password = $this->request->get('password');

        if (!$user->login($login, $password)) {
            $this->addError('Login or password incorrect!');
        } else {
            $this->toolkit->getSession()->set('user_id', $user->getId());
            $this->flashAndRedirect('You were logged in!', '/');
        }
    }

    protected function _validateLoginForm()
    {
        $this->validator->addRequiredRule('login');
        $this->validator->addRequiredRule('password');
        $this->validator->validate($this->request);
    }

    function doLogout()
    {
        $user = $this->toolkit->getUser();
        $user->logout();
        $this->toolkit->getSession()->remove('user_id');
        $this->response->redirect('/');
    }

    function doDisplay()
    {
        echo '&nbsp;UitreeController::doDisplay()';
        $this->cart = $this->_getCart();

        //Total summ is : <b>${$#cart.total_summ|number:2, '.', ' '}</b>

//        $my_connect = lmbToolkit::instance()->getDefaultDbConnection();
//        $tree = new lmbTreeDecorator(
//            new lmbMPTree(
//                'sys_tree',
//                $my_connect,
//                array('id' => 'id',
//                    'parent_id' => 'parent_id',
//                    'level' => 'level',
//                    'identifier' => 'identifier',
//                    'path' => 'path'
//                )));

        //$var =  $tree ->getChildrenAll(1662);


    }

    function doItem()
    {
        echo 'UitreeController::doItem()';
        $this->id = 0;
        $request = $this->request;
        //echo('<br>request:<br>');
        //lmb_var_debug($request);

        $req_filed = 'identifier';
        $req_val = 0;
        if(isset($request['identifier']))
        {
            //echo('<br>yes_identifier<br>');
            $req_val =  $request['identifier'];
        }
        if(isset($request['id']))
        {
            //echo('<br>yes_id<br>');
            $req_val = $request['id'];
        }
        //echo '<br>';
        if(is_numeric($req_val) && intval($req_val) - $req_val == 0)
            echo ' par_is_int';
        else
            echo ' par_is_NOT_int';


        $criteria = lmbSQLCriteria :: equal($req_filed, $req_val);
        $current = lmbCollection::toFlatArray(lmbActiveRecord :: find('Tree', $criteria));
        //echo('<br>par_val:');
        //lmb_var_debug($req_val);

        //echo('<br>size_result_by_identifier:');
        //lmb_var_debug(sizeof($current));

        if(sizeof($current) == 0) {
            echo('<br>size_result_by_identifier=0 ..');
            if(is_numeric($req_val) && intval($req_val) - $req_val == 0)
            {
                echo '<br>par_is_int';
                $criteria = lmbSQLCriteria :: equal('id', $req_val);
                $current = lmbCollection::toFlatArray(lmbActiveRecord :: find('Tree', $criteria));
                //echo('size_result_by_id:');
                //lmb_var_debug(sizeof($current));

                if(sizeof($current) != 0 ) {
                    //echo '<br>';
                    //lmb_var_debug($current);
                    //echo '<br>';
                    //lmb_var_debug($current[0]['id']);
                    $this->id = $current[0]['id'];
                }
            }
        } else {
            //lmb_var_debug($current);
            //lmb_var_debug($current[0]['id']);
            $this->id = $current[0]['id'];

        }

    //$this->id = $this->request->getInteger('id');
    $id = $this->id;
    echo ' this_id:'.$this->id;

    }

    function doShownode()
    {
        echo 'UitreeController::Shownode()';
        {
        $this->childrens = array();
        $this->specifications = array();
        $this->child_specs = array();
        $this->legacy_specs = array();
        $this->arr_notAdded = array();
        $this->specs = array();
        $this->pref = array();
        $this->id = 0;

        $request = $this->request;
        //echo('<br>request:<br>');
        //lmb_var_debug($request);

        $req_filed = 'identifier';
        $req_val = 0;
        if(isset($request['identifier']))
        {
            //echo('<br>yes_identifier<br>');
            $req_val =  $request['identifier'];
        }
        if(isset($request['id']))
        {
            //echo('<br>yes_id<br>');
            $req_val = $request['id'];
        }
        //echo '<br>';
        if(is_numeric($req_val) && intval($req_val) - $req_val == 0)
            echo ' par_is_int';
        else
            echo ' par_is_NOT_int';


        $criteria = lmbSQLCriteria :: equal($req_filed, $req_val);
        $current = lmbCollection::toFlatArray(lmbActiveRecord :: find('Tree', $criteria));
        //echo('<br>par_val:');
        //lmb_var_debug($req_val);

            //echo('<br>size_result_by_identifier:');
            //lmb_var_debug(sizeof($current));

        if(sizeof($current) == 0) {
            echo('<br>size_result_by_identifier=0 ..');
            if(is_numeric($req_val) && intval($req_val) - $req_val == 0)
            {
                echo '<br>par_is_int';
                $criteria = lmbSQLCriteria :: equal('id', $req_val);
                $current = lmbCollection::toFlatArray(lmbActiveRecord :: find('Tree', $criteria));
                //echo('size_result_by_id:');
                //lmb_var_debug(sizeof($current));

                if(sizeof($current) != 0 ) {
                    //echo '<br>';
                    //lmb_var_debug($current);
                    //echo '<br>';
                    //lmb_var_debug($current[0]['id']);
                    $this->id = $current[0]['id'];
                }
            }
        } else {
            //lmb_var_debug($current);
            //lmb_var_debug($current[0]['id']);
            $this->id = $current[0]['id'];

        }
        }
        //$this->id = $this->request->getInteger('id');
        $id = $this->id;
        echo ' this_id:'.$this->id;// .' id:'.$id. '<br>';

        try
        {
            //$node = Objoftree :: findById($id);//
            //$node = lmbActiveRecord :: findById('Tree', $id);
            //$node = Tree :: findById($id);

            //$criteria = lmbSQLCriteria :: equal($this->field_name, $value);
            //if(!$this->object->isNew())
            //    $criteria->addAnd(new lmbSQLFieldCriteria('id', $this->object->getId(), lmbSQLFieldCriteria :: NOT_EQUAL));
            //$records = lmbActiveRecord :: find($this->class, $criteria);
            //
            //$criteria = new lmbSQLFieldCriteria($this->field_name, $value);
            //if(!$this->user->isNew())
            //    $criteria->addAnd('id <> '. $this->user->getId());
            //
            //$criteria = lmbSQLCriteria :: equal($this->field_name, $value)->addAnd('parent_id = ' . ($this->parent_id ? $this->parent_id : $this->node->getParent()->getId()));
            //if(!$this->node->isNew())
            //    $criteria->addAnd('id <> '. $this->node->getId());

            //$this->items = lmbActiveRecord :: find($this->_object_class_name, array('criteria' => $criteria, 'sort'=>array('priority'=>'ASC')));



            $criteria = lmbSQLCriteria :: like ('path', '%/'.$id.'/');
            $cur_node = (lmbActiveRecord :: find('Tree', $criteria));
            $cur_node_path = '';
            if(isset($cur_node[0])&&(array_key_exists('path', $cur_node[0])))
            {
                $cur_node_path = $cur_node[0]['path'];
            }
            $criteria = lmbSQLCriteria :: like ('path', $cur_node_path.'%');
            $records = lmbCollection::toFlatArray(lmbActiveRecord :: find('Tree', $criteria));
            $this->childrens = $records;
            $ids_childrens =  array_column($records, 'id');

            $criteria = lmbSQLCriteria :: equal('id_sys_tree', $id);
            $node = lmbCollection::toFlatArray(lmbActiveRecord :: find('Objoftree', $criteria));
            $this->specifications = $node;

            $criteria = lmbSQLCriteria :: in('id_sys_tree', $ids_childrens);
            $node = lmbCollection::toFlatArray(lmbActiveRecord :: find('Objoftree',$criteria));
            $this->child_specs = $node;

            $cur_node_path = trim($cur_node_path, '/');
            $ids_from_path = explode("/", $cur_node_path);
            $criteria = lmbSQLCriteria :: in('id_sys_tree', $ids_from_path);
            $node = lmbCollection::toFlatArray(lmbActiveRecord :: find('Objoftree', $criteria));
            $this->legacy_specs = $node; //legacy or all *@todo distinct id for cur_node

            $arr_prIds_legacy = array_column($this->legacy_specs, 'id_pr');
            $arr_prIds_child = array_column($this->child_specs, 'id_pr');
            //array_column($records, 'first_name');
            $arr_diff = array_diff( $arr_prIds_legacy, $arr_prIds_child );
            //lmb_var_debug($arr_diff);
            $this->arr_notAdded = $arr_diff;

            //lmb_var_debug($ids_from_path);
            //$criteria = lmbSQLCriteria :: greaterOrEqual('id', 0);
            //$criteria->addAnd('id > '. $this->user->getId());

            $criteria = null;
            //$criteria = lmbSQLCriteria :: notEqual('importance', 0); // @todo Activation for production
            $records = lmbCollection::toFlatArray(lmbActiveRecord :: find('Preference', $criteria));
            //lmb_var_debug($records);
            $this->specs = $records;

            $preference = array();
            foreach($records as $key => $val) {
                $preference[ $val['id'] ] = $val['title'];
            }
            $this->pref = $preference;
            //lmb_var_debug($this->pref);

            //$product = Product :: findById($product_id);
            //$cart = $this->_getCart();
            //$cart->addProduct($product);
            //$this->flashMessage('Product "' . $product->getTitle() . '" added to your cart!');
        }
        catch(lmbARException $e)
        {
            $this->flashError('Wrong ...!');
        }
//        if(isset($_SERVER['HTTP_REFERER']))
//            $this->redirect($_SERVER['HTTP_REFERER']);
//        else
//            $this->redirect();
//        echo $this->getName().':'.$this->getCurrentAction();
    }

    function doInfo()
    {
        try {
            $order = new Order($this->request->getInteger('id'));
            if (!$order->belongsToUser($this->toolkit->getUser()))
                $this->flashAndRedirect('You can see only your orders!', '/');
            else
                $this->order = $order;
        } catch (lmbARException $e) {
            $this->flashAndRerdirect('Can\'t load order!', '/');
        }
    }

    function doShowOrder()
    {
        try {
            $order = new Order($this->request->getInteger('id'));
            if (!$order->belongsToUser($this->toolkit->getUser()))
                $this->flashAndRedirect('You can see only your orders!', '/');
            else
                $this->order = $order;
        } catch (lmbARException $e) {
            $this->flashAndRerdirect('Can\'t load order!', '/');
        }
    }

    protected function _getCart() //@todo static call in class Cart
    {
        $session = $this->toolkit->getSession();
        if(!$cart = $session->get('cart'))
        {
            $cart = new Cart();
            $session->set('cart', $cart);
        }

        return $cart;
    }


}
