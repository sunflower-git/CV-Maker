<HEAD>
    <TITLE> Fill Information </TITLE>
    <SCRIPT language="javascript">
        function addRowWork(tableID) {
 
            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
			
 
            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name="chk_work[]";
            cell1.appendChild(element1);
 
            var cell2 = row.insertCell(1);
            cell2.innerHTML = rowCount;
 
            var cell3 = row.insertCell(2);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.name = "txt_work_name[]";
            cell3.appendChild(element2);
			
			var cell4=row.insertCell(3);
			var element3 = document.createElement("input");
            element3.type = "text";
            element3.name = "txt_work_position[]";
            cell4.appendChild(element3);
			
			var cell5=row.insertCell(4);
			var element4=document.createElement("input");
			element4.type="text";
			element4.name="txt_work_period[]";
			cell5.appendChild(element4);
 
 
        }
 
        function deleteRowWork(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
 
            }
			
			for (var i=1; i<rowCount; i++){
				var row = table.rows[i];
				row.cells[1].innerHTML=i;
			}
			
            }catch(e) {
                alert(e);
            }
        }
		
		 function addRowEducation(tableID) {
 
            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
			
 
            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name="chk_edu[]";
            cell1.appendChild(element1);
 
            var cell2 = row.insertCell(1);
            cell2.innerHTML = rowCount;
 
            var cell3 = row.insertCell(2);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.name = "txt_edu_name[]";
            cell3.appendChild(element2);
			
			var cell4=row.insertCell(3);
			var element3 = document.createElement("input");
            element3.type = "text";
            element3.name = "txt_edu_faculty[]";
            cell4.appendChild(element3);
			
			var cell5=row.insertCell(4);
			var element4=document.createElement("input");
			element4.type="text";
			element4.name="txt_edu_profession[]";
			cell5.appendChild(element4);
			
			var cell6=row.insertCell(5);
			var element5=document.createElement("input");
			element5.type="text";
			element5.name="txt_edu_degree[]";
			cell6.appendChild(element5);
			
			var cell7=row.insertCell(6);
			var element6=document.createElement("input");
			element6.type="text";
			element6.name="txt_edu_period[]";
			cell7.appendChild(element6);
 
 
        }
		
		 function deleteRowEducation(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
 
            }
			
			for (var i=1; i<rowCount; i++){
				var row = table.rows[i];
				row.cells[1].innerHTML=i;
			}
			
            }catch(e) {
                alert(e);
            }
        }
		
		  function addRowLang(tableID) {
 
            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
			
 
            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name="chk_lang[]";
            cell1.appendChild(element1);
 
            var cell2 = row.insertCell(1);
            cell2.innerHTML = rowCount;
 
            var cell3 = row.insertCell(2);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.name = "txt_lang_name[]";
            cell3.appendChild(element2);
			
			
 
        }
		
		 function deleteRowLang(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
 
            }
			
			for (var i=1; i<rowCount; i++){
				var row = table.rows[i];
				row.cells[1].innerHTML=i;
			}
			
			
            }catch(e) {
                alert(e);
            }
        }
		
		function addRowSkill(tableID) {
 
            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
			
 
            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name="chk_skill[]";
            cell1.appendChild(element1);
 
            var cell2 = row.insertCell(1);
            cell2.innerHTML = rowCount;
 
            var cell3 = row.insertCell(2);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.name = "txt_skill_name[]";
            cell3.appendChild(element2);
			
			
 
        }
		
		 function deleteRowSkill(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
 
            }
			
			for (var i=1; i<rowCount; i++){
				var row = table.rows[i];
				row.cells[1].innerHTML=i;
			}
			
            }catch(e) {
                alert(e);
            }
        }
 
    </SCRIPT>
