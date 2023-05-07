<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
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
        <h3>SENIOR HIGH SCHOOL CLASS RECORD</h3>
    </div>
    <div class="text-center" style="font-style: italic;">
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
        <div style="width: 100px;" class="p-1 border border-dark">11</div>
    </div>
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px; padding-left: 10px;">Section</label>
        <div style="padding-right: 20px; width: 100px;" class="p-1 border border-dark">ABM 11-B</div>
    </div>
    </div>
	<div class="d-flex justify-content-around">
    <div style="display: flex; align-items: center;">
        <label for="row1" style="margin-right: 10px;">Grading Period</label>
        <div style="width: 250px;" class="p-1 border border-dark">FIRST QUARTER</div>
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
				<th rowspan="3" colspan="5">NAME OF THE STUDENTS</th>
				<th colspan="13">WRITTEN WORK </th>
                <th colspan="13">PERFORMANCE TASK </th>
                <th colspan="4">QUARTERLY ASSESSMENT </th>
                <th rowspan="3">INITIAL GRADE</th>
                <th rowspan="3">QUARTERLY GRADE</th>
                <th rowspan="4">Description</th>
			</tr>
          
			<tr>
                <th colspan="13">25%</th>
                <th colspan="13">50%</th>
                <th colspan="4">25%</th>
           
			</tr>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>TOTAL</th>
                <th>PS</th>
                <th>WS</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>TOTAL</th>
                <th>PS</th>
                <th>WS</th>
                <th>1</th>
                <th>TOTAL</th>
                <th>PS</th>
                <th>WS</th>
            </tr>
            <tr>
                <th></th>
                <th>Family Name</th>
                <th>First Name</th>
                <th>MI</th>
                <th>Sex</th>
                <th>15</th>
                <th>15</th>
                <th>15</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>45</th>
                <th>100.00</th>
                <th>25.00</th>
                <th>10</th>
                <th>30</th>
                <th>20</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>60</th>
                <th>100.00</th>
                <th>50.00</th>
                <th>50</th>
                <th>50</th>
                <th>100.00</th>
                <th>25.00</th>
                <th>100.00</th>
                <th>100</th>

            </tr>
		</thead>
		<tbody>
			<tr>
                <td>1</td>
                <td>Baldonado</td>
                <td>Angelo</td>
                <td>M.</td>
                <td>M</td>
                <td>15</td>
                <td>15</td>
                <td>15</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>45</td>
                <td>100.00</td>
                <td>25.00</td>
                <td>4</td>
                <td>30</td>
                <td>20</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>54</td>
                <td>90.00</td>
                <td>45.00</td>
                <td>20</td>
                <td>20</td>
                <td>40.00</td>
                <td>10.00</td>
                <td>80</td>
                <td>87</td>
                <td style="font-style: italic;">Very Satisfactory</td>
                
               

				
				

				
			</tr>
			<tr>
				
				
				
			</tr>
		</tbody>
	</table>
    <div class="d-flex justify-content-end p-0 m-2">
        <a href="adviser" class="btn btn-primary mx-1">Back</a>
        <a href="#" class="btn btn-primary mx-1">Export</a>
       
    </div>
</body>
</html>