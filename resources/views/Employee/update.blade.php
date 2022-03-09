@extends('layouts.mainlayout')

@section('title', 'Update Page')

@section('content')
    <div class="w3-display-topmiddle w3-padding-large w3-margin" style="width: 50%">
        <div class="w3-blue-grey w3-opacity-min w3-hover-opacity-off w3-padding-large w3-round-xxlarge">
            <h1 class="w3-center"><b>Successfully Updated</b></h1>
            <hr style="height:2px; border-width:0; color:white; background-color:white">
            <div>
                <h1><b>Employee Number: </b>{{ $update['EmployeeNumber'] }}</h1>
                <h1><b>First Name: </b>{{ $update['FirstName'] }}</h1>
                <h1><b>Last Name: </b>{{ $update['LastName'] }}</h1>
                <h1><b>Birthday: </b>{{ $update['Birthday'] }}</h1>
                <h1><b>Gender: </b>{{ $update['Gender'] }}</h1>
            </div>
            <hr style="height:2px; border-width:0; color:white; background-color:white">
            <a class="w3-button w3-pale-red w3-hover-red w3-padding-large w3-round-xxlarge" href="/employee">Back</a>
        </div>
    </div>
@endsection
