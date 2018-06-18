$(function() {
	'use strict';

	 window.Validator = function(val,rule) {
	 	
	 	//验证需要验证的项
	 	this.isValid = function(new_val){
	 		console.log(new_val);
	 		var key;
	 		if(new_val){
	 			val = new_val;
	 		}
	 		if(!rule.required && !val){
	 			return true;
	 		}
	 		for(key in rule){
	 			if (key === 'required') {
	 				continue;
	 			} 
	 			if(!this['validate_'+key]()){
	 				return false;
	 			}
	 		}
	 		return true;
	 	}
	 	// 验证输入的电子邮箱（正则）
		this.validate_pattern = function() {
			var reg = new RegExp(rule.pattern);
			return reg.test(val);
			//pattern:"^[A-Za-z0-9]+\@[A-Za-z0-9]+\.(com|cn)$"    "^[a-z0-9]*$"
		}

		// 验证输入的最大长度
		this.validate_max_length = function() {
			pre_max_min_length();
			return val.length <= rule.max_length;
		}

		// 验证输入的最小长度
		this.validate_min_length =function() {
			pre_max_min_length();
			return val.length >= rule.min_length;
		}
		
		//验证是否可为空
		this.validate_required = function(){
			if(val.trim())
				return true;
			return false;
		}	
		//验证输入字符串长度的准备工作
		function pre_max_min_length() {
			return val.toString();
		}
	
	}
});