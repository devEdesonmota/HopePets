$(document).ready(function(){
	setTimeout(function(){
		$('#fade').fadeOut(1000,function(){
			window.open('login_view.html','_self');
		});
	},1500);
});