<!DOCTYPE html>

<head></head>
<body>

こちらはhtmlです

<?php

	//コメント
	/*
	コメント複数
	*/
	echo('こちらはphpです');

	$test1 = 123;
	$test2 = 456;
	$test3 = $test1 . $test2;

	echo $test3;

	//変数デバックに
	var_dump($test3);

	const MAX = 10;
	//const MAX = 12;でうわがきは無理

	echo MAX;

	$array = [1,2,3];

	echo $array[0];
	echo '<pre>';
	var_dump($array);
	echo '</pre>';

	$array2 = [
		[1,2,3],
		[4,5,6],
		[7,8,9]
	];

	echo '<pre>';
	var_dump($array2);
	echo '</pre>';

	echo $array2[1][2];

	$array_member = [
		'name' => '本田',
		'height' => 170,
		'hobby' => 'サッカー'
	];

	echo '<pre>';
	var_dump($array_member);
	echo '</pre>';

	echo $array_member['hobby'];

	$array_member_2 = [
		'本田' => [
			'height => 170',
			'hobby' => 'サッカー'	
		],
		'香川' => [
			'height' => '180',
			'hobby' => 'サッカー'
		]
	];

	echo $array_member_2['香川']['height'];

	$height = 170;

	if ($height === 180) {
		echo '身長は' . $height . 'cmです';
	} else {
		echo '身長は' . $height . 'cmではありません';
	}

	echo '<br>';

	$signal = 'red';

	if ($signal === 'red') { //==は等しい、===は型も等しい
		echo 'とまれ';
	} else if ($signal === 'yellow') {
		echo '進んでもよい';
	} else {
		echo '進め';
	}

	$if_test = '1';

	if(!empty($if_test)) {
		echo '変数は空ではありません';
	}

	$math = 80;
	$comment = $math > 80 ? 'good' : 'not good';
	echo $comment;

	$members = [
		'name' => 'honda',
		'height' => 170,
		'hobby' => 'football'
	];

	foreach($members as $key => $value) {
		echo $key . 'は' . $value;
	}

	$members2 = [
		'honda' => [
			'height' => 170,
			'hobby' => 'football'
		],
		'kagawa' => [
			'height' => 160,
			'hobby' => 'football'
		]
		];

	foreach($members2 as $member1) {
		foreach($member1 as $key => $value){
			echo '<br>';
			echo $key . 'は' . $value;
		}
	}

	for($i = 0; $i < 10; $i++){
		echo $i;
	}

	$j = 0;
	while ($j < 5) {
		echo $j;
		$j++;
	}

	//switchは使わないほうが好ましい(==で判定される、型無視されてしまう)
	$data = 1;
	switch($data){
		case 1:
			echo '1です';
			break; //break必須
		case 2:
			echo '2です';
			break;
		case 3:
			echo '3です';
			break;
		default:
			echo '１～３ではありません';
	}
?>

</body>