<?php

    class MyTpl
    {

        protected $data = array();

        //把变量给到模板
        public function assign($key, $val)
        {
            //需要定义成一个数组。因为有可能分配多个变量
            $this->data[$key] = $val;
        }
        

        //显示模板。想要哪个模板就写哪个模板的名字
        public function display($tpl)
        {

            // echo '<pre>';
            // print_r($this->data);

/*            $list = $this->data['userlist'];
            $sql = $this->data['sql'];*/

            foreach( $this->data as $key=>$val ){
                //$key的值可能是: list  sql
                //$$key   $list $sql
                $$key = $val;
            }

            // print_r($list);//直接打印报错。因为函数不能直接访问外面的全局变量
            include $tpl;
        }
    }
    
    
