	count = 0
	var notice = function(text)
	{
		if(text && text.length >= 0)
		{
			count++;
			if(count >=7)
			{	
				notice();
				count = 0;
			}
		    
		    $('#notice').prepend('<p onclick="$(this).remove()">'+text+'</p>');
		}
		else
		   $('#notice').html('');
	}
	
	$(document).ready(function(){
		
		var count = 1;
		$('input').each(function(){
			$(this).val($(this).attr('retval'));
			count++;
			if(count == 5)
				$('.datacapture').animate({'opacity' : '1.0'},500);
		});
	
	
		$('#colors div').click(function(){
			var active = $(this).attr('id');
			
			if(active == "notactive")
			{
				$(this).siblings().attr('id', 'notactive').animate({'border' : '5px solid transparent'}, 300);
				$(this).animate({'border' : '5px solid #abc326'}, 300);
				$(this).attr('id', 'active');
			}
			else
			{	
				$(this).attr('id', 'notactive');
				$(this).animate({'border' : '5px solid transparent'}, 300);
			}
		});
		
		$('input').click(function(){
			var retval = $(this).attr('retval');
			var value  = $(this).val();
			
			if(retval == value)
				$(this).val('');
		});
		$('input').blur(function(){
			var retval = $(this).attr('retval');
			var value  = $(this).val();
			
			if(value.length <=1)
			$(this).val(retval);
		});
		
		$('#save').click(function(){
			
			fname = ($('#fname').val() != $('#fname').attr('retval') ? $('#fname').val() : false);
			lname = ($('#lname').val() != $('#lname').attr('retval') ? $('#fname').val() : false);
			color = ($.find('#colors #active') ? $('#colors #active') : "asdas");
			dd = (!isNaN($('#dd').val()) ? $('#dd').val() : false);
			mm = (!isNaN($('#mm').val()) ? $('#mm').val() : false);
			yy = (!isNaN($('#yy').val()) ? $('#yy').val() : false);
			
			notice();
			
			if(fname && lname && color && dd && mm && yy && color.attr('id') == "active")
			{
				data = "fname="+$('#fname').val()+"&lname="+$('#lname').val()+"&dd="+$('#dd').val()+"&mm="+$('#mm').val()+"&yy="+$('#yy').val()+"&color="+$('#colors #active').attr('class');
				url  = "/add";
				$.ajax({
					type : "POST",
					url: "/add",
					data : data,
					success:function(resp)
					{
						jsn = $.parseJSON(resp);
						switch(jsn.status.code)
						{
							case "200":
								window.location.href = "/overview";
								break;
							default:
								notice(jsn.status.text);
								break;
						}
					},
					error:function()
					{
						notice();
						notice('error processing form try again');
					}
				});	
			}
			else
			{
				if(!fname)
					notice('please complete [first name]');
				if(!lname)
					notice('please complete [last name]');
				if(!dd)
					notice('please complete [dd]');
				if(!mm)
					notice('please complete [mm]');
				if(!yy)
					notice('please complete [yyyy]');
				if(color.attr('id') != "active")
					notice('please select a color');
				
			}
		});
		
		$('.header #title').click(function(){
		window.location.href = "/";
		});
		$('#dob input').keyup(function(){
			var maxlength = $(this).attr('maxlength');
			var value     = $(this).val();
			var retval    = $(this).attr('retval');
			
			if(value != retval && maxlength == value.length)
			{
				$(this).next().val('');
				$(this).next().focus();
			}			
		});
});