<!DOCTYPE html>
<html>

<head>
    <title>MRM Minutes</title>
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
            <th class="heading">Management Review Minutes</th>
            <th class="heading">F-SOP-RAQA-007-02</th>
            <th class="heading">Revision No. 01</th>
        </tr>
    </table>

    <table>
        <tr>
            <th>Meeting Number</th>
            <td>{{ $mailData['meeting_no'] }}</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="heading">Decision</th>
            <th class="heading">Action</th>
            <th class="heading">Responsible</th>
            <th class="heading">Completion Date</th>
            <th class="heading">Remarks</th>
        </tr>

        @for($i=1; $i<=10; $i++)
        <tr>
            <td>{{ $mailData['decision'.$i] }}</td>
            <td>{{ $mailData['action'.$i] }}</td>
            <td>{{ $mailData['responsible'.$i] }}</td>
            <td>{{ $mailData['completion_date'.$i] }}</td>
            <td>{{ $mailData['remarks'.$i] }}</td>
        </tr>
        @endfor
    </table>

    <table>
        <tr>
            <th class="heading">Prepared By</th>
            <th class="heading">Approved By</th>
        </tr>
        <tr>
            <td style="text-align: center;">
                @if ($mailData['prepared_by'])
                    <img width="150" src="{{ public_path('/assets/img/signatures/sign-1.png') }}"
                        style="display: block; margin: 0 auto;">
                @endif
            </td>
            <td style="text-align: center;">
                @if ($mailData['approved_by'])
                    <img width="150" src="{{ public_path('/assets/img/signatures/sign-2.png') }}"
                        style="display: block; margin: 0 auto;">
                @endif
            </td>
        </tr>
        <tr>
            <td>
                @if ($mailData['prepared_by'])
                    RA&QA Officer
                @endif
            </td>
            <td>
                @if ($mailData['approved_by'])
                    Managing Director
                @endif
            </td>

        </tr>
        <tr>
            <td>{{ $mailData['prepared_by']}}</td>
            <td>{{ $mailData['approved_by']}}</td>
        </tr>
    </table>
</body>

</html>
