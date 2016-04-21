<?php

    class UserController extends Controller
    {

        public function index()
        {

            // $userList = Model::Db('stu')->select();
            
            // $userModel = new UserModel('stu');
            $userList = UserModel::getAllUser();

            // $userList = $userModel->getAllUser();
        
            //把性别1对应男  0对应女
            
            //像这种对数据的操作不建议放到控制器
/*            foreach ($userList as $key => $value) {
                
                if( $value['sex'] == '1' ){
                    $userList[$key]['sex'] = '男';
                }else{
                    $userList[$key]['sex'] = '女';
                }
            }*/

   
            $this->assign('list',$userList);

            $this->display('./user/index.html');
        }

        public function add()
        {

            echo '添加用户';
        }

    }
