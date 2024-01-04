<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
    *{
        margin:0;
        padding:0;
        font-family:sans-serif;
    }
    body {
        background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)),url();
        background-position:center;
        background-size:contain;
    }
    .container{
        width:1200px;
        height:500px;
        margin:3% auto;
        background: #ffff;
        border-radius:5px;
        position:relative;
        overflow:hidden;
    }
    small{
        text-align:center;
        font-weight:700;
        font-size:14px;
    }
    .container .form-div{
        width:1000px;
        position:absolute;
        top:80px;
        left:40px;
        transition:0.5s;
    }
    .container label{
        font-weight:700;
    }

    .form-div input[type="text"],input[type="password"],input[type="email"]{
        width:100%;
        padding:5px 5px;
        margin:5px 0;
        border:0;
        border-bottom: 1px solid #999;
        outline:none;
        background:transparent;
    }
    ::placeholder{
        color:#777;
    }

    .btn-box{
        width:100%;
        margin: 30px auto;
        text-align: center;
    }
    .form-div button{
        width:110px;
        margin:0 10px;
        height: 35px;
        background:linear-gradient(to right, #ff10f5,#ffad06);
        border-radius:30px;
        border:0;
        outline:none;
        color:#fff;
        cursor: pointer;
    }
    #Form2{
        left:1200px;
    }
    #Form3{
        left:1200px;
    }
    #Form4{
        left:1200px;
    }
    #Form5{
        left:1200px;
    }
    #Form6{
        left:1200px;
    }
    #Form7{
        left:1200px;
    }
    #Form8{
        left:1200px;
    }
    .step-row{
        width:1200px;
        height:60px;
        margin:0 auto;
        display:flex;
        align-items:center;
        box-shadow:0 -1px 5px -1px #000;
        position:relative'
    }
    .step-col{
        width:140px;
        text-align:center;
        color:#333;
        position:relative;

    }
    #progress{
        position:absolute;
        height:12%;
        left: 0;
        width:150px;
        background:linear-gradient(to right, #ff105f, #ffad06);
        transition:1s;
    }
    #progress::after{
        content:'';
        height:0;
        width:0;
        border-top:30px solid transparent;
        border-bottom:30px solid transparent;
        position:absolute;
        right:-20px;
        top:0;
        border-left:20px solid #ffad06; 
    }
    .hide {
        display:none;
        color:red;
    }

    .field-wrapper.has-error .hide {
        display:block !important;
    }
</style>

