<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php 

	if(Yii::app()->user->isGuest){
		
	} else {
		
		echo '<p>Last login ' . date(' l, F d Y g:ia', Yii::app()->user->lastLoginTime) . '</p>';
	}



?>

