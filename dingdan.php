<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>购物车</title>
<link rel="stylesheet" type="text/css" href="css/dingdan.css" />
</head>
       <script language="javascript">
		   function chkinput(form){
			   if(form.name.value==""){
				  alert("请输入收货人姓名!");
				  form.name.select();
				  return(false);
				}
				if(form.dz.value==""){
				  alert("请输入收货人地址!");
				  form.dz.select();
				  return(false);
				}
				if(form.yb.value==""){
				  alert("请输入收货人邮编!");
				  form.yb.select();
				  return(false);
				}
				if(form.tel.value==""){
				  alert("请输入收货人联系电话!");
				  form.tel.select();
				  return(false);
				}
				if(form.email.value==""){
				  alert("请输入收货人E-mail地址!");
				  form.email.select();
				  return(false);
				
				}
				if(form.email.value.indexOf("@")<0){
				    alert("收货人E-mail地址格式输入错误!");
				    form.email.select();
				    return(false);
				 }
				return(true);
			 }
		 </script>
<body>
<div id="header">
<?php
 include("include/header.php");
?>
</div>
<div id="nav" >
<?php
 include("include/nav.html");
?>
</div>
<img src="images/dingd.jpg"  />

<div id="content">
  <div id="dingdan">
    <h3 style="color:#FFF; font-size:15px;">请添写收货人信息</h3>

    <form action="adddingdan.php?"  method="post"    name="form1">
      <table width="261" border="0" bordercolor="#FF9900" id="tianxie" cellspacing="0" cellpadding="0" >
        <tr>
          <td width="88" height="35"><p>收货人姓名： </p></td>
          <td width="166"><input  name="name" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td width="88" height="35"><p>收货人性别： </p></td>
          <td width="166"><input type="radio" name="sex" value="女"  checked="checked"/>女<input type="radio" name="sex" value="男" />男</td>
        </tr>
                <tr>
          <td height="34">收货人地址：</td>
          <td><input name="dz" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">  </td>
        </tr>
        <tr>
          <td height="34"><p>邮 编：</p></td>
          <td><input name="yb" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td height="34"><p>联系电话：</p></td>
          <td><input name="tel" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td height="34"><p> 邮箱地址：</p></td>
          <td><input name="email" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td height="34"><p> 下单人姓名：</p></td>
          <td><input name="xm" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td height="34"><p>送货方式:</p></td>
          <td><select name="shff">
            <option selected="selected">普通快递</option>
            <option>平邮</option>
            <option>特快专递</option>
            <option>圆通</option>
          </select></td>
        </tr>
        <tr>
          <td colspan="2"> <div align="center">
            <input name="ok" type="submit" class="buttoncss" value="提交订单">      
            <input name="input" type="reset" value="重置订单" />
          </div></td>
        </tr>
      </table>
    </form>
     </div>
</div>
<div id="footer">
  <p>互联网信息服务备案编号：冀ICP备06001111号 技术支持：计算机系</p>
<p>Copyright @2012-2019,All Rights Reserved  京ICP证041189号</p>
</div>

</body>
</html>
