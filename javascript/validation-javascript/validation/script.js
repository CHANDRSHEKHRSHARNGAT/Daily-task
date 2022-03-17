jQuery('#frm').validate({
	rules:{
		name:"required",
		gender:"required",
		
		email:{
			required:true,
			email:true
			
			  
		},
		phone:{
			required:true,
			maxlength:10
			 
		},

		adress:{
			required:true,
			alphabet:10
			 
		},
	},messages:{
		name:"Please enter your name",

		
		email:{
			required:"Please enter valid email",
			email:"Please enter valid email",

			
		},phone:{
			required:"Please enter your number",
			maxlength:"Phone must be 10 digit long"
		
		},
		adress:{
			required:"Please enter valid adress",
			adress:"Please enter valid adress",

			
		},
	},
	submitHandler:function(form){
		form.submit();
	}
});