@extends('layouts.mainlayout')

@section('title', 'Delete Page')

@section('content')
    <div class="w3-display-topmiddle w3-padding-large w3-margin" style="width: 50%">
        <div class="w3-blue-grey w3-opacity-min w3-hover-opacity-off w3-padding-large w3-round-xxlarge">
            <h1 class="w3-center"><b>Are you sure you want to delete this employee?</b></h1>
            <hr style="height:2px; border-width:0; color:white; background-color:white">
            <div>
                <h1><b>Employee Number: </b>{{ $destroy['EmployeeNumber'] }}</h1>
                <h1><b>First Name: </b>{{ $destroy['FirstName'] }}</h1>
                <h1><b>Last Name: </b>{{ $destroy['LastName'] }}</h1>
                <h1><b>Birthday: </b>{{ $destroy['Birthday'] }}</h1>
                <h1><b>Gender: </b>{{ $destroy['Gender'] }}</h1>
            </div>
            <hr style="height:2px; border-width:0; color:white; background-color:white">
            <div class="w3-display-container">
                <a class="w3-button w3-pale-blue w3-hover-blue w3-padding-large w3-round-xxlarge" href="/employee">No</a>
                <a class="w3-button w3-pale-red w3-hover-red w3-padding-large w3-round-xxlarge w3-display-right"
                    href="/employee">Yes</a>
            </div>
        </div>
    </div>
@endsection
