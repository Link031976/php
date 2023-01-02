<?php
class Date
{
    public $year;   // рік
    public $month;  // місяць
    public $day;    // день

    public function __set($name, $vol)
    {
        $this->$name = $vol;
    }

    public function weekDay($day, $month, $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;

        $thiss = mktime(0, 0, 0, date($this->month), date($this->day), date($this->year));
        $dateArr = getdate($thiss);
        return $dateArr['weekday'];
    }
}
