<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�޸Ĺ���</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <h1><img src="images/logo.gif" />�������ݺ�̨����ϵͳ</h1>
</div>
<div id="left">
<?php
  	include("include/nav-left.html");
?>
</div>
<div id="right" >
  <script language="javascript">
  function chkinput(form)
   {
     if(form.title.value=="")
	 {
	   alert("�����빫������!");
	   form.title.select();
	   return(false);
	 }
     if(form.content.value=="")
	 {
	   alert("�����빫������!");
	   form.content.select();
	   return(false);
	 }
	 return(true);
   }
</script>
  <p style="background:#628e37; padding-left:10px; color:#FFF;">����ǰ��λ�ã�������������޸Ĺ���</p>
  <table width="670" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="175" bgcolor="#666666"><table width="670" height="175" border="0" align="center" cellpadding="0" cellspacing="1">
          <form name="form1" method="post" action="add-gonggao.php"  onSubmit="return chkinput(this)">
            <tr>
              <td width="82" height="25" bgcolor="#FFFFFF">�������⣺</td>
              <td width="585" bgcolor="#FFFFFF"><div  style="text-align:left; ">
                  <input type="text" name="title" size="50" class="inputcss"> 
              </div></td>
            </tr>
            <tr>
              <td height="125" bgcolor="#FFFFFF">�������ݣ�</td>
              <td height="125" bgcolor="#FFFFFF"><div style="text-align:left; ">
                  <textarea name="textarea" rows="8" cols="70" style="margin-left:10px;"></textarea>
                </div></td>
            </tr>
            <tr>
              <td height="25" colspan="2" bgcolor="#FFFFFF">
                  <input type="submit" name="submit" value="����" class="buttoncss"  style="width:55px; height:30px;">
                  &nbsp;&nbsp;
                  <input type="reset" value="��д" class="buttoncss "  style="width:55px; height:30px;">
             </td>
            </tr>
          </form>
        </table></td>
    </tr>
  </table>
</div>
<div id="footer">
  <p>��ַ�������г�����***·***�� ��Ȩ���У����������������޹�˾</p>
  <p>��������Ϣ���񱸰���ţ���ICP��06001111��  ����֧�֣��������Ϣ����ϵ</p>
</div>
</body>
</html>