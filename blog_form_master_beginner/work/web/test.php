<?php
//id 変わらない　定数
//ブログ1
const ID=1;
$title="PHPテスト";
$content= 'PHPテストです';
$post_at='2020/01/19';
$tag=['PHP','プログラミング'];
$status=true;  //公開　//非公開 false

//ブログ2
const ID2=2;
$title2="PHPテスト2";
$content2= 'PHPテストです2';
$post_at2='2020/01/19';
$tag2=['PHP2','プログラミング2'];
$status2=true;  





// echo '<br>';




//ブログ1

$blog1 = array(
    
    'id'=>ID,
    'title'=>$title,
    'content'=>$content,
    'post_at'=>$post_at,
    'tag'=>$tag,
    'status'=>$status
); 

//ブログ２

$blog2= array(
    
    'id'=>ID2,
    'title'=>$title2,
    'content'=>$content2,
    'post_at'=>$post_at2,
    'tag'=>$tag2,
    'status'=>$status2
); 

// echo '<pre>';
// var_dump($blog2);
// c





// echo $blog1['title'];
//多次元配列
$blogs=[$blog1,$blog2];
// echo '<pre>';
// var_dump($blogs);
// echo '<pre>';


foreach($blog1 as $blog){
    echo '<pre>';
    echo $blog;
    echo '<pre>';
};

//foreach キーとバリュー
foreach($blog2 as $key=>$value){
//     echo '<pre>';
// echo $key.'='.$value;
// echo '<pre>';
};

foreach($blogs as $blog){
    foreach($blog as $value){
        echo '<pre>';
        echo $value;
        echo '<pre>';
    }

}


?>