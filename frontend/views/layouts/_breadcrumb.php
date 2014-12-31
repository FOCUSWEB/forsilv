<?php
/**
 * Created by PhpStorm.
 * User: FOCUS
 * Date: 2015/1/1
 * Time: 0:50
 * @var $this \yii\web\View
 */
?>
<?php if (Yii::$app->controller->route != "home/index") { ?>
	<div class="breadcrumb-box">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="<?php echo \yii\helpers\Url::toRoute('/'); ?>">首页</a></li>
				<li class="active">Contacts Us</li>
			</ul>
		</div>
	</div><!-- .breadcrumb-box -->
<?php } ?>