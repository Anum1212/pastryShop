@extends('layouts.dashboard') @section('head')
<link href="{{ asset('css/site/table.css') }}" rel="stylesheet"> 
<link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"> 
@endsection 
@section('style') 

@endsection 

@section('body')
@section('pageTitle', 'Account Details')
    <form id="editForm" method="POST" action="{{ route('editDetails') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-7">
                                <input autocomplete="off" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    value="{{ $userDetails->name }}" required> @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-7">
                                <input autocomplete="off" id="contact" type="number" maxlength="11" minlength="11" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}"
                                    name="contact" value="{{ $userDetails->contact }}" required> @if ($errors->has('contact'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('contact') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-7">
                                <input autocomplete="off" id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                    name="address" value="{{ $userDetails->address }}" required> @if ($errors->has('address'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-4">
                                <button type="button" onclick="allowEdit()" class="allowEdit btn btn-primary">
                                    Edit
                                </button>
                                <button type="button" onclick="cancelEdit()" class="cancelEdit btn btn-primary">
                                    Cancel
                                </button>
                                <button type="submit" class="confirm saveButton btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
@endsection @section('script')
<script>

$(document).ready(function () {
    $('input').attr('disabled', true);
    $(".cancelEdit").hide();
    $(".saveButton").hide();
});

function allowEdit() {
    $('input').attr('disabled', false);
    $(".allowEdit").hide();
    $(".saveButton").show();
    $(".cancelEdit").show();
}

function cancelEdit() {
    $('input').attr('disabled', true);
    $(".allowEdit").show();
    $(".cancelEdit").hide();
    $(".saveButton").hide();
    $('#editForm')[0].reset();
}

</script>@endsection
