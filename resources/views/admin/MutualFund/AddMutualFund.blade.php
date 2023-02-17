@extends('admin.index')
@section('main_section')
<div class="main-content">

    <div class="page-content">
        <section class="content content-custom no-print">
            <div class=" content-wrapper " style="min-height: 306px;">
                <!-- empty div for vuejs -->
                <div id="app"></div>
                <!-- Add currency related field-->
                <input type="hidden" id="__code" value="356">
                <input type="hidden" id="__symbol" value="₹">
                <input type="hidden" id="__thousand" value="">
                <input type="hidden" id="__decimal" value="">
                <input type="hidden" id="__symbol_placement" value="before">
                <input type="hidden" id="__precision" value="2">
                <input type="hidden" id="__quantity_precision" value="2">
                <!-- End of currency related field-->
                <input type="hidden" id="view_export_buttons">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1> Customers <small>Manage your Customers</small>
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
                        <!-- <div id="collapseFilter" class="panel-collapse active collapse  in "
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
                        </div> -->
                    </div>
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Insurance Form</h3>
                        </div>
                        <div class="box-body">
                            <div class="form_info_structure">
                                <div class="containers">
                                    <div class="upper_writing">
                                        <h1>INSURANCE</h1>
                                        <h3>REALABLE FINANCIAL SERVICES PVT. LTD.</h3>
                                        <h4>MUTUAL FUND DISTRIBUTOR</h4>
                                        <P>Website: www.realableindia.co.in Email: realableindia.com</P>
                                        <p>Regd. Office: B-279 Survey Park, Santoshpur, W.B. Kolkata - 700075</p>
                                        <p style="margin-bottom: 20px !important;">Branch: 24, Raja Rammohon Roy Road, Hakimpara, Siliguri,
                                            Darjeeling Pin-734001, W.B.</p>
                                    </div>

                                    <form class="needs-validation" novalidate>
                                        <div class="maneger_total">
                                            <div class="left_div">
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Division Name</strong></label>
                                                    <input type="text" class="form-control" id="name" placeholder="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Branch Name</strong></label>
                                                    <input type="text" class="form-control" id="name" placeholder="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Manager Code</strong></label>
                                                    <input type="text" class="form-control" id="name" placeholder="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please add a manager code.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Staff Code</strong></label>
                                                    <input type="text" class="form-control" id="name" placeholder="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please add a staff code.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right_div">
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Telecallar Code</strong></label>
                                                    <input type="text" class="form-control" id="name" placeholder="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please add a telecaller code.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="date_all">
                                            <div class="left_div">
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Date</strong></label>
                                                    <input type="date" class="form-control" id="name" placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="right_div">
                                                Ack No. <strong>IB</strong> (Auto Generate)
                                            </div>
                                        </div>

                                        <div class="total_manage_tool">
                                            <h5><strong>Acknoledgement</strong> (Subject and Terms & Conditions Printed Overleaf)</h5>
                                            <div class="maneger_total">
                                                <div class="left_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong> Name</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Address</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Tel No.</strong></label>
                                                        <input type="tel" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Mob No.</strong></label>
                                                        <input type="number" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>E-mail-ID</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="right_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Sub Broker Name:</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Code No.</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="check_box_div">
                                            <p><strong>Mutual Funds</strong> <span><svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#000" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg></span></p>
                                            <div class="total_check_div">
                                                <ul>
                                                    <li>
                                                        <input type="checkbox"><span>Fresh</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox"><span>Additional Purchses</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox"><span>SIP</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox"><span>Switchover</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox"><span>Redemption</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="other_main_div">
                                            <div class="two_main_div">
                                                <div class="left_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Scheme Name</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="right_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Option</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="payment_div">
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Amount(Rs.)</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Follo No.</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Application No.</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="payment_div">
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>No. of Units</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>SIP Start Date</strong></label>
                                                        <input type="date" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>SIP End Date</strong></label>
                                                        <input type="date" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="two_main_div">
                                                <div class="left_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Switch From</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="right_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Option</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="payment_div">
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>No. of Units</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Amount (Rs.)</strong></label>
                                                        <input type="date" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Option</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="two_main_div">
                                                <div class="left_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Switch From</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="right_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Follo No.</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="two_main_div">
                                                <div class="left_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Switch To</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="right_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Option</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="check_box_div">
                                            <p><strong>Other Products</strong> <span><svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#000" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg></span></p>
                                            <div class="total_check_div">
                                                <ul>
                                                    <li>
                                                        <input type="checkbox"><span>FD Fresh</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox"><span>FD Renewal</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox"><span>Bonds</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox"><span>Public issue</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox"><span>Post Office</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form-group">
                                                <label for="" style="padding-left: 5px;"><strong>Company/Scheme Name</strong></label>
                                                <input type="text" class="form-control" id="name" placeholder="" required>
                                            </div>
                                            <div class="three_div">
                                                <div class="same_div">
                                                    <label for="" style="padding-left: 5px;"><strong>Amount(Rs)</strong></label>
                                                <input type="text" class="form-control" id="name" placeholder="" required>
                                                </div>
                                                <div class="same_div">
                                                    <label for="" style="padding-left: 5px;"><strong>Cheque Date</strong></label>
                                                <input type="date" class="form-control" id="name" placeholder="" required>
                                                </div>
                                                <div class="same_div">
                                                    <label for="" style="padding-left: 5px;"><strong>Application No.</strong></label>
                                                <input type="text" class="form-control" id="name" placeholder="" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="total_pay_div">
                                            <p><strong>Payment Details:</strong></p>
                                            <div class="payment_div">
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Cheque No.</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Bank Name</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Cheque Date</strong></label>
                                                        <input type="date" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Bank Branch</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Maturity Date</strong></label>
                                                        <input type="date" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>FDR No.</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="total_pay_div">
                                            <p><strong>Enclosures:</strong></p>
                                            <div class="payment_div">
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Pan Card No.</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>KYC From</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="same_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Others</strong></label>
                                                        <input type="text" class="form-control" id="name" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="client_sign">
                                            <div class="left_div">
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Client Signature</strong></label>
                                                    <input type="text" class="form-control" id="name" placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="right_div">
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Staff Signature</strong></label>
                                                    <input type="text" class="form-control" id="name" placeholder="" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="date_div">
                                            <div class="form-group">
                                                <label for="" style="padding-left: 5px; padding-right: 5px;"><strong>Date</strong></label>
                                                <input type="date" class="form-control" id="name" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="submit_alls text-center">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                SUBMIT
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>


                </section>
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
