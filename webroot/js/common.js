$(function() {
	var request_provider_id = [];

	// 検索画面の絞り込みをデフォルトで閉じておく
	$(document).on('click', '#refineButton', function() {
		console.log('click');
		$('.refineToggle').slideToggle();
	});

	// 検索画面から詳細画面を開く
	// 詳細画面から検索画面に戻る
	$(document).on('click', '.post_link', function() {
		sendPost(
			$(this).attr('href'),
			JSON.parse($('input[name="search_cond"]').val())
		);
		return false;
	});

	// お問い合わせ(検索)
	$(document).on('click', '.request_link_search', function() {
		var ids = [];
		for (var i in request_provider_id) ids.push(request_provider_id[i]);
		if (ids.length) {
			sendPost($(this).attr('href'), {
				'provider_id': ids.join(',')
			});
		} else {
			alert('企業が未選択です。');
		}
		return false;
	});

	// 検索画面の全て選択
	$(document).on('click', '.selectAllButton', function() {
		var allCheck = $(this).val() == '全て選択する';
		$('.resultCheckBoxArea input[type="checkbox"]').each(function() {
			$(this).prop('checked', allCheck);
			var id = $(this).parents('.resultBox').data('id');
			var index = request_provider_id.indexOf(id);
			if (allCheck) {
				if (index < 0) request_provider_id.push(id);
			} else {
				if (index >= 0) delete request_provider_id.push(index);
			}
		});
		$('.selectAllButton').each(function() { $(this).val((allCheck) ? '全て選択解除する' : '全て選択する'); });
	});

	// 検索画面のチェックボックスを選択すると、データを保持する
	$(document).on('click', '.resultCheckBoxArea input[type="checkbox"]', function() {
		var id = $(this).parents('.resultBox').data('id');
		if ($(this).prop('checked')) {
			if (request_provider_id.indexOf(id) < 0) {
				request_provider_id.push(id);
			}
		} else {
			var index = request_provider_id.indexOf(id);
			if (index >= 0) {
				delete request_provider_id[index];
			}
		}
	});

	// お問い合わせ(詳細)
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
