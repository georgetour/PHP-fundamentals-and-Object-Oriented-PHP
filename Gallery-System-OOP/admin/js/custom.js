$(document).ready(function(){
	
	var user_href;
	var user_href_splitted;
	var user_id;
	var image_src;
	var image_src_splitted;
	var image_id;

	
	//Enables the button when click an image in modal
	$(".modal_thumbnails").click(function(){
		
		$("#set_user_image").prop('disabled',false);
		
		//Getting the the href from the delete anchor tag
		user_href = $("#user-id").prop('href');
		
		//Splitting the value into array and getting only the id
		user_href_splitted = user_href.split("=");
		user_id = user_href_splitted[user_href_splitted.length - 1];
		
		//Src of clicked image
		image_src = $(this).prop("src");
		image_src_splitted = image_src.split("/");
		image_id = image_src_splitted[image_src_splitted.length - 1];
		
		
		
	
	});
	
});