</HEAD>
<?php
if ($_POST['rad']=='design1')
$f='design1_pdf_creator.php';
else
$f='design2_pdf_creator.php';
if (isset($_POST['submit']))
{
echo '<form action="'.$f.'" method="post" enctype="multipart/form-data">
<h1 style="text-align: center;">Fill Information</h1>
<fieldset>
<legend>Personal Information</legend>
<input type="file" name="fileToUpload" id="file"/>
<table>

<tr><td>Name:</td><td><input type="txt" name="saxeli" ></td></tr>
<tr><td>Surname:</td><td><input type="txt" name="gvari"></td></tr>
<tr><td>Date Of Birth:</td><td><input type="txt" name="dabadeba"></td></tr>
<tr><td>Address:</td><td><input type="txt" name="misamarti"></td></tr>
<tr><td>Mobile:</td><td><input type="txt" name="mobile"></td></tr>
<tr><td>E-mail:</td><td><input type="txt" name="email"></td></tr>

</table>
</fieldset>
<br>';
if ($_POST['chk_w']=='work')
{
echo '<fieldset>
<legend>Work Experience</legend>
 <INPUT type="button" value="Add Row" onclick=addRowWork("dataTableWork") />
 <INPUT type="button" value="Delete Row" onclick=deleteRowWork("dataTableWork") />
<table id="dataTableWork">
<tr>
<th></th>
<th>Number</th>
<th>Organization</th>
<th>Position</th>
<th>Period</th>
</tr>
<tr>
<td><input type="checkbox" name="chk_work[]"/></TD>
<td>1</td>
<td> <input type="text" name="txt_work_name[]"/> </TD>
<td><input type="text" name="txt_work_position[]"/></td>
<td><input type="text" name="txt_work_period[]"/></td>
</tr>
</table>
</fieldset>
<br>';
}
if ($_POST['chk_e']=='edu')
{
echo '<fieldset>
<INPUT type="button" value="Add Row" onclick=addRowEducation("dataTableEducation") />
<INPUT type="button" value="Delete Row" onclick=deleteRowEducation("dataTableEducation") />
<legend>Education</legend>
<table id="dataTableEducation">
<tr>
<th></th>
<th>Number</th>
<th>University</th>
<th>Faculty</th>
<th>Profession</th>
<th>Degree</th>
<th>Period</th>
</tr>
<tr>
<td><input type="checkbox" name="chk_edu[]"/></TD>
<td>1</td>
<td> <input type="text" name="txt_edu_name[]"/> </TD>
<td><input type="text" name="txt_edu_faculty[]"/></td>
<td><input type="text" name="txt_edu_profession[]"/></td>
<td><input type="text" name="txt_edu_degree[]"/></td>
<td><input type="text" name="txt_edu_period[]"/></td>
</tr>
</table>
</table>
</fieldset><br>';
}
if ($_POST['chk_l']=='lang')
{
echo 
'<fieldset>
<legend>Languages</legend>
<INPUT type="button" value="Add Row" onclick=addRowLang("dataTableLanguage") />
<INPUT type="button" value="Delete Row" onclick=deleteRowLang("dataTableLanguage") />
<table id="dataTableLanguage">
<tr>
<th></th>
<th>Number</th>
<th>Language</th>
</tr>
<tr>
<td><input type="checkbox" name="chk_lang[]"/></TD>
<td>1</td>
<td> <input type="text" name="txt_lang_name[]"/> </td>
</tr>
</table>
</fieldset>
<br>';
}
if ($_POST['chk_s']=='skill')
{
echo '<fieldset>
<legend>Skills</legend>
<INPUT type="button" value="Add Row" onclick=addRowSkill("dataTableSkill") />
<INPUT type="button" value="Delete Row" onclick=deleteRowSkill("dataTableSkill") />
<table id="dataTableSkill">
<tr>
<th></th>
<th>Number</th>
<th>Skills</th>
</tr>
<tr>
<td><input type="checkbox" name="chk_skill[]"/></TD>
<td>1</td>
<td> <input type="text" name="txt_skill_name[]"/> </td>
</tr>
</table>
</fieldset>';
}echo '<br>
<input type="submit" value="Submit" name="submit"/>
</form>';
}
?>
