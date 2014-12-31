<?php
$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-backend',
	'basePath' => dirname(__DIR__),
	'defaultRoute' => 'admin',
	'controllerNamespace' => 'backend\controllers',
	'bootstrap' => ['log'],
	'modules' => [],
	'components' => [
		'user' => [
			'identityClass' => 'backend\models\AdminUser',
			'enableAutoLogin' => true,
			'loginUrl' => ['admin/login'],
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'db' => [
			'dsn' => 'mysql:host=localhost;dbname=forsilv',
			'username' => 'root',
			'password' => '',
			'tablePrefix' => 'fsv_',
		],
		'errorHandler' => [
			'errorAction' => 'admin/error',
		],
	],
	'params' => $params,
];
