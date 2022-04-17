<?php

if(! function_exists('Activemenu'))
{

    function Activemenu($parent,$routename,$panel)
    {
        $counts=\App\Models\MenuAdmin::where('panel',$panel)->where('route',$routename)->first();
        if($counts)
        {

            if($counts->parent==$parent)
            {
              return 'class="open active conditional-bg"';
            }
        }

    }
}
if(! function_exists('yesno'))
{

    function yesno($value)
    {
       if($value==1)
       {
           return 'بله';
       }
            return 'خیر';

    }
}
if(! function_exists('mali'))
{

    function mali($value)
    {
       if($value==1)
       {
           return 'غیر نقدی';
       }
            return 'نقدی';

    }
}
if(! function_exists('faTOen'))
{
    function faTOen($string) {
        return strtr($string, array('۰'=>'0', '۱'=>'1', '۲'=>'2', '۳'=>'3', '۴'=>'4', '۵'=>'5', '۶'=>'6', '۷'=>'7', '۸'=>'8', '۹'=>'9', '٠'=>'0', '١'=>'1', '٢'=>'2', '٣'=>'3', '٤'=>'4', '٥'=>'5', '٦'=>'6', '٧'=>'7', '٨'=>'8', '٩'=>'9'));
    }
}
if(! function_exists('ticket_status'))
{

    function ticket_status($value)
    {
       if($value==1)
       {
           return 'پاسخ داده شده است';
       }
       if($value==0)
       {
           return 'منتظر پاسخ پشتیبانی';
       }

    }
}
if(! function_exists('subscription'))
{

    function subscription($value)
    {
       if($value==1)
       {
           return 'پاسخ داده شده است';
       }
       if($value==0)
       {
           return 'منتظر پاسخ پشتیبانی';
       }

    }
}
