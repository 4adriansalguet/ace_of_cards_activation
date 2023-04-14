$(document).ready(function () {
	$("form.sends-email").each(function () {
		var parent = $(this);
		var target = $("#sendform").attr('data-view') + "/" + parent.attr("action");
		function sldUp() {
			parent.find('.messages p').slideUp(300);
		}
		parent.find(":input").focus(function () {
			$(this).removeAttr('style');
			sldUp();
		});
		function resetCss() {
			parent.find(":input,textarea").not(".g-recaptcha-response").removeAttr('style');
			sldUp();
		}

		$(this).find('[type="submit"]').click(function (e) {
			var click = $(this);
			e.preventDefault();

			resetCss();

			$.ajax({
				type: "POST",
				data: parent.serialize(),
				url: target,
				beforeSend: function () {
					parent.find(".loading").toggle(200);
					click.css("pointer-events", "none").prop("disabled", true);
				},
				success: function (data) {
					setTimeout(function () {

						if (data == "sent") {
							parent.find(":input").val('');
							parent.find("input[type='checkbox']").attr('checked', false);
							// setTimeout(sldUp,5000);
							swal({
								type: "success",
								title: "Success",
								html: "We will get back to you as soon as possible",
							});
						}
						else {
							var msg = "";
							switch (data) {
								// customize the messages here
								case 'not-sent':
									msg = "Mailer error. Please try again.";
									break;
								case 'no-recaptcha':
									msg = "Please click on the reCaptcha.";
									break;
								case 'wrong-recaptcha':
									msg = "You have failed the reCaptcha test. Please try again.";
									break;
								case 'no-terms-conditions':
									msg = "Please agree to the terms and conditions first.";
									break;
								case 'no-consent':
									msg = "Please agree that you are submitting information so that we can respond to your inquiry";
									break;
								default:
									var errors = JSON.parse(data);
									$.each(errors, function (e) {
										msg = msg + errors[e]['msg'] + "<br>";
									});
									break;
							}
							swal({
								type: "error",
								title: "Error",
								html: msg
							});

						}
						parent.find(".loading").toggle(200);
						click.css("pointer-events", "auto").prop("disabled", false);
						$('.g-recaptcha').each(function (index, element) {
							grecaptcha.reset(index);
						});


					}, 2000)
				},
				error: function (data) {
					parent.find(".failed").slideDown(300);

				},
			});
		});
	});
});