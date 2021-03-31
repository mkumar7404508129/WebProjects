<nav>
    <ul class='list'>
        <li id='profile' >
            <i class="fas fa-user"></i>
            <a onclick="submit_req('profile')" 
            href="adm_dash.php" target='frame'>Dashboard</a>
        </li>
        
        <li id='sub_req'>
            <i class="far fa-calendar-check"></i>
            <a onclick="submit_req('sub_req')" 
            target='frame' href="work_order.php">Work Order</a>
        </li>
        
        <li id='ser_status' >
            <i class="fas fa-check-circle"></i>
            <a onclick="submit_req('ser_status')" 
            target='frame' href="adm_req.php">Request</a>
        </li>
        <li id='ch_pass'>
            <i class="fas fa-key"></i>
            <a onclick="submit_req('ch_pass')"
            target='frame' href="assets.php">Assets</a>
        </li>

        <li id='tec'>
            <i class="fas fa-key"></i>
            <a onclick="submit_req('tec')"
            target='frame' href="tec.php">Technician</a>
        </li>
        <li id='req'>
            <i class="fas fa-key"></i>
            <a onclick="submit_req('req')"
            target='frame' href="requester.php">Requester</a>
        </li>
        <li id='sell_rep'>
            <i class="fas fa-key"></i>
            <a onclick="submit_req('sell_rep')"
            target='frame' href="sell_rep.php">Sell Report</a>
        </li>
        <li id='work_rep'>
            <i class="fas fa-key"></i>
            <a onclick="submit_req('work_rep')"
            target='frame' href="work_rep.php">Work Report</a>
        </li>
        <li id='a_ch_pass'>
            <i class="fas fa-key"></i>
            <a onclick="submit_req('a_ch_pass')"
            target='frame' href="a_ch_pass.php">Change Password</a>
        </li>


        <li>
            <i class="fas fa-sign-out-alt"></i>
            <a href="../include/discon.php">Log Out</a>
        </li>
    </ul>    
</nav>