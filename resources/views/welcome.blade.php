@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 d-none d-lg-flex align-items-center">
                <div class="card image-card">
                    <img src="{{ asset('/img/iPhone-XS+iPad-Pro-13-Landscape-Silver.png') }}" class="card-img-top">
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="card login-card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <img src="{{ asset('img/logo.png') }}" width="100%">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <a href="/login" class="btn btn-block btn-primary mt-4">ログイン</a>
                                <div class="row d-flex mt-3 text-center align-items-center">
                                    <div class="col-4 line"></div>
                                    <div class="col-4 text-secondary">または</div>
                                    <div class="col-4 line"></div>
                                </div>
                                <button class="btn btn-block btn-primary mt-3">新規登録</button>
                                <p class="text-secondary mt-4 ml-5 mr-5 text-center">登録することで、ハビログの利用規約、プライバシーに関するポリシー、Cookieポリシーに同意するものとします。</p>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-5">
                            <div class="col-6 col-lg-5">
                                <img src="/img/Download_on_the_App_Store_Badge_JP_RGB_blk_100317.svg" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer d-flex justify-content-center">
            <a href="#">ハビログについて</a>
            <a href="#">プライバシーポリシー</a>
            <a href="#">利用規約</a>
            <a href="#">サポート</a>
            <a href="#">Copyright © 2019 Lindelin. All rights reserved.</a>
        </div>
    </div>
@endsection
