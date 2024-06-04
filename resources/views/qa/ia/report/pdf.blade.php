<!DOCTYPE html>
<html>

<head>
    <title>Internal Audit Report</title>
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

        p {
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
            <th class="heading">Internal Audit Report</th>
            <th class="heading">F-SOP-RAQA-006-02</th>
            <th class="heading">Revision No. 01</th>
        </tr>
    </table>

    <p style="text-align: center; font-weight: bold; padding-bottom: 10px;">Internal Audit Report</p>

    @foreach ($row as $item)
        <table>
            <tr>
                <th>Date</th>
                <td>{{ $item->doc_date }}</td>

            <tr>
                <th>Report Number</th>
                <td>{{ $item->report_no }}</td>
            </tr>

            <tr>
                <th>Auditor(s)</th>
                <td>{{ $item->internal_auditor1 }}, {{ $item->internal_auditor2 }}</td>
            </tr>
        </table>

        <table>
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
                <th>Scope</th>
                <td>{{ $item->scope1 }}</td>
                <td>{{ $item->scope2 }}</td>
                <td>{{ $item->scope3 }}</td>
            </tr>
            <tr>
                <th>Area</th>
                <td>{{ $item->area1 }}</td>
                <td>{{ $item->area2 }}</td>
                <td>{{ $item->area3 }}</td>
            </tr>
            <tr>
                <th>Summary</th>
                <td colspan=3>{{ $item->summary }}</td>
            </tr>
        </table>

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
            <tr>
                <td>{{ $item->preparation_date }}</td>
                <td>{{ $item->approval_date }}</td>
            </tr>
        </table>
    @endforeach


</body>

</html>
