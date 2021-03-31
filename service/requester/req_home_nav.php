<nav>
    <ul class='list'>
        <li id='profile' >
            <i class="fas fa-user"></i>
            <a onclick="submit_req('profile')" 
            href="req_profile.php" target='frame'>Profile</a>
        </li>
        
        <li id='sub_req'>
            <i class="far fa-calendar-check"></i>
            <a onclick="submit_req('sub_req')" 
            target='frame' href="sub_req.php">Submit Request</a>
        </li>
        
        <li id='ser_status' >
            <i class="fas fa-check-circle"></i>
            <a onclick="submit_req('ser_status')" 
            target='frame' href="ser_status.php">Service Status</a>
        </li>
        <li id='ch_pass'>
            <i class="fas fa-key"></i>
            <a onclick="submit_req('ch_pass')"
            target='frame' href="ch_pass.php">Change Password</a>
        </li>
        <li>
            <i class="fas fa-sign-out-alt"></i>
            <a href="../include/discon.php">Log Out</a>
        </li>
    </ul>    
</nav>