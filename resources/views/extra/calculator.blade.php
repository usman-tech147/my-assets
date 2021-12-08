@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header clearfix">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for=""> Initial Investment</label>
                            </div>
                            <div class="col-md-12">
                                <label for="" id="initial-investment-input"></label>
                            </div>
                            <div class="col-md-12">
                                <input type="range" class="form-control" name="rangeInput"
                                       min="0" max="10000000" value="1000"
                                       id="initial-investment">
                                <div class="clearfix">
                                    <label for="">$0</label>
                                    <label for="" class="float-right">$10000000M</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for=""> Annual Additional Investment</label>
                            </div>
                            <div class="col-md-12">
                                <label for="" id="annual-additional-investment-input"></label>
                            </div>
                            <div class="col-md-12">
                                <input type="range" class="form-control" name="rangeInput"
                                       min="0" max="500000" value="140000"
                                       id="annual-additional-investment">
                                <div class="clearfix">
                                    <label for="">$0</label>
                                    <label for="" class="float-right">500k</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for=""> Years to Invest</label>
                            </div>
                            <div class="col-md-12">
                                <label for="" id="years-to-invest-input"></label>
                            </div>
                            <div class="col-md-12">
                                <input type="range" class="form-control" name="rangeInput"
                                       min="0" max="20" value="5"
                                       id="years-to-invest">
                                <div class="clearfix">
                                    <label for="">0 Yrs</label>
                                    <label for="" class="float-right">20 Yrs</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for=""> Percentage Reinvestment </label>
                            </div>
                            <div class="col-md-12">
                                <label for="" id="percentage-reinvestment-input"></label>
                            </div>
                            <div class="col-md-12">
                                <input type="range" class="form-control" name="rangeInput"
                                       min="0" max="100" value="1000"
                                       id="percentage-reinvestment">
                                <div class="clearfix">
                                    <label for="">0%</label>
                                    <label for="" class="float-right">100%</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="interest-details-wrapper">
                                <h2>Cash flow at year 5</h2>
                                <p class="interest-data clearfix">
                                    <span class="interest-label float-left">Yearly Cash Flow:</span>
                                    <span class="interest-display data-display float-right">$61,051</span>
                                </p>
                                <p class="interest-data clearfix">
                                    <span class="interest-label float-left">Monthly Dividend:</span>
                                    <span class="payment-display data-display float-right">$5,088</span>
                                </p>
                                <p class="interest-data clearfix">
                                    <span class="interest-label float-left">Capital Distribution:</span>
                                    <span class="payment-display data-display float-right">$180,000</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

        $('#initial-investment').on('keyup keypress change focus focusout',function () {
            $('#initial-investment-input').text('$'+numberSeparator($(this).val()));
        })
        $('#annual-additional-investment').on('keyup keypress change focus focusout',function () {
            $('#annual-additional-investment-input').text('$'+numberSeparator($(this).val()));
        })
        $('#years-to-invest').on('keyup keypress change focus focusout',function () {
            $('#years-to-invest-input').text(numberSeparator($(this).val()+' Yrs'));
        })
        $('#percentage-reinvestment').on('keyup keypress change focus focusout',function () {
            $('#percentage-reinvestment-input').text(numberSeparator($(this).val()+' %'));
        })

        var commaCounter = 10;

        function numberSeparator(Number) {
            Number += '';

            for (var i = 0; i < commaCounter; i++) {
                Number = Number.replace(',', '');
            }

            x = Number.split('.');
            y = x[0];
            z = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;

            while (rgx.test(y)) {
                y = y.replace(rgx, '$1' + ',' + '$2');
            }
            commaCounter++;
            return y + z;
        }

    </script>
@endsection
