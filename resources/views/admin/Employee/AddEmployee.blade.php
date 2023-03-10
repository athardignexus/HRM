@extends('admin.index')
@section('main_section')
<div class="main-content">
    <div class="page-content">
        <section class="content content-custom no-print">

            <div class=" content-wrapper " style="min-height: 306px;">
                <!-- empty div for vuejs -->
                <!-- Content Header (Page header) -->
                <form action="{{ route('admin.Employee.store') }}" method="POST" novalidate>
                    @csrf
                <section class="content-header">
                    <h1> Employees <small>Manage your Employee</small>
                    </h1>
                </section>
                <!-- Main content -->
                <section class="content2">
                    <div class="box  box-solid " id="accordion">
                        <div class="box-header with-border" style="cursor: pointer;">
                            <h3 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFilter">
                                     Employee Login Details
                                </a>

                            </h3>
                        </div>
                        <div id="collapseFilter" class="panel-collapse active collapse  in "
                            aria-expanded="true">
                            <div class="box-body">
                                <div class="form-group">
                                <div class="col-md-12">
                                        <div class="col-md-6">
                                            <label for="fullname" style="padding-left: 5px;"><strong>Full Name</strong></label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" style="padding-left: 5px;"><strong>Email</strong></label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="" required>
                                        </div>
                                </div>
                                <div class="col-md-12 pt-3">
                                    <div class="col-md-6">
                                        <label for="mobileno" style="padding-left: 5px;"><strong>Mobile No</strong></label>
                                        <input type="text" class="form-control" id="mobileno"  name="mobileno" placeholder="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="role" ><strong>Role</strong></label>
                                        <select name="role" id="role" class="form-select p-3">
                                            <option value="">select Role</option>
                                            {{ role(Auth::user()->role); }}
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-12 pt-3">
                                    <div class="col-md-6">
                                        <label for="" style="padding-left: 5px;"><strong>Password</strong></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="confirm_password" ><strong>Confirm Password</strong></label>
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="" required>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </section>
                <section class="content2">
                    <div class="box  box-solid " id="accordion">
                        <div class="box-header with-border" style="cursor: pointer;">
                            <h3 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFilter">
                                     Employee Personal Details
                                </a>

                            </h3>
                        </div>
                        <div id="collapseFilter" class="panel-collapse active collapse  in "
                            aria-expanded="true">
                            <div class="box-body">
                                <div class="form-group">
                                <div class="col-md-12">
                                        <div class="col-md-6">
                                            <label for="gaurdian_name" style="padding-left: 5px;"><strong>Guardian Name</strong></label>
                                            <input type="text" class="form-control" id="gaurdian_name" name="gaurdian_name" placeholder="" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="dob" style="padding-left: 5px;"><strong>Date Of Birth</strong></label>
                                            <input type="text" class="form-control" id="dob" name="dob" placeholder="" required>
                                        </div>
                                </div>
                                <div class="col-md-12 pt-3">
                                    <div class="col-md-6">
                                        <label for="gender" style="padding-left: 5px;"><strong>Gender</strong></label>
                                        <input type="text" class="form-control" id="gender" name="gender" placeholder="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="alternate_contact_number" style="padding-left: 5px;"><strong>Alternate Contact Number</strong></label>
                                        <input type="text" class="form-control" id="alternate_contact_number" name="alternate_contact_number" placeholder="" required>

                                    </div>
                                </div>
                                <div class="col-md-12 pt-3">
                                    <div class="col-md-6">
                                        <label for="id_proof" style="padding-left: 5px;"><strong>Id Proof Name</strong></label>
                                        <input type="text" class="form-control" id="id_proof" name="id_proof" placeholder="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="id_proof_number" ><strong>Id Proof Number</strong></label>
                                        <input type="text" class="form-control" id="id_proof_number" name="id_proof_number" placeholder="" required>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </section>
                <section class="content2">
                    <div class="box  box-solid " id="accordion">
                        <div class="box-header with-border" style="cursor: pointer;">
                            <h3 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFilter">
                                     Employee Bank Details
                                </a>

                            </h3>
                        </div>
                        <div id="collapseFilter" class="panel-collapse active collapse  in "
                            aria-expanded="true">
                            <div class="box-body">
                                <div class="form-group">
                                <div class="col-md-12">
                                        <div class="col-md-6">
                                            <label for="account_holder" style="padding-left: 5px;"><strong>Account Holder's Name</strong></label>
                                            <input type="text" class="form-control" id="account_holder" name="account_holder" placeholder="" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="account_number" style="padding-left: 5px;"><strong>Account Number</strong></label>
                                            <input type="text" class="form-control" id="dob" name="account_number" placeholder="" required>
                                        </div>
                                </div>
                                <div class="col-md-12 pt-3">
                                    <div class="col-md-6">
                                        <label for="bank" style="padding-left: 5px;"><strong>Bank Name</strong></label>
                                        <input type="text" class="form-control" id="bank" name="bank" placeholder="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ifce_code" style="padding-left: 5px;"><strong>IFCE Code</strong></label>
                                        <input type="text" class="form-control" id="ifce_code" name="ifce_code" placeholder="" required>

                                    </div>
                                </div>
                                <div class="col-md-12 pt-3">
                                    <div class="col-md-6">
                                        <label for="branch" style="padding-left: 5px;"><strong>Branch Name</strong></label>
                                        <input type="text" class="form-control" id="id_proof" name="branch" placeholder="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tax_id" ><strong>Tax Pay Id</strong></label>
                                        <input type="text" class="form-control" id="tax_id" name="tax_id" placeholder="" required>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </section>
                <section class="content2">
                    <div class="box  box-solid " id="accordion">
                        <div class="box-header with-border" style="cursor: pointer;">
                            <h3 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFilter">
                                     Employee Pay Details
                                </a>

                            </h3>
                        </div>
                        <div id="collapseFilter" class="panel-collapse active collapse  in "
                            aria-expanded="true">
                            <div class="box-body">
                                <div class="form-group">
                                <div class="col-md-12">
                                        <div class="col-md-6">
                                            <label for="basic_pay"><strong>Basic Salary</strong></label>
                                            <input type="text" class="form-control" id="basic_pay" name="basic_pay" placeholder="" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="account_number" ><strong>Pan Card No</strong></label>
                                            <input type="text" class="form-control" id="dob" name="pan_card_no" placeholder="" required>
                                        </div>
                                </div>

                                <div class="col-md-12 pt-3 ">
                                    <h4>Allowance</h4>
                                    <hr>
                                </div>

                                @php
                                    $allowance=DB::table('allowances')->where('status','1')->get();
                                    $deductions=DB::table('deductions')->where('status','1')->get();
                                @endphp

                                    <div class="col-md-12">
                                    @foreach ($allowance as $key => $value)
                                        <div class="col-md-6">
                                            <label for="{{ "allwanace".$key }}"><strong>{{ ucfirst(strtolower($value->allowance_head)) }}</strong></label>
                                            <input type='hidden' name="{{ "allowance_id".$key }}" value="{{ $value->id }}">
                                            <input type="text" class="form-control" id="{{ "allwanace".$key }}" name="allwanace[]" placeholder="" required>
                                        </div>
                                    @endforeach
                                    </div>
                                    <div class="col-md-12 pt-3 ">
                                        <h4>Deduction</h4>
                                        <hr>
                                    </div>
                                    <div class="col-md-12">
                                    @foreach ($deductions as $key => $value)
                                        <div class="col-md-6">
                                            <label for="{{ "deduction".$key }}"><strong>{{ ucfirst(strtolower($value->deduction_head)) }}</strong></label>
                                            <input type='hidden' name="{{ "deduction_id".$key }}" value="{{ $value->id }}">
                                            <input type="text" class="form-control" id="{{ "deduction".$key }}" name="deduction[]" placeholder="" required>
                                        </div>
                                    @endforeach
                                    </div>
                                    <div class=" col-md-12  text-center" style="padding-top: 20px">
                                        <input type="submit" class="btn btn-primary " value="submit"/>
                                    </div>

                            </div>
                        </div>
                    </div>
                </section>
            </form>
                <!-- /.content -->
                <!-- This will be printed -->
            </div>

        </section>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->




    <!-- <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Skote.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Dignexus
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
</div>
@endsection
