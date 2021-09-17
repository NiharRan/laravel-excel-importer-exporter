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
                <input type="file" class="file-input" id="file-upload-btn" onchange="uploadData()">
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
                    @if ($records->count() > 0)
                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">S.No</th>
                                    <th class="th-sm">Financial Year</th>
                                    <th class="th-sm">Employee ID</th>
                                    <th class="th-sm">FY</th>
                                    <th class="th-sm">Employee Name</th>
                                    <th class="th-sm">Business</th>
                                    <th class="th-sm">Unit</th>
                                    <th class="th-sm">Grade</th>
                                    <th class="th-sm">Band</th>
                                    <th class="th-sm">Staff Type</th>
                                    <th class="th-sm">Position</th>
                                    <th class="th-sm">Department</th>
                                    <th class="th-sm">Kaizen Target</th>
                                    <th class="th-sm">Kaizen Actual</th>
                                    <th class="th-sm">Idea Target</th>
                                    <th class="th-sm">Idea Actual</th>
                                    <th class="th-sm">SGA Target</th>
                                    <th class="th-sm">SGA Actual</th>
                                    <th class="th-sm">LSS Target</th>
                                    <th class="th-sm">LSS Actual</th>
                                    <th class="th-sm">OPL Target</th>
                                    <th class="th-sm">OPL Actual</th>
                                    <th class="th-sm">Savings Employee In Lakhs Target1</th>
                                    <th class="th-sm">Savings Employee In Lakhs Target2</th>
                                    <th class="th-sm">TEI Target</th>
                                    <th class="th-sm">TEI Actual</th>
                                    <th class="th-sm">TEI Actual (1-y/0-/N</th>
                                    <th class="th-sm">TMQ Score Target</th>
                                    <th class="th-sm">TMQ Score Actual</th>
                                    <th class="th-sm">7QC Tools Certified (e Module) (Y/N)</th>
                                    <th class="th-sm">Green Belt Certified (Y/N)</th>
                                    <th class="th-sm">Black Belt Certified (Y/N)</th>
                                    <th class="th-sm">BE Assessor Certified (Y/N)</th>
                                    <th class="th-sm">TQM Certified (Y/N)</th>
                                    <th class="th-sm">5S Assessor Certified (Y/N)</th>
                                    <th class="th-sm">No. of 5S Internal Audits Target</th>
                                    <th class="th-sm">No. of 5S Internal Audits Actual</th>
                                    <th class="th-sm">5S External Assessment Score Target</th>
                                    <th class="th-sm">5S External Assessment Score Actual</th>
                                    <th class="th-sm">Date</th>
                                    @if (auth()->user()->role_id == 1)
                                        <th class="th-sm">Creator</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($records as $row)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $row->financial_year }}</td>
                                        <td>{{ $row->employee_id }}</td>
                                        <td>{{ $row->fyy }}</td>
                                        <td>{{ $row->ue_no }}</td>
                                        <td>{{ $row->employee_name }}</td>
                                        <td>{{ $row->business }}</td>
                                        <td>{{ $row->unit }}</td>
                                        <td>{{ $row->grade }}</td>
                                        <td>{{ $row->band }}</td>
                                        <td>{{ $row->staff_type }}</td>
                                        <td>{{ $row->position }}</td>
                                        <td>{{ $row->department }}</td>
                                        <td>{{ $row->kaizen_target }}</td>
                                        <td>{{ $row->kaizen_actual }}</td>
                                        <td>{{ $row->idea_target }}</td>
                                        <td>{{ $row->idea_actual }}</td>
                                        <td>{{ $row->sga_target }}</td>
                                        <td>{{ $row->sga_actual }}</td>
                                        <td>{{ $row->lss_target }}</td>
                                        <td>{{ $row->lss_actual }}</td>
                                        <td>{{ $row->opl_target }}</td>
                                        <td>{{ $row->opl_actual }}</td>
                                        <td>{{ $row->savings_in_lakhs1 }}</td>
                                        <td>{{ $row->savings_in_lakhs2 }}</td>
                                        <td>{{ $row->tei_target }}</td>
                                        <td>{{ $row->tei_actual }}</td>
                                        <td>{{ $row->tqm_target }}</td>
                                        <td>{{ $row->tqm_actual }}</td>
                                        <td>{{ $row->qc_tools_certified }}</td>
                                        <td>{{ $row->green_belt_certified }}</td>
                                        <td>{{ $row->black_belt_certified }}</td>
                                        <td>{{ $row->be_assessor_certified }}</td>
                                        <td>{{ $row->tqm_certified }}</td>
                                        <td>{{ $row->s_assessor_certified }}</td>
                                        <td>{{ $row->no_of5s_audits_target }}</td>
                                        <td>{{ $row->no_of5s_audits_actual }}</td>
                                        <td>{{ $row->s_external_assessment_score_target }}</td>
                                        <td>{{ $row->s_external_assessment_score_actual }}</td>
                                        <td>{{ date('d-m-Y', strtotime($row->created_at)) }}</td>
                                        @if (auth()->user()->role_id == 1)
                                            <td>{{ $row->creator->name }}</td>
                                        @endif
                                    </tr>
                                @endforeach



                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="th-sm">S.No</th>
                                    <th class="th-sm">Financial Year</th>
                                    <th class="th-sm">Employee ID</th>
                                    <th class="th-sm">FY</th>
                                    <th class="th-sm">Employee Name</th>
                                    <th class="th-sm">Business</th>
                                    <th class="th-sm">Unit</th>
                                    <th class="th-sm">Grade</th>
                                    <th class="th-sm">Band</th>
                                    <th class="th-sm">Staff Type</th>
                                    <th class="th-sm">Position</th>
                                    <th class="th-sm">Department</th>
                                    <th class="th-sm">Kaizen Target</th>
                                    <th class="th-sm">Kaizen Actual</th>
                                    <th class="th-sm">Idea Target</th>
                                    <th class="th-sm">Idea Actual</th>
                                    <th class="th-sm">SGA Target</th>
                                    <th class="th-sm">SGA Actual</th>
                                    <th class="th-sm">LSS Target</th>
                                    <th class="th-sm">LSS Actual</th>
                                    <th class="th-sm">OPL Target</th>
                                    <th class="th-sm">OPL Actual</th>
                                    <th class="th-sm">Savings Employee In Lakhs Target1</th>
                                    <th class="th-sm">Savings Employee In Lakhs Target2</th>
                                    <th class="th-sm">TEI Target</th>
                                    <th class="th-sm">TEI Actual</th>
                                    <th class="th-sm">TEI Actual (1-y/0-/N</th>
                                    <th class="th-sm">TMQ Score Target</th>
                                    <th class="th-sm">TMQ Score Actual</th>
                                    <th class="th-sm">7QC Tools Certified (e Module) (Y/N)</th>
                                    <th class="th-sm">Green Belt Certified (Y/N)</th>
                                    <th class="th-sm">Black Belt Certified (Y/N)</th>
                                    <th class="th-sm">BE Assessor Certified (Y/N)</th>
                                    <th class="th-sm">TQM Certified (Y/N)</th>
                                    <th class="th-sm">5S Assessor Certified (Y/N)</th>
                                    <th class="th-sm">No. of 5S Internal Audits Target</th>
                                    <th class="th-sm">No. of 5S Internal Audits Actual</th>
                                    <th class="th-sm">5S External Assessment Score Target</th>
                                    <th class="th-sm">5S External Assessment Score Actual</th>
                                    <th class="th-sm">Date</th>
                                    @if (auth()->user()->role_id == 1)
                                        <th class="th-sm">Creator</th>
                                    @endif
                                </tr>
                            </tfoot>
                        </table>
                        {{ $records->links() }}
                    @endif

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
                    // location.reload();
                }
            }
        }
    </script>
@endsection


@section('script')

@endsection
