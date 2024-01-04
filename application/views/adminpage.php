<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/style.css">

        <title>Human Resource Integrated System</title>
    </head>
    <body>
        <!-- SIDEBAR-->
        <section id="sidebar">
            <a href="#" class="brand">
                <i class="bx bxs-smile"></i>
                <span class="text">Human Resource Integrated System</span>
            </a>
            <ul class="side-menu top">
                <li class="active">
                    <a href="#">
                        <i class='bx bxs-dashboard'></i>
                        <span class="text"> Dashboard </span>
                    </a>
                </li>
                <li class="#">
                    <a href="<?php echo site_url('Employee/employee_list')?>">
                        <i class='bx bxs-file-archive'></i>
                        <span class="text"> 201 File </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bxs-dashboard"></i>
                        <span class="text"> Manage Leave </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bxs-dashboard"></i>
                        <span class="text"> Manage Application </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-time' ></i>
                        <span class="text"> Daily Time Record </span>
                    </a>
                </li>
            </ul>

            <ul class="side-menu">
                <li>
                    <a href="#">
                        <i class='bx bxs-cog'></i>
                        <span class="text"> Settings </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="logout">
                        <i class='bx bxs-log-out-circle'></i>
                        <span class="text"> Logout </span>
                    </a>
                </li>
            </ul>
        </section>    

        <!-- Content -->
        
        <!-- navbar -->

        <section id="content">
            <nav>
                <i class="bx bx-menu"></i>
                <a href="#" class="nav-link">Menu</a>
                <a href="#" class="profile">
                    <span class="text">Hi! Nelson E. Virtus</span>
                    <img src="<?php echo base_url(); ?>res/img/hrlogo.png" alt="" width="30" height="30">
                </a>
                <a href="#" class="notification">
                    <i class='bx bxs-bell'></i>
                    <span class="num">8</span>
                </a>
            </nav>

            <!-- navbar -->
        

            <!-- main content -->

            <main>
                <div class="head-title">
                    <div class="left">
                        <h1>Dashboard</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i></li>
                            <li>
                                <a href="#">Home</a>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="btn-download">
                        <i class="bx bx-cloud-download"></i>
                        <span class="text">Download PDF</span>
                    </a>
                </div>

                <ul class="box-info">
                    <li>
                        <i class='bx bxs-group'></i>
                        <span class="text">
                            <h3>1020</h3>
                            <p>Total Active Employees</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bxs-group'></i>
                        <span class="text">
                            <h3>400</h3>
                            <p>Regular Employees</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bxs-group'></i>
                        <span class="text">
                            <h3>620</h3>
                            <p>Casual Employees</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bxs-group'></i>
                        <span class="text">
                            <h3>50</h3>
                            <p>Job Order Employees</p>
                        </span>
                    </li>
                </ul>
                
                <div class="table-data">
                    <div class="employee">
                        <div class="head">
                            <h3>Total Active Employees</h3>
                            <i class="bx bx-search"></i>
                            <i class="bx bx-filter"></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Employee</th>
                                    <th>Date Joined</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>res/img/hrlogo.png" alt="">
                                        <p>Manuel S. Manlangit</p>
                                    </td>
                                    <td>01-01-2023</td>
                                    <td><span class="status regular">Regular</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>res/img/hrlogo.png" alt="">
                                        <p>Jocelyn S. Pablo</p>
                                    </td>
                                    <td>01-01-2023</td>
                                    <td><span class="status regular">Regular</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>res/img/hrlogo.png" alt="">
                                        <p>Allan Abellera</p>
                                    </td>
                                    <td>01-01-2023</td>
                                    <td><span class="status casual">Casual</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>res/img/hrlogo.png" alt="">
                                        <p>Nelson Virtus</p>
                                    </td>
                                    <td>01-01-2023</td>
                                    <td><span class="status contract">Job Order</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="todo">
                        <div class="head">
                            <h3>Todos</h3>
                            <i class="bx bx-plus"></i>
                            <i class="bx bx-filter"></i>
                        </div>
                        <ul class="todo-list">
                            <li class="completed">
                                <p>Todo List</p>
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </li>
                            <li class="not-completed">
                                <p>Todo List</p>
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </li>
                            <li class="completed">
                                <p>Todo List</p>
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </li>
                            <li class="completed">
                                <p>Todo List</p>
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </li>
                            <li class="not-completed">
                                <p>Todo List</p>
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </li>
                            <li class="completed">
                                <p>Todo List</p>
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </main>

            <!-- main content -->

        </section>

        <!-- Content -->
    
        <script src="<?php echo base_url(); ?>res/js/script.js"></script>
    </body>
</html>