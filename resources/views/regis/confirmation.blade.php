@extends('layouts.form')

@section('title','Registration')

@section('header','Confirmation')

@section('content')
<form action="{{ route('postRegConf') }}" method="post">
    <h2>Personal Information</h2>
    <p>
        <h3>Applicant Information</h3>
        <table>
        <tr>
            <td class="form-label-container">
                Applicant Name:
            </td>
            <td class="form-input-container">
                {{{ $regFormData->sName ?? '' }}}<br>
            </td>
        </tr>
        <tr>
            <td>
                Contact Number:
            </td>
            <td>
                {{{ $regFormData->sContact ?? '' }}}<br>
            </td>
        </tr>
        <tr>
            <td>
                E-mail Address:
            </td>
            <td>
                {{{ $regFormData->sEmail ?? '' }}}<br>
            </td>
        </tr>
        <tr>
            <td>
                Address:
            </td>
            <td>
                {{{ $regFormData->sAddress ?? '' }}}<br>
            </td>
        </tr>
        </table>
    </p>
    <br>
    <h3>Guuardian Information</h3>
    <p>
        <table>
        <tr>
            <td class="form-label-container">
                Guardian Name:
            </td>
            <td class="form-input-container">
                {{{ $regFormData->gName ?? '' }}}<br>
            </td>
        </tr>
        <tr>
            <td>
                Relation:
            </td>
            <td>
                {{{ $regFormData->gRelation ?? '' }}}<br>
            </td>
        </tr>
        <tr>
            <td>
                Contact Number:
            </td>
            <td>
                {{{ $regFormData->gContact ?? '' }}}<br>
            </td>
        </tr>
        <tr>
            <td>
                E-mail Address<font style="color: red;">*</font>:
            </td>
            <td>
                {{{ $regFormData->gEmail ?? '' }}}<br>
            </td>
        </tr>
        <tr>
            <td>
                Address:
            </td>
            <td>
                {{{ $regFormData->gAddress ?? '' }}}<br>
            </td>
        </tr>
        </table>
    </p>
    <br>
    <hr>
    <h2>Documents</h2>
    <p>
        <h3>Birth Certificate</h3>
        <img id="birthcert" src="@isset($regFormData->birthCert) {{ asset('storage/regFormDocs/'.$regFormData->birthCert) }} @endisset" alt="Birth Certificate"><br>
    
        <br>
        <h3>Good Moral Certificate</h3>
        <img id="goodmoral" src="@isset($regFormData->goodMoral) {{ asset('storage/regFormDocs/'.$regFormData->goodMoral) }} @endisset" alt="Good Moral Certificate"><br>
    
        <br>
        <h3>Diploma</h3>
        <input type="file" onchange="readURL(this,'#diploma')"><br>
        <img id="diploma" src="@isset($regFormData->diploma) {{ asset('storage/regFormDocs/'.$regFormData->diploma) }} @endisset" alt="Diploma"><br>
    
        <br>
        <h3>Transcript of Records<font style="color: red;">*</font></h3>
        <img id="tor" src="@isset($regFormData->tor) {{ asset('storage/regFormDocs/'.$regFormData->tor) }} @endisset" alt="Transcript of Records"><br>
    </p>

    <a href="{{ route('getRegDocs') }}">Back</a>
    <button type="submit">Submit</button>
</form>
@endsection