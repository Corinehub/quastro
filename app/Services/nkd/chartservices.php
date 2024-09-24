<?php


namespace App\Services\Nkd;



use App\Models\KidRegistration;
use App\Models\Pensionpayment;
use App\Models\Section;
use App\Models\Student;
use App\Models\ClassType;

class ChartServices
{
    public static function lineClientChart($clients){

        return self::make_data_chart_by_date('created_at', $clients , $clients, function($client_category, $client) {

            if( date('y-m-d', strtotime($client_category->created_at)) === date('y-m-d', strtotime($client->created_at)) ) {
                return 1;
            }
            return 0;

        });

    }

    /**
     *  nkd_chart_Set
     *
     * THIS CHART GET THE Student number by ClassType
     *
     * @param $data_student
     * @return array
     */
    public static function barChart($data_student){

        // student => $data_student
        // category => ClassType
        return self::make_data_chart_by_name('label',$data_student, ClassType::all(), function($category, $student) {

            $classeType = ($student->registrations()->first())->classe->classType ?? null ;

            if( isset($classeType) && $category->id === $classeType->id ){
                return 1;
            }
            return 0;

        });

    }



    /**
     *  nkd_chart_Set
     * THIS CHART GET THE Student number by Section
     * @param $data_student
     * @return array
     */
    public static function pieChart($data_student){

        return self::make_data_chart_by_name('name',$data_student, Section::all(), function($category, $student) {

            $classeType = ($student->registrations()->first())->classe->classType ?? null ;

            if( isset($classeType) && $category->id === $classeType->section->id ){
                return 1;
            }
            return 0;

        });

    }
    /**
     *
     * nkd_chart_Set
     * THIS CHART GET THE evolution of orders
     * @param $data_student
     * @return array
     *
     */
    public static function lineSellChart($orders){

        return self::make_data_chart_by_date('created_at', $orders , $orders, function($order_category, $order) {

            if( date('y-m-d', strtotime($order_category->created_at)) === date('y-m-d', strtotime($order->created_at)) ) {
                return $order->price;
            }
            return 0;

        });

    }

    /**
     *
     * nkd_chart_Set
     * THIS CHART GET THE evolution of orders
     * @param $data_student
     * @return array
     *
     */
    public static function lineChart($orders){

        return self::make_data_chart_by_date('created_at', $orders , $orders, function($order_category, $order) {

            if( date('y-m-d', strtotime($order_category->created_at)) === date('y-m-d', strtotime($order->created_at)) ) {
                return 1;
            }
            return 0;

        });

    }

    public static function lineChartSellMoney($orders){

        return self::make_data_chart_by_date('created_at', $orders , $orders, function($order_category, $order) {

            if( date('y-m-d', strtotime($order_category->created_at)) === date('y-m-d', strtotime($order->created_at)) ) {
                return $order->price;
            }
            return 0;

        });

    }

    /**
     *
     * nkd_chart_Set
     * THIS CHART GET THE evolution of Kid registration
     * @param $data_student
     * @return array
     *
     */
    public static function lineChartKidRegistrations( $type='creche'){


        $label_tab=[];
        $data_tab=[];
        /* $categories_data =  KidRegistration::where('name' , 1)->get(); */
        $categories_data =  KidRegistration::where('name' , $type)->get();

        foreach($categories_data as $c):

            if(true){
                array_push($data_tab, $c->price );
                array_push($label_tab, date('d, M y', strtotime($c->created_at )) );
            }

        endforeach;

        return self::deleteDoubleForChart($label_tab, $data_tab);

    }


    /**
     *  nkd_chart_Set
     *
     *  THIS CHART GET THE Student number by sex
     * @param $data_student
     * @return array
     */
    public static function doughnutChart($data_student){

        // student => $data_student
        // category => ClassType
        return self::make_data_chart($data_student, ['Feminin','Masculin'], function($category, $student) {

            if( isset($student) && $category === $student->sex ){
                return 1;
            }
            return 0;

        });

    }





    /**
     * nkd_chart_Set
     * IMPORTANT : All dataTab MUST BE IN  ORDER by $key, $label_tab and $value_tab
     * thid function is very important for Chart, it deletes all double proprely in the 2 tabs on Matching values
     *
     * cette fonction supprime les doublons dans les 2 tableau et leurs  correspondances respectives
     * @param array $label_tab
     * @param array $value_tab
     * @return array
     *
     */
    private static function deleteDoubleForChart(array $label_tab, array $value_tab):array
    {

        for($i=0; $i < count($label_tab); $i++)
        {
            if(isset($label_tab[$i+1]) && $label_tab[$i] === $label_tab[$i+1]){
                unset($value_tab[$i+1]);
            }
        }

        // remove double
        $label_tab = array_unique($label_tab);

        // array_value : tres important change les index et les met en ordre croissant selon leur position dans le tableau <3 <3
        $label_tab = array_values($label_tab);
        $value_tab = array_values($value_tab);

        return [$label_tab, $value_tab];
    }


    /**
     * nkd_chart_Set
     * same like make_data_chart() function but include name of label value <3
     * @param String $name  Names for label
     * @param array $data datas values use to make count
     * @param model $data_model  labels datas, is like a catorisation, X AXE
     * @param callable $condition
     * @return array
     */
    private static function make_data_chart( $data, $data_model, callable $condition){
        $label_tab=[];
        $data_tab=[];
        $categories_data = $data_model;

        foreach($categories_data as $c):
            $count_value=0;

            foreach($data as $item):

                $count_value+= $condition($c, $item);

            endforeach;

            array_push($data_tab, $count_value);
            array_push($label_tab, $c );
        endforeach;

        return self::deleteDoubleForChart($label_tab, $data_tab);
    }




    /**
     * nkd_chart_Set
     * same like make_data_chart() function but include name of label value <3
     * @param String $name  Names for label
     * @param array $data datas values use to make count
     * @param model $data_model  labels datas, is like a catorisation, X AXE
     * @param callable $condition
     * @return array
     */
    private static function make_data_chart_by_name($name, $data, $data_model, callable $condition){
        $label_tab=[];
        $data_tab=[];
        $categories_data = $data_model;

        foreach($categories_data as $c):
            $count_value=0;

            foreach($data as $item):

                $count_value+= $condition($c, $item);

            endforeach;

            array_push($data_tab, $count_value);
            array_push($label_tab, $c->$name );
        endforeach;

        return self::deleteDoubleForChart($label_tab, $data_tab);
    }




    /**
     * nkd_chart_Set
     * same like make_data_chart() function but include date of label value <3
     * @param String $date_name  Date name on model row
     * @param array $data datas values use to make count
     * @param model $data_model  labels datas, is like a catorisation, X AXE
     * @param callable $condition
     * @return array
     */
    private static function make_data_chart_by_date($date_name, $data, $data_model, callable $condition){
        $label_tab=[];
        $data_tab=[];
        $categories_data = $data_model;

        foreach($categories_data as $c):
            $count_value=0;

            foreach($data as $item):

                $count_value+= $condition($c, $item);

            endforeach;

            array_push($data_tab, $count_value);
            array_push($label_tab, date('d, M y', strtotime($c->$date_name )));

        endforeach;



        return self::deleteDoubleForChart($label_tab, $data_tab);
    }

}
