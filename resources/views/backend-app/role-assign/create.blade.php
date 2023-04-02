@extends('layouts.dashboard')
@section('title','RoleAssign - Create')
@section('backendContent')

<div class="content container-fluid">
    <div class="card mt-5">
        <div class="card-body">
            <h2 class="text-center">Role Assign</h2>
            <div class="row">
                <div class="col-lg-6 m-auto">
                                        
                    <form>
                        <div class="mb-3">
                        <label for="validationValidInput1">Valid input</label>
                        <input type="text" class="form-control is-valid" placeholder="Placeholder">
                        </div>
                    
                        <div class="mb-3">
                        <label for="validationValidSelect1">Valid select</label>
                        <select class="form-select is-valid" id="validationValidSelect1">
                            <option>Choose an option</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>

                        </select>
                        <span class="valid-feedback">Valid feedback</span>
                        </div>
                    
                        <div class="mb-3">
                        <label for="validationValidTextarea1">Valid textarea</label>
                        <textarea class="form-control is-valid" placeholder="Textarea field" id="validationValidTextarea1" rows="4"></textarea>
                        </div>
                    
                        <div class="mb-3">
                        <label for="validationValidFileInput1">Valid file input</label>
                        <input type="file" id="validationValidFileInput1" class="form-control is-valid">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 
@endsection