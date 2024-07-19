<style>
        .hotline-phone-ring-wrap {
  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 999999;
}
.hotline-phone-ring {
  position: relative;
  visibility: visible;
  background-color: transparent;
  width: 110px;
  height: 110px;
  cursor: pointer;
  z-index: 11;
  -webkit-backface-visibility: hidden;
  -webkit-transform: translateZ(0);
  transition: visibility 0.5s;
  left: 0;
  bottom: 0;
  display: block;
}
.hotline-phone-ring-circle {
  width: 85px;
  height: 85px;
  top: 10px;
  left: 10px;
  position: absolute;
  background-color: transparent;
  border-radius: 100%;
  border: 2px solid #e60808;
  -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
  animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
  transition: all 0.5s;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  opacity: 0.5;
}
.hotline-phone-ring-circle-fill {
  width: 55px;
  height: 55px;
  top: 25px;
  left: 25px;
  position: absolute;
  background-color: rgba(230, 8, 8, 0.7);
  border-radius: 100%;
  border: 2px solid transparent;
  -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
  animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
  transition: all 0.5s;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}
.hotline-phone-ring-img-circle {
  background-color: #e60808;
  width: 33px;
  height: 33px;
  top: 37px;
  left: 37px;
  position: absolute;
  background-size: 20px;
  border-radius: 100%;
  border: 2px solid transparent;
  -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
  animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
}
.hotline-phone-ring-img-circle .pps-btn-img {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
.hotline-phone-ring-img-circle .pps-btn-img img {
  width: 20px;
  height: 20px;
}
.hotline-bar {
  position: absolute;
  background: rgba(230, 8, 8, 0.75);
  height: 40px;
  width: 160px;
  line-height: 40px;
  border-radius: 3px;
  padding: 0 10px;
  background-size: 100%;
  cursor: pointer;
  transition: all 0.8s;
  -webkit-transition: all 0.8s;
  z-index: 9;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
  border-radius: 50px !important;
  /* width: 175px !important; */
  left: 33px;
  bottom: 37px;
}
.hotline-bar > a {
  color: #fff;
  text-decoration: none;
  font-size: 15px;
  font-weight: bold;
  text-indent: 50px;
  display: block;
  letter-spacing: 1px;
  line-height: 40px;
  font-family: Arial;
}
.hotline-bar > a:hover,
.hotline-bar > a:active {
  color: #fff;
}
@-webkit-keyframes phonering-alo-circle-anim {
  0% {
    -webkit-transform: rotate(0) scale(0.5) skew(1deg);
    -webkit-opacity: 0.1;
  }
  30% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    -webkit-opacity: 0.5;
  }
  100% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
    -webkit-opacity: 0.1;
  }
}
@-webkit-keyframes phonering-alo-circle-fill-anim {
  0% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    opacity: 0.6;
  }
  50% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
    opacity: 0.6;
  }
  100% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    opacity: 0.6;
  }
}
@-webkit-keyframes phonering-alo-circle-img-anim {
  0% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
  10% {
    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
  }
  20% {
    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
  }
  30% {
    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
  }
  40% {
    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
  }
  50% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
  100% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
}
@media (max-width: 768px) {
  .hotline-bar {
    display: none;
  }
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current,
.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
  color: white !important;
  border: 1px solid white;
  background-color: white;
  background: #000000;
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
  box-sizing: border-box;
  display: inline-block;
  min-width: 1.5 em;
  padding: 0.5 em 1 em;
  margin-left: 2 px;
  text-align: center;
  text-decoration: none !important;
  cursor: pointer;
  *cursor: hand;
  color: white !important;
  border: 1 px solid transparent;
  border-radius: 2 px;
}
.dataTables_wrapper .dataTables_length,
.dataTables_wrapper .dataTables_filter,
.dataTables_wrapper .dataTables_info,
.dataTables_wrapper .dataTables_processing,
.dataTables_wrapper .dataTables_paginate {
  color: white;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
  cursor: default;
  color: white !important;
  border: 1px solid transparent;
  background: transparent;
  box-shadow: none;
}
.vYLZYqQ {
  color: #03e9f4;
  text-decoration: none;
  text-transform: uppercase;
  transition: 0.5s;
  letter-spacing: 4px;
  overflow: hidden;
  margin-right: 50px;
}
.vYLZYqQ:hover {
  background: #03e9f4;
  color: #050801;
  box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4,
    0 0 200px #03e9f4;
  -webkit-box-reflect: below 1px linear-gradient(transparent, #0005);
}
.vYLZYqQ:nth-child() {
  filter: hue-rotate(270deg);
}
.vYLZYqQ span {
  position: absolute;
  display: block;
}
.vYLZYqQ span:nth-child() {
  top: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: animate1 1s linear infinite;
}
@keyframes animate1 {
  0% {
    left: -100%;
  }
  50%,
  100% {
    left: 100%;
  }
}

a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: animate4 1s linear infinite;
  animation-delay: 0.75s;
}
@keyframes animate4 {
  0% {
    bottom: -100%;
  }
  50%,
  100% {
    bottom: 100%;
  }
}

