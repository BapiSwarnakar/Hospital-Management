<form method="POST" id="patientRequest">

    @csrf
    <div class="row border m-1">
        <h6 class="border-bottom p-2">Patient info:-</h6>
        <div class="mb-3 col-md-2">
            <label class="form-label" for="basic-default-company">Form Type</label>
            <select class="form-control" name="form_type" id="form_type" required>
                <option value="">Select</option>
                <option value="Delivery" {{$patient_details->form_type =="Delivery"?'selected':''}}>Delivery</option>
                <option value="Surgery"  {{$patient_details->form_type =="Surgery"?'selected':''}}>Surgery</option>
                <option value="ICU/NICU/HDU" {{$patient_details->form_type =="ICU/NICU/HDU"?'selected':''}}>ICU/NICU/HDU</option>
            </select>
        </div>
        <div class="mb-3 col-md-2">
            <label class="form-label" for="basic-default-fullname">Patient Reg No</label>
            <input type="text" class="form-control" id="reg_no" name="reg_no" placeholder="Enter reg no"
                required value="{{ $patient_details->reg_no }}">
        </div>
        <div class="mb-3 col-md-2">
            <label class="form-label" for="basic-default-fullname">Bed No</label>
            <input type="text" class="form-control" id="bed_no" name="bed_no" placeholder="Enter bed no"
                required value="{{ $patient_details->bed_no }}">
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label" for="basic-default-fullname">Patient Name</label>
            <input type="text" class="form-control" id="patient_name" name="patient_name"
                placeholder="Enter patient name" required value="{{ $patient_details->patient_name }}">
        </div>
        <div class="mb-3 col-md-2">
            <label class="form-label" for="basic-default-fullname">Age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Enter age" required value="{{ $patient_details->age }}">
        </div>
        <div class="mb-3 col-md-2">
            <label class="form-label" for="basic-default-company">Gender</label>
            <select class="form-control" name="gender" id="gender" required>
                <option value="">Select</option>
                <option value="Male" {{$patient_details->gender =="Male"?'selected':''}}>Male</option>
                <option value="Female" {{$patient_details->gender =="Female"?'selected':''}}>Female</option>
                <option value="Other" {{$patient_details->gender =="Other"?'selected':''}}>Other</option>
            </select>
        </div>
        <div class="mb-3 col-md-2">
            <label class="form-label" for="basic-default-fullname">Addmission date</label>
            <input type="date" class="form-control" id="admission_date" name="admission_date" required value="{{ $patient_details->admission_date }}">
        </div>
        <div class="mb-3 col-md-2">
            <label class="form-label" for="basic-default-fullname">Addmission time</label>
            <input type="time" class="form-control" id="admission_time" name="admission_time" required value="{{ $patient_details->admission_time }}">
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-fullname">Aadhaar No</label>
            <input type="number" class="form-control" id="aadhaar_no" name="aadhaar_no" required
                placeholder="Enter Aadhaar no" value="{{ $patient_details->aadhaar_no }}">
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-fullname">Father/Husband
                Name</label>
            <input type="text" class="form-control" id="guardian_name" name="guardian_name"
                placeholder="Enter father/husband name" required value="{{ $patient_details->guardian_name }}">
        </div>
        <div class="mb-3 col-md-8">
            <label class="form-label" for="basic-default-fullname">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address"
                required value="{{ $patient_details->address }}">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-fullname">Under Doctor</label>
            <select class="form-control" name="under_doctor" id="under_doctor" required>
                <option value="">Select</option>
                <option value="1" {{$patient_details->under_doctor =="1"?'selected':''}}>Mr. Ali</option>
            </select>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-fullname">Refer Doctor 1</label>
            <select class="form-control" name="refer_doctor_1" id="refer_doctor_1">
                <option value="">Select</option>
                <option value="1" {{$patient_details->refer_doctor_1 =="1"?'selected':''}}>Mr. Ali</option>
            </select>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-fullname">Refer Doctor 2</label>
            <select class="form-control" name="refer_doctor_2" id="refer_doctor_2">
                <option value="">Select</option>
                <option value="1" {{$patient_details->refer_doctor_2 =="1"?'selected':''}}>Mr. Ali</option>
            </select>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-fullname">Phone No</label>
            <input type="number" class="form-control" id="phone_no" name="phone_no" placeholder="Enter Phone no"
                required  value="{{ $patient_details->phone_no }}">
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-fullname">Alternative Phone
                No</label>
            <input type="number" class="form-control" id="alternative_phone_no" name="alternative_phone_no"
                placeholder="Enter alternative phone no" value="{{ $patient_details->alternative_phone_no }}">
        </div>


    </div>
    <div class="row border m-1">
        <h6 class="border-bottom p-2">Reference info:-</h6>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-company">Refer By</label>
            <select class="form-control" name="refer_by" id="refer_by">
                <option value="">Select</option>
                <option value="Delivery" {{$patient_details->refer_by =="Delivery"?'selected':''}}>Delivery</option>
                <option value="Surgery"  {{$patient_details->refer_by =="Surgery"?'selected':''}}>Surgery</option>
                <option value="ICU/NICU/HDU" {{$patient_details->refer_by =="ICU/NICU/HDU"?'selected':''}}>ICU/NICU/HDU</option>
            </select>
        </div>
    </div>
    <div class="row border m-1">
        <h6 class="border-bottom p-2">Payment info:-</h6>
        <div class="mb-3 col-md-12">
            <label class="form-label" for="basic-default-company">Payment Mode : </label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mode" id="Cash" value="Cash"
                    required {{$patient_details->mode =="Cash"?'checked':''}}>
                <label class="form-check-label" for="Cash">
                    Cash
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mode" id="Swasthyasathi"
                    value="Swasthyasathi" required {{$patient_details->mode =="Swasthyasathi"?'checked':''}}>
                <label class="form-check-label" for="Swasthyasathi">
                    Swasthyasathi
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mode" id="Insurance" value="Insurance"
                    required {{$patient_details->mode =="Insurance"?'checked':''}}>
                <label mode class="form-check-label" for="Insurance">
                    Insurance mode corporate
                </label>
            </div>
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label" for="basic-default-fullname">URN</label>
            <input type="text" class="form-control" id="urn_no" name="urn_no" placeholder="Enter URN no" value="{{$patient_details->urn_no}}">
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label" for="basic-default-fullname">Name of the Insurance
                Company</label>
            <input type="text" class="form-control" id="insurance_name" name="insurance_name"
                placeholder="Enter Insurance company name" value="{{$patient_details->insurance_name}}">
        </div>
    </div>
    <div class="row border m-1">
        <h6 class="border-bottom p-2">Additional info:-</h6>

        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-fullname">Child Doctor</label>
            <select class="form-control" name="anesthesis" id="anesthesis">
                <option value="">Select</option>
                <option value="1" {{$patient_details->anesthesis =="1"?'selected':''}}>Mr. Ali</option>
            </select>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-fullname">Anesthesis</label>
            <select class="form-control" name="child_doctor" id="child_doctor">
                <option value="">Select</option>
                <option value="1" {{$patient_details->child_doctor =="1"?'selected':''}}>Mr. Ali</option>
            </select>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-fullname">Assistant1</label>
            <select class="form-control" name="assistance_1" id="assistance_1">
                <option value="">Select</option>
                <option value="1" {{$patient_details->assistance_1 =="1"?'selected':''}}>Mr. Ali</option>
            </select>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-fullname">Assistant2</label>
            <select class="form-control" name="assistance_2" id="assistance_2">
                <option value="">Select</option>
                <option value="1" {{$patient_details->assistance_2 =="1"?'selected':''}}>Mr. Ali</option>
            </select>
        </div>
    </div>
    <div class="row border m-1">
        <h6 class="border-bottom p-2">Patient Status:-</h6>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-company">Patient Status</label>
            <select class="form-control" name="status" id="status" required>
                <option value="">Select</option>
                <option value="1" {{$patient_details->status =="1"?'selected':''}}>Active Patient</option>
                <option value="0" {{$patient_details->status =="0"?'selected':''}}>Deactive Patient</option>
            </select>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="basic-default-company">Discharge Status</label>
            <select class="form-control" name="discharge_status" id="discharge_status" required>
                <option value="0" {{$patient_details->discharge_status =="0"?'selected':''}}>No</option>
                <option value="1" {{$patient_details->discharge_status =="1"?'selected':''}}>Discharge Mode</option>
                <option value="2" {{$patient_details->discharge_status =="2"?'selected':''}}>Refer Mode</option>
                <option value="3" {{$patient_details->discharge_status =="3"?'selected':''}}>DORB Mode</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-center mt-5">
            <input type="hidden" name="patient_id" value="{{ $patient_details->id }}" />
            <button type="submit" id="submit"
                onclick="requestSend($('#patientRequest'),'{{ route('admin.patient.update') }}')" name="submit"
                class="btn btn-primary waves-effect waves-light">Submit</button>
        </div>
    </div>
</form>
