$(function() {
	// Label
	$('.labelized').each(function() {
		var me = $(this);
		var targ = $('#'+me.attr('for'));
		var txt = me.text();
		if (targ.length) {
			if (targ.is('#password')) {
				function foc() {
					var mme = $(this);
					if (mme.is('[type=text]')) {
						mme.replaceWith('<input type="password" name="ocPword" id="password" />');
						$('#password').focus().blur(blu);
					}
				}
				function blu() {
					var mme = $(this);
					if (mme.val().length == 0 && mme.is('[type=password]')) {
						mme.replaceWith('<input type="text" name="ocPword" id="password" value="'+txt+'" />');
						$('#password').focus(foc);
					}
				}
				targ.blur(blu).blur();
			} else {
				targ.focus(function() {
					if (targ.val() == txt)
						targ.val('');
				})
				.blur(function() {
					if (targ.val().length == 0)
						targ.val(txt);
				}).blur();
			}
		}
	});
});
