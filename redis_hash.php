<?php
	$hash_redis = new Redis();
	$hash_redis->connect('127.0.0.1',6379);

	$hash_redis->hmset('student_list',['stu_1'=>'hanlibao','stu_2'=>'renyue']);

	$hash_redis->hset('student_list','stu_3','100');
	$hash_redis->hsetnx('student_list','stu_3','101');
	$hash_redis->hsetnx('student_list','stu_4','105');


	echo $hash_redis->HGET('student_list','stu_3');
	echo $hash_redis->HGET('student_list','stu_100');
	$student_list = $hash_redis->HGETALL('student_list');
	var_dump($student_list);
	$student_keys = $hash_redis->HKEYS('student_list');
	$stu_val = $hash_redis->HVALS('student_list');
	var_dump($student_keys);
	var_dump($stu_val);
	echo $hash_redis->HLEN('student_list');echo "<br/>";
	echo $hash_redis->HEXISTS('student_list','stu_1');echo "<br/>";
	echo $hash_redis->HEXISTS('student_list','stu_100');echo "<br/>";
	echo $hash_redis->HINCRBY('student_list','stu_3',100);
	echo $hash_redis->HGET('student_list','stu_3');

	echo "<hr/>";

	echo $hash_redis->hsetnx('student_list','stu_l',[100,200]);

	$stu_l = $hash_redis->HGETALL('student_list');

	var_dump($stu_l);

	$hscan = $hash_redis->hscan('student_list',0);
	var_dump($hscan);

/*
1	HDEL key field1 [field2] 
删除一个或多个哈希表字段
2	HEXISTS key field 
查看哈希表 key 中，指定的字段是否存在。
3	HGET key field 
获取存储在哈希表中指定字段的值。
4	HGETALL key 
获取在哈希表中指定 key 的所有字段和值
5	HINCRBY key field increment 
为哈希表 key 中的指定字段的整数值加上增量 increment 。
6	HINCRBYFLOAT key field increment 
为哈希表 key 中的指定字段的浮点数值加上增量 increment 。
7	HKEYS key 
获取所有哈希表中的字段
8	HLEN key 
获取哈希表中字段的数量
9	HMGET key field1 [field2] 
获取所有给定字段的值
10	HMSET key field1 value1 [field2 value2 ] 
同时将多个 field-value (域-值)对设置到哈希表 key 中。
11	HSET key field value 
将哈希表 key 中的字段 field 的值设为 value 。
12	HSETNX key field value 
只有在字段 field 不存在时，设置哈希表字段的值。
13	HVALS key 
获取哈希表中所有值
14	HSCAN key cursor [MATCH pattern] [COUNT count] 
迭代哈希表中的键值对。
*/