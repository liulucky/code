<?php

    class UserModel extends Model
    {

        //得到所有的用户数据
        static public function getAllUser()
        {

            $userList = Model::Db('stu')->select();

            foreach ($userList as $key => $value) {
                
                if( $value['sex'] == '1' ){
                    $userList[$key]['sex'] = '男';
                }else{
                    $userList[$key]['sex'] = '女';
                }
            }

            return $userList;
        }
    }
