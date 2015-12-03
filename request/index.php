<div class="container">
	<div class="row">
		<div class="col-md-8">
			
		</div>
		<div class="col-md-4">
			<h1>Please Request!</h1>
			<p>ここは、弊社経理部向けのリクエストサイトです。・・・・・</p>
		</div>
		<form action="" method="post">
			<div class="col-md-12">
				<?php echo Html::anchor('request/create', 'Add new Request', array('class' => 'btn btn-success')); ?>
			</div>
		</form>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="well text-center">
			猫の手さえ借りたいあなたへ
		</div>
	</div>
</div>
<div class="row">
	<?php foreach ($requests as $item); ?>
	<div class="col-md-4">
		<h3><?php echo substr($item->body, 0, 36); ?></h3>
		<p>【投稿日時】<?php echo date("Y-m-d H;i", $item->created at); ?></p>
		<p>【IP】<?php echo $item->ip; ?></p>
		<p><?php echo substr($item->body, 0, 240); php?></p>
		<?php echo Html::anchor('request/edit/', $item->id,'<i class="icon-wrench"></i>Edit' array('class' => 'btn btn-default btn-sm')); ?>
		<?php echo Html::anchor('request /delete/'.$item->id, '<i lass="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-smbtn-danger', 'onclick' => "return confrim('このデータを削除します"よろしいですか？')")); ?>
	</div>
	<?php endforeach: ?>
</div>
