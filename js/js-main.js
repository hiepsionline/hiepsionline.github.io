

$(document).ready(function () {
  if (!login) {
    changeBtnSubmit();
  }
});

function changeBtnSubmit() {
  var btnSubmits = $(".btn-submit");
  for (var i = 0; i < btnSubmits.length; i++) {
    var item = btnSubmits[i];
    item.innerHTML = '<a href="index.php?controller=login" class="btn btn-danger form-control font-weight-bold"><i class="fas fa-sign-in-alt" aria-hidden="true"></i> ĐĂNG NHẬP ĐỂ THỰC HIỆN</a>';
  }
}



$(".gold").on("keyup", function (event) {
  var selection = window.getSelection().toString();
  if (selection !== '') {
    return;
  }
  if ($.inArray(event.keyCode, [38, 40, 37, 39]) !== -1) {
    return;
  }
  var $this = $(this);
  var input = $this.val();
  var input = input.replace(/[\D\s\._\-]+/g, "");
  input = input ? parseInt(input, 10) : 0;
  $this.val(function () {
    return (input === 0) ? "" : input.toLocaleString("en-US");
  });
});


function formatNumber(number) {
  var amount = number.toLocaleString("en-US", {
    style: "currency",
    currency: "USD",
  });
  return amount.replace("$", "").replace(".00", "");
}

function viewMoreUser(t){
  var childrens = t.parentElement.children;
  childrens[2].style.display = (childrens[2].style.display == "block" ? "none" : "block");
}