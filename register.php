<html>
<head>
<title>สมัครมาชิก</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="save.php">
  Register Form <br>
  <table width="400" border="1" style="width: 400px">
    <tbody>
      <tr>
        <td width="125"> &nbsp;Username</td>
        <td width="180">
          <input name="txtUsername" type="text" id="txtUsername" size="20">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Confirm Password</td>
        <td><input name="txtConPassword" type="password" id="txtConPassword">
        </td>
      </tr>
      <tr>
        <td>&nbsp;Name</td>
        <td><input name="txtName" type="text" id="txtName" size="35"></td>
      </tr>
      <tr>
      <td>&nbsp;tel</td>
        <td><label for="txt_tel"></label>
        <input type="text" name="txt_tel" id="txt_tel"></td>
      </tr>
      <tr>
      <td>&nbsp;address</td>
        <td><label for="txt_address"></label>
        <input type="text" name="txt_address" id="txt_address"></td>
        </tr>
        <tr>
        <td>&nbsp;email</td>
        <td><label for="txt_email"></label>
        <input type="text" name="txt_email" id="txt_email"></td>
        </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Save">
</form>
</body>
</html>