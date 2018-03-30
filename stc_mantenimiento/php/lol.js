(function($) {
		$( "#tags" ).autocomplete({
			source: "tags2.php",
			 autoFocus: true,
			 selectFirst: true,
			 typeAhead: true,
			 minChars: 0,
			 minLength:0,
			 autoFocus: true,
			 select:function(e,u) { 
				var option_selected = u.item.value;
				$(this).autocomplete('search', option_selected);
			}
  			  			
		}).keyup(function() {
    var isValid = false;
    for (i in validOptions) {
        if (validOptions[i].toLowerCase().match(this.value.toLowerCase())) {
            isValid = true;
        }
    }
	valoractual=this.value;
	if (valoractual.length<previousValue.length)
	{
		previousValue = this.value;
	} else 
	{
		if (!isValid) {
			this.value = previousValue
		} else {
			previousValue = this.value;
		}
	}
	
}).blur(function(){
	
    $(this).autocomplete('enable');
})
.focus(function () {
	if (this.value=="Categorias...") this.value='';
    $(this).autocomplete('search', this.value);
});

.data( "autocomplete" )._renderItem = function( ul, item ) {
			return $( "<li></li>" )
				.data( "item.autocomplete", item )
				.append( "<a>" + item.label + "<br>" + item.desc + "</a>" )
				.appendTo( ul );
		};