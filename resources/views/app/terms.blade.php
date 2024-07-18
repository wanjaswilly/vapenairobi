@extends('layouts.ui')

@section('pageName')
{{$product->productName ?? "Vape"}}
@endsection

@section('content')
<div class="row px-4 mt-5">
    <div class="col-lg-12 px-5">
        <h1 class="text-center fw-bolder mt-2">Terms & Conditions</h1>
        <p>Welcome to Vape Nairobi, an online vape shop based in Nairobi, Kenya. By using our website and/or purchasing
        products from us, you agree to be bound by the following terms & conditions.</p>

        <h3>1. Age Restriction</h3>

        <p>You must be at least 21 years old to purchase products from our website.</p>
        <h3>2. Product Descriptions</h3>

        <p>We have made enormous effort to display as accurately as possible the colors & images of our products that
        appear on the website. We can’t guarantee that your computer monitor's or mobile phone display of any color will
        be accurate. <br>
        We reserve the right to change or update the information on our website at any time without giving notice.</p>
        <h3>3. Pricing</h3>

        <p>All our prices are in Kenyan Shillings & are subject to change without notice. <br>
        We reserve the right to cancel any orders that are placed at an incorrect price, whether due to an error in the
        price on our website or due to any other reason.</p>
        <h3>4. Payment</h3>

        <p>We accept payment by Mpesa, Airtel Money & Bank Payments( KCB, EQUITY and I & M)</p>
        <h3>5. Delivery</h3>

        <p>We offer several delivery options to suit your needs. The cost & delivery time will depend on your location &
        the size of your shipment. For orders around Nairobi, we use bike delivery option. <br>
        For orders otside Nairobi, we use a variety of couriers, including Wells Fargo, Mash Poa ,Modern Coast among other courier
        services to ensure that your order is delivered in a timely manner. <br>
        We do our very best to ensure that your orders are delivered on time & in good condition, but please note that
        we can’t be held responsible for delays or damages caused by the courier.</p>
        <h3>6. Returns & Refunds</h3>

        <p>We offer a 5-day return policy on all our products, unless otherwise stated. If you are not satisfied with your
        purchase, you may return it for a full refund within 5 days of receipt. All returns must be in their original &
        unused condition. <br>
        We do not offer refunds on e-liquids or clearance items unless expired. <br>
        Delivery costs are non refundable. <br>
        If you receive a defective or damaged product, please contact us immediately so that we can resolve the issue.</p>
        <h3>7. Liability</h3>

        <p>We are not responsible for any damages or injuries that may result from the use of our products. It is the
        responsibility of the user to use our products safely & responsibly. <br>
        We shall not be liable for any damage or loss resulting from the use or inability to use our website or
        products. <br>
        By using our website &/or purchasing products from us, you acknowledge that you have read & understood these
        terms & conditions & agree to be bound by them. If you do not agree to these terms & conditions, please don't
        use our website or purchase products from us. <br></p>
        <p>Thank you for choosing VapeNairobi!</p>
    </div>
</div>
@endsection