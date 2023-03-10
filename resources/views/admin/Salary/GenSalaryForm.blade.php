@extends('admin.index')
@section('main_section')
<div class="main-content">

    <div class="page-content">
        <section class="content content-custom no-print">
            <div class=" content-wrapper " style="min-height: 306px;">
                <!-- empty div for vuejs -->
                <!-- End of currency related field-->
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Employee <small>Manage Salary</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content2">

                    <div class="box box-primary">
                        <div class="box-header">

                            <h3 class="box-title">Employee Salary Generate</h3>
                            <div class="box-tools">
                                <a type="button" class="btn btn-block btn-primary "
                                    href="{{ route('admin.Employee.create') }}"
                                    data-container=".contact_modal">
                                    <i class="fa fa-plus"></i> Add</a>
                            </div>
                        </div>

                        <div class="box-body">

                            <div id="contact_table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <form action="{{ route('admin.emp_list') }}" method="POST">
                                    @csrf
                                <div class="row margin-bottom-20 text-center">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-3">
                                        <select name="month" class="form-select">
                                            <option value="">SELECT MONTH</option>
                                               {{ getmonth(old('month','')); }}
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select name="month" class="form-select">
                                            <option value="">SELECT YEAR</option>
                                               {{ getYear(date('Y')); }}
                                        </select>

                                    </div>
                                    <div class="col-sm-1">
                                        <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary btn-sm">
                                    </div>
                                    <!-- <div id="contact_table_processing"
                                        class="dataTables_processing panel panel-default"
                                        style="display: none;">Processing...</div> -->
                                </div>
                            </form>

                                <div class="container-fluid px-0">
                                    <div class="scrollables">
                                        <div>
                                            <table cellpadding="0" cellspacing="0" style="width: 100%; max-width: 100%;">
                                                <tr class="thh_padding">
                                                    <th>Action</th>
                                                    <th>Name</th>
                                                    <th>Username/email</th>
                                                    <th>Guardian Name</th>
                                                    <th>Mobile No</th>
                                                    <th>Role</th>
                                                </tr>

                                                {{-- <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button"
                                                                class="btn btn-info dropdown-toggle btn-xs"
                                                                data-toggle="dropdown"
                                                                aria-expanded="false">Actions<span
                                                                    class="caret"></span><span
                                                                    class="sr-only">Toggle Dropdown
                                                                </span>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-left"
                                                                role="menu">

                                                                <li><a
                                                                        href="#"><i
                                                                            class="fas fa-eye"
                                                                            aria-hidden="true"></i>View</a></li>
                                                                <li><a href="#"
                                                                        class="edit_contact_button"><i
                                                                            class="fa fa-edit"></i>Edit</a>
                                                                </li>
                                                                <li><a href="https://realableindia.com/public/index.php/contacts/update-status/1"
                                                                        class="update_contact_status"><i
                                                                            class="fas fa-power-off"></i>Deactivate</a>
                                                                </li>
                                                                <li class="divider"></li>

                                                                <li>
                                                                    <a
                                                                        href="">
                                                                        <i class="fa fa-download"
                                                                            aria-hidden="true"></i>
                                                                        Download
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="https://realableindia.com/public/index.php/contacts/1?view=documents_and_notes">
                                                                        <i class="fas fa-paperclip"
                                                                            aria-hidden="true"></i>
                                                                        Documents &amp; Note
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr> --}}

                                            </tr>



                                            </table>

                                        </div><!-- END inner div -->
                                    </div><!-- END scrollable -->

                                </div>

                                <div class="dataTables_info" id="contact_table_info" role="status"
                                    aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                <div class="dataTables_paginate paging_simple_numbers"
                                    id="contact_table_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled"
                                            id="contact_table_previous"><a href="#"
                                                aria-controls="contact_table" data-dt-idx="0"
                                                tabindex="0">Previous</a></li>
                                        <li class="paginate_button active"><a href="#"
                                                aria-controls="contact_table" data-dt-idx="1" tabindex="0">1</a>
                                        </li>
                                        <li class="paginate_button next disabled" id="contact_table_next"><a
                                                href="#" aria-controls="contact_table" data-dt-idx="2"
                                                tabindex="0">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="modal fade contact_modal" tabindex="-1" role="dialog"
                        aria-labelledby="gridSystemModalLabel">
                    </div>
                    <div class="modal fade pay_contact_due_modal" tabindex="-1" role="dialog"
                        aria-labelledby="gridSystemModalLabel">
                    </div>

                </section>
                <!-- /.content -->

                <div class="scrolltop no-print" style="display: none;">
                    <div class="scroll icon"><i class="fas fa-angle-up"></i></div>
                </div>


                <!-- This will be printed -->
                <section class="invoice print_section" id="receipt_section">
                </section>

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
