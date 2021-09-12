@extends('layouts.app')

@section('content')
    <style>
        .file-input {
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
            margin-top: 8px;
            bottom: auto;
            right: auto;
            visibility: hidden;
        }

    </style>
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <label class="nav-link active">
                <input type="file" class="file-input" id="file-upload-btn" onchange="uploadData()">
                <span>Import CSV file</span>
            </label>
        </li>
    </ul>
    <div class="row ">
        <div class="col-md-12">
            <div class="main-card mb-3 card ">
                <div class="card-body table-responsive">
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">S.No</th>
                                <th class="th-sm">Employee ID</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Phone</th>
                                <th class="th-sm">Email</th>
                                <th class="th-sm">Password</th>
                                <th class="th-sm">SBU</th>
                                <th class="th-sm">Branch/Plant</th>
                                <th class="th-sm">Division</th>
                                <th class="th-sm">Grade</th>
                                <th class="th-sm">Employee Type</th>
                                <th class="th-sm">Designation</th>
                                <th class="th-sm">DOB</th>
                                <th class="th-sm">DOJ</th>
                                <th class="th-sm">Organisation Unit</th>
                                <th class="th-sm">Function</th>
                                <th class="th-sm">Previous Experience</th>
                                <th class="th-sm">Experience</th>
                                <th class="th-sm">Gender</th>
                                <th class="th-sm">IO ID</th>
                                <th class="th-sm">IO Name</th>
                                <th class="th-sm">FRO ID</th>
                                <th class="th-sm">FRO Name</th>
                                <th class="th-sm">RO ID</th>
                                <th class="th-sm">RO Name</th>
                                <th class="th-sm">Blood Group</th>
                                <th class="th-sm">Religion</th>
                                <th class="th-sm">Birth Place</th>
                                <th class="th-sm">State</th>
                                <th class="th-sm">Father Name</th>
                                <th class="th-sm">PF Nominee 1</th>
                                <th class="th-sm">Nominee 1 Relationship</th>
                                <th class="th-sm">PF Nominee 2</th>
                                <th class="th-sm">Nominee 2 Relationship</th>
                                <th class="th-sm">T-Shirt Size</th>
                                <th class="th-sm">Preferred Food</th>
                                <th class="th-sm">Passport NO</th>
                                <th class="th-sm">Passport Expiry Date</th>
                                <th class="th-sm">Admin</th>
                                <th class="th-sm">Resign</th>
                                <th class="th-sm">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>TMICIL4547</td>
                                <td>Navingouda Mallikarjungouda Venkangoudar</td>
                                <td>7019717447</td>
                                <td>Naveen@gmail.com</td>
                                <td>coromandel</td>
                                <td>Retail</td>
                                <td>Raichur</td>
                                <td>Raichur Zone</td>
                                <td>NA</td>
                                <td>NMS</td>
                                <td>Customer Executive11-11-1990</td>
                                <td>11-11-1990</td>
                                <td>09-07-2021</td>
                                <td>DHARWAD-KALAGHATAGI</td>
                                <td>Accounts</td>
                                <td>0</td>
                                <td>0.0</td>
                                <td>Male</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NN</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NN</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NON-VEG</td>
                                <td>N</td>
                                <td>2021-07-29</td>
                                <td><button class="mt-1 btn btn-success">Make Admin</button></td>
                                <td><button class="mt-1 btn btn-success">Resign</button></td>
                                <td><button class="mt-1 btn btn-success">Edit</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TMICIL4547</td>
                                <td>Navingouda Mallikarjungouda Venkangoudar</td>
                                <td>7019717447</td>
                                <td>Naveen@gmail.com</td>
                                <td>coromandel</td>
                                <td>Retail</td>
                                <td>Raichur</td>
                                <td>Raichur Zone</td>
                                <td>NA</td>
                                <td>NMS</td>
                                <td>Customer Executive11-11-1990</td>
                                <td>11-11-1990</td>
                                <td>09-07-2021</td>
                                <td>DHARWAD-KALAGHATAGI</td>
                                <td>Accounts</td>
                                <td>0</td>
                                <td>0.0</td>
                                <td>Male</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NN</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NN</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NON-VEG</td>
                                <td>N</td>
                                <td>2021-07-29</td>
                                <td><button class="mt-1 btn btn-success">Make Admin</button></td>
                                <td><button class="mt-1 btn btn-success">Resign</button></td>
                                <td><button class="mt-1 btn btn-success">Edit</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TMICIL4547</td>
                                <td>Navingouda Mallikarjungouda Venkangoudar</td>
                                <td>7019717447</td>
                                <td>Naveen@gmail.com</td>
                                <td>coromandel</td>
                                <td>Retail</td>
                                <td>Raichur</td>
                                <td>Raichur Zone</td>
                                <td>NA</td>
                                <td>NMS</td>
                                <td>Customer Executive11-11-1990</td>
                                <td>11-11-1990</td>
                                <td>09-07-2021</td>
                                <td>DHARWAD-KALAGHATAGI</td>
                                <td>Accounts</td>
                                <td>0</td>
                                <td>0.0</td>
                                <td>Male</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NN</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NN</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NON-VEG</td>
                                <td>N</td>
                                <td>2021-07-29</td>
                                <td><button class="mt-1 btn btn-success">Make Admin</button></td>
                                <td><button class="mt-1 btn btn-success">Resign</button></td>
                                <td><button class="mt-1 btn btn-success">Edit</button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>TMICIL4547</td>
                                <td>Navingouda Mallikarjungouda Venkangoudar</td>
                                <td>7019717447</td>
                                <td>Naveen@gmail.com</td>
                                <td>coromandel</td>
                                <td>Retail</td>
                                <td>Raichur</td>
                                <td>Raichur Zone</td>
                                <td>NA</td>
                                <td>NMS</td>
                                <td>Customer Executive11-11-1990</td>
                                <td>11-11-1990</td>
                                <td>09-07-2021</td>
                                <td>DHARWAD-KALAGHATAGI</td>
                                <td>Accounts</td>
                                <td>0</td>
                                <td>0.0</td>
                                <td>Male</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NN</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NN</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NON-VEG</td>
                                <td>N</td>
                                <td>2021-07-29</td>
                                <td><button class="mt-1 btn btn-success">Make Admin</button></td>
                                <td><button class="mt-1 btn btn-success">Resign</button></td>
                                <td><button class="mt-1 btn btn-success">Edit</button></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>TMICIL4547</td>
                                <td>Navingouda Mallikarjungouda Venkangoudar</td>
                                <td>7019717447</td>
                                <td>Naveen@gmail.com</td>
                                <td>coromandel</td>
                                <td>Retail</td>
                                <td>Raichur</td>
                                <td>Raichur Zone</td>
                                <td>NA</td>
                                <td>NMS</td>
                                <td>Customer Executive11-11-1990</td>
                                <td>11-11-1990</td>
                                <td>09-07-2021</td>
                                <td>DHARWAD-KALAGHATAGI</td>
                                <td>Accounts</td>
                                <td>0</td>
                                <td>0.0</td>
                                <td>Male</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NN</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NN</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NON-VEG</td>
                                <td>N</td>
                                <td>2021-07-29</td>
                                <td><button class="mt-1 btn btn-success">Make Admin</button></td>
                                <td><button class="mt-1 btn btn-success">Resign</button></td>
                                <td><button class="mt-1 btn btn-success">Edit</button></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>TMICIL4547</td>
                                <td>Navingouda Mallikarjungouda Venkangoudar</td>
                                <td>7019717447</td>
                                <td>Naveen@gmail.com</td>
                                <td>coromandel</td>
                                <td>Retail</td>
                                <td>Raichur</td>
                                <td>Raichur Zone</td>
                                <td>NA</td>
                                <td>NMS</td>
                                <td>Customer Executive11-11-1990</td>
                                <td>11-11-1990</td>
                                <td>09-07-2021</td>
                                <td>DHARWAD-KALAGHATAGI</td>
                                <td>Accounts</td>
                                <td>0</td>
                                <td>0.0</td>
                                <td>Male</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NN</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NN</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>N</td>
                                <td>NON-VEG</td>
                                <td>N</td>
                                <td>2021-07-29</td>
                                <td><button class="mt-1 btn btn-success">Make Admin</button></td>
                                <td><button class="mt-1 btn btn-success">Resign</button></td>
                                <td><button class="mt-1 btn btn-success">Edit</button></td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="th-sm">S.No</th>
                                <th class="th-sm">Employee ID</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Phone</th>
                                <th class="th-sm">Email</th>
                                <th class="th-sm">Password</th>
                                <th class="th-sm">SBU</th>
                                <th class="th-sm">Branch/Plant</th>
                                <th class="th-sm">Division</th>
                                <th class="th-sm">Grade</th>
                                <th class="th-sm">Employee Type</th>
                                <th class="th-sm">Designation</th>
                                <th class="th-sm">DOB</th>
                                <th class="th-sm">DOJ</th>
                                <th class="th-sm">Organisation Unit</th>
                                <th class="th-sm">Function</th>
                                <th class="th-sm">Previous Experience</th>
                                <th class="th-sm">Experience</th>
                                <th class="th-sm">Gender</th>
                                <th class="th-sm">IO ID</th>
                                <th class="th-sm">IO Name</th>
                                <th class="th-sm">FRO ID</th>
                                <th class="th-sm">FRO Name</th>
                                <th class="th-sm">RO ID</th>
                                <th class="th-sm">RO Name</th>
                                <th class="th-sm">Blood Group</th>
                                <th class="th-sm">Religion</th>
                                <th class="th-sm">Birth Place</th>
                                <th class="th-sm">State</th>
                                <th class="th-sm">Father Name</th>
                                <th class="th-sm">PF Nominee 1</th>
                                <th class="th-sm">Nominee 1 Relationship</th>
                                <th class="th-sm">PF Nominee 2</th>
                                <th class="th-sm">Nominee 2 Relationship</th>
                                <th class="th-sm">T-Shirt Size</th>
                                <th class="th-sm">Preferred Food</th>
                                <th class="th-sm">Passport NO</th>
                                <th class="th-sm">Passport Expiry Date</th>
                                <th class="th-sm">Admin</th>
                                <th class="th-sm">Resign</th>
                                <th class="th-sm">Edit</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <script>
        async function uploadData() {
            const target = document.getElementById("file-upload-btn");
            if (target) {
                const file = target.files[0];
                const formData = new FormData();
                formData.append('data', file)
                const {
                    data
                } = await axios.post('{{ route('excel-data.upload') }}', formData);
                if (data) {
                    console.log(data)
                }
            }
        }
    </script>
@endsection


@section('script')

@endsection
