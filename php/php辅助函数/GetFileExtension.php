<?php
/**
 * Created by PhpStorm.
 * User: liuft
 * Date: 2016/3/7
 * Time: 15:46
 */

//第一种
// function get_extension($file)
// {
// 	$file = explode('.', $file);
//     return end($file);
// }
//第二种

// function get_extension($file)
// {
//     return substr(strrchr($file, '.'), 1);
// }


//第三种
// function get_extension($file){
// 	return pathinfo($file)['extension'];
// }
//


//第四种
//function get_extension($file)
//{
//    return substr($file, strrpos($file, '.') + 1);
//}

//第五种
//function get_extension($file)
//{
//	$file = preg_split('/\./', $file);
//    return end($file);
//}


//第六种
// function   get_extension($file){
// 	$file = strrev($file);
//     return strrev(substr($file,0,strpos($file,'.')));
// }
//

//第七种
// function get_extension($file)
// {
//     return pathinfo($file, PATHINFO_EXTENSION);
// }
// 
//第八种
// function get_extension($file)
// {
//      preg_match_all('/\.[a-zA-Z0-9]+/',$file,$data);
//      return !empty($data[0])?substr(end($data[0]),1):'';
// }


//第九种
// function get_extension($file){
//     return str_replace('.','',strrchr($file,'.'));
// }

//第十种
$info = new SplFileInfo('foo.txt');
var_dump($info->getExtension());

//暂时想这么多，以后想起来再补充

$file = "http://10.31.63.8:8081/M00/00/09/Ch8_CFaaMLqAO87JAACePvS0ZRk.webp";

$info = new SplFileInfo($file);
var_dump($info->getExtension());



//清除html标签

$str = '<a href="" onclick="">dsfds</a>a<a></a>bbb<div data-id="10" data-attr="20" >scs</div>';


$preg = '/<\/?[a-z]{1,10}\s*([a-zA-Z0-9\-_]*\s*=\s*(".*?"|\'.*?\'))*\s*>/';

preg_match_all($preg, $str, $data);
print_r($data);

$str = preg_replace($preg, '', $str);
echo $str;


$str="fasfas<img  src='a.jpg'><img  src='b.jpg'><img  src='c.jpg'>";

preg_match_all('/(?<=<img)  src=\'([a-z]*\.[a-z]*)*\'>/', $str, $data);

print_r($data);