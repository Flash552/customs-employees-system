@extends("layouts.master")

@section('title')
    الصفحة الرئيسية
@endsection
@section('active_dash')
    active
@endsection
@section('content')
    <h3 class="title-main ">الصفحة الرئيسية</h3>
    <hr>
    <div class="wrapper-two ">
        <div class="wrapper">
            <div class="d-flex m-2 justify-content-around align-items-center rounded box-s">
                <div class="info">
                    <p>الموظفين</p>
                    <h1 data-set="253">0</h1>
                </div>
            </div>
            <div class="d-flex m-2 justify-content-around align-items-center rounded box-s">
                <div class="info">
                    <p>قرارت</p>
                    <h1 data-set="1555" >0</h1>
                </div>

            </div>
            <div class="d-flex m-2 justify-content-around align-items-center rounded box-s">
                <div class="info">
                    <p>غياب</p>
                    <h1 data-set="15" >0</h1>
                </div>
            </div>
            <div class="d-flex m-2 justify-content-around align-items-center rounded box-s">
                <div class="info">
                    <p>تقارير</p>
                    <h1 data-set="152" >0</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let selected = false
        let divStats = document.querySelector('.wrapper')
        let stats = document.querySelectorAll('.wrapper .info h1')

        console.log(divStats.offsetTop , window.scrollY )
        console.log(window.scrollY >= divStats.offsetTop-217)
        window.onload = function () {
            if(window.scrollY >= divStats.offsetTop-217){
                if(!selected)
                    stats.forEach( span => {
                        let maxValue = span.dataset.set
                        let start = setInterval(() => {
                            span.innerHTML++
                            if(span.innerHTML === maxValue)
                                clearInterval(start)
                        }, 0.1/ maxValue)
                        selected = true
                    })
            }
        }
    </script>
@endsection
