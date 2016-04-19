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


/*            foreach( $this->data as $key=>$val ){
            
                $$key = $val;
            }*/

            //等效于上面的foreach()
            extract($this->data);

            //编译模板（这里所谓的编译其实就是正则替换）
            $fileName = $this->compile($tpl);

            include './view_c/'.$fileName;
        }

        protected function compile($tpl)
        {


            //先读取出这文件
            $str = file_get_contents($tpl);

            //正则替换
            //目标：{$title} 替换成 <?php echo $title

            //准备一个正则
            $pattern = '/\{(.*?)\}/';            

            //替换为
            $replacement = '<?php echo \\1 ?>';

            $newStr = preg_replace($pattern, $replacement, $str);

            //将新字符串保存为一个新文件
            $fileName = md5($tpl).'.html';


            if(!file_exists('./view_c')){
                mkdir('./view_c');
            }

            file_put_contents('./view_c/'.$fileName, $newStr);

            return $fileName;
        }
    }
    
    
