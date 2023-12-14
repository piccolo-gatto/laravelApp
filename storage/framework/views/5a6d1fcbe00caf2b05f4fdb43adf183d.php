<!DOCTYPE html>     
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php $__env->startSection('title'); ?> Default title <?php echo $__env->yieldSection(); ?></title>
  <style>
    .layout{
      font-family:sans-serif;
      width: 98%;
      height: 100%;
      font-size: 20px
    }
    header{
      display: flex;
      background:Gainsboro;
      width: 101%;
      height: 25px;
    }
    footer{
      position: relative;
	    left: 0;
	    bottom: 0;
	    width: 100%;
	    height: 50px;
    }
    .footer{
      display: flex;
      justify-content: space-around;
      background: Gainsboro;
    }
    .content{
      position: relative;
      width: 100%;
      min-height: 595px;
    }
    a{
      text-decoration: none;
      color:black;
    }
    a:hover{
      color: darkgreen;
    }
    form{
      width: 300px;
      height: auto;
      border: 1px solid black;
      border-radius: 10px;
      padding: 5px;
    }
    button{
      margin-left: 100px;
    }
    table{
      border: 2px solid black;
      border-collapse: collapse;
    }
    td, th{
      padding: 5px;
      border: 1px solid black;
    }
    th{
      color: #872096;
      font-weight: bold;
    }
  </style>
</head>
<body class='layout'>
    
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class='content'>
      <?php $__env->startSection('content'); ?>
      <?php echo $__env->yieldSection(); ?>
    </div>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH C:\Users\lynnk\Desktop\laravelApp\resources\views/layout.blade.php ENDPATH**/ ?>