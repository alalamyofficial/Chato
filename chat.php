<?php
    
    include('db.php');

    $query= "select * from chat ORDER BY id DESC";
    $run=mysqli_query($con,$query);

    while($row=mysqli_fetch_array($run)){
        $name=$row['name'];
        $msg=$row['msg'];
        $date = date('Y-m-d H:i:s', strtotime($row['date']));
    ?>

    <div id="chatdata">
        <span id="username"><?php echo $name;?></span>
        <span>: </span>
        <span><?php echo $msg;?></span>
        <span id="date" style="float:right;"><?php echo $date;?></span>
    </div>

<?php } ?>