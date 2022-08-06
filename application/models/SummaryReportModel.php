<?php

class SummaryReportModel extends CI_Model
{
  public function inputSummaryReport($data)
  {
    return $this->db->insert('daily_summary_report', $data);
  }
  public function getSummaryReportbyDate($date)
  {
    $this->db->where('tanggal', $date);
    return $this->db->get('daily_total_prod');
  }
  public function getSummaryReport()
  {
    return $this->db->get('daily_total_prod');
  }
}
