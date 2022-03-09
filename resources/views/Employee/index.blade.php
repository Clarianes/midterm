@extends('layouts.mainlayout')

@section('title', 'Index Page')

@section('content')
    <div class="w3-display-topmiddle w3-padding-large w3-margin" style="width: 60%">
        <div class="w3-blue-grey w3-opacity-min w3-hover-opacity-off w3-padding-large w3-round-xxlarge">
            <div class="w3-display-container">
                <h1><b>List of Employees</b></h1>
                <a class="w3-button w3-pale-blue w3-hover-blue w3-padding-large w3-round-xxlarge w3-display-right"
                    href="/employee/create">Create</a>
            </div>
            <hr style="height:2px; border-width:0; color:white; background-color:white">
            <table class="w3-table w3-border w3-bordered w3-centered">
                <tr class="w3-pale-blue">
                    <th>Employee Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birthday</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
                @forelse ($showall as $key => $array)
                    <tr class="w3-hover-blue">
                        <td>
                            <p>{{ $array['EmployeeNumber'] }}</p>
                        </td>
                        <td>
                            <p>{{ $array['FirstName'] }}</p>
                        </td>
                        <td>
                            <p>{{ $array['LastName'] }}</p>
                        </td>
                        <td>
                            <p>{{ $array['Birthday'] }}</p>
                        </td>
                        <td>
                            <p>{{ $array['Gender'] }}</p>
                        </td>
                        <td>
                            <a class="w3-button w3-green w3-hover-light-green w3-padding-large w3-round-xxlarge"
                                href="/employee/{{ $key }}">Show</a>
                            <a class="w3-button w3-deep-orange w3-hover-orange w3-padding-large w3-round-xxlarge"
                                href="/employee/{{ $key }}/edit">Edit</a>
                            <a class="w3-button w3-red w3-hover-pale-red w3-padding-large w3-round-xxlarge"
                                href="/employee/{{ $key }}/destroy">Delete</a>
                        </td>
                    </tr>
                @empty
                    <h1>No Employees</h1>
                @endforelse
            </table>
            <hr style="height:2px; border-width:0; color:white; background-color:white">
        </div>
    </div>
@endsection
