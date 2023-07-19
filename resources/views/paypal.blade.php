<body>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=@if(env('PAYPAL_MODE') == "live"){{ env('PAYPAL_LIVE_CLIENT_ID') }}@else{{ env('PAYPAL_SANDBOX_CLIENT_ID') }}@endif&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
        // Call your server to set up the transaction
             createOrder: function(data, actions) {
                return fetch('/api/paypal/order/create', {
                    method: 'POST',
                    body:JSON.stringify({
                        'course_id': "1",
                        'user_id' : "1",
                        'amount' : {{env('PAYPAL_AMOUNT')}},
                    })
                }).then(function(res) {
                    console.log(res);
                    return res.json();
                }).then(function(orderData) {
                    //console.log(orderData);
                    return orderData.id;
                });
            },

            // Call your server to finalize the transaction
            onApprove: function(data, actions) {
                return fetch('/api/paypal/order/capture' , {
                    method: 'POST',
                    body :JSON.stringify({
                        orderId : data.orderID,
                        payment_gateway_id: 1,
                        user_id: "1",
                    })
                }).then(function(res) {
                   // console.log(res.json());
                    return res.json();
                }).then(function(orderData) {

                    // Successful capture! For demo purposes:
                  //  console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    var transaction = orderData.purchase_units[0].payments.captures[0];
                    iziToast.success({
                        title: 'Success',
                        message: 'Payment completed',
                        position: 'topRight'
                    });
                });
            }

        }).render('#paypal-button-container');
    </script>
</body>