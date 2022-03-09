@extends('layouts.mainlayout')

@section('title', 'Edit Page')

@section('content')
    <div class="w3-display-topmiddle w3-padding-large w3-margin" style="width: 50%">
        <div class="w3-blue-grey w3-opacity-min w3-hover-opacity-off w3-padding-large w3-round-xxlarge">
            <h1 class="w3-center"><b>Edit Employee</b></h1>
            <hr style="height:2px; border-width:0; color:white; background-color:white">
            <form action="/employee/{id}" method="post">
                @csrf
                <h1>Employee Number: </h1> <input class="w3-input w3-border w3-round-xxlarge" type="text"
                    name="EmployeeNumber" id="EmployeeNumber" placeholder="{{ $edit['EmployeeNumber'] }}">
                <h1>First Name: </h1> <input class="w3-input w3-border w3-round-xxlarge" type="text" name="FirstName"
                    id="FirstName" placeholder="{{ $edit['FirstName'] }}">
                <h1>Last Name: </h1> <input class="w3-input w3-border w3-round-xxlarge" type="text" name="LastName"
                    id="LastName" placeholder="{{ $edit['LastName'] }}">
                <h1>Birthday: </h1> <input type="date" id="Birthday" name="Birthday">
                <h1>Gender: </h1>
                <h2><input class="w3-radio" type="radio" name="Gender" value="Male"><label>Male</label></h2>
                <h2><input class="w3-radio" type="radio" name="Gender" value="Female"><label>Female</label></h2>
                <div class="w3-display-container">
                    <a class="w3-button w3-pale-red w3-hover-red w3-padding-large w3-round-xxlarge" href="/employee">Back</a>
                    <input class="w3-button w3-pale-blue w3-hover-blue w3-padding-large w3-round-xxlarge w3-display-right"
                        type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </div>
@endsection