footer {
  width: 100vw;
  bottom: 0px;
}
footer div {
  background-color: var(--col-deepblue);
  margin: -5px 0px 0px 0px;
  padding: 0px;
  color: #fff;
  text-align: center;
}
svg {
  width: 100%;
  overflow: visible;
}

.wave {
  animation: wave 3s linear;
  animation-iteration-count: infinite;
  fill: #1b1a1a;
}
.drop {
  fill: var(--col-deepblue);
  xfill: #99000055;
  animation: drop 3.2s linear infinite normal;
  stroke: var(--col-deepblue);
  stroke-width: 0.5;
  transform: translateY(25px);
  transform-box: fill-box;
  transform-origin: 50% 100%;
}
.drop1 {
}
.drop2 {
  animation-delay: 3s;
  animation-duration: 3s;
}
.drop3 {
  animation-delay: -2s;
  animation-duration: 3.4s;
}
.drop4 {
  animation-delay: 1.7s;
}
.drop5 {
  animation-delay: 2.7s;
  animation-duration: 3.1s;
}
.drop6 {
  animation-delay: -2.1s;
  animation-duration: 3.2s;
}
.gooeff {
  filter: url(#goo);
}
#wave2 {
  animation-duration: 5s;
  animation-direction: reverse;
  opacity: 0.6;
}
#wave3 {
  animation-duration: 7s;
  opacity: 0.3;
}
@keyframes drop {
  0% {
    transform: translateY(25px);
  }
  30% {
    transform: translateY(-10px) scale(0.1);
  }
  30.001% {
    transform: translateY(25px) scale(1);
  }
  70% {
    transform: translateY(25px);
  }
  100% {
    transform: translateY(-10px) scale(0.1);
  }
}
@keyframes wave {
  to {
    transform: translateX(-100%);
  }
}

.bg-box-dark {
  background: rgb(0 0 0 / 73%);
}

.block2 {
  position: relative;
  background: #27272a;
}

.block2:before,
.block2:after {
  content: "";
  position: absolute;
  left: -2px;
  top: -2px;
  background: linear-gradient(
    45deg,
    #fb0094,
    #0000ff,
    #00ff00,
    #ffff00,
    #ff0000,
    #fb0094,
    #0000ff,
    #00ff00,
    #ffff00,
    #ff0000
  );
  background-size: 400%;
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  z-index: -1;
  animation: steam 20s linear infinite;
}

@keyframes steam {
  0% {
    background-position: 0 0;
  }

  50% {
    background-position: 400% 0;
  }

  100% {
    background-position: 0 0;
  }
}

.block2:after {
  filter: blur(50px);
}

.gradient-border {
  margin-bottom: 20px;
  --borderWidth: 3px;
  background: #fff;
  position: relative;
  border-radius: var(--borderWidth);
}

.gradient-border:after {
  content: "";
  position: absolute;
  top: calc(-1 * var(--borderWidth));
  left: calc(-1 * var(--borderWidth));
  height: calc(100% + var(--borderWidth) * 2);
  width: calc(100% + var(--borderWidth) * 2);
  background: linear-gradient(
    60deg,
    #f79533,
    #f37055,
    #ef4e7b,
    #a166ab,
    #5073b8,
    #1098ad,
    #07b39b,
    #6fba82
  );
  border-radius: calc(2 * var(--borderWidth));
  z-index: -1;
  animation: animatedgradient 3s ease alternate infinite;
  background-size: 300% 300%;
}

@keyframes animatedgradient {
  0% {
    background-position: 0% 50%;
  }

  50% {
    background-position: 100% 50%;
  }

  100% {
    background-position: 0% 50%;
  }
}

