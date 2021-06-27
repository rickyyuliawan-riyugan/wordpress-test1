jQuery(function($){
	$('body').on('click', '.loadmore', function() {
 
		var button = $(this);
		var data = {
			'action': 'simple_press_loadmore',
			'page' : simple_press_loadmore_params.current_page,
			'cat' : simple_press_loadmore_params.cat
		};
 
		$.ajax({
			url : simple_press_loadmore_params.ajaxurl,
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...');
			},
			success : function( data ) {
				if( data ) { 
					$( 'div.blog-list-block' ).append(data);
					button.text( 'More Posts' );
					simple_press_loadmore_params.current_page++;
 
					if ( simple_press_loadmore_params.current_page == simple_press_loadmore_params.max_page ) { 
						button.remove();
					}
				} else {
					button.remove();
				}
			}
		});
	});
});