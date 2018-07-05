<?php 

	$string_redis = new Redis();
	$string_redis ->connect('127.0.0.1',6379);
	/*$redis = new ReflectionClass('Redis');
	$redis_method = $redis->getMethods();
	var_dump($redis_method);*/

	$string_redis->set('stu_1','hanlibao');
	
	$string_redis->setex('stu_2','30','zhnagzuo');

	$string_redis->setnx('stu_1','wangbo');
	$string_redis->setnx('stu_3','wangbo');

	echo $string_redis->get('stu_1'); echo "<br/>"; 
	echo $string_redis->get('stu_2'); echo "<br/>"; 
	echo $string_redis->get('stu_3');echo "<br/>"; 

	echo $string_redis->GETSET('stu_1','zhanfei'); echo "<br/>"; 
	$string_redis->setrange('stu_1',5,'redis');
	echo $string_redis->get('stu_1');echo "<br/>"; 
	echo $string_redis->strlen('stu_1');echo "<br/>"; 

	$arr = ['stu_100'=>'tom','stu_101'=>'jack'];
	$string_redis->mset($arr);
	$mget = $string_redis->mget(['stu_100','stu_1','stu_101']);
	var_dump($mget);
	$arr1 =['stu_101'=>'Rose','stu_102'=>'gerase'];
	$string_redis->msetnx($arr1);
	$mget = $string_redis->mget(['stu_100','stu_1','stu_101','stu_102']);
	var_dump($mget);
	echo "<br/>"; 
	echo $string_redis->getRange('stu_1',0,3);
	$keys = $string_redis->keys('*');
	var_dump($keys);

	
/*
3	GETRANGE key start end 
返回 key 中字符串值的子字符




14	PSETEX key milliseconds value
这个命令和 SETEX 命令相似，但它以毫秒为单位设置 key 的生存时间，而不是像 SETEX 命令那样，以秒为单位。
15	INCR key
将 key 中储存的数字值增一。
16	INCRBY key increment
将 key 所储存的值加上给定的增量值（increment） 。
17	INCRBYFLOAT key increment
将 key 所储存的值加上给定的浮点增量值（increment） 。
18	DECR key
将 key 中储存的数字值减一。
19	DECRBY key decrement
key 所储存的值减去给定的减量值（decrement） 。
20	APPEND key value
如果 key 已经存在并且是一个字符串， APPEND 命令将指定的 value 追加到该 key 原来值（value）的末尾。
*/