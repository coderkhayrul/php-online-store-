<!DOCTYPE html><html><!-- HEAD --><?php include("adminpartials/session.php");?><?php include("adminpartials/head.php");?><body class="hold-transition skin-blue sidebar-mini"><div class="wrapper">    <!-- HEADER -->    <?php include("adminpartials/header.php");?>    <!--ASIDE-->    <?php include("adminpartials/aside.php"); ?>    <!-- Content Wrapper. Contains page content -->    <div class="content-wrapper">        <!-- Content Header (Page header) -->        <section class="content-header">            <h1>                Dashboard                <small>Control panel</small>            </h1>            <ol class="breadcrumb">                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>                <li class="active">Products</li>            </ol>        </section>        <!-- MAIN CONTENT -->        <div class="row d-flex justify-content-center">            <div class="col-sm-9">                <?php                if (isset($_GET['p_id'])) {                    $id = $_GET['p_id'];                    $sql = "SELECT * FROM Products WHERE id =$id";                    $results = $connection->query($sql);                    $final = $results->fetch_assoc();                    }                ?>                <h2>ID:<?php echo $final['id']?></h2>                <h2>Name: <?php echo $final['name']?></h2>                <h2>Image :<img width="300px" src="../uploads/<?php echo $final['picture']?>" alt=""></h2>                <h2>Price: <?php echo $final['price']?></h2>                <h2> Description: <?php echo $final['description']?></h2>                <h2>Category: <?php echo $final['category_id']?></h2>            </div>            <div class="col-sm-3">            </div>        </div>    </div>    <!-- FOOTER -->    <?php include ("adminpartials/footer.php");?></body></html>