<? 
    session_start();
    include '../include/dbcon.php';
    if(!isset($_SESSION['eid']))
    {
        return 0;
    }
    else
    {
        $req_id=$_SESSION['eid'];
        $query="SELECT * FROM request WHERE (req_id='$req_id');";
        $run=$dbcon->query($query);
        if($run->num_rows==1)
        {
            $data=$run->fetch_assoc();
            echo "<table>
                    <tbody>
                        <tr>
                            <td>Request id </td>
                            <td>".$req_id."</td>
                        </tr>
                        
                        <tr>
                            <td>Name</td>
                            <td> ".$data['req_name']."</td>
                        </tr>

                        <tr>
                            <td>Request info </td>
                            <td>".$data['req_info']."</td>
                        </tr>

                        <tr>
                            <td>Discription </td>
                            <td> ".$data['req_discription']."</td>
                        </tr>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <button type='button' 
                                onClick='window.print()'>
                                Print</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>";
        }
    }
?>