<!DOCTYPE html>
<html>

<head>
    <title>MRM Attendance</title>
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
            <th class="heading">Management Review Attendance</th>
            <th class="heading">F-SOP-RAQA-007-03</th>
            <th class="heading">Revision No. 01</th>
        </tr>
    </table>

    @foreach ($row as $item)
        <table>
            <tr>
                <th>Meeting Number</th>
                <td>{{ $item->meeting_no }}</td>

            </tr>
        </table>

        <table>
            <tr>
                <th class="heading">Attendee</th>
                <th class="heading">Department</th>
                <th class="heading">Signature</th>
            </tr>
            <tr>
                <td>{{ $item->name1 }}</td>
                <td>{{ $item->department1 }}</td>
                <td></td>
            </tr>
            <tr>
                <td>{{ $item->name2 }}</td>
                <td>{{ $item->department2 }}</td>
                <td></td>
            </tr>
            <tr>
                <td>{{ $item->name3 }}</td>
                <td>{{ $item->department3 }}</td>
                <td></td>
            </tr>
            <tr>
                <td>{{ $item->name4 }}</td>
                <td>{{ $item->department4 }}</td>
                <td></td>
            </tr>
            <tr>
                <td>{{ $item->name5 }}</td>
                <td>{{ $item->department5 }}</td>
                <td></td>
            </tr>
            <tr>
                <td>{{ $item->name6 }}</td>
                <td>{{ $item->department6 }}</td>
                <td></td>
            </tr>
            <tr>
                <td>{{ $item->name7 }}</td>
                <td>{{ $item->department7 }}</td>
                <td></td>
            </tr>
        </table>
        <table>
            <tr>
                <th class="heading" colspan="3" >Session Facilitator</th>
            </tr>
            <tr>
                <th>{{ $item->prepared_by }}</th>
                <th>RAQA Officer</th>
                <th></th>
            </tr>
        </table>
    @endforeach


</body>

</html>