<div class="container">
    <form action="">
        <div class="form-div" id="Form1">
            <div class="row g-3">
                <div class="col-md-3 field-wrapper first-name-wrapper">
                    <label for="Username" class="form-label">Username *</label>
                    <input type="text" class="form-control text-validation first-name" placeholder="Input Username" id="txtUsername" required>
                    <div class="validation-msg first-name-error hide">
                        <p><i class="fas fa-exclamation-circle"></i> Username </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="txtPassword" class="form-label">Password *</label>
                    <input type="password" class="form-control text-validation" id="txtPassword" placeholder="Input Password" required>
                    <div class="validation-msg first-name-error hide">
                        <p><i class="fas fa-exclamation-circle"></i> Please tell us your first name</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="txtCPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control text-validation" id="txtCPassword" placeholder="Input Password" required>
                    <div class="validation-msg first-name-error hide">
                        <p><i class="fas fa-exclamation-circle"></i> Please tell us your first name</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="txtEmpNo" class="form-label">Employee No.</label>
                    <input type="text" class="form-control text-validation" id="txtEmpNo" placeholder="Employee Number" required>
                    <div class="validation-msg first-name-error hide">
                        <p><i class="fas fa-exclamation-circle"></i> Please tell us your first name</p>
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="cbdept" class="form-label">Department</label>
                    <select id="cbdept" class="form-select" required>
                        <option  value="0" selected>Choose...</option>
                        <option value="ITMD"> Information Technology Management Department </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="cbdiv" class="form-label">Division</label>
                    <select id="cbdiv" class="form-select" required>
                        <option value="0" selected>Choose...</option>
                        <option  value="ISMD"> Information Support and Management Division </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="cbPosition" class="form-label">Position</label>
                    <select id="cbPosition" class="form-select" required>
                        <option  value="0" selected>Choose...</option>
                        <option value="CPIII"> Computer Programmer III </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="cbstatus" class="form-label">Status</label>
                    <select id="cbstatus" class="form-select" required>
                        <option value="0" selected>Choose...</option>
                        <option value="5"> Permanent </option>
                        <option value="1"> Casual </option>
                        <option value="2"> Contractual </option>
                        <option value="3"> Job Order </option>
                        <option value="4"> Consultant </option>
                    </select>
                </div>
            </div>
            <div class="btn-box">
                <button type="button" id="Next1" class="Next1">Next</button>
            </div>
        </div>

        <div class="form-div" id="Form2">
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="Lastname" class="form-label">Lastname *</label>
                    <input type="text" class="form-control" id="txtLastname" required>
                </div>
                <div class="col-md-3">
                    <label for="Firstname" class="form-label">Firstname *</label>
                    <input type="text" class="form-control" id="txtFirstname">
                </div>
                <div class="col-md-3">
                    <label for="Middlename" class="form-label">Middlename</label>
                    <input type="text" class="form-control" id="txtMiddlename">
                </div>
                <div class="col-md-3">
                    <label for="Extension" class="form-label">Extension (JR, SR)</label>
                    <input type="text" class="form-control" id="txtExt">
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <label for="txtAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="txtAddress" placeholder="1234 Main St">
                </div>
                <div class="col-md-4">
                    <label for="txtAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="txtAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-4">
                    <label for="cbProvince" class="form-label">Province</label>
                    <select id="cbProvince" class="form-select">
                        <option value="0" selected>Choose...</option>
                        <option value="NCR" >National Capital Region</option>
                    </select>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-3">
                    <label for="cbCity" class="form-label">City</label>
                    <select id="cbCity" class="form-select">
                        <option value="0" selected>Choose...</option>
                        <option value="Marikina">Marikina</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="cbbrgy" class="form-label">Barangay</label>
                    <select id="cbbrgy" class="form-select">
                        <option value="0" selected>Choose...</option>
                        <option value="Malanday">Malanday</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="cbState" class="form-label">State</label>
                    <select id="cbState" class="form-select">
                        <option  value="0"selected>Choose...</option>
                        <option value="Philippines">Philippines</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="txtZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="txtZip">
                </div>
            </div>
            <fieldset class="row mb-3">
                <div class="col-md-3">
                    <label class="col-form-label col-sm-6 pt-0">Gender *</label>
                    <div class="col-md-10" style="position: relative; display: flex;">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="radMale" id="radMale" value="Male" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Male
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="radFemale " id="radFemale" value="Female">
                        <label class="form-check-label" for="gridRadios2">
                            Female
                        </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="cbcivil" class="form-label">Civil Status *</label>
                    <select id="cbcivil" class="form-select">
                        <option selected>Choose...</option>
                        <option>Single</option>
                        <option>Widowed</option>
                        <option>Married</option>
                        <option>Separated</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="txtbirthplace" class="form-label">Place of Birth *</label>
                    <input type="text" class="form-control" id="txtbirthplace">
                </div>
                <div class="col-md-3">
                    <label for="txtbirthdate" class="form-label">Birth Date *</label>
                    <input type="text" class="form-control" id="txtbirthdate">
                </div>
            </fieldset>
                    
            <div class="btn-box">
                <button type="button" id="Back1">Back</button>
                <button type="button" id="Next2">Next</button>
            </div>
        </div>

        <div class="form-div" id="Form3">
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="txtcitizenship" class="form-label">Citizenship *</label>
                    <select id="txtcitizenship" class="form-select">
                        <option selected>Choose...</option>
                        <option>Filipino</option>
                        <option>Dual Citizenship</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="txtTel" class="form-label">Telephone No</label>
                    <input type="text" class="form-control" id="txtTel">
                </div>
                <div class="col-md-3">
                    <label for="txtmobile" class="form-label">Mobile No.</label>
                    <input type="text" class="form-control" id="txtmobile" >
                </div>
                <div class="col-md-3">
                    <label for="txtemailadd" class="form-label">Email Address *</label>
                    <input type="email" class="form-control" id="txtemailadd">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="txtHeight" class="form-label">Height</label>
                    <input type="text" class="form-control" id="txtHeight">
                </div>
                <div class="col-md-3">
                    <label for="txtWeight" class="form-label">Weight</label>
                    <input type="text" class="form-control" id="txtWeight">
                </div>
                <div class="col-md-3">
                    <label for="txtBlood" class="form-label">Blood Type</label>
                    <input type="text" class="form-control" id="txtBlood">
                </div>
                <div class="col-md-3">
                    <label for="txtGSIS" class="form-label">GSIS ID NO.</label>
                    <input type="text" class="form-control" id="txtGSIS">
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-3">
                    <label for="txtpagibig" class="form-label">PAG-IBIG ID NO.</label>
                    <input type="text" class="form-control" id="txtpagibig">
                </div>
                <div class="col-md-3">
                    <label for="txtPHILHEALTH" class="form-label">PHILHEALTH NO.</label>
                    <input type="text" class="form-control" id="txtPHILHEALTH">
                </div>
                <div class="col-md-3">
                    <label for="txtSSS" class="form-label">SSS NO.</label>
                    <input type="text" class="form-control" id="txtSSS">
                </div>
                <div class="col-md-3">
                    <label for="txtTIN" class="form-label">TIN NO.</label>
                    <input type="text" class="form-control" id="txtTIN">
                </div>
            </div>

            <div class="btn-box">
                <button type="button" id="Back2">Back</button>
                <button type="button" id="Next3">Next</button>
            </div>
        </div>

        <div class="form-div" id="Form4">
            <div class="row g-3" style="margin-bottom: 20px;">
                <div class="col-md-3">
                    <label for="txtSpouseS" class="form-label">Spouse's Surname</label>
                    <input type="text" class="form-control" id="txtSpouseS">
                </div>
                <div class="col-md-3">
                    <label for="txtSpouseF" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="txtSpouseF">
                </div>
                <div class="col-md-3">
                    <label for="txtSpouseM" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="txtSpouseM">
                </div>
                <div class="col-md-3">
                    <label for="txtSpouseE" class="form-label">Name Extension (Jr,Sr)</label>
                    <input type="text" class="form-control" id="txtSpouseE">
                </div>
            </div>

            <div class="row g-3" style="margin-bottom: 20px;">
                <div class="col-md-3">
                    <label for="txtfathersS" class="form-label">Father's Surname</label>
                    <input type="text" class="form-control" id="txtfathersS">
                </div>
                <div class="col-md-3">
                    <label for="txtFathersF" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="txtFathersF">
                </div>
                <div class="col-md-3">
                    <label for="txtFathersM" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="txtFathersM">
                </div>
                <div class="col-md-3">
                    <label for="txtFathersE" class="form-label">Name Extension (Jr,Sr)</label>
                    <input type="text" class="form-control" id="txtFathersE">
                </div>
            </div>

            <div class="row g-3" style="margin-bottom: 20px;">
                <div class="col-md-3">
                    <label for="txtMothersMN" class="form-label">Mothers's Maiden Name</label>
                    <input type="text" class="form-control" id="txtMothersMN">
                </div>
                <div class="col-md-3">
                    <label for="txtMotherS" class="form-label">Surname</label>
                    <input type="text" class="form-control" id="txtMotherS">
                </div>
                <div class="col-md-3">
                    <label for="txtMotherF" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="txtMotherF">
                </div>
                <div class="col-md-3">
                    <label for="txtMotherM" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="txtMotherM">
                </div>
            </div>
            <div class="btn-box">
                <button type="button" id="Back3">Back</button>
                <button type="button" id="Next4">Next</button>
            </div>
        </div>

        <div class="form-div" id="Form5">
            <input type="text" placeholder="Input Email" required>
            
            <input type="password" placeholder="Input Password" required>
            
            <input type="password" placeholder="Confirm Password" required>
            <div class="btn-box">
                <button type="button" id="Back4">Back</button>
                <button type="button" id="Next5">Next</button>
            </div>
        </div>

        <div class="form-div" id="Form6">
            <div class="row g-3">
                <table class="table table-responsive table-bordered table-striped table-hover" id="work_tbl_display">
                    <thead>
                        <tr style="text-align:center; vertical-align: text-bottom;">
                            <th>Position Title</th>
                            <th>Company Name</th>
                            <th>Address</th>
                            <th>Inclusive Dates</th>
                            <th>Monthly Salary</th>
                            <th>Salary Job Grade</th>
                            <th>Appointment Status</th>
                            <th>Government Service (Y/N)</th>
                            <th>Actions</th>
                        </tr>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="txtposition[]"></td>
                            <td><input type="text" class="form-control" name="txtCompany[]"></td>
                            <td><input type="text" class="form-control" name="txtAddress[]"></td>
                            <td><input type="text" class="form-control" name="txtDates[]"></td>
                            <td><input type="text" class="form-control" name="txtMonthly[]"></td>
                            <td><input type="text" class="form-control" name="txtJD[]"></td>
                            <td><input type="text" class="form-control" name="txtStatus[]"></td>
                            <td><input type="text" class="form-control" name="txtIsGov[]"></td>
                            <td><button type="button" class="btn btn-danger btn_work_remove" name="pwork_remove" onclick="removeRowWork(this)">Remove</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="row g-3" >
                <div class="col-12" style=" text-align-last: left; margin-bottom:20px;">
                    <button type="button" class="btn btn-primary btn_work" name="pwork" onclick="addRowWork()">Add Work Experience</button>
                </div>
            </div>
            <div class="btn-box">
                <button type="button" id="Back5">Back</button>
                <button type="button" id="Next6">Next</button>
            </div>
        </div>

        <div class="form-div" id="Form7">
            <div class="row g-3" style="color: red; font-style: italic;">
                <h6>Notes: Career Service/ RA 1080 (Board/BAR) Under Special Laws/ CES/ CEE/ Barangay Eligibility/ Driver`s License</h6>
            </div>
            <div class="row g-3">
                <table id="eligibility_tbl_display" class="table  table-responsive table-bordered table-striped table-hover">
                    <thead>
                        <tr style="text-align:center; vertical-align: text-bottom;">
                            <th rowspan="2"> Eligibility </th>
                            <th rowspan="2"> Rating </th>
                            <th rowspan="2"> Date of Examination/ Conferment </th>
                            <th rowspan="2"> Place of Examination</th>
                            <th colspan="2"> Period of Attendance</th>
                            <th rowspan="2">Actions</th>
                        </tr>
                        <tr>
                            <th> From: </th>
                            <th> To: </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="unit-table">
                            <td><input type="text" class="form-control" name="txteligibility[]"></td>
                            <td><input type="text" class="form-control" name="txtrating[]"></td>
                            <td><input type="text" class="form-control" name="txtdate[]"></td>
                            <td><input type="text" class="form-control" name="txtplace[]"></td>
                            <td><input type="text" class="form-control" name="txtFrom[]"></td>
                            <td><input type="text" class="form-control" name="txtTo[]"></td>
                            <td><button type="button" class="btn btn-danger" onclick="removeRowEligibility(this)">Remove</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="row g-3">
                <div class="col-12" style=" text-align-last: left; margin-bottom:20px;">
                    <button type="button" class="btn btn-primary btn_eligibility" id="id_eligibility" name="peligibility" onclick="addRowEligibility()">Add Eligibility</button>
                </div>
            </div>
            <div class="btn-box">
                <button type="button" id="Back6">Back</button>
                <button type="button" id="Next7">Next</button>
            </div>
        </div>

        <div class="form-div" id="Form8">
            <div class="row g-3">
                <table id="training_tbl_display" class="table table-responsive table-bordered table-striped table-hover" >
                    <thead>
                        <tr style="text-align:center; vertical-align: text-bottom;">
                            <th rowspan="2" width="40%" > Title of Seminar / Conference </br> / Workshop / Short courses </br>  <p>(Write in Full)</p></th>
                            <th colspan="2" width="30%" > Period of Attendance</th>
                            <th rowspan="2" width="10%" > Number of Hours </th>
                            <th rowspan="2" width="20%" > Coducted / Sponsored by: </br>  <p>(Write in Full)</p> </th>
                            <th rowspan="2">Actions</th>
                        </tr>
                        <tr>
                            <th> From: </th>
                            <th> To: </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="unit-table">
                            <td><input type="text" class="form-control" name="txttitle[]"></td>
                            <td><input type="text" class="form-control" name="txtTrainFrom[]"></td>
                            <td><input type="text" class="form-control" name="txtTraingTo[]"></td>
                            <td><input type="text" class="form-control" name="txtHours[]"></td>
                            <td><input type="text" class="form-control" name="txtSponsored[]"></td>
                            <td><button type="button" class="btn btn-danger btn_training_remove" name="ptraining_remove"  onclick="removeRowTraining(this)">Remove</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="row g-3" style=" text-align-last: left;">
                <div class="col-12">
                    <button type="button" class="btn btn-primary btn_training" name="ptraining" onclick="addRowTraining()">Add Training</button>
                </div>
            </div>
            <div class="btn-box">
                <button type="button" id="Back7">Back</button>
                <button type="submit" >Submit</button>
            </div>
        </div>
        
        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small>Create User Account</small></div>
            <div class="step-col"><small>Personal </br> Information</small></div>
            <div class="step-col"><small>Other </br>Information</small></div>
            <div class="step-col"><small>Family </br>Background</small></div>
            <div class="step-col"><small>Educational </br>Background</small></div>
            <div class="step-col"><small>Work </br>Experience</small></div>
            <div class="step-col"><small>Eligibility</small></div>
            <div class="step-col"><small>Training </br>/Seminar</small></div>
        </div>

        
    </form>   
        <div class="row g-3" style="color: red; font-style: italic;font-size: 14px; font-weight:700; padding-top: 410px;">
            <p>Notes: Kindly accomplished all the required (*) field. Write N/A if not applicable.</p>
        </div>  
</div>

<script>
    $(document).ready(function () {
        // $("#txtLastname, #txtFirstname, #txtMiddlename, #txtExt, #txtAddress2, #txtAddress, #cbbrgy, #cbState, #cbProvince, #cbCity, #txtZip").on("keyup change",function(a) {
        //     if($("#cbbrgy").val() != "0" && $("#cbState").val() != "0" && $("#cbProvince").val() != "0" && $("#cbCity").val() != "0" && document.getElementById("txtAddress2").value != "" && document.getElementById("txtAddress").value != "" && document.getElementById("txtZip").value != "" && document.getElementById("txtLastname").value != "" && document.getElementById("txtFirstname").value != "" && document.getElementById("txtMiddlename").value != "" && document.getElementById("txtExt").value != ""){
        //         $('#Next2').attr('disabled',false);
        //     }
        // })
    });


    function addRowEligibility() {
        const table = document.getElementById("eligibility_tbl_display").getElementsByTagName('tbody')[0];
        const newRow = table.insertRow(table.rows.length);
        const cell1 = newRow.insertCell(0);
        const cell2 = newRow.insertCell(1);
        const cell3 = newRow.insertCell(2);
        const cell4 = newRow.insertCell(3);
        const cell5 = newRow.insertCell(4);
        const cell6 = newRow.insertCell(5);
        const cell7 = newRow.insertCell(6);

        cell1.innerHTML = '<input type="text" class="form-control" name="txteligibility[]">';
        cell2.innerHTML = '<input type="text" class="form-control" name="txtrating[]">';
        cell3.innerHTML = '<input type="text" class="form-control" name="txtdate[]">';
        cell4.innerHTML = '<input type="text" class="form-control" name="txtplace[]">';
        cell5.innerHTML = '<input type="text" class="form-control" name="txtFrom[]">';
        cell6.innerHTML = '<input type="text" class="form-control" name="txtTo[]">';
        cell7.innerHTML = '<button type="button" class="btn btn-danger" onclick="removeRowEligibility(this)">Remove</button>';
    }

    function removeRowEligibility(button) {
        const row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }

    function addRowWork() {
        const table = document.getElementById("work_tbl_display").getElementsByTagName('tbody')[0];
        const newRow = table.insertRow(table.rows.length);
        const cell1 = newRow.insertCell(0);
        const cell2 = newRow.insertCell(1);
        const cell3 = newRow.insertCell(2);
        const cell4 = newRow.insertCell(3);
        const cell5 = newRow.insertCell(4);
        const cell6 = newRow.insertCell(5);
        const cell7 = newRow.insertCell(6);
        const cell8 = newRow.insertCell(7);
        const cell9 = newRow.insertCell(8);

        cell1.innerHTML = '<input type="text" class="form-control" name="txtposition[]">';
        cell2.innerHTML = '<input type="text" class="form-control" name="txtCompany[]">';
        cell3.innerHTML = '<input type="text" class="form-control" name="txtAddress[]">';
        cell4.innerHTML = '<input type="text" class="form-control" name="txtDates[]">';
        cell5.innerHTML = '<input type="text" class="form-control" name="txtMonthly[]">';
        cell6.innerHTML = '<input type="text" class="form-control" name="txtJD[]">';
        cell7.innerHTML = '<input type="text" class="form-control" name="txtStatus[]">';
        cell8.innerHTML = '<input type="text" class="form-control" name="txtIsGov[]">';
        cell9.innerHTML = '<button type="button" class="btn btn-danger" onclick="removeRowEligibility(this)">Remove</button>';
    }

    function removeRowWork(button) {
        const row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
    

    function addRowTraining() {
        const table = document.getElementById("training_tbl_display").getElementsByTagName('tbody')[0];
        const newRow = table.insertRow(table.rows.length);
        const cell1 = newRow.insertCell(0);
        const cell2 = newRow.insertCell(1);
        const cell3 = newRow.insertCell(2);
        const cell4 = newRow.insertCell(3);
        const cell5 = newRow.insertCell(4);
        const cell6 = newRow.insertCell(5);
        
        cell1.innerHTML = '<input type="text" class="form-control" name="txttitle[]">';
        cell2.innerHTML = '<input type="text" class="form-control" name="txtTrainFrom[]">';
        cell3.innerHTML = '<input type="text" class="form-control" name="txtTraingTo[]">';
        cell4.innerHTML = '<input type="text" class="form-control" name="txtHours[]">';
        cell5.innerHTML = '<input type="text" class="form-control" name="txtSponsored[]">';
        cell6.innerHTML = '<button type="button" class="btn btn-danger" onclick="removeRowTraining(this)">Remove</button>';
    }

    function removeRowTraining(button) {
        const row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }


    var Form1 = document.getElementById("Form1");
    var Form2 = document.getElementById("Form2");
    var Form3 = document.getElementById("Form3");
    var Form4 = document.getElementById("Form4");
    var Form5 = document.getElementById("Form5");
    var Form6 = document.getElementById("Form6");
    var Form7 = document.getElementById("Form7");
    var Form8 = document.getElementById("Form8");
    
    var Next1 = document.getElementById("Next1");
    var Next2 = document.getElementById("Next2");
    var Next3 = document.getElementById("Next3");
    var Next4 = document.getElementById("Next4");
    var Next5 = document.getElementById("Next5");
    var Next6 = document.getElementById("Next6");
    var Next7 = document.getElementById("Next7");
    
    var Back1 = document.getElementById("Back1");
    var Back2 = document.getElementById("Back2");
    var Back3 = document.getElementById("Back3");
    var Back4 = document.getElementById("Back4");
    var Back5 = document.getElementById("Back5");
    var Back6 = document.getElementById("Back6");
    var Back7 = document.getElementById("Back7");

    var progress = document.getElementById("progress");

    $(function() {
        $(".text-validation").on("change",function(e){
            if($(this).val().length != 0 ){
                $(this).parent().removeClass("has-error");

                Form1.style.left = "-1200px";
                Form2.style.left = "50px";
                progress.style.width = "280px";
            }else{
                $(this).parent().addClass("has-error");
            }
        });
    });


    $("#Next1").on("click",function(a) {
        $(".text-validation").change();
    });

    Back1.onclick = function(){
        Form1.style.left = "50px";
        Form2.style.left = "1200px";
        progress.style.width = "150px";
    }
    
    Next2.onclick = function(){
        Form2.style.left = "-1200px";
        Form3.style.left = "50px";
        progress.style.width = "420px";
    }

    Back2.onclick = function(){
        Form2.style.left = "50px";
        Form3.style.left = "1200px";
        progress.style.width = "280px";
    }

    Next3.onclick = function(){
        Form3.style.left = "-1200px";
        Form4.style.left = "50px";
        progress.style.width = "560px";
    }

    Back3.onclick = function(){
        Form3.style.left = "50px";
        Form4.style.left = "1200px";
        progress.style.width = "420px";
    }

    Next4.onclick = function(){
        Form4.style.left = "-1200px";
        Form5.style.left = "50px";
        progress.style.width = "700px";
    }

    Back4.onclick = function(){
        Form4.style.left = "50px";
        Form5.style.left = "1200px";
        progress.style.width = "560px";
    }

    Next5.onclick = function(){
        Form5.style.left = "-1200px";
        Form6.style.left = "50px";
        progress.style.width = "840px";
    }

    Back5.onclick = function(){
        Form5.style.left = "50px";
        Form6.style.left = "1200px";
        progress.style.width = "700px";
    }

    Next6.onclick = function(){
        Form6.style.left = "-1200px";
        Form7.style.left = "50px";
        progress.style.width = "980px";
    }

    Back6.onclick = function(){
        Form6.style.left = "50px";
        Form7.style.left = "1200px";
        progress.style.width = "840px";
    }

    Next7.onclick = function(){
        Form7.style.left = "-1200px";
        Form8.style.left = "50px";
        progress.style.width = "1200px";
    }

    Back7.onclick = function(){
        Form7.style.left = "50px";
        Form8.style.left = "1200px";
        progress.style.width = "980px";
    }
    
</script>