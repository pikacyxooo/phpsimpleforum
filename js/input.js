$(function(){
	'use strict';

	window.Input = function(selector){
		var $ele,
		val,
		me = this,
		$error_tip,
		rule = {
			required:true
		};

		//获取输入的数据的值
		this.get_val = function(){
			return $ele.val();
		}

		//加载验证器
		this.load_validator = function(){
			val = me.get_val();
			this.validator = new Validator(val,rule);
		}

		//初始化Input
		function init(){
			get_ele();
			parseRule();
			me.load_validator();
			appear_error();
			listener();
		}

	
		//鼠标失去焦点时触发监听器
		function listener(){
			$ele.on('blur',function(){
				var valid = me.validator.isValid(me.get_val());
				if(valid){
					$error_tip.slideUp();
				}	
				else
					$error_tip.slideDown();
			})
		}

		//显示错误信息
		function appear_error(){
			$error_tip = $('#' + $ele.attr("name") + "-input-error");
		}

		//获得错误提示选择器
		function get_error_selector(){
			return '#' + $ele.attr("name") + "-input-error";
		}

		//获得该input节点
		function get_ele(){
			if(selector instanceof jQuery){
				$ele = selector;
			}
			else{
				$ele = $('selector');
			}
		}
		
		//解析rule
		function parseRule(){
			var rule_str = $ele.data('rule');
			if(!rule_str) return;
			var rule_arr = rule_str.split('||');
			for (var i =0; i<rule_arr.length;i++) {
				var rule_key = rule_arr[i].split(':')[0];
				var rule_val = rule_arr[i].split(':')[1];
				rule[rule_key] = JSON.parse(rule_val);
			}
		}
		init()
	}

});