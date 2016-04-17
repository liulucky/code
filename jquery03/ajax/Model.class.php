<?php
	
	
	//写一个操作数据库的类
	class Model
	{
		protected $fields = '*';//存放用户存进来的字段

		protected $PRI;//主键

		protected $allField;//存放数据表的字段

		protected $limit;//存放limit条件的属性

		protected $where;

		protected $orderBy;

		protected $group;

		private static $db = null;

		private function __construct($tabName){
			$link = @mysql_connect(HOST,USER,PWD);
			if( !$link ) throw new Exception('数据库连接失败');

			mysql_select_db(DB);
			mysql_set_charset(CHARSET);
			$this->tabName = $tabName;

			//加载数据表的字段
			$this->loadFields();
		}

		static public function Db($tabName)
		{
			if( !self::$db ){
				self::$db = new Model($tabName);
			}

			return self::$db;
		}

		//平时写类，都是从方法开始写。属性就是看你方法需要什么属性就定义
		public function select()
		{

			/*
				select id,name from user where id=1 and name = 'jack' order by desc;
			 */
			$sql = "SELECT {$this->fields} FROM {$this->tabName} {$this->where} {$this->group}  {$this->orderBy} {$this->limit}";
			// echo $sql;
			$list = $this->query($sql);


			return $list;
		}

		public function query($sql)
		{
			$res = mysql_query( $sql );
			$list = array();
			if( $res ){
				while( $row = mysql_fetch_assoc($res) ){
					$list[] = $row;
				}

				return $list;
			}
			

			throw new Exception('SQL语句执行失败');
		}

		public function findOne( $id )
		{
			$sql = "select {$this->fields} from {$this->tabName} where {$this->PRI} = {$id}";

			$data = $this->query( $sql );

			return $data[0];
		}

		// order by 
/*		public function order($str)
		{
			$this->orderBy = 'order by '.$str;
			return $this;
		}*/

		public function __call($mName,$param)
		{
			if( $mName == 'order' ){
				$this->orderBy = 'order by '.$param[0];
			}elseif( $mName == 'group'){
				$this->group = 'group by '.$param[0];
			}else{
				throw new Exception("亲{$mName}你确定这个方法名正确吗？");
			}

			return $this;
		}

		public function execute( $sql )
		{
			$res = mysql_query( $sql );

			if( $res ){
				return mysql_insert_id()?mysql_insert_id():mysql_affected_rows();
			}

			throw new Exception('SQL语句执行失败');
		}

		public function del( $id )
		{
			$sql = "delete from {$this->tabName} where {$this->PRI} = {$id}";

			return $this->execute( $sql );
		}

		public function limit( $limit )
		{
			$this->limit = 'limit '.$limit;

			return $this;
		}

		/*
			$where['name'] = 'jack';
			$where['id'] = array('lt',1);
			$where['id'] = array('gt',1);
		 */
		public function where($where=array())
		{
			if( is_array($where) && !empty($where)){

				foreach( $where as $k => $val ){

					//  name = 'jack'
					//  id  > 1
					 if( is_array($val) ){

					 	$type = $val[0];

					 	switch($type){
					 		case 'lt':
					 			$result[] = "{$k} < {$val[1]} ";
					 			break;
					 		case 'gt':
					 			$result[] = "{$k} > {$val[1]} ";
					 			break;
					 	}
					 	
					 }else{

					 	$result[] = "{$k} = '{$val}'";
					 }
				}

				$this->where = 'where '.implode(' and ', $result);
			}
			
			return $this;
		}


		
		/*
		  $data['name'] = 'jack';
		  $data['sex']  = '男'
 		 */
		public function add($data)
		{
			//获取到字段
			$fields = array_keys($data);
			$fields = '`'.implode('`,`',$fields).'`';

			//拼接值
			$vals = array_values($data);
			$vals = "'".implode("','",$vals)."'";
			// echo $vals;exit;
			$sql = "insert into {$this->tabName}({$fields}) values({$vals})";
			// echo $sql;exit;
			return $this->execute($sql);
		}

		//==========扩展方法===============
		
		//接受用户需要查询的字段
		//一般用户只需要传递 'id,name' 这样的字符串进来
		public function field($str)
		{
			
	/*		echo '<pre>';
				print_r($this->allField);exit;
*/			// echo $this->fields;exit;

			//将用户传递的字段与数据表的字段进行对比。如果用户传递的字段不在数据表的字段中。就不要
			if( is_array($str) ){
				foreach( $str as $v ){

					if( in_array($v,$this->allField ) ){
						$data[] = $v;
					}
				}
				$this->fields = '`'.implode('`,`',$data).'`';

			}elseif(is_string( $str )){

				$arr = explode(',',$str);

				foreach( $arr as $v ){
					if( in_array($v,$this->allField ) ){
						$data[] = $v;
					}
				}
				$this->fields = '`'.implode('`,`',$data).'`';
			}

			// return $arr;
			// return $this->fields;
			return $this;
		}

		//这个方法看数据库有什么字段
		public function loadFields()
		{
			$sql = "desc {$this->tabName}";

			$data = $this->query($sql);

/*			echo '<pre>';
				print_r($data);*/

			foreach( $data as $k => $v){
	/*			echo '<pre>';
				print_r($k);
				print_r($v);*/
				//获取数据库的真正主键
				if( $v['Key'] == 'PRI'){
					$this->PRI = $v['Field'];
				}

				//获取数据库的所有字段
				$list[] = $v['Field'];
			}


			//将字段保存起来，因为我们在其他方法中需要使用
			$this->allField = $list;

		/*	echo '<pre>';
			print_r($list);*/

		}
	}
