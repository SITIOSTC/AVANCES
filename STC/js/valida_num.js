	var input=  document.getElementById('edad');
		input.addEventListener('input',function(){
	  		if (this.value.length > 2) 
	     		this.value = this.value.slice(0,2); 
		})