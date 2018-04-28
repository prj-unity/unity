$(function() {

	// 検索画面から詳細画面を開く
	// 詳細画面から検索画面に戻る
	$(document).on('click', '.post_link', function() {
		sendPost(
			$(this).attr('href'),
			JSON.parse($('input[name="search_cond"]').val())
		);
		return false;
	});

	// お問い合わせ
	$(document).on('click', '.request_link', function() {
		sendPost($(this).attr('href'), {
			'provider_id': $('input[name="id"]').val()
		});
		return false;
	});

	/**
	 * JavascriptでPOST送信する
	 *
	 * @params {string} action 送信先URL
	 * @params {object} data 送信データ
	 */
	function sendPost(action, data) {
		if (typeof(data) == 'undefined') data = {};
		var form = $('<form>').attr({
			method: 'post',
			action: action,
		}).appendTo('body'),
			append = function(key, val) {
				$('<input>').attr({
					type: 'hidden',
					name: key,
					value: val,
				}).appendTo(form);
			};
		for (var idx in data) append(idx, data[idx]);
		form.submit().remove();
	}
});
