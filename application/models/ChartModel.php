<?php
class ChartModel extends CI_Model
{
    public function chart_data()
    {
        $con  = new mysqli("localhost", "root", "", "dailyreports");
        if (!$con) {
            # code...
            echo "Problem in database connection! Contact administrator!" . $con->mysqli_error;
        } else {
            $sql = "SELECT * FROM data_reading";
            $result = mysqli_query($con, $sql);
            $chart_data = array(array("test_header_manifold_press"), array("test_header_manifold_temp"));
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
                $chart_data[0][$i] =  $row['test_header_manifold_press'];
                $chart_data[1][$i] = $row['test_header_manifold_temp'];
                $i++;
            }
        }
        return  $chart_data;
    }
}
