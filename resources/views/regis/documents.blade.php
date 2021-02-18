@extends('layouts.form')

@section('title','Registration')

@section('header','Documents')

@section('content')
<form action="{{ route('postRegDocs') }}" method="post" enctype="multipart/form-data">
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

    <h5>Birth Certificate</h5>
    <input type="file" name="birthcert" onchange="readURL(this,'#birthcertSpace')"><br>
    <img id="birthcertSpace" src="@isset($regFormData->birthCert) {{ asset('storage/regFormDocs/'.$regFormData->birthCert) }} @endisset" alt="Birth Certificate"><br>

    <br>
    <h5>Good Moral Certificate</h5>
    <input type="file" name="goodmoral" onchange="readURL(this,'#goodmoralSpace')"><br>
    <img id="goodmoralSpace" src="@isset($regFormData->goodMoral) {{ asset('storage/regFormDocs/'.$regFormData->goodMoral) }} @endisset" alt="Good Moral Certificate"><br>

    <br>
    <h5>Diploma</h5>
    <input type="file" name="diploma" onchange="readURL(this,'#diplomaSpace')"><br>
    <img id="diplomaSpace" src="@isset($regFormData->diploma) {{ asset('storage/regFormDocs/'.$regFormData->diploma) }} @endisset" alt="Diploma"><br>

    <br>
    <h5>Transcript of Records<font style="color: red;">*</font></h5>
    <input type="file" name="tor" onchange="readURL(this,'#tor')"><br>
    <img id="torSpace" src="@isset($regFormData->tor) {{ asset('storage/regFormDocs/'.$regFormData->tor) }} @endisset" alt="Transcript of Records"><br>

    <!-- try giving ability to give image or pdf? -->
    <!-- ---needs pdf method -->

    <br>
    <a href="/registration/1">Back</a>
    <a href="javascript:{}" onclick="this.closest('form').submit();return false;">Continue</a>
</form>
@endsection

@section('script')
    <script>
        function readURL(input,targetID) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(targetID)
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
@endsection