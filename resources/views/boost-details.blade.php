@extends('partials.app')
@section('content')
    <section class="container">
        <div class="accountContainer">
            <div class="row accountInformationPage">
                <div class="col-4 accountPageSlices">
                    <h3 class="accountPageTitles">{{$boosts->created_at}}</h3></br>
                        <tr>
                            <td><h5 class="accountPageLowerTitles">Mevcut Lig:</h5><td><p class="accountPageText">{{$boosts->currentLeague}} {{$boosts->leagueDivision}}</p></td></tr></br>
                            <td><h5 class="accountPageLowerTitles">Hedef Lig:</h5><td><p class="accountPageText">{{$boosts->targetLeague}} {{$boosts->targetLeagueDivision}}</p></td></br>
                            <td><h5 class="accountPageLowerTitles">Ücret:</h5><td><p class="accountPageText">{{$boosts->price}}</p></td></br>
                        </tr>
                </div>
            </div>
        </div>
    </section>
@endsection
