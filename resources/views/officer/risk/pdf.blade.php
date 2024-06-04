<!DOCTYPE html>
<html>

<head>
    <title>Risk Assessment</title>
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
            <th class="heading">Risk Assessment Form</th>
            <th class="heading">F-SOP-RAQA-002-03</th>
            <th class="heading">Revision No. 01</th>
        </tr>
    </table>

    @foreach ($row as $item)
        <table>
            <tr>
                <th>QRE No.</th>
                <td>{{ $item->qre_no }}</td>
            </tr>

            <tr>
                <th>Date of Identification</th>
                <td>{{ $item->receipt_date }}</td>
            </tr>
            <tr>
                <th>Department</th>
                <td>{{ $item->department }}</td>
            </tr>
            <tr>
                <th>Area</th>
                <td>{{ $item->area }}</td>
            </tr>
            <tr>
                <th>Coordinator</th>
                <td>{{ $item->coordinator }}</td>
            </tr>

        </table>
        <table>
            <tr>
                <th colspan="2" class="heading">Risk Description</th>
            </tr>
            <tr>
                <td colspan="2">{{ $item->description }}</td>
            </tr>
        </table>
        <table>
            <tr>
                <th colspan="2" class="heading">Existing Controls</th>
            </tr>
            <tr>
                <td colspan="2">{{ $item->existing_controls }}</td>
            </tr>
        </table>
        <table>
            <tr>
                <th colspan=5 class="heading">Risk Category - Before</th>
            </tr>
            <tr>
                <th class="">Severity</th>
                <th class="">Probablity</th>
                <th class="">Detectability</th>
                <th class="">RPN No.</th>
                <th class="">Criticality</th>
            </tr>
            <tr>
                <td>{{ $item->severity_before }}</td>
                <td>{{ $item->probablity_before }}</td>
                <td>{{ $item->detectability_before }}</td>
                <td>{{ $item->rpn_before }}</td>
                <td>{{ $item->criticality_before }}</td>
            </tr>
        </table>
        <table>
            <tr>
                <th colspan=3 class="heading">Recommended Actions</th>
            </tr>
            <tr>
                <th class="">Action</th>
                <th class="">Responsibility</th>
                <th class="">Completion Date</th>
            </tr>
            @for ($i = 1; $i <= 5; $i++)
                <tr>
                    <td>{{ $item->{'action' . $i} }}</td>
                    <td>{{ $item->{'responsibility' . $i} }}</td>
                    <td>{{ $item->{'completion_date' . $i} }}</td>
                </tr>
            @endfor
        </table>
        <table>
            <tr>
                <th colspan=5 class="heading">Risk Category - After</th>
            </tr>
            <tr>
                <th class="">Severity</th>
                <th class="">Probablity</th>
                <th class="">Detectability</th>
                <th class="">RPN No.</th>
                <th class="">Criticality</th>
            </tr>
            <tr>
                <td>{{ $item->severity_after}}</td>
                <td>{{ $item->probablity_after }}</td>
                <td>{{ $item->detectability_after }}</td>
                <td>{{ $item->rpn_after }}</td>
                <td>{{ $item->criticality_after }}</td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Closing Date</th>
                <td>{{ $item->closing_date }}</td>
            </tr>
        </table>

        <table>
            <tr>
                <th class="heading">Verified By</th>
                <th class="heading">Reviewed By</th>
                <th class="heading">Approved By</th>
            </tr>
            <tr>
                <td style="text-align: center;">
                    @if ($item->verified_by)
                        <img width="150" src="{{ public_path('/assets/img/signatures/sign-2.png') }}"
                            style="display: block; margin: 0 auto;">
                    @endif
                </td>
                <td style="text-align: center;">
                    @if ($item->reviewed_by)
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
                    @if ($item->verified_by)
                        TS Manager
                    @endif
                </td>
                <td>
                    @if ($item->reviewed_by)
                        RA & QA Officer
                    @endif
                </td>
                <td>
                    @if ($item->approved_by)
                        Managing Director
                    @endif
                </td>
            </tr>
            <tr>
                <td>{{ $item->verified_by }}</td>
                <td>{{ $item->reviewed_by }}</td>
                <td>{{ $item->approved_by }}</td>
            </tr>
        </table>

    @endforeach


</body>

</html>
