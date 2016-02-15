<?php
//представление списка новостей который виден любому пользователю
use yii\helpers\Html;
use yii\data\ActiveDataProvider;
?>
<div class="site-index">
    <div class="body-content">
<ul>
<?php 
//пройдемся по массиву в котором находятся данные из БД и отобразим на экран необходимую информацию
      foreach ($publications as $publication): ?>
	    <li>
		<?= Html::encode("{$publication->title} ({$publication->date})") ?>:<br>
		<?= $publication->descriptoin ?><br>
		<?= Html::a('See full text', ['publication/view', 'id' => $publication->id], ['class' => 'seeMore-link']) ?>
	    </li><br><br>
<?php endforeach; ?>
</ul>
</div>    
</div>