.text-fill {
  letter-spacing: 0;
  padding: 0.25em 0 0.325em;
  display: block;
  margin: 0 auto;
  text-shadow: 0 0 80px rgba(255, 255, 255, 0.5);

  /* Clip Background Image */

  background: url(https://i.ibb.co/RDTnNrT/animated-text-fill.png) repeat-y;
  -webkit-background-clip: text;
  background-clip: text;

  /* Animate Background Image */

  -webkit-text-fill-color: transparent;
  -webkit-animation: aitf 80s linear infinite;

  /* Activate hardware acceleration for smoother animations */

  -webkit-transform: translate3d(0, 0, 0);
  -webkit-backface-visibility: hidden;
}

/* Animate Background Image */
@-webkit-keyframes aitf {
  0% {
    background-position: 0% 50%;
  }

  100% {
    background-position: 100% 50%;
  }
}

#totop,
#totop2 {
  position: fixed;
  right: 0;
  bottom: 10px;
  width: 149px;
  height: 249px;
  overflow: hidden;
  cursor: pointer;
  display: none;
  background: url("assets/img/up.png") no-repeat 0px 0;
  z-index: 9999;
}

#totop2 {
  background: url("assets/img/up.png") no-repeat -149px 0;
}

@keyframes linear {
  from {
    background-position: 0 0;
  }

  to {
    background-position: 200px 0;
  }
}

@keyframes radial {
  from {
    background-position: 0 0;
  }

  to {
    background-position: 0 60px;
  }
}

@keyframes repeating {
  from {
    background-position: 0 0;
  }

  to {
    background-position: 0 85px;
  }
}

@keyframes electronic {
  0%,
  100% {
    background-position: 20px -30px;
  }

  25% {
    background-position: 150px 5px;
  }

  50% {
    background-position: 20px 40px;
  }

  75% {
    background-position: -100px 5px;
  }
}

.biliboard-border {
  display: block;
  margin: auto;
  margin-top: 50px;
  text-decoration: none;
  color: inherit;
}

.biliboard {
  text-align: center;
  position: relative;
  background: #fff;
}

.biliboard:before {
  content: "";
  display: block;
  height: 100%;
  width: 100%;
  border-radius: 3px;
  transform: scale(1.02, 1.08);
  position: absolute;
  background: #f00;
  background: linear-gradient(
    90deg,
    #fafafa,
    #fafafa,
    #1d8ef7,
    #fafafa,
    #fafafa
  );
  background-position: 55px 0;
  top: 0;
  animation: linear 1s infinite linear;
  left: 0;
  z-index: -1;
}

