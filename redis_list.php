<?php

	$list_redis = new Redis();
	$list_redis->connect('127.0.0.1',6379);
	$list_redis->del('score');
	$list_redis->LPUSH('score',100,200,300,1000);
	//$list_redis->LPUSH('score',101);
	$list_redis->RPUSH('score',102);
	$list_redis->LINSERT('score','after',200,104);
	echo $list_redis->LLEN('score');
	$list = $list_redis->LRANGE('score',0,10);
	var_dump($list);

	/*$redis_class = new reflectionClass($list_redis);
	$a = new ReflectionMethod(new Redis, 'LINSERT');
	foreach ($a->getParameters() as $param) {
	    echo 'Name: ' . $param->getName() . PHP_EOL;
	    if ($param->isOptional()) {
	        echo 'Default value: ' . $param->getDefaultValue() . PHP_EOL;
	    }
	    echo PHP_EOL;
	}*/
	/**
	 * @AuthorHTL
	 * @DateTime  2018-07-09T11:26:10+0800
	 * @param     [type]
	 * @param     [type]
	 * @return    [type]
	 */
	function sum($a,$b){

	}
	

/*
1	BLPOP key1 [key2 ] timeout 
移出并获取列表的第一个元素， 如果列表没有元素会阻塞列表直到等待超时或发现可弹出元素为止。
2	BRPOP key1 [key2 ] timeout 
移出并获取列表的最后一个元素， 如果列表没有元素会阻塞列表直到等待超时或发现可弹出元素为止。
3	BRPOPLPUSH source destination timeout 
从列表中弹出一个值，将弹出的元素插入到另外一个列表中并返回它； 如果列表没有元素会阻塞列表直到等待超时或发现可弹出元素为止。
4	LINDEX key index 
通过索引获取列表中的元素
5	LINSERT key BEFORE|AFTER pivot value 
在列表的元素前或者后插入元素
6	LLEN key 
获取列表长度
7	LPOP key 
移出并获取列表的第一个元素
8	LPUSH key value1 [value2] 
将一个或多个值插入到列表头部
9	LPUSHX key value 
将一个值插入到已存在的列表头部
10	LRANGE key start stop 
获取列表指定范围内的元素
11	LREM key count value 
移除列表元素
12	LSET key index value 
通过索引设置列表元素的值
13	LTRIM key start stop 
对一个列表进行修剪(trim)，就是说，让列表只保留指定区间内的元素，不在指定区间之内的元素都将被删除。
14	RPOP key 
移除并获取列表最后一个元素
15	RPOPLPUSH source destination 
移除列表的最后一个元素，并将该元素添加到另一个列表并返回
16	RPUSH key value1 [value2] 
在列表中添加一个或多个值
17	RPUSHX key value 
为已存在的列表添加值
*/


	/**
	 * @AuthorHTL
	 * @DateTime  2018-07-09T11:26:24+0800
	 * @param     [type]
	 * @param     [type]
	 * @param     integer
	 * @return    [type]
	 */
	function hello($name,$age,$sex=1){

	}
	/**
	 * @AuthorHTL
	 * @DateTime  2018-07-09T11:26:50+0800
	 * @param     [type]
	 * @param     [type]
	 * @return    [type]
	 */
	function getExt($a,$c){

	}


	$a = 100;