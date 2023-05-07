<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<html>
<head>
	<title>School Form 1</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
			font-size: 14px;
            margin-top: 30px;
		}
		table, th, td {
			border: 1px solid black;
			/* padding: 5px; */
			text-align: center;
		}
		th {
			background-color: white;
			font-weight: bold;
            color: black
		}
        .logo {
        margin: 10px; /* Add margin to the container */
 
        }
        .logo img:first-child {
        margin-right: 20px; /* Add margin to the first image */
        }
        .logo img:last-child {
        float: right; /* Float the second image to the right */
        margin-left: 20px; /* Add margin to the left of the second image */
        }
        
    
	</style>
</head>
<body>
    
	<div class="text-center">
    <h3>School Form 1 School Register for Senior High School (SF1-SHS)1</h3>
    </div>
    <div class="logo">
        <img src="assets/images/logodeped.jpg" alt="" style="width: 75px; height: 75px;">
        <img src="assets/images/test.png" alt="" style="width: 75px; height: 75px; float: right;">
    </div>
    
    <div class="d-flex justify-content-between">
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px;">School Name</label>
        <div style="width: 150px;" class="p-1 border border-dark">Carlos Gonzales HS</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px;">School ID</label>
        <div style="width: 150px;" class="p-1 mr-2 border border-dark">300748</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px;">District</label>
        <div style="width: 150px;" class="p-1 border border-dark">San Rafael </div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px;">Division</label>
        <div style="width: 150px;" class="p-1 border border-dark">Bulacan</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px;">Region</label>
        <div style="padding-right: 20px; width: 100px;" class="p-1 border border-dark">Region III</div>
    </div>
    </div>
    <div class="d-flex justify-content-between">
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 40px;">Semester</label>
        <div style="width: 150px;" class="p-1 border border-dark">First Semester</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px;">School Year</label>
        <div style="width: 150px;" class="p-1 mr-2 border border-dark">2022 - 2023</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-left: 175px;">Grade Level</label>
        <div style="width: 150px;" class="p-1 mr-3 border border-dark">Grade 12</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px;">Track and Strand</label>
        <div style="width: 150px;" class="p-1 border border-dark">TVL</div>
    </div>
    </div>
    <div class="d-flex justify-content-between">
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 53px;">Section</label>
        <div style="width: 150px;" class="p-1 border border-dark">TVL 12 - C2</div>
    </div>
    <div class="mx-auto"style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px;">Course (For TVL only)</label>
        <div style="width: 150px;" class="p-1 mr-6 border border-dark">ICT</div>
    </div>
    </div>

	<table>
        
		<tr>
			<th rowspan="2">LRN</th>
			<th rowspan="2">Name (Last Name, First Name, Middle Name)</th>
			<th rowspan="2">Sex(M/F)</th>
            <th rowspan="2">Birthdate (mm/dd/yyyy)</th>
            <th rowspan="2">Age</th>
            <th rowspan="2">Religious Affilication</>
			<th colspan="4">Complete Address</th>
			<th colspan="2">Parents</th>
            <th rowspan="2">Remarks</th> 
		</tr>
		<tr>
            <th>House #/ Street/ Sitio/ Purok</th>
			<th>Barangay</th>
			<th>Municipality/ City</th>
			<th>Province</th>
			<th>Father's Name (Last Name, First Name, Middle Name)Telephone Number</th>
			<th>Mother's Maiden Name (Last Name, First Name, Middle Name)</th>
			
		</tr>
		<tr>
                <td>105104100003</td>
                <td>ALVARO,RICH VILLAFANIA</td>
                <td>M</td>
                <td>03/11/2005</td>
                <td>17</td>
                <td>Christianity</td>
                <td></td>
                <td>SAN AGUSTIN</td>
                <td>SAN RAFAEL</td>
                <td>BULACAN</td>
                <td>ALVARO, ERODERICK SURBAN</td>
                <td>VILLAFANIA,ANDREA,LONGCOP,</td>
                <td>T/I DATE:2022-09-12</td>
		</tr>
		<tr>
		        <td>105951100002</td>
                <td>ANGELES,JOHN MARK GONZALES</td>
                <td>M</td>
                <td>02/21/2004</td>
                <td>18</td>
                <td>Christianity</td>
                <td></td>
                <td>VIZAL SANTO CRISTO</td>
                <td>CANDABA</td>
                <td>PAMPANGA</td>
                <td>ANGELES, REYNANTE CRUZ</td>
                <td>GONZALES,EVANGELINE,CRUZ,</td>
                <td></td>
		</tr>
        <tr>
		        <td>136528100110</td>
                <td>ARBIZO,CARLO HAROLD ENRIQUEZ</td>
                <td>M</td>
                <td>04/18/2005</td>
                <td>17</td>
                <td>Christianity</td>
                <td></td>
                <td>CITRUS</td>
                <td>CITY OF SAN JOSE DEL MONTE</td>
                <td>BULACAN</td>
                <td>ARBIZO, DOMINADOR DELFIN,</td>
                <td>ENRIQUEZ,REA YVONNE,DONCILLO,</td>
                <td>T/I DATE:2022-08-22</td>
		</tr>
        <tr>
		
		</tr>
    
	</table>
    <div class="d-flex justify-content-end p-0 m-2">
        <a href="adviser" class="btn btn-primary mx-1">Back</a>
        <a href="#" class="btn btn-primary mx-1">Export</a>
       
    </div>
</body>
</html>