.biliboard.radial:before {
  background: radial-gradient(#fafafa, #fafafa, #f2a61a, #fafafa, #fafafa);
  animation: radial 1s infinite linear;
}

.biliboard.repeating:before {
  background: repeating-linear-gradient(
      -45deg,
      #fafafa,
      #fafafa 30px,
      #00afdb 30px,
      #00afdb 60px
    )
    fixed;
  animation: repeating 1s infinite linear;
}

.biliboard.electronic:before {
  background: radial-gradient(
      #ea238d,
      #ea238d,
      #ea238d,
      #ea238d,
      #fafafa,
      #fafafa
    )
    no-repeat;
  background-size: 150px 50px;
  animation: electronic 2s infinite linear;
}
    </style>
    <body style="
background: url('<?=BASE_URL('assets/storage/theme/background.png');?>') 0 / cover fixed;
background-repeat: no-repeat;
">
<body>
    <div style="height: auto;min-height: 100vh;">
        <div class="sticky top-0 z-100" style="background: rgb(26 26 26);">
            <div class="shadow">
                <header class="mx-auto w-full max-w-6xl px-2 flex flex-wrap items-center py-2"
                    style="background: rgb(26 26 26);color:white;">
                    <div class="flex-1 flex justify-between items-center">
                        <a href="<?=BASE_URL('');?>"><img width="110" height="50" src="<?=$CMSNT->site('logo');?>"
                                class="v-logo"></a>
                    </div>
                    <?php if(empty($_SESSION['username'])) { ?>
                    <a href="<?=BASE_URL('Auth/Login');?>"
                        class="lg:hidden flex border mx-2 px-3 h-8 border-gray-400 rounded items-center text-white-800 font-bold justify-center pointer-cursor">
                        Đăng nhập
                    </a>
                    <a href="<?=BASE_URL('Auth/Register');?>"
                        class="lg:hidden flex border mx-2 px-3 h-8 border-gray-400 rounded items-center text-white-800 font-bold justify-center pointer-cursor">
                        Đăng ký
                    </a>
                    <?php } else { ?>
                    <a href="<?=BASE_URL('Auth/Profile');?>"
                        class="lg:hidden relative mx-2 flex border px-3 h-8 border-gray-400 rounded items-center text-white-800 font-bold justify-center pointer-cursor nuxt-link-exact-active nuxt-link-active"><span
                            class="block"><i class="fa fa-user" aria-hidden="true"></i>
                            <?=$_SESSION['username'];?> - <?=format_cash($getUser['money']);?></span></a>

                    <?php }?>
                    <label for="menu-toggle" id="toggle" class="pointer-cursor text-white-800 text-2xl lg:hidden block">
                        <span class="h-8 w-8 border border-gray-400 justify-center items-center inline-flex rounded"><i
                                class="bx bx-menu"></i></span>
                    </label>
                    <div class="hidden md:mt-0 lg:flex lg:items-center lg:w-auto w-full" id="menu-toggle">
                        <nav class="font-bold lg:text-lg">
                            <ul class="lg:flex items-center justify-between text-base text-white-700 lg:pt-0">
                                <li><a href="<?=BASE_URL('');?>" class="lg:p-3 py-1 lg:py-2 px-2 lg:px-3 block">TRANG
                                        CHỦ</a></li>
                                <li><a href="<?=BASE_URL('nap-tien-qua-ngan-hang/');?>"
                                        class="lg:p-3 py-1 lg:py-2 px-2 lg:px-3 block">NẠP TIỀN QUA BANK/MOMO</a></li>
                                <li><a href="<?=BASE_URL('History');?>"
                                        class="lg:p-3 py-1 lg:py-2 px-2 lg:px-3 block">LỊCH SỬ MUA ACCOUNTS</a></li>
                                <?php if(isset($_SESSION['username']) && $getUser['level'] == 'admin') { ?>
                                <li><a href="<?=BASE_URL('admin/');?>"
                                        class="lg:p-3 py-1 lg:py-2 px-2 lg:px-3 block">PANEL ADMIN</a></li>
                                <?php }?>
                                
                                <?php if(empty($_SESSION['username'])) { ?>
                                <a href="<?=BASE_URL('Auth/Login');?>"
                                    class="lg:ml-4 flex border px-3 h-8 border-gray-400 lg:rounded-full items-center text-white-800 font-bold justify-center lg:mb-0 mb-2 pointer-cursor"><span
                                        class="block"><i class="relative bx bxs-user mr-2"></i>Đăng nhập</span></a>
                                <a href="<?=BASE_URL('Auth/Register');?>"
                                    class="lg:ml-4 flex border px-3 h-8 border-gray-400 lg:rounded-full items-center text-white-800 font-bold justify-center lg:mb-0 mb-2 pointer-cursor"><span
                                        class="block"><i class="relative bx bxs-user-plus mr-2"></i> Đăng ký</span></a>
                                <?php } else { ?>
                                <a href="<?=BASE_URL('Auth/Profile');?>"
                                    class="lg:ml-4 flex border px-3 h-8 border-gray-400 lg:rounded-full items-center text-white-800 font-bold justify-center lg:mb-0 mb-2 pointer-cursor"><span
                                        class="block"><i class="fa fa-user" aria-hidden="true"></i>
                                        <?=$_SESSION['username'];?> - <?=format_cash($getUser['money']);?></span></a>
                                <a href="<?=BASE_URL('Auth/Logout');?>"
                                    class="lg:ml-4 flex border px-3 h-8 border-gray-400 lg:rounded-full items-center text-white-800 font-bold justify-center lg:mb-0 mb-2 pointer-cursor"><span
                                        class="block"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng
                                        xuất</span></a>
                                <?php }?>
                    </div>
                </header>
            </div>
        </div>
        <?php
        if(isset($_SESSION['username']))
        {
            if($getUser['banned'] == 1)
            {
                session_destroy();
                msg_warning("Tài khoản của bạn đã bị khóa.", "", 5000);
            }
            if($getUser['level'] != 'admin')
            {
                if($CMSNT->site('baotri') == 'OFF')
                {
                    msg_warning("Hệ thống đang bảo trì định kỳ", "", 10000);
                }
            }
        }
        else
        {
            if($CMSNT->site('baotri') == 'OFF')
            {
                msg_warning("Hệ thống đang bảo trì định kỳ", "", 10000);
            }
        }