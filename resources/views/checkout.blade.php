<script src="https://js.stripe.com/v3/"></script>
<div id="stripe-checkout"></div>
<script>
    var stripe = Stripe('{{ config("services.stripe.key") }}');

    stripe.redirectToCheckout({
        sessionId: '{{ $sessionId }}'
    }).then(function (result) {
        // If redirectToCheckout fails due to a browser or network
        // error, you should display the localized error message to your
        // customer using error.message.
        if (result.error) {
            alert(result.error.message);
        }
    });
</script>
