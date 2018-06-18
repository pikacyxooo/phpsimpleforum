$(function () {
	'use strict';
	
	var $inputs = $('[data-rule]'),
	inputs=[],
	$form = $('#form-sign-up'),
	$submit = $('.submit-right'),
	success = 0;


	$inputs.each(function(index,element){
			var tmp = new Input($(element));
			inputs.push(tmp);
	})
	console.log($form.attr('id'));
	$form.on('submit',function(){
		$inputs.trigger('blur');

		for (var i =0;i<inputs.length; i++) {
			if (inputs[i].validator.isValid()) {
				success = success + 1;
			}
		}
		if (success === inputs.length) {
			$submit.show();
		}
		else{
			alert('注册失败');
		}
		
 	})

});
