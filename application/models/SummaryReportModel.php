<?php

class SummaryReportModel extends CI_Model
{
  public function inputSummaryReport($data)
  {
    return $this->db->insert('daily_summary_report', $data);
  }
  public function getSummaryReport()
  {
    return $this->db->get('daily_summary_report');
  }
}
