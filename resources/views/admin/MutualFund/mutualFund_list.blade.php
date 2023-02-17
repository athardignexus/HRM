@extends('admin.index');
@section('main_section')
<div class="main-content">

    <div class="page-content">
        <section class="content content-custom no-print">
            <div class=" content-wrapper " style="min-height: 306px;">
                <!-- empty div for vuejs -->
                <!-- End of currency related field-->
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Mutual Fund <small>Manage your Mutual Fund Form</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content2">
                    <div class="box  box-solid " id="accordion">
                        {{-- <div class="box-header with-border" style="cursor: pointer;">
                            <h3 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFilter">
                                    <i class="fa fa-filter" aria-hidden="true"></i> Filters
                                </a>
                            </h3>
                        </div> --}}
                         {{-- <div id="collapseFilter" class="panel-collapse active collapse  in "
                            aria-expanded="true">
                            <div class="box-body">
                                <div class="col-md-3">
                                    <div class="form-group2">
                                        <label class="">
                                            <div class="icheckbox_square-blue" style="position: relative;">
                                                <input class="input-icheck" id="has_sell_due"
                                                    name="has_sell_due" type="checkbox" value="1"
                                                    style="position: absolute; opacity: 0;"><ins
                                                    class="iCheck-helper"
                                                    style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div> <strong>Sell Due</strong>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group2">
                                        <label class="">
                                            <div class="icheckbox_square-blue" style="position: relative;">
                                                <input class="input-icheck" id="has_sell_return"
                                                    name="has_sell_return" type="checkbox" value="1"
                                                    style="position: absolute; opacity: 0;"><ins
                                                    class="iCheck-helper"
                                                    style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div> <strong>Sell Return</strong>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group2">
                                        <label class="">
                                            <div class="icheckbox_square-blue" style="position: relative;">
                                                <input class="input-icheck" id="has_advance_balance"
                                                    name="has_advance_balance" type="checkbox" value="1"
                                                    style="position: absolute; opacity: 0;"><ins
                                                    class="iCheck-helper"
                                                    style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div> <strong>Advance Balance</strong>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group2">
                                        <label class="">
                                            <div class="icheckbox_square-blue" style="position: relative;">
                                                <input class="input-icheck" id="has_opening_balance"
                                                    name="has_opening_balance" type="checkbox" value="1"
                                                    style="position: absolute; opacity: 0;"><ins
                                                    class="iCheck-helper"
                                                    style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div> <strong>Opening Balance</strong>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group2">
                                        <label for="has_no_sell_from">Has no sell from:</label>
                                        <select class="form-control" id="has_no_sell_from"
                                            name="has_no_sell_from">
                                            <option selected="selected" value="">Please Select</option>
                                            <option value="one_month">One month</option>
                                            <option value="three_months">Three months</option>
                                            <option value="six_months">Six months</option>
                                            <option value="one_year">One year</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group2">
                                        <label for="cg_filter">Customer Group:</label>
                                        <select class="form-control" id="cg_filter" name="cg_filter">
                                            <option value="" selected="selected">None</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group2">
                                        <label for="assigned_to">Assigned to:</label>
                                        <select class="form-control select2 select2-hidden-accessible"
                                            style="width:100%" id="assigned_to" name="assigned_to" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="" selected="selected">None</option>
                                            <option value="1"> Test </option>
                                        </select><span
                                            class="select2 select2-container select2-container--default"
                                            dir="ltr" style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0"
                                                    aria-labelledby="select2-assigned_to-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-assigned_to-container"
                                                        title="None">None</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group2">
                                        <label for="status_filter">Status:</label>
                                        <select class="form-control" id="status_filter" name="status_filter">
                                            <option selected="selected" value="">None</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="box box-primary">
                        <div class="box-header">

                            <h3 class="box-title">Mutual Fund List</h3>
                            <div class="box-tools">
                                <a type="button" class="btn btn-block btn-primary "
                                    href="{{ route('admin.MutualFund.create') }}"
                                    data-container=".contact_modal">
                                    <i class="fa fa-plus"></i> Add</a>
                            </div>
                        </div>

                        <div class="box-body">
                            <div id="contact_table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row margin-bottom-20 text-center">
                                    <div class="col-sm-2">
                                        <div class="dataTables_length" id="contact_table_length"><label>Show
                                                <select name="contact_table_length"
                                                    aria-controls="contact_table" class="form-control input-sm">
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                    <option value="200">200</option>
                                                    <option value="500">500</option>
                                                    <option value="1000">1,000</option>
                                                    <option value="-1">All</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="dt-buttons btn-group"> <a
                                                class="btn btn-default buttons-csv buttons-html5 btn-sm"
                                                tabindex="0" aria-controls="contact_table" href="#"><span><i
                                                        class="fa fa-file-csv" aria-hidden="true"></i> Export to
                                                    CSV</span></a> <a
                                                class="btn btn-default buttons-excel buttons-html5 btn-sm"
                                                tabindex="0" aria-controls="contact_table" href="#"><span><i
                                                        class="fa fa-file-excel" aria-hidden="true"></i> Export
                                                    to Excel</span></a> <a
                                                class="btn btn-default buttons-print btn-sm" tabindex="0"
                                                aria-controls="contact_table" href="#"><span><i
                                                        class="fa fa-print" aria-hidden="true"></i>
                                                    Print</span></a> <a
                                                class="btn btn-default buttons-collection buttons-colvis btn-sm"
                                                tabindex="0" aria-controls="contact_table" href="#"><span><i
                                                        class="fa fa-columns" aria-hidden="true"></i> Column
                                                    visibility</span></a> <a
                                                class="btn btn-default buttons-pdf buttons-html5 btn-sm"
                                                tabindex="0" aria-controls="contact_table" href="#"><span><i
                                                        class="fa fa-file-pdf" aria-hidden="true"></i> Export to
                                                    PDF</span></a> </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div id="contact_table_filter" class="dataTables_filter"><label><input
                                                    type="search" class="form-control input-sm"
                                                    placeholder="Search ..."
                                                    aria-controls="contact_table"></label></div>
                                    </div>
                                    <!-- <div id="contact_table_processing"
                                        class="dataTables_processing panel panel-default"
                                        style="display: none;">Processing...</div> -->
                                </div>

                                <div class="container-fluid px-0">
                                    <div class="scrollables">
                                        <div>
                                            <table cellpadding="0" cellspacing="0" style="width: 100%; max-width: 100%;">
                                                <tr class="thh_padding">
                                                    <th>Action</th>
                                                    <th>Police Name</th>
                                                    <th>Police No</th>
                                                    <th>Branch Name</th>
                                                    <th>Mobile No</th>
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
                                                </tr>

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
