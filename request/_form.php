<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Body', 'body', array('class'=>'control-label')); ?>

				<?php echo Form::input('body', Input::post('body', isset($request) ? $request->body : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Body')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Ip', 'ip', array('class'=>'control-label')); ?>

				<?php echo Form::input('ip', Input::post('ip', isset($request) ? $request->ip : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Ip')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
