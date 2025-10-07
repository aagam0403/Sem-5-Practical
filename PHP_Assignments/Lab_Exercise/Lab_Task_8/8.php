<?php
class Department
{
    final public function displayDept()
    {
        echo "Debt Amount : 0";
    }
}
class CSEDepartment extends Department
{
    // public function displayDept(){} --> /* cant override final method */
}
?>