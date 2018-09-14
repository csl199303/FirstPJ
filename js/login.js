function login() {
 
    var username = document.getElementById("username");
    var pass = document.getElementById("password");
 
    if (username.value == "") {
 
        alert("请输入用户名");
 
    } else if (pass.value  == "") {
 
        alert("请输入密码");
 
    } else if(username.value == "admin" && pass.value == "123456"){
 
        window.location.href="center.html";
 
    } else {
 
        alert("请输入正确的用户名和密码！")
 
    }
}

function signup() {

 
        window.location.href="home/signup.html";
 

}

 function enter() { 
    var username=document.getElementById("username").value;//获取form中的用户名 
    var password=document.getElementById("password").value; 
    var regex=/^[A-Za-z0-9]+$/;//声明一个判断用户名前后是否有空格的正则表达式 
    if(!regex.test(username)||username.length==0)//判定用户名的是否前后有空格或者用户名是否为空 
        { 
			alert("用户名只能够由大小写字母和数字组成！！！"); 
			return false; 
        } 
	    else if	(username.length>16||username.length<4)  
		{ 
			alert("用户名长度必须为4-16字节！！！"); 
			return false; 
		}
    if(!regex.test(password)||password.length==0)//同上述内容 
		{ 
			alert("密码只能够由大小写字母和数字组成！！！"); 
			return false; 
		}
    else if	(password.length>20||password.length<6)  
		{ 
			alert("密码长度为6-20字节！！！"); 
			return false; 
		}
      return true; 
} 
 function check() { 
     var username=document.getElementById("username").value; 
     var password=document.getElementById("password").value; 
     var assertpassword=document.getElementById("assertpassword").value; 
     var regex=/^[A-Za-z0-9]+$/; 
       
    if(!regex.test(username)||username.length==0)//判定用户名的是否前后有空格或者用户名是否为空 
        { 
			alert("用户名只能够由大小写字母和数字组成！！！"); 
			return false; 
        } 
	    else if	(username.length>16||username.length<4)  
		{ 
			alert("用户名长度必须为4-16字节！！！"); 
			return false; 
		}
    if(!regex.test(password)||password.length==0)//同上述内容 
		{ 
			alert("密码只能够由大小写字母和数字组成！！！"); 
			return false; 
		}
    else if	(password.length>20||password.length<6)  
		{ 
			alert("密码长度为6-20字节！！！"); 
			return false; 
		}
      if(password!=assertpassword){ 
        alert("两次密码不一致"); 
        return false; 
      } 
} 