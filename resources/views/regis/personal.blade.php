@extends('layouts.form')

@section('title','Registration')

@section('header','Personal Information')

@section('content')
@isset($regFormData)
    reg form data exists
@endisset
<form action="{{ route('postRegPers') }}" method="POST">
    @csrf

    <!-- Errors display -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h3>Student Information</h3>
    <p>
        <table>
        <tr>
            <td class="form-label-container">
                <label for="sName">Applicant Name</label>
            </td>
            <td class="form-input-container">
                <input type="text" name="sName" class="form-input" value="{{ $regFormData->sName ?? '' }}"><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="sContact">Contact Number</label>
            </td>
            <td>
                <input type="text" name="sContact" class="form-input" value="{{ $regFormData->sContact ?? '' }}"><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="sEmail">E-mail Address</label>
            </td>
            <td>
                <input type="text" name="sEmail" class="form-input" value="{{ $regFormData->sEmail ?? '' }}"><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="sAddress">Address</label>
            </td>
            <td>
                <textarea name="sAddress" class="form-input"> {{ $regFormData->sAddress ?? '' }}</textarea><br>
            </td>
        </tr>
        </table>
    </p>
    <br>
    <h3>Guardian Information</h3>
    <p>
        <table>
        <tr>
            <td class="form-label-container">
                <label for="gName">Guardian Name</label>
            </td>
            <td class="form-input-container">
                <input type="text" name="gName" class="form-input" value="{{ $regFormData->gName ?? '' }}"><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="gRelation">Relation</label>
            </td>
            <td>
                <input type="text" name="gRelation" class="form-input" value="{{ $regFormData->gRelation ?? '' }}"><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="gContact">Contact Number</label>
            </td>
            <td>
                <input type="text" name="gContact" class="form-input" value="{{ $regFormData->gContact ?? '' }}"><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="gEmail">E-mail Address<font style="color: red;">*</font></label>
            </td>
            <td>
                <input type="text" name="gEmail" class="form-input" value="{{ $regFormData->gEmail ?? '' }}"><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="gAddress">Address</label>
            </td>
            <td>
                <textarea name="gAddress" class="form-input"> {{ $regFormData->gAddress ?? '' }}</textarea><br>
            </td>
        </tr>
        </table>
    </p>
    <br>
    <a href="/registration/0">Back</a>
    <a href="javascript:{}" onclick="this.closest('form').submit();return false;">Continue</a>
</form>
@endsection

<!-- would be nice to keep an instructions list along the way -->
<!-- cache values till confirmation? -->