<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Sadecler Boost Admin Panel</title>

    <link rel="stylesheet" href="{{asset('assets/libs/bootstrap/css/bootstrap.min.css')}}/">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}/">
</head>

<table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Sipariş ID</th>
            <th>Müşteri ID</th>
            <th>Güncel Lig</th>
            <th>Hedef Lig</th>
            <th>Ücret</th>
            <th>Tarih</th>
            <th>İşlem</th>
        </tr>
        </thead>
        <tbody>
        @foreach($boosts as $boost)
        <tr>
            <td>{{$boost->id}}</td>
            <td>{{$boost->user_id}}</td>
            <td>{{$boost->currentLeague}} {{$boost->leagueDivision}}</td>
            <td>{{$boost->targetLeague}} {{$boost->targetLeagueDivision}}</td>
            <td>{{$boost->price}}</td>
            <td>{{$boost->created_at}}</td>
            <td>
                <form action="{{ route('delete.boost', ['id' => $boost->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this data?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete Data</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>Sipariş ID</th>
            <th>Müşteri ID</th>
            <th>Güncel Lig</th>
            <th>Hedef Lig</th>
            <th>Ücret</th>
            <th>Tarih</th>
        </tr>
        </tfoot>
    </table>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    </body>
    </html>
