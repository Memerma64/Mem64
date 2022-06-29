/*$(document).ready(function() {
	$('.player-input').on('input', function () {
   // $('.player-input').keyup(function() {
        $(this).parents('form').find('.buy_btn').text('Загрузка...').prop('disabled',true);
		setTimeout(()=>{ 
			getf($(this).parents('form'));
			
        },500);
	}); 
	$('#good-select-1').change(function() {
        $(this).parents('form').find('.buy_btn').text('Загрузка...').prop('disabled',true);
		setTimeout(()=>{ 
			getf($(this).parents('form'));
			
        },500);
	});	
	$('#good-select-2').change(function() {
        $(this).parents('form').find('.buy_btn').text('Загрузка...').prop('disabled',true);
		setTimeout(()=>{ 
			getf($(this).parents('form'));
			
        },500);
	});
	$('#good-select-3').change(function() {
        $(this).parents('form').find('.buy_btn').text('Загрузка...').prop('disabled',true);
		setTimeout(()=>{ 
			getf($(this).parents('form'));
			
        },500);
	});
});
	
	function getf(form) {
		if (form.find('.player-input').val() == '') {
			form.find('.buy_btn').text('Введите ник и выберите привилегию').prop('disabled',true);
			return true;
		}
		if (form.find('select option:selected').attr('disabled') == 'disabled') {
			form.find('.buy_btn').text('Выберите товар').prop('disabled',true);
			return true;
		}
		$.get('ajax.php?player=' + form.find('.player-input').val() + '&category=' + form.find('#category').val() +
			'&goodid=' + form.find('select option:selected').attr('value'), 
                 function(data) {
						if (data=='Имеется более высокая привилегия')
							form.find('.buy_btn').text(data).prop('disabled',true);
						else form.find('.buy_btn').text(data).prop('disabled',false);
					return data;
				}
		);
	}
