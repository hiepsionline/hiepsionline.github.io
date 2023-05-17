var BaseCompTopup = function() {
    var e = function() {
        jQuery(".js-member-topup").submit(function(e) {
            jQuery(this);
            jQuery.ajax({
                method: "POST",
                url: jQuery(this).attr("action"),
                data: jQuery(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    jQuery("#btn-topup").html('Đang xử lý <i class="fa fa-spinner fa-spin"></i>').attr("disabled", !0)
                },
                complete: function() {
                    jQuery("#btn-topup").html("Gửi đơn").attr("disabled", !1)
                }
            }).done(function(e) {
				if(e.err == 0){
					swal("Thành công", e.msg, "success").then(function() {
						location.reload()
					})
				} else {
				    swal("Thất  bại", e.msg,"error")

				}
            }),
            e.preventDefault()
        })
    };
    return {
        init: function() {
            e()
        }
    }
}();
jQuery(function() {
    BaseCompTopup.init()
});
