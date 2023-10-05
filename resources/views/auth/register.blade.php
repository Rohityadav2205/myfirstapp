<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
                    <div class="card-body">
                        <!-- Your registration form HTML here -->
                        <form class="row g-3">
                        <div class="col-md-4">
                            <label for="inputName4" class="form-label">Name</label>
                            <input type="Name" class="form-control" id="inputName4">
                          </div>
                          <div class="col-md-4">
                            <label for="inputMiddlename4" class="form-label">Middle Name</label>
                            <input type="Middle Name" class="form-control" id="inputMiddlename4">
                          </div>
                          <div class="col-md-4">
                            <label for="inputLastname4" class="form-label">Last Name</label>
                            <input type="Last Name" class="form-control" id="inputLastname4">
                          </div>
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Email</label>
                          <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Password</label>
                          <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                          <label for="inputAddress" class="form-label">Address</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                          <label for="inputAddress2" class="form-label">Address 2</label>
                          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-md-6">
                          <label for="inputCity" class="form-label">City</label>
                          <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                          <label for="inputState" class="form-label">State</label>
                          <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="col-md-2">
                          <label for="inputPin Code" class="form-label">Pin Code </label>
                          <input type="number" class="form-control" id="inputPin Code">
                        </div>
                        <div>
                            <label for="formFileLg" class="form-label">Large file input example</label>
                            <input class="form-control form-control-lg" id="formFileLg" type="file">
                          </div>
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                              Check me out
                            </label>
                          </div>
                        </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
