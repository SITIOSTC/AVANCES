jQuery(document).on('submit','#formlg',funtion(event){
	event.preventDefault();
	jQuery.ajax({
		url:'../',
		type: 'POST',
		dataType: 'json',
		data: ,
		beforeSend: funtion(){

		}
	})
	.done(funtion(respuesta){
		console.log("success");
	})
	.fail(funtion(resp){
		console.log("error");
	})
	.always(funtion(){
		console.log("complete");
	});
});