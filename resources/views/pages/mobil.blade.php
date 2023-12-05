@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'tables'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Simple Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th class="text-right">Salary</th>
                                    <th class="text-right">Actions</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dakota Rice</td>
                                        <td>Niger</td>
                                        <td>Oud-Turnhout</td>
                                        <td class="text-right">$36,738</td>
                                        <td class="text-right">
                                        <button class="btn btn-green">Add</button>
                                        <button class="btn btn-primary">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header">
                        <h4 class="card-title"> Table on Plain Background</h4>
                        <p class="card-category"> Here is a subtitle for this table</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th class="text-right">Salary</th>
                                    <th class="text-right">Actions</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dakota Rice</td>
                                        <td>Niger</td>
                                        <td>Oud-Turnhout</td>
                                        <td class="text-right">$36,738</td>
                                        <td class="text-right">
                                        <button class="btn btn-green">Add</button>
                                        <button class="btn btn-primary">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection