<!DOCTYPE html>
<html>

<head>
    <title>MRM Agenda</title>
    {{-- <link rel="icon" href="{{ public_path('/assets/img/logo-4.png') }}" type="image/x-icon"> --}}
    <style>
        table {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 14px;
            border-collapse: collapse;
            width: 100%;
            color: #63677b;
            margin-bottom: 30px;
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
            <th class="heading">Management Review Agenda</th>
            <th class="heading">F-SOP-RAQA-007-01</th>
            <th class="heading">Revision No. 01</th>
        </tr>
    </table>

    @foreach ($row as $item)
        <table>
            <tr>
                <th>Meeting Number</th>
                <td>{{ $item->meeting_no }}</td>
            </tr>
            <tr>
                <th>Meeting Date</th>
                <td>{{ $item->meeting_date }}</td>
            </tr>
            <tr>
                <th>Review Period</th>
                <td>{{ $item->review_period }}</td>
            </tr>
            <tr>
                <th>Start Time</th>
                <td>{{ $item->start_time }}</td>
            </tr>
            <tr>
                <th>End Time</th>
                <td>{{ $item->end_time }}</td>
            </tr>
            <tr>
                <th>Venue</th>
                <td>{{ $item->venue }}</td>
            </tr>
        </table>

        <table>
            <tr>
                <th colspan="2" class="heading">Review Items</th>
            </tr>
            <tr>
                <td colspan="2">{{ $item->review_item1 }}</td>
            </tr>
            <tr>
                <td colspan="2">{{ $item->review_item2 }}</td>
            </tr>
            <tr>
                <td colspan="2">{{ $item->review_item3 }}</td>
            </tr>
            <tr>
                <td colspan="2">{{ $item->review_item4 }}</td>
            </tr>
            <tr>
                <td colspan="2">{{ $item->review_item5 }}</td>
            </tr>
            <tr>
                <td colspan="2">{{ $item->review_item6 }}</td>
            </tr>
            <tr>
                <td colspan="2">{{ $item->review_item7 }}</td>
            </tr>
            <tr>
                <td colspan="2">{{ $item->review_item8 }}</td>
            </tr>
            <tr>
                <td colspan="2">{{ $item->review_item9 }}</td>
            </tr>
            <tr>
                <td colspan="2">{{ $item->review_item10 }}</td>
            </tr>
            @if ($item->review_item11)
                <tr>
                    <td colspan="2">{{ $item->review_item11 }}</td>
                </tr>
                <tr>
                    <td colspan="2">{{ $item->review_item12 }}</td>
                </tr>
                <tr>
                    <td colspan="2">{{ $item->review_item13 }}</td>
                </tr>
                <tr>
                    <td colspan="2">{{ $item->review_item14 }}</td>
                </tr>
                <tr>
                    <td colspan="2">{{ $item->review_item15 }}</td>
                </tr>
                <tr>
                    <td colspan="2">{{ $item->review_item16 }}</td>
                </tr>
                <tr>
                    <td colspan="2">{{ $item->review_item17 }}</td>
                </tr>
                <tr>
                    <td colspan="2">{{ $item->review_item18 }}</td>
                </tr>
                <tr>
                    <td colspan="2">{{ $item->review_item19 }}</td>
                </tr>
                <tr>
                    <td colspan="2">{{ $item->review_item20 }}</td>
                </tr>
            @endif()
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
        </table>
    @endforeach


</body>

</html>
