@extends('layouts.app')
<table class="table">
    <thead class="thead-dark">
        <tr>
             <th scope="col">ID</th>
             <th scope="col">Complete Name</th>
             <th scope="col">Email</th>
             <th scope="col">Contact Number</th>
             <th scope="col">Birth Date</th>
             <th scope="col">Religious Affiliation</th>
             <th scope="col">Bible Study Date</th>
             <th scope="col">Bible Study Time</th>
             <th scope="col">Bible Study Location</th>
        </tr>
    </thead>
    <tbody>
    @foreach ( $bstable as $bstable )
    <tr>
        <td>{{ $bstable->id }}</td>
        <td>{{ $bstable->name }}</td>
        <td>{{ $bstable->email }}</td>
        <td>{{ $bstable->number }}</td>
        <td>{{ $bstable->bdate }}</td>
        <td>{{ $bstable->relaff }}</td>
        <td>{{ $bstable->bsdate }}</td>
        <td>{{ $bstable->bstime }}</td>        
        <td>{{ $bstable->bslocation }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
<p class="lead p-5">
    <a class="btn btn-primary btn-sm" href="/bible-study-request-form" role="button">Resubmit form</a>
</p>