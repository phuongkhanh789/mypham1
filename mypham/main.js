function signup(e) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var user = {
      username: username,
      email: email,
      password: password,
    };
    var json = JSON.stringify(user);
    localStorage.setItem(username, json);
    alert("dang ky thanh cong");
  }
  function login(e) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var user = localStorage.getItem(username);
    var data = JSON.parse(user);
    if (!user) {
      alert("Vui lòng nhập user name và password!");
    } else if (
      username == data.username &&
      email == data.email &&
      password == data.password
    ) {
      alert("Chúc mừng, bạn đã đăng nhập thành công vào SHIBE");
      window.location.href = "chaomung.html";
    } else {
      alert("Đăng nhập thất bại!!!");
    }
  }

  $(document).ready(function(){
    $('#eye').click(function(){
      $(this).toggleClass('open');
        $(this).children('i').toggleClass('fa-eye-slash fa-eye');
        if($(this).hasClass('open')){
            alert('Bạn vừa click vào hiển thị xem mật khẩu')
            $(this).prev().attr('type','text');
        } else{
            $(this).prev().attr('type','password');
        }
    });

  });
 