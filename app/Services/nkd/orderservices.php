<?php


namespace App\Services\Nkd;


use App\Events\ProductOrdered;
use App\Models\Order;
use App\Models\ProductOrder;
use App\Models\ProductPackOrder;
use App\Services\Stromae\ProductService;
use App\Services\Stromae\StockFlowService;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isInstanceOf;

class orderservices
{
    public static $default_state = "shoppinglist";

    /**
     * create order and save all productOrders
     * @param array $datas
     * @param array $product_bags
     * @return Order
     */
    public static function createOrder(Array $datas, $product_bags): Order{

        //save order
        $order = new Order();
        $order->reference = uniqid("wem-");
        $order->price = self::calculOrderPrice($product_bags);
        $order->user_id =$datas['user_id'];
        $order->id_sellpoint = $datas['id_sellpoint'];
        $order->state = self::$default_state;
        $order->save();

        //save all product order raws
        self::saveProductOrders($product_bags, $order);

        // event to set event notification
        event(new ProductOrdered($order->id));

        return $order;
    }


    /**
     * @param array $productOrders bag of products
     * @return int
     */
    public static function calculOrderPrice($productOrders):int{
        $total_price=0;

        foreach ($productOrders as $product_bag){
            if( isset($product_bag['isProductDeclination']) || isset($product_bag['declinaison_id'] )){
                $total_price += (int)$product_bag['declinaison_price'] * (int)$product_bag['qty'];
            }else
                $total_price += (int)$product_bag['product']['price'] * (int)$product_bag['qty'];
        }

        return $total_price;
    }

    private static function saveProductOrders($productsOrders, $order){

        foreach ($productsOrders as $product_bag){

            if(
                (isset($product_bag['declinaison_id']) && $product_bag['declinaison_id'])
                || isset($product_bag['isProductDeclination']) && $product_bag['isProductDeclination']
            ){

                $po = new ProductOrder();
                $po->order_id = $order->id;
                $po->declinaisons_products_id = $product_bag['declinaison_id'];
                $po->quantity = $product_bag['qty'];
                $po->payment_method ="Cash";
                $po->save();

            }else{

                if ( (isset( $product_bag['products_pack'])  && $product_bag['products_pack'] )
                    || (isset( $product_bag['productPack']) && $product_bag['productPack']) ) {

                    $po = new ProductPackOrder();
                    $po->pack_product_id = $product_bag['product']['id'];
                }else{

                    $po = new ProductOrder();
                    $po->product_id = $product_bag['product']['id'];
                }

                $po->order_id = $order->id;
                $po->quantity = $product_bag['qty'];
                $po->payment_method ="Cash";
                $po->save();
            }

        }
    }

    public static function updateOrder(){

    }

    /**
     * @param Order $order
     * @return bool
     */
    public static function cancelAnOrder(Order $order){

        // change state
        if($order->state === 'canceled')
            return false;

        $order->state = 'canceled';
        $order->save();

        return $order->state === 'canceled';
    }

    public static function deliveredAnOrder(Order $order){

        if($order->state === 'delivered')
            return false;

        $order->state = 'delivered';
        $order->save();

        return $order->state === 'delivered';
    }

    public static function validateOrder( $order, $sellpoint_id=null){

        // id sellpoint is set
        if(isset($sellpoint_id)){
            foreach ($order->productOrders as $productOrder) {

                // order with declinaison product
                if( isset($productOrder->declinaisons_products_id)){

                    // save all flux product on sellpoint
//                    StockFlowService::addFlow([
//                        "type"=> "out",
//                        "product_declinations_qty"=> $productOrder->quantity,
//                        "product_ID"=> $productOrder->product_id,
//                        "sellpoint_id"=> $sellpoint_id,
//                        "declinaisons_products_id"=> $productOrder->declinaisons_products_id,
//                    ]);



                    // decremente stock on sellpoint
                    ProductService::decrementeSellpointQuantityProduct(
                        $productOrder->product,
                        $productOrder->quantity,
                        $sellpoint_id,
                        $productOrder->declinaisons_products_id
                    );


                    // without declinaison product
                }else{

                    // save all flux product on sellpoint
//                    StockFlowService::addFlow([
//                        "type"=> "out",
//                        "qty"=> $productOrder->quantity,
//                        "product_ID"=> $productOrder->product_id,
//                    ]);

                    // decremente stock on sellpoint
                    ProductService::decrementeSellpointQuantityProduct(
                        $productOrder->product,
                        $productOrder->quantity,
                        $sellpoint_id,
                    );
                }

            }
        }else{

            foreach ($order->productOrders as $productOrder) {

                // order with declinaison product
                if( isset($productOrder->declinaisons_products_id)){
                    // save all flux product on sellpoint
//                    StockFlowService::addFlow([
//                        "type"=> "out",
//                        "product_declinations_qty"=> $productOrder->quantity,
//                        "product_ID"=> $productOrder->product_id,
//                        "declinaisons_products_id"=> $productOrder->declinaisons_products_id,
//                    ]);

                    // decremente stock on sellpoint
                    ProductService::decrementeSellpointQuantityProduct(
                        $productOrder->product,
                        $productOrder->quantity,
                        $sellpoint_id,
                        $productOrder->declinaisons_products_id
                    );

                    // without declinaison product
                }else{

                    // save all flux product on sellpoint
//                    StockFlowService::addFlow([
//                        "type"=> "out",
//                        "qty"=> $productOrder->quantity,
//                        "product_ID"=> $productOrder->product_id,
//                    ]);

                    // decremente stock on sellpoint
                    ProductService::decrementeSellpointQuantityProduct(
                        $productOrder->product,
                        $productOrder->quantity,
                        $sellpoint_id,
                    );
                }

            }

        }

        // change state order
        $order->state ='validated';
        $order->save();

        return $order->state === 'validated' ;

    }

}
