<?php

class ModelSalesIncentive extends CI_Model
{

    // public function hitungMerchant()
    // {
    //     $sql = "SELECT count(distributor_id) as id FROM sales_incentive";
    //     $result =  $this->db->query($sql);
    //     return $result->row()->distributor_id;
    // }

    public function countSellingMerchant()
    {
        $this->db->select_sum('total_selling_merchants');
        $query = $this->db->get('sales_incentive');
        if ($query->num_rows() > 0) {
            return $query->row()->total_selling_merchants;
        } else {
            return 0;
        }
    }

    public function countSalesAmount()
    {
        $this->db->select_sum('total_sales_idr');
        $query = $this->db->get('sales_incentive');
        if($query->num_rows() > 0){
            return $query->row()->total_sales_idr;
        } else{
            return 0;
        }
    }

    public function countSalesNumbers()
    {
        $this->db->select_sum('total_sales_numbers');
        $query = $this->db->get('sales_incentive');
        if($query->num_rows() > 0){
            return $query->row()->total_sales_numbers;
        } else{
            return 0;
        }
    }

    public function countIncentive()
    {
        $this->db->select_sum('total_incentive_idr');
        $query = $this->db->get('sales_incentive');
        if($query->num_rows() > 0){
            return $query->row()->total_incentive_idr;
        } else{
            return 0;
        }
    }
}
