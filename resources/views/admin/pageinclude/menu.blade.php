<div data-simplebar class="h-100" style="background-color: #fff;">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="fa fas fa-tachometer-alt"></i>
                    <span key="t-dashboards">Home</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa fas fa-address-book"></i>
                    <span key="t-contacts">User Management</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="contacts-grid.html" key="t-user-grid">Suppliers</a></li>
                    <li><a href="contacts-list.html" key="t-user-list">Customers</a></li>
                    <li><a href="contacts-profile.html" key="t-profile">Customer Groups</a></li>
                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa fas fa-address-book"></i>
                    <span key="t-contacts">Employee</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('admin.Employee.index'); }}" key="t-user-grid">Manage Employee</a></li>
                    <li><a href="#" key="t-profile">Manage Agent</a></li>
                    {{-- <li><a href="#" key="t-profile">Customer Groups</a></li>
                    <li><a href="#" key="t-profile">Import Contacts</a></li> --}}
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa fas fa-address-book"></i>
                    <span key="t-contacts">Salary</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="#" key="t-user-grid">Salary List</a></li>
                    <li><a href="{{ route('admin.genform') }}" key="t-profile">Generate Salary</a></li>
                    {{-- <li><a href="#" key="t-profile">Customer Groups</a></li>
                    <li><a href="#" key="t-profile">Import Contacts</a></li> --}}
                </ul>
            </li>

            <!-- <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-calendar"></i><span class="badge rounded-pill bg-success float-end">New</span>
                        <span key="t-dashboards">Calendars</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="calendar.html" key="t-tui-calendar">TUI Calendar</a></li>
                        <li><a href="calendar-full.html" key="t-full-calendar">Full Calendar</a></li>
                    </ul>
                </li>

                <li>
                    <a href="chat.html" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat">Chat</span>
                    </a>
                </li>

                <li>
                    <a href="apps-filemanager.html" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                        <span key="t-file-manager">File Manager</span>
                    </a>
                </li> -->

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa fas fa-cubes"></i>
                    <span key="t-ecommerce">Products</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('admin.insurance.index') }}" key="t-add-product">Insurance</a></li>
                    <li><a href="{{ route('admin.MutualFund.index') }}" key="t-add-product">Mutual Fund</a></li>
                </ul>
            </li>



            <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span key="t-email">Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html" key="t-inbox">Inbox</a></li>
                        <li><a href="email-read.html" key="t-read-email">Read Email</a></li>
                        <li>
                            <a href="javascript: void(0);">
                                <span class="badge rounded-pill badge-soft-success float-end" key="t-new">New</span>
                                <span key="t-email-templates">Templates</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="email-template-basic.html" key="t-basic-action">Basic Action</a></li>
                                <li><a href="email-template-alert.html" key="t-alert-email">Alert Email</a></li>
                                <li><a href="email-template-billing.html" key="t-bill-email">Billing Email</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa fas fa-arrow-circle-up"></i>
                    <span key="t-invoices">Sell</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="invoices-detail.html" key="t-invoice-detail">Add Quotation</a></li>
                    <li><a href="invoices-detail.html" key="t-invoice-detail">List quotations</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa fas fa-minus-circle"></i>
                    <span key="t-crypto">Expenses</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="crypto-wallet.html" key="t-wallet">List Expenses</a></li>
                    <li><a href="crypto-buy-sell.html" key="t-buy">Add Expense</a></li>
                    <li><a href="crypto-exchange.html" key="t-exchange">Add Expense</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa fas fa-money-check-alt"></i>
                    <span key="t-projects">Payment Accounts</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="projects-grid.html" key="t-p-grid">List Accounts</a></li>
                    <li><a href="projects-list.html" key="t-p-list">Balance Sheet</a></li>
                    <li><a href="projects-overview.html" key="t-p-overview">Trial Balance</a></li>
                    <li><a href="projects-create.html" key="t-create-new">Cash Flow</a></li>
                    <li><a href="projects-create.html" key="t-create-new">Payment Account Report</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa fas fa-chart-bar"></i>
                    <span key="t-tasks">Reports</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tasks-list.html" key="t-task-list">Profit / Loss Report</a></li>
                    <li><a href="tasks-kanban.html" key="t-kanban-board">Product Purchase Report</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Register Report</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Expense Report</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Sell Payment Report</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Purchase Payment Report</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Product Sell Report</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Items Report</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Purchase &amp; Sale</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Trending Products</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Stock Adjustment Report</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Stock Report</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Customer Groups Report</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Supplier</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Tax Report</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Activity Log</a></li>
                </ul>
            </li>

            <li>
                <a href="https://pos.ultimatefosters.com/notification-templates">
                    <i class="fa fas fa-envelope"></i>
                    <span>Notification Templates</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa fas fa-cog"></i>
                    <span key="t-utility">Settings</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="https://pos.ultimatefosters.com/business/settings" id="tour_step2"><i
                                class="fa fas fa-cogs"></i>
                            <span>Business Settings</span></a></li>
                    <li><a href="https://pos.ultimatefosters.com/business-location"><i
                                class="fa fas fa-map-marker"></i>
                            <span>Business Locations</span></a></li>
                    <li><a href="https://pos.ultimatefosters.com/invoice-schemes"><i
                                class="fa fas fa-file"></i> <span>Invoice
                                Settings</span></a></li>
                    <li><a href="https://pos.ultimatefosters.com/barcodes"><i class="fa fas fa-barcode"></i>
                            <span>Barcode
                                Settings</span></a></li>
                    <li><a href="https://pos.ultimatefosters.com/printers"><i
                                class="fa fas fa-share-alt"></i> <span>Receipt
                                Printers</span></a></li>
                    <li><a href="https://pos.ultimatefosters.com/tax-rates"><i class="fa fas fa-bolt"></i>
                            <span>Tax
                                Rates</span></a></li>
                    <li><a href="https://pos.ultimatefosters.com/subscription"><i
                                class="fa fas fa-sync"></i> <span>Package
                                Subscription</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Sidebar -->
</div>
