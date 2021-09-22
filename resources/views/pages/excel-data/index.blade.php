@extends('layouts.app')

@section('content')
    <style>
        th,
        td {
            white-space: nowrap;
        }

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

        .spinner-box {
            position: fixed;
            height: 100%;
            z-index: 1000;
            left: 140px;
            top: 89px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent;
        }

        .circle-border {
            width: 50px;
            height: 50px;
            padding: 3px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background: rgb(63, 249, 220);
            background: linear-gradient(0deg, rgba(63, 249, 220, 0.1) 33%, rgba(63, 249, 220, 1) 100%);
            animation: spin .8s linear 0s infinite;
        }

        .circle-core {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .hidden {
            display: none;
            visibility: hidden;
        }

    </style>
    <div class="spinner-box hidden">
        <div class="circle-border">
            <div class="circle-core"></div>
        </div>
    </div>
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <label class="nav-link active">
                <input type="file" accept=".csv" class="file-input" id="file-upload-btn" onchange="uploadData()">
                <span>Import</span>
            </label>
        </li>
        <li class="nav-item">
            <a href="{{ route('excel-data.export') }}" class="nav-link active">
                <span>Export</span>
            </a>
        </li>
        <li class="nav-item">
            <form action="" method="get" class="form-inline mt-2">
                <input name="date" input type="date" id="exampleDate" placeholder="10/7/2010" type="Date"
                    class="form-control">
                <button type="submit" class="btn btn-success ml-2">Search</button>
            </form>
        </li>
    </ul>
    <div class="row" id="data-list">
        <div class="col-md-12">
            <div class="main-card mb-3 card ">
                <div class="card-body table-responsive">
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">S.No</th>
                                <th class="th-sm">Date of Data</th>
                                <th class="th-sm">Month of Data</th>
                                <th class="th-sm">FY of Data</th>
                                <th class="th-sm">Employee ID</th>
                                <th class="th-sm">UE No.</th>
                                <th class="th-sm">Employee Name</th>
                                <th class="th-sm">Grade</th>
                                <th class="th-sm">Band</th>
                                <th class="th-sm">Direct/Indirect</th>
                                <th class="th-sm">BU</th>
                                <th class="th-sm">SBU</th>
                                <th class="th-sm">SBU - Type</th>
                                <th class="th-sm">Location</th>
                                <th class="th-sm">Category</th>
                                <th class="th-sm">Cost Center</th>
                                <th class="th-sm">Function</th>
                                <th class="th-sm">Section</th>
                                <th class="th-sm">Designation</th>
                                <th class="th-sm">Status</th>
                                <th class="th-sm">Gender</th>
                                <th class="th-sm">Qualification Group</th>
                                <th class="th-sm">Highest Qualification</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Age Band</th>
                                <th class="th-sm">Date of Birth</th>
                                <th class="th-sm">Date of joining</th>
                                <th class="th-sm">Date of leaving</th>
                                <th class="th-sm">Experience in coromandel</th>
                                <th class="th-sm">Total Experience</th>
                                <th class="th-sm">Date of Transfer</th>
                                <th class="th-sm">Retirement year</th>
                                <th class="th-sm">Tenure Band</th>
                                <th class="th-sm">Kaizen Target</th>
                                <th class="th-sm">Kaizen Actual</th>
                                <th class="th-sm">Idea Target</th>
                                <th class="th-sm">Idea Actual</th>
                                <th class="th-sm">Implemented Idea Actual</th>
                                <th class="th-sm">SGA Target</th>
                                <th class="th-sm">SGA Actual</th>
                                <th class="th-sm">LSS Target</th>
                                <th class="th-sm">LSS Actual</th>
                                <th class="th-sm">OPL Target</th>
                                <th class="th-sm">OPL Actual</th>
                                <th class="th-sm">Savings/Employee (in Lakhs) Target</th>
                                <th class="th-sm">Savings/ Employee (in Lakhs) Actual</th>
                                <th class="th-sm">TEI Target</th>
                                <th class="th-sm">TEI Actual (1-Y / 0-/N)</th>
                                <th class="th-sm">TQM SCORE Target</th>
                                <th class="th-sm">TQM SCORE Actual</th>
                                <th class="th-sm">7QC Tools Certified (e Module) (Y / N)</th>
                                <th class="th-sm">Green belt Certified (Y / N)</th>
                                <th class="th-sm">Black Belt Certified (Y / N)</th>
                                <th class="th-sm">BE Assessor Certified (Y / N)</th>
                                <th class="th-sm">TQM Certified (Y / N)</th>
                                <th class="th-sm">5S Assessor Certified (Y / N)</th>
                                <th class="th-sm">No.of 5S Internal Audits Target</th>
                                <th class="th-sm">No.of 5S Internal Audits Actual</th>
                                <th class="th-sm">5S External Assessment Score Target</th>
                                <th class="th-sm">5S External Assessment Score Actual</th>
                                <th class="th-sm">TQM Process R&R Nos</th>
                                <th class="th-sm">Internal TQM Events R&R nos</th>
                                <th class="th-sm">Amount Rewarded Rs</th>
                                <th class="th-sm">POM R&R</th>
                                <th class="th-sm">Quest R&R</th>
                                <th class="th-sm">QCFI R&R</th>
                                <th class="th-sm">ABKAOTS R&R</th>
                                <th class="th-sm">CII R&R</th>
                                <th class="th-sm">INSSAN R&R</th>
                                <th class="th-sm">Other External R&R</th>
                                <th class="th-sm">SSP Max Award</th>
                                <th class="th-sm">BE Award</th>
                                <th class="th-sm">5S Plant Award</th>
                                <th class="th-sm">Employee Name</th>
                            </tr>
                        </thead>
                        @if ($records->count() > 0)
                            <tbody>

                                @foreach ($records as $row)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $row->date_of_data }}</td>
                                        <td>{{ $row->month_of_data }}</td>
                                        <td>{{ $row->fy_of_data }}</td>
                                        <td>{{ $row->employee_id }}</td>
                                        <td>{{ $row->ue_no }}</td>
                                        <td>{{ $row->employee_name }}</td>
                                        <td>{{ $row->grade }}</td>
                                        <td>{{ $row->band }}</td>
                                        <td>{{ $row->directindirect }}</td>
                                        <td>{{ $row->bu }}</td>
                                        <td>{{ $row->sbu }}</td>
                                        <td>{{ $row->sbu_type }}</td>
                                        <td>{{ $row->location }}</td>
                                        <td>{{ $row->category }}</td>
                                        <td>{{ $row->cost_center }}</td>
                                        <td>{{ $row->function }}</td>
                                        <td>{{ $row->section }}</td>
                                        <td>{{ $row->designation }}</td>
                                        <td>{{ $row->status }}</td>
                                        <td>{{ $row->gender }}</td>
                                        <td>{{ $row->qualification_group }}</td>
                                        <td>{{ $row->highest_qualification }}</td>
                                        <td>{{ $row->age }}</td>
                                        <td>{{ $row->age_band }}</td>
                                        <td>{{ $row->date_of_birth }}</td>
                                        <td>{{ $row->date_of_joining }}</td>
                                        <td>{{ $row->date_of_leaving }}</td>
                                        <td>{{ $row->experience_in_coromandel }}</td>
                                        <td>{{ $row->total_experience }}</td>
                                        <td>{{ $row->date_of_transfer }}</td>
                                        <td>{{ $row->retirement_year }}</td>
                                        <td>{{ $row->tenure_band }}</td>
                                        <td>{{ $row->kaizen_target }}</td>
                                        <td>{{ $row->kaizen_actual }}</td>
                                        <td>{{ $row->idea_target }}</td>
                                        <td>{{ $row->idea_actual }}</td>
                                        <td>{{ $row->implemented_idea_actual }}</td>
                                        <td>{{ $row->sga_target }}</td>
                                        <td>{{ $row->sga_actual }}</td>
                                        <td>{{ $row->lss_target }}</td>
                                        <td>{{ $row->lss_actual }}</td>
                                        <td>{{ $row->opl_target }}</td>
                                        <td>{{ $row->opl_actual }}</td>
                                        <td>{{ $row->savings_employee_in_lakhs_target }}</td>
                                        <td>{{ $row->savings_employee_in_lakhs_actual }}</td>
                                        <td>{{ $row->tei_target }}</td>
                                        <td>{{ $row->tei_actual_1_y_0_n }}</td>
                                        <td>{{ $row->tqm_score_target }}</td>
                                        <td>{{ $row->tqm_score_actual }}</td>
                                        <td>{{ $row->qc_tools_certified_e_module_y_n }}</td>
                                        <td>{{ $row->green_belt_certified_y_n }}</td>
                                        <td>{{ $row->black_belt_certified_y_n }}</td>
                                        <td>{{ $row->be_assessor_certified_y_n }}</td>
                                        <td>{{ $row->tqm_certified_y_n }}</td>
                                        <td>{{ $row->s_assessor_certified_y_n }}</td>
                                        <td>{{ $row->noof_5s_internal_audits_target }}</td>
                                        <td>{{ $row->noof_5s_internal_audits_actual }}</td>
                                        <td>{{ $row->s_external_assessment_score_target }}</td>
                                        <td>{{ $row->s_external_assessment_score_actual }}</td>
                                        <td>{{ $row->tqm_process_rr_nos }}</td>
                                        <td>{{ $row->internal_tqm_events_rr_nos }}</td>
                                        <td>{{ $row->amount_rewarded_rs }}</td>
                                        <td>{{ $row->pom_rr }}</td>
                                        <td>{{ $row->quest_rr }}</td>
                                        <td>{{ $row->qcfi_rr }}</td>
                                        <td>{{ $row->abkaots_rr }}</td>
                                        <td>{{ $row->cii_rr }}</td>
                                        <td>{{ $row->inssan_rr }}</td>
                                        <td>{{ $row->other_external_rr }}</td>
                                        <td>{{ $row->ssp_max_award }}</td>
                                        <td>{{ $row->be_award }}</td>
                                        <td>{{ $row->s_plant_award }}</td>
                                        <td>{{ $row->creator->name }}</td>
                                    </tr>
                                @endforeach



                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="th-sm">S.No</th>
                                    <th class="th-sm">Date of Data</th>
                                    <th class="th-sm">Month of Data</th>
                                    <th class="th-sm">FY of Data</th>
                                    <th class="th-sm">Employee ID</th>
                                    <th class="th-sm">UE No.</th>
                                    <th class="th-sm">Employee Name</th>
                                    <th class="th-sm">Grade</th>
                                    <th class="th-sm">Band</th>
                                    <th class="th-sm">Direct/Indirect</th>
                                    <th class="th-sm">BU</th>
                                    <th class="th-sm">SBU</th>
                                    <th class="th-sm">SBU - Type</th>
                                    <th class="th-sm">Location</th>
                                    <th class="th-sm">Category</th>
                                    <th class="th-sm">Cost Center</th>
                                    <th class="th-sm">Function</th>
                                    <th class="th-sm">Section</th>
                                    <th class="th-sm">Designation</th>
                                    <th class="th-sm">Status</th>
                                    <th class="th-sm">Gender</th>
                                    <th class="th-sm">Qualification Group</th>
                                    <th class="th-sm">Highest Qualification</th>
                                    <th class="th-sm">Age</th>
                                    <th class="th-sm">Age Band</th>
                                    <th class="th-sm">Date of Birth</th>
                                    <th class="th-sm">Date of joining</th>
                                    <th class="th-sm">Date of leaving</th>
                                    <th class="th-sm">Experience in coromandel</th>
                                    <th class="th-sm">Total Experience</th>
                                    <th class="th-sm">Date of Transfer</th>
                                    <th class="th-sm">Retirement year</th>
                                    <th class="th-sm">Tenure Band</th>
                                    <th class="th-sm">Kaizen Target</th>
                                    <th class="th-sm">Kaizen Actual</th>
                                    <th class="th-sm">Idea Target</th>
                                    <th class="th-sm">Idea Actual</th>
                                    <th class="th-sm">Implemented Idea Actual</th>
                                    <th class="th-sm">SGA Target</th>
                                    <th class="th-sm">SGA Actual</th>
                                    <th class="th-sm">LSS Target</th>
                                    <th class="th-sm">LSS Actual</th>
                                    <th class="th-sm">OPL Target</th>
                                    <th class="th-sm">OPL Actual</th>
                                    <th class="th-sm">Savings/Employee (in Lakhs) Target</th>
                                    <th class="th-sm">Savings/ Employee (in Lakhs) Actual</th>
                                    <th class="th-sm">TEI Target</th>
                                    <th class="th-sm">TEI Actual (1-Y / 0-/N)</th>
                                    <th class="th-sm">TQM SCORE Target</th>
                                    <th class="th-sm">TQM SCORE Actual</th>
                                    <th class="th-sm">7QC Tools Certified (e Module) (Y / N)</th>
                                    <th class="th-sm">Green belt Certified (Y / N)</th>
                                    <th class="th-sm">Black Belt Certified (Y / N)</th>
                                    <th class="th-sm">BE Assessor Certified (Y / N)</th>
                                    <th class="th-sm">TQM Certified (Y / N)</th>
                                    <th class="th-sm">5S Assessor Certified (Y / N)</th>
                                    <th class="th-sm">No.of 5S Internal Audits Target</th>
                                    <th class="th-sm">No.of 5S Internal Audits Actual</th>
                                    <th class="th-sm">5S External Assessment Score Target</th>
                                    <th class="th-sm">5S External Assessment Score Actual</th>
                                    <th class="th-sm">TQM Process R&R Nos</th>
                                    <th class="th-sm">Internal TQM Events R&R nos</th>
                                    <th class="th-sm">Amount Rewarded Rs</th>
                                    <th class="th-sm">POM R&R</th>
                                    <th class="th-sm">Quest R&R</th>
                                    <th class="th-sm">QCFI R&R</th>
                                    <th class="th-sm">ABKAOTS R&R</th>
                                    <th class="th-sm">CII R&R</th>
                                    <th class="th-sm">INSSAN R&R</th>
                                    <th class="th-sm">Other External R&R</th>
                                    <th class="th-sm">SSP Max Award</th>
                                    <th class="th-sm">BE Award</th>
                                    <th class="th-sm">5S Plant Award</th>
                                    <th class="th-sm">Employee Name</th>
                                </tr>
                                <tr>
                                    <td>
                                        {{ $records->links() }}
                                    </td>
                                </tr>
                            </tfoot>

                        @endif
                    </table>


                </div>
            </div>

        </div>
    </div>
    <script>
        async function uploadData() {
            const target = document.getElementById("file-upload-btn");
            const dataList = document.getElementById("data-list");
            const spinnerBox = document.querySelector(".spinner-box");
            if (target) {
                if (dataList) {
                    dataList.classList.add("hidden");
                }
                if (spinnerBox) {
                    spinnerBox.classList.remove("hidden");
                }
                const file = target.files[0];
                const formData = new FormData();
                formData.append('data', file)
                const {
                    data
                } = await axios.post('{{ route('excel-data.inport') }}', formData);
                if (data) {
                    location.reload();
                }
            }
        }
    </script>
@endsection


@section('script')

@endsection
