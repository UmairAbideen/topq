<!DOCTYPE html>
<html>

<head>
    <title>Internal Audit Schedule</title>
    {{-- <link rel="icon" href="{{ public_path('/assets/img/logo-4.png') }}" type="image/x-icon"> --}}
    <style>
        table {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 14px;
            border-collapse: collapse;
            width: 100%;
            color: #63677b;
            margin-bottom: 50px;
        }

        .heading {
            text-align: center;
            color: white;
            background-color: rgb(0, 112, 192);
        }

        th {
            border: 0.5px solid #808080;
            text-align: left;
            padding: 8px;
            width: 33%;
        }

        td {
            border: 0.5px solid #808080;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            /* background-color: #dddddd; */
        }
        p{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 14px;
            color: #63677b;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th colspan="3" style="text-align: center;">
                <img width="250" src="{{ public_path('/assets/img/logo-4.png') }}"
                    style="display: block; margin: 0 auto;" />
            </th>
        </tr>
        <tr class="heading">
            <th class="heading">Internal Audit Schedule</th>
            <th class="heading">F-SOP-RAQA-006-01</th>
            <th class="heading">Revision No. 01</th>
        </tr>
    </table>

    @foreach ($row as $item)
        <table>
            <tr>
                <th>Date</th>
                <td>{{ $item->doc_date }}</td>
            </tr>
            <tr>
                <th>Internal Auditor(s)</th>
                <td>{{ $item->internal_auditor1 }}, {{ $item->internal_auditor2 }}</td>
            </tr>
        </table>

        <p style="font-weight: bold; padding-bottom: 20px;">Subject: Internal Audit Schedule</p>

        <p style="padding-bottom: 5px;">Dear Sir</p>

        <p style="">I would like to convey that as per our Internal Audit Plan given in Internal Audit Procedure,
            Audit of the  <span style="font-weight: bold;">{{ $item->department1 }}, {{ $item->department2 }}, {{ $item->department3 }} </span>departments has been scheduled as follows;</p>

        <table style="padding-top: 30px;">
            <tr>
                <th>Department(s)</th>
                <td>{{ $item->department1 }}</td>
                <td>{{ $item->department2 }}</td>
                <td>{{ $item->department3 }}</td>
            </tr>
            <tr>
                <th>Date of Audit</th>
                <td>{{ $item->date_dep1 }}</td>
                <td>{{ $item->date_dep2 }}</td>
                <td>{{ $item->date_dep3 }}</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>{{ $item->time1 }}</td>
                <td>{{ $item->time2 }}</td>
                <td>{{ $item->time3 }}</td>
            </tr>
            <tr>
                <th>Area</th>
                <td>{{ $item->area1 }}</td>
                <td>{{ $item->area2 }}</td>
                <td>{{ $item->area3 }}</td>
            </tr>
            <tr>
                <th>Auditee(s)</th>
                <td>{{ $item->auditee1a }}, {{ $item->auditee1 }}, {{ $item->auditee1c }}</td>
                <td>{{ $item->auditee2a }}, {{ $item->auditee2b }}, {{ $item->auditee2c }}</td>
                <td>{{ $item->auditee3a }}, {{ $item->auditee3b }}, {{ $item->auditee3c }}</td>
            </tr>
        </table>

        <p style="padding-bottom: 30px;">Auditors and auditee are requested to make
            all necessary arrangements for the audit as per prescribed procedure of internal audit.</p>



        <table>
            <tr>
                <th class="heading">Prepared By</th>
                <th class="heading">Approved By</th>
            </tr>
            <tr>
                <td style="text-align: center;">
                    @if ($item->prepared_by)
                        <img width="150" src="{{ public_path('/assets/img/signatures/sign-1.png') }}"
                            style="display: block; margin: 0 auto;">
                    @endif
                </td>
                <td style="text-align: center;">
                    @if ($item->approved_by)
                        <img width="150" src="{{ public_path('/assets/img/signatures/sign-2.png') }}"
                            style="display: block; margin: 0 auto;">
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if ($item->prepared_by)
                        RA&QA Officer
                    @endif
                </td>
                <td>
                    @if ($item->approved_by)
                        Managing Director
                    @endif
                </td>
            </tr>
            <tr>
                <td>{{ $item->prepared_by }}</td>
                <td>{{ $item->approved_by }}</td>
            </tr>
        </table>
    @endforeach


</body>

</html>
