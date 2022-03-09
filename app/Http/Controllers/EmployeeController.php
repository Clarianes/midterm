<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $array = [
        1 => [
            'EmployeeId' => '1',
            'EmployeeNumber' => '1101',
            'FirstName' => 'Diena',
            'LastName' => 'Trethewey',
            'Birthday' => '01/04/1994',
            'Gender' => 'Female'
        ],
        2 => [
            'EmployeeId' => '2',
            'EmployeeNumber' => '1102',
            'FirstName' => 'Hartwell',
            'LastName' => 'Fears',
            'Birthday' => '10/05/1993',
            'Gender' => 'Male'
        ],
        3 => [
            'EmployeeId' => '3',
            'EmployeeNumber' => '1303',
            'FirstName' => 'Richmond',
            'LastName' => 'Franscioni',
            'Birthday' => '29/03/1993	',
            'Gender' => 'Male'
        ],
        4 => [
            'EmployeeId' => '4',
            'EmployeeNumber' => '1404',
            'FirstName' => 'Sasha',
            'LastName' => 'Ciani',
            'Birthday' => '27/02/1994',
            'Gender' => 'Female'
        ],
        5 => [
            'EmployeeId' => '5',
            'EmployeeNumber' => '1505',
            'FirstName' => 'Elianore',
            'LastName' => 'Fuentes',
            'Birthday' => '23/08/1997',
            'Gender' => 'Female'
        ]
    ];

    public function index()
    {
        return view('Employee.index', ['showall' => $this->array]);
    }

    public function create()
    {
        return view('Employee.create');
    }

    public function store(Request $request)
    {
        $EmployeeNumber = Request()->input('EmployeeNumber');
        $FirstName = Request()->input('FirstName');
        $LastName = Request()->input('LastName');
        $Birthday = Request()->input('Birthday');
        $Gender = Request()->input('Gender');
        $array = [
            'EmployeeNumber' => $EmployeeNumber,
            'FirstName' => $FirstName,
            'LastName' => $LastName,
            'Birthday' => $Birthday,
            'Gender' => $Gender
        ];
        return view('Employee.store', ['store' => $array]);
    }

    public function show($id)
    {
        abort_if(!isset($this->array[$id]), 404);
        return view('Employee.show', ['show' => $this->array[$id]]);
    }

    public function edit($id)
    {
        abort_if(!isset($this->array[$id]), 404);
        return view('Employee.edit', ['edit' => $this->array[$id]]);
    }

    public function update(Request $request, $id)
    {
        $EmployeeNumber = Request()->input('EmployeeNumber');
        $FirstName = Request()->input('FirstName');
        $LastName = Request()->input('LastName');
        $Birthday = Request()->input('Birthday');
        $Gender = Request()->input('Gender');
        $array = [
            'EmployeeNumber' => $EmployeeNumber,
            'FirstName' => $FirstName,
            'LastName' => $LastName,
            'Birthday' => $Birthday,
            'Gender' => $Gender
        ];
        return view('Employee.update', ['update' => $array]);
    }

    public function destroy($id)
    {
        abort_if(!isset($this->array[$id]), 404);
        return view('Employee.destroy', ['destroy' => $this->array[$id]]);
    }
}
