<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<html>
<head>
	<title>Class Record</title>
</head>
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
			padding: 5px;
			text-align: center;
		}
		.logo {
        position: fixed; /* make the div element fixed */
        top: 0; /* position the div element at the top of the page */
        left: 0; /* position the div element at the left of the page */
        right: 0; /* position the div element at the right of the page */
		display: flex; /* add display flex to align items */
        align-items: center; /* center the images vertically */
        justify-content: space-between; /* add space between the images */
      
    }
        .logo img:first-child {
        margin-right: 20px; /* Add margin to the first image */
        }
        .logo img:last-child {
        float: right; /* Float the second image to the right */
        margin-left: 20px; /* Add margin to the left of the second image */
        }
</style>
<body>
    <div class="logo">
        <img src="assets/images/logodeped.jpg" alt="" style="width: 75px; height: 75px;">
        <img src="assets/images/test.png" alt="" style="width: 75px; height: 75px; float: right;">
    </div>
	<div class="text-center">
		<h3>CLASS RECORD</h3>
	</div>
	<div class="text-center">
		<p>(Pursuent to Deped Order 8 series of 2015)</p>
	</div>
	<div class="d-flex justify-content-around">
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px;">School ID</label>
        <div style="width: 150px;" class="p-1 border border-dark">300748</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px; padding-left: 10px;">Region</label>
        <div style="width: 150px;" class="p-1 mr-2 border border-dark">Region III</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px; padding-left: 10px;">Division</label>
        <div style="width: 250px;" class="p-1 border border-dark">Schools Division of Bulacan</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px; padding-left: 10px;">District</label>
        <div style="padding-right: 20px; width: 100px;" class="p-1 border border-dark">San Rafael</div>
    </div>
    </div>
	<div class="d-flex justify-content-around">
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px;">School Name</label>
        <div style="width: 250px;" class="p-1 border border-dark">Carlos Gonzales F High School</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px; padding-left: 10px;">School Year</label>
        <div style="width: 150px;" class="p-1 mr-2 border border-dark">2022 - 2023</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px; padding-left: 10px;">Grade Level</label>
        <div style="width: 100px;" class="p-1 border border-dark">12</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px; padding-left: 10px;">Section</label>
        <div style="padding-right: 20px; width: 100px;" class="p-1 border border-dark">ABM 11-B</div>
    </div>
    </div>
	<div class="d-flex justify-content-around">
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px;">Grading Period</label>
        <div style="width: 250px;" class="p-1 border border-dark">Carlos Gonzales F High School</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px; padding-left: 10px;">Subject</label>
        <div style="width: 250px;" class="p-1 mr-2 border border-dark">Earth and Life Science</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px; padding-left: 10px;">Teacher</label>
        <div style="width: 250px;" class="p-1 border border-dark">Kristin Marie T. Ventoso</div>
    </div>
    </div>

	<table class="">
		<thead>
			<tr>
				<th colspan="4">NAMES</th>
				<th style="font-style: italic;" colspan="2">GRADING PERIOD</th>
				<th rowspan="2">AVERAGE</th>
				<th rowspan="2">FINAL GRADE</th>
				<th rowspan="2">REMARKS</th>       	       	
				<th rowspan="2">DESCRIPTION</th>
			</tr>
			<tr>
				<th></th>
				<th>Family Name</th>
				<th>First Name</th>
				<th>MI</th>
				<th>FIRST QUARTER</th>
				<th>SECOND QUARTER</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Baldonado</td>
				<td>Angelo</td>
				<td>M</td>
				<td>87</td>
				<td>92</td>
				<td>90</td>
				<td>90</td>
				<td style="font-style: italic;" >Passed</td>
				<td style="font-style: italic;" >Outstanding</td>
				

				
			</tr>
			<tr>
				<td>2</td>
				<td>Carreon</td>
				<td>John Ric B.</td>
				<td>M</td>
				<td>88</td>
				<td>90</td>
				<td>89</td>
				<td>89</td>
				<td style="font-style: italic;" >Passed</td>
				<td style="font-style: italic;" >Outstanding</td>
				
				
			</tr>
            <tr>
				<td>3</td>
				<td>Dela Cruz</td>
				<td>Romeo II S.</td>
				<td>M</td>
				<td>80</td>
				<td>82</td>
				<td>81</td>
				<td>81</td>
				<td style="font-style: italic;" >Passed</td>
				<td style="font-style: italic;" >Satisfactory</td>
				
				
			</tr>
            <tr>
				<td>4</td>
				<td>Desiar</td>
				<td>Andrei MC Miller H.</td>
				<td>M</td>
				<td>80</td>
				<td>80</td>
				<td>80</td>
				<td>80</td>
				<td style="font-style: italic;" >Passed</td>
				<td style="font-style: italic;" >Satisfactory</td>
				
				
			</tr>
            <tr>
				<td>5</td>
				<td>Mapoy</td>
				<td>Cyrus Luxary H.</td>
				<td>M</td>
				<td>80</td>
				<td>84</td>
				<td>82</td>
				<td>82</td>
				<td style="font-style: italic;" >Passed</td>
				<td style="font-style: italic;" >Satifactory</td>
				
				
			</tr>
            <tr>
				<td>6</td>
				<td>Ohiman</td>
				<td>Ronnel R.</td>
				<td>M</td>
                <td>80</td>
				<td>82</td>
				<td>81</td>
				<td>81</td>
				<td style="font-style: italic;" >Passed</td>
				<td style="font-style: italic;" >Satisfactory</td>
				
				
			</tr>
            <tr>
				<td>7</td>
				<td>Ramos</td>
				<td>Renz Jazlee C.</td>
				<td>M</td>
				<td>86</td>
				<td>88</td>
				<td>87</td>
				<td>87</td>
				<td style="font-style: italic;" >Passed</td>
				<td style="font-style: italic;" >Very Satisfactory</td>
				
				
			</tr>
		</tbody>
	</table>
			<div class="d-flex justify-content-between align-items-center" style="font-size: 17px; font-weight: bold">
                    <p class="border-bottom border-dark">KRISTIN MARIE T. VENTOSO</p>
                    <p class="border-bottom border-dark">CESAR V. VALONDO</p>
            </div>
			<div class="d-flex justify-content-between mx-auto" style="font-size: 17px;">
                    <p>Subject Teacher</p>
                    <p>School Administrator</p>
            </div>
    <div class="d-flex justify-content-end p-0 m-2">
        <a href="adviser" class="btn btn-primary mx-1">Back</a>
        <a href="#" class="btn btn-primary mx-1">Print</a>
       
    </div>
</body>
</html>

