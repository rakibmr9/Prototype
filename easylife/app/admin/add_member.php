
<fieldset>
    <legend><b>Add Member</b></legend>
        <br/>
		<table>
		<tr>
		<td>
        <table width="100%">
            <tr>
                <td width="130"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text"></td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="text">
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>User Name</td>
                <td>:</td>
                <td><input name="userName" type="text"></td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input name="password" type="password"></td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Confirm Password</td>
                <td>:</td>
                <td><input name="confirmPassword" type="password"></td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>   
                    <input name="gender" type="radio">Male
                    <input name="gender" type="radio">Female
                    <input name="gender" type="radio">Other
                </td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td valign="top">Date of Birth</td>
                <td valign="top">:</td>
                <td>
                    <input name="dob" type="text">	
                    <font size="2"><i>(dd/mm/yyyy)</i></font>
                </td>
                <td></td>
            </tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
                <td>Type</td>
                <td>:</td>
                <td>   
                    <input name="Type" type="radio">Admin
                    <input name="Type" type="radio">Stock Executive
					<input name="Type" type="radio">Order Executive
                    <input name="Type" type="radio">User
                </td>
                <td></td>
            </tr>	
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
                <td><input name="Blocked" type="checkbox"> Blocked</td>
    
                <td></td>
            </tr>
        </table>
		</td>
		<td>
		<table>
									<tr><td><img align="top" src="../resources/Image1.JPG" width="167"/></td></tr>
									<tr><td><input type="file" name="propic" accept="image/*"/>
						</td></tr>
								</table>
								</td>
								</tr>
								</table>
        <hr/>
        <a href="successmember.html?a=uedit"><button>Add</button></a> 
        <input type="reset">
</fieldset>