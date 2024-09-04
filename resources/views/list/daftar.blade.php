@extends('layouts.master')
@section('judul')
<h1>Buat Account Baru!</h1>
@endsection

@section('content')
<title>Document</title>
    <form action="/home" method="POST">
        @csrf
    <label>First Name :</label> <br>
    <input type="text" name="fname" /> <br>
    <br />
    <label>Last Name :</label> <br>
    <input type="text" name="lname" /> <br />
    <br />
    <label>Gender</label> <br />
    <input type="radio" name="status"> Male <br />
    <input type="radio" name="status"> Female <br />
    <input type="radio" name="status"> Other <br />
    <br />
    <label> Nationality :</label> <br />
    <br />
    <select name="citizen">
        <option value="1">American</option>
        <option value="2">Rusian</option>
        <option value="3">Arabian</option>
        <option value="4">Indonesian</option>
    </select> <br />
    <br />
    <label> Language Spoken :</label>
    <br />
    <input type="checkbox" name="Bahasa">English USA <br>
    <input type="checkbox" name="Bahasa">Arabic <br>
    <input type="checkbox" name="Bahasa">Rusian <br> 
    <input type="checkbox" name="Bahasa">Indonesian <br>
    <label> Bio :</label> <br />
    <textarea name="Description" cols="30" rows="10"></textarea> <br/>
    <br />
    <input type="submit" value="Sign Up"> <br />
    </form>
@endsection