jQuery.noConflict();

(function( $ ) {

  $(function() {
  	/** Globals **/
  	var path;
  	

  	if(window.location.hostname == "twil.io"){
 		path = window.location.origin;
 	} else if (window.location.hostname = "54.201.36.22"){
 		path = window.location.origin+"/twilioSms";
 	}


	var namespace = path+"/wp-json/SMS/";

  	var actions = {
  		init: function(){
  			this.sendSms();
  			this.listSms();
  		},
  		sendSms: function(){
		  	var endpoint = namespace+"send/";
		    $('form[name="sendSms"]').on('submit',function(e){
			    	e.preventDefault();

			    	var number = $(this).find('input[name="to"]').val();
			    	var message = $(this).find('textarea[name="message"]').val();

			    	if(number == "" || messsage == "") {
			    		alert("fill all fields.");
			    		return;
			    	}

			    	var ajax_settings = {
			    		method: "POST",
						url: endpoint,
						data: { 
							to: number, 
							content: message 
						}	
					};

					//alert(ajax_settings);

			    	$.ajax(ajax_settings).success(function(response){
			    		alert(response.delivery_status);
			    	}).error(function(response){
			    		alert(response.delivery_status);
			    	});
		   	});
		},
		listSms: function(){
			var $listSms = $("#listSms");
			if($listSms.length == 0)
				return;

			var endpoint = namespace+"list/";
			var $template = '<div class="row"><div class="col-lg-4"><div class="panel panel-default"><div class="panel-heading"><em>{date_sent}</em></div><div class="panel-body">{body}</div><div class="panel-footer">To: {to} | From: {from}</div></div></div></div>';
		
			var ajax_settings = {
	    		method: "GET",
				url: endpoint,	
			};

			//alert(ajax_settings);

	    	$.ajax(ajax_settings).success(function(response){
	    		$listSms.fadeOut(function(){
	    			$(this).empty();
	    			$.each(response.list, function(i, item){
	    			var item = $($template
						.replace("{body}",item.body)
						.replace("{to}",item.to)
						.replace("{from}",item.from)
						.replace("{date_sent}",item.date_sent)
						);
						$listSms.append(item);
		    		});
	    		}).fadeIn();
	    	}).error(function(response){
	    		alert("There was an error with your request.");
	    	});

		}
	}

	actions.init();

  });
})(jQuery);