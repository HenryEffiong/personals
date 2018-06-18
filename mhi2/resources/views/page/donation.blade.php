@extends('main')

@section('content')
    <main>
        <section class="page-banner-section font-main" style="background-image:url(images/background/2.jpg);">
            <div class="container">
                <div class="row content">
                    <div class="col-md-7">
                        <header class=" margin-b-20">
                            <h2 class="txt-2em txt-color-white margin-b-10">We need your support</h2>
                            <h2 class="txt-3em txt-bold txt-color-yellow">DONATION</h2>
                        </header>
                        {{--<p class="txt-normal-s txt-color-white txt-height-1-7">--}}
                        {{--Make an online donation to help our organization provide treatment, care and support services to vulnerable children. Please submit your donation through the secure and easy online donation form below.--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div>
        </section>

        <section class="padding-tb-40">
            <div class="container">
                <div class="txt-2em margin-b-40 txt-color-default txt-bold">
                    <h2>Donation Form</h2>
                </div>
                <div class="col-md-12">
                    <form class="custom-form">
                        <div class="row margin-reset-lr-10">

                            <div class="col-md-6 padding-lr-10">
                                <div class="form-item">
                                    <select name="" id="" onchange="pay(this.value)">
                                        <option value="">Choose Preferred Payment Gateway</option>
                                        <option value="nigerian">Paystack</option>
                                        <option value="others">Paypal (coming soon)</option>
                                    </select>
                                </div>
                            </div>



                            {{--<div class="col-md-12 padding-lr-10 margin-t-40">--}}
                                {{--<div class="link-button">--}}
                                    {{--<button type="submit" class="btn-style-one">Submit</button>--}}
                                {{--</div>--}}
                            </div>

                    </form>



                    {{--<div id="usd">--}}
                    {{--<form action="https://www.paypal.com/cgi-bin/webscr" method="post">--}}

                        {{--<!-- Identify your business so that you can collect the payments. -->--}}
                        {{--<input type="hidden" name="MHI Demo Do not pay!"--}}
                               {{--value="donations@kcparkfriends.org">--}}

                        {{--<!-- Specify a Donate button. -->--}}
                        {{--<input type="hidden" name="cmd" value="_donations">--}}

                        {{--<!-- Specify details about the contribution -->--}}
                        {{--<input type="hidden" name="item_name" value="Medela Healthcare Initiative Fundraise">--}}
                        {{--<input type="hidden" name="item_number" value="Support">--}}
                        {{--<input type="hidden" name="currency_code" value="USD">--}}

                        {{--<!-- Display the payment button. -->--}}
                        {{--<input type="image" name="submit"--}}
                               {{--src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"--}}
                               {{--alt="Donate">--}}
                        {{--<img alt="" width="1" height="1"--}}
                             {{--src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >--}}

                    {{--</form>--}}
                    {{--</div>--}}


                    {{--<div id="eur">--}}
                        {{--<form action="https://www.paypal.com/cgi-bin/webscr" method="post">--}}

                            {{--<!-- Identify your business so that you can collect the payments. -->--}}
                            {{--<input type="hidden" name="business"--}}
                                   {{--value="donations@kcparkfriends.org">--}}

                            {{--<!-- Specify a Donate button. -->--}}
                            {{--<input type="hidden" name="cmd" value="_donations">--}}

                            {{--<!-- Specify details about the contribution -->--}}
                            {{--<input type="hidden" name="item_name" value="Friends of the Park">--}}
                            {{--<input type="hidden" name="item_number" value="Fall Cleanup Campaign">--}}
                            {{--<input type="hidden" name="currency_code" value="EUR">--}}

                            {{--<!-- Display the payment button. -->--}}
                            {{--<input type="image" name="submit"--}}
                                   {{--src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"--}}
                                   {{--alt="Donate">--}}
                            {{--<img alt="" width="1" height="1"--}}
                                 {{--src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >--}}

                        {{--</form>--}}
                    {{--</div>--}}

                    {{--<div id="gbp">--}}
                        {{--<form action="https://www.paypal.com/cgi-bin/webscr" method="post">--}}

                            {{--<!-- Identify your business so that you can collect the payments. -->--}}
                            {{--<input type="hidden" name="business"--}}
                                   {{--value="donations@kcparkfriends.org">--}}

                            {{--<!-- Specify a Donate button. -->--}}
                            {{--<input type="hidden" name="cmd" value="_donations">--}}

                            {{--<!-- Specify details about the contribution -->--}}
                            {{--<input type="hidden" name="item_name" value="Friends of the Park">--}}
                            {{--<input type="hidden" name="item_number" value="Fall Cleanup Campaign">--}}
                            {{--<input type="hidden" name="currency_code" value="GBP">--}}

                            {{--<!-- Display the payment button. -->--}}
                            {{--<input type="image" name="submit"--}}
                                   {{--src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"--}}
                                   {{--alt="Donate">--}}
                            {{--<img alt="" width="1" height="1"--}}
                                 {{--src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >--}}

                        {{--</form>--}}
                    {{--</div>--}}




                    {{--<form action="https://www.paypal.com/cgi-bin/webscr" method="post">--}}

                        {{--<!-- Saved buttons use the "secure click" command -->--}}
                        {{--<input type="hidden" name="cmd" value="_s-xclick">--}}

                        {{--<!-- Saved buttons are identified by their button IDs -->--}}
                        {{--<input type="hidden" name="hosted_button_id" value="221">--}}

                        {{--<!-- Saved buttons display an appropriate button image. -->--}}
                        {{--<input type="image" name="submit"--}}
                               {{--src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"--}}
                               {{--alt="PayPal - The safer, easier way to pay online">--}}
                        {{--<img alt="" width="1" height="1"ho--}}
                             {{--src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >--}}

                    {{--</form>--}}

                </div>
            </div>
        </section>
    </main>
<script>
    function pay(value) {
        if(value == 'nigerian'){
            var url= 'https://paystack.com/pay/c84yis8ozw';
            window.location =url;
        }
        else{
            alert('nay');
        }
    }
</script>
@endsection