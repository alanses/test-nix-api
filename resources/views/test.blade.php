<!DOCTYPE html>

<div id="liqpay_checkout"></div>

<script>
    window.LiqPayCheckoutCallback = function() {
        LiqPayCheckout.init({
            data: "{{$signature['data']}}",
            signature: "{{$signature['signature']}}",
            embedTo: "#liqpay_checkout",
            language: "uk",
            mode: "embed" // embed || popup
        }).on("liqpay.callback", function(data){
            console.log(data.status);
            console.log(data);
        }).on("liqpay.ready", function(data){
            // ready
        }).on("liqpay.close", function(data){
            // close
        });
    };
</script>
<script src="//static.liqpay.ua/libjs/checkout.js" async></script>
