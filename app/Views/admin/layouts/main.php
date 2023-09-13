<!DOCTYPE html>
<html lang="<?= config('App')->defaultLocale; ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?> | Admin</title>

    <!-- General Style -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url('admin/plugins/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('admin/dist/css/adminlte.min.css'); ?>">

    <!-- Page Specific Style -->
    <?= $this->section("styles"); ?>

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?= $this->include('admin/partials/main_header'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->include('admin/partials/main_sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <?= $this->renderSection('content'); ?>
        <!-- /.content-wrapper -->

        <?= $this->include('admin/partials/main_footer'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- General Library -->
    <script src="<?= base_url('admin/plugins/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('admin/dist/js/adminlte.min.js'); ?>"></script>

    <!-- Page Library -->
    <?= $this->section('libraries'); ?>

</body>

</html>