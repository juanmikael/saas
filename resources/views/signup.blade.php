<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">


    </head>
    <body>
    <div class="containerrr p-5">
    <div class="login_container p-5">
        <div class="logo p-4">
            <svg width="58" height="54" viewBox="0 0 58 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="28.9198" cy="24.9762" r="24.9762" fill="#6C63FF"/>
                <circle cx="28.9199" cy="24.9762" r="23.1617" stroke="white"/>
                <path d="M37.9833 29.928C38.6833 31.1404 38.8136 32.2661 38.3741 33.305C37.952 34.3339 37.0482 35.2483 35.6625 36.0483C33.4455 37.3283 31.3837 37.5372 29.4772 36.675C27.5879 35.8027 25.9583 34.1802 24.5883 31.8072C24.3683 31.4262 24.0656 30.8619 23.6803 30.1145L22.2254 30.9545C22.0868 31.0345 21.9875 31.0225 21.9275 30.9186C21.7575 30.6241 21.6997 30.1841 21.7542 29.5984C21.8086 29.0127 22.0091 28.6198 22.3555 28.4198L22.8491 28.1348C22.3543 26.7578 22.083 25.4479 22.0353 24.2053C22.0049 22.9527 22.1169 21.9065 22.3711 21.0669C22.6427 20.2173 23.0262 19.4416 23.5217 18.7398C24.2956 17.6002 25.2714 16.6904 26.4492 16.0104C27.627 15.3304 28.4731 15.096 28.9876 15.307C29.2361 15.4175 29.5104 15.7326 29.8104 16.2522C30.1004 16.7545 30.1848 17.0407 30.0636 17.1107C30.0462 17.1207 29.9483 17.131 29.7697 17.1417C29.1994 17.1939 28.5765 17.415 27.901 17.805C26.4287 18.655 25.5769 19.8396 25.3455 21.3588C25.1315 22.868 25.3559 24.5167 26.0188 26.3048C27.3251 25.5275 29.1041 24.4889 31.3558 23.1889C31.529 23.0889 31.6506 23.0995 31.7206 23.2207C31.8806 23.4979 31.947 23.9329 31.9199 24.5259C31.8828 25.1016 31.691 25.4895 31.3446 25.6895L26.8759 28.2695C26.9786 28.4873 27.2349 28.9513 27.6449 29.6615C28.0449 30.3543 28.5912 31.0204 29.2837 31.6598C29.9835 32.2719 30.8261 32.6514 31.8116 32.7984C32.8144 32.9353 33.8615 32.6888 34.9526 32.0588C36.0438 31.4288 36.8218 30.6563 37.2866 29.7413C37.3332 29.622 37.3912 29.5424 37.4604 29.5024C37.599 29.4224 37.7733 29.5643 37.9833 29.928Z" fill="white"/>
            </svg>
            <span>WORKKIT</span>
        </div>
        <div class="row">
            <div class="laptop_gurl col-md-6 p-5">
                <center>
                <svg class="img-fluid mb-5" width="572" height="512" viewBox="0 0 572 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                    <path d="M535.506 99.7333C555.945 129.577 551.422 168.236 551.422 168.236C551.422 168.236 513.76 158.511 493.32 128.668C472.881 98.8243 477.404 60.1644 477.404 60.1644C477.404 60.1644 515.066 69.89 535.506 99.7333Z" fill="#2F2E41"/>
                    <path d="M520.799 105.432C523.191 141.533 550.645 169.105 550.645 169.105C550.645 169.105 574.221 138.147 571.83 102.046C569.438 65.9451 541.984 38.3725 541.984 38.3725C541.984 38.3725 518.407 69.3309 520.799 105.432Z" fill="#6C63FF"/>
                    <path d="M286.128 0.751751L563.634 140.372C565.941 141.532 567.855 143.349 569.135 145.593C570.416 147.838 571.006 150.41 570.832 152.989L554.709 391.982C554.637 393.054 554.3 394.092 553.73 395.002C553.159 395.912 552.373 396.666 551.44 397.198C550.507 397.73 549.457 398.022 548.383 398.049C547.31 398.075 546.247 397.836 545.289 397.351L261.455 252.392L276.027 6.57781C276.095 5.42312 276.449 4.30353 277.057 3.31959C277.664 2.33564 278.507 1.51816 279.508 0.940563C280.51 0.362961 281.639 0.043329 282.794 0.0103734C283.95 -0.0225823 285.095 0.23217 286.128 0.751751Z" fill="#D0CDE1"/>
                    <path d="M289.322 5.62193L560.011 141.812C562.262 142.945 564.129 144.716 565.378 146.906C566.627 149.095 567.202 151.604 567.033 154.12L551.306 387.243C551.235 388.289 550.907 389.3 550.351 390.188C549.794 391.076 549.027 391.812 548.117 392.331C547.207 392.849 546.182 393.134 545.136 393.16C544.089 393.186 543.052 392.952 542.117 392.48L265.255 251.081L279.468 11.3049C279.535 10.1786 279.881 9.08647 280.473 8.1267C281.066 7.16692 281.888 6.36952 282.865 5.8061C283.842 5.24269 284.943 4.93091 286.07 4.89876C287.197 4.86662 288.314 5.11511 289.322 5.62193Z" fill="#3F3D56"/>
                    <path d="M301.185 23.7112L546.557 147.164C548.597 148.19 550.289 149.796 551.421 151.781C552.554 153.765 553.075 156.04 552.922 158.32L538.666 369.639C538.602 370.587 538.304 371.504 537.8 372.309C537.295 373.114 536.6 373.781 535.775 374.251C534.95 374.721 534.021 374.98 533.072 375.003C532.123 375.027 531.183 374.815 530.336 374.386L279.369 246.213L292.253 28.8626C292.314 27.8416 292.627 26.8517 293.164 25.9817C293.701 25.1117 294.446 24.3888 295.332 23.8781C296.217 23.3674 297.216 23.0848 298.237 23.0556C299.259 23.0265 300.272 23.2518 301.185 23.7112Z" fill="white"/>
                    <path d="M47.9976 369.992L325.858 510.027C328.444 511.328 331.299 512.004 334.193 512C337.087 511.996 339.941 511.313 342.523 510.005L548.077 405.584C550.487 403.172 550.15 399.598 549.379 396.914C549.005 395.615 548.496 394.359 547.859 393.166L519.849 378.423L284.341 260.834L270.271 253.359C266.546 251.385 262.398 250.345 258.183 250.328C253.968 250.311 249.811 251.318 246.071 253.261L47.9107 356.27C46.65 356.922 45.5941 357.911 44.86 359.126C44.1259 360.342 43.7421 361.737 43.7511 363.157C43.7601 364.578 44.1616 365.968 44.911 367.174C45.6605 368.38 46.7287 369.355 47.9976 369.992Z" fill="#D0CDE1"/>
                    <path opacity="0.1" d="M47.9976 369.992L325.858 510.027C328.444 511.328 331.299 512.004 334.193 512C337.087 511.996 339.941 511.313 342.523 510.005L548.077 405.584C550.487 403.172 550.15 399.598 549.379 396.914L344.44 503.513C341.939 504.814 339.167 505.505 336.349 505.529C333.53 505.553 330.746 504.91 328.224 503.652L43.8502 361.876C43.5829 363.495 43.8415 365.156 44.588 366.617C45.3345 368.078 46.5296 369.261 47.9976 369.992Z" fill="black"/>
                    <path opacity="0.1" d="M311.731 411.949L221.746 366.444C219.934 365.527 217.929 365.061 215.899 365.084C213.869 365.107 211.875 365.619 210.085 366.576L157.884 394.485C157.281 394.807 156.778 395.289 156.429 395.878C156.081 396.467 155.901 397.14 155.91 397.825C155.918 398.509 156.113 399.178 156.475 399.759C156.837 400.339 157.352 400.809 157.962 401.117L249.711 447.417C251.235 448.186 252.924 448.568 254.63 448.528C256.336 448.489 258.005 448.03 259.492 447.192L311.901 417.645C312.412 417.357 312.835 416.934 313.123 416.423C313.411 415.912 313.554 415.332 313.537 414.745C313.519 414.159 313.342 413.588 313.024 413.095C312.705 412.602 312.258 412.206 311.731 411.949Z" fill="black"/>
                    <path opacity="0.1" d="M523.661 404.339L426.828 455.818C425.714 456.41 424.474 456.726 423.212 456.739C421.951 456.751 420.705 456.461 419.579 455.891L145.985 317.434C145.214 317.044 144.567 316.447 144.116 315.709C143.665 314.972 143.428 314.124 143.432 313.259C143.436 312.395 143.68 311.548 144.137 310.815C144.594 310.081 145.247 309.49 146.021 309.106L240.58 262.27C242.005 261.565 243.575 261.2 245.165 261.206C246.755 261.211 248.322 261.587 249.742 262.303L523.618 400.394C523.982 400.577 524.288 400.857 524.503 401.202C524.718 401.548 524.835 401.946 524.839 402.353C524.843 402.76 524.736 403.161 524.528 403.511C524.32 403.861 524.02 404.148 523.661 404.339Z" fill="black"/>
                    <path d="M369.181 147.605L368.695 148.577L457.722 193.122L458.207 192.15L369.181 147.605Z" fill="#6C63FF"/>
                    <path d="M369.173 160.669L368.679 161.636L457.73 207.22L458.224 206.254L369.173 160.669Z" fill="#6C63FF"/>
                    <path d="M385.474 185.627L384.98 186.595L436 212.683L436.494 211.716L385.474 185.627Z" fill="#6C63FF"/>
                    <path d="M106.732 240.021C106.732 240.021 85.022 230.555 74.825 240.555C64.628 250.555 102.127 247.263 106.732 240.021Z" fill="#3F3D56"/>
                    <path d="M69.2447 195.125C76.5403 182.789 90.9742 182.214 90.9742 182.214C90.9742 182.214 105.039 180.414 114.062 199.203C122.472 216.715 134.078 233.623 115.93 237.723L112.652 227.513L110.622 238.483C108.039 238.669 105.446 238.713 102.858 238.616C83.4227 237.988 64.9139 238.8 65.5099 231.82C66.3021 222.543 62.2247 206.995 69.2447 195.125Z" fill="#2F2E41"/>
                    <path d="M59.0361 418.762C59.0361 418.762 68.2463 435.879 74.1671 435.879C80.0879 435.879 79.4301 447.071 78.1143 449.704C76.7986 452.337 73.5092 458.262 78.7722 466.821C80.6105 469.81 80.2817 473.201 79.0753 476.349C75.6953 485.167 62.547 482.496 62.9665 473.06C62.9711 472.956 62.9767 472.851 62.9833 472.746C63.6412 462.212 58.3782 445.754 53.1153 441.804C47.8523 437.854 43.2472 427.32 43.2472 427.32L59.0361 418.762Z" fill="#FFB8B8"/>
                    <path d="M122.192 414.812C122.192 414.812 112.981 431.929 107.061 431.929C101.14 431.929 101.798 443.12 103.113 445.754C104.429 448.387 107.718 454.312 102.455 462.871C100.617 465.86 100.946 469.251 102.152 472.399C105.532 481.217 118.681 478.546 118.261 469.11C118.257 469.006 118.251 468.901 118.244 468.796C117.586 458.262 122.849 441.804 128.112 437.854C133.375 433.904 137.98 423.37 137.98 423.37L122.192 414.812Z" fill="#FFB8B8"/>
                    <path d="M114.955 330.544L118.902 339.102C118.902 339.102 176.795 358.194 171.532 380.578C166.269 402.961 140.612 437.854 136.665 436.537C132.718 435.22 111.666 431.27 111.008 420.078C110.35 408.886 126.139 389.136 126.139 389.136L104.429 369.386L72.8379 368.728L45.8786 389.136C45.8786 389.136 74.167 414.153 61.6675 424.028C49.168 433.904 30.7476 440.487 28.1161 436.537C25.4846 432.587 -4.11958 373.994 0.485513 368.728C5.0906 363.461 51.7994 343.71 51.7994 343.71L64.299 325.935L112.981 323.302L114.955 330.544Z" fill="#2F2E41"/>
                    <path d="M103.113 221.917C103.113 221.917 99.824 243.642 106.403 246.276C112.981 248.909 93.2453 260.101 93.2453 260.101H82.0615L74.825 244.959C74.825 244.959 81.4037 233.109 77.4564 221.917C73.5092 210.725 103.113 221.917 103.113 221.917Z" fill="#FFB8B8"/>
                    <path opacity="0.1" d="M103.113 221.917C103.113 221.917 99.824 243.642 106.403 246.276C112.981 248.909 93.2453 260.101 93.2453 260.101H82.0615L74.825 244.959C74.825 244.959 81.4037 233.109 77.4564 221.917C73.5092 210.725 103.113 221.917 103.113 221.917Z" fill="black"/>
                    <path d="M107.718 240.351C107.718 240.351 100.482 248.251 99.1661 249.567C97.8504 250.884 91.9296 258.126 79.43 247.592C66.9305 237.059 65.6147 249.567 65.6147 249.567V328.569C65.6147 328.569 76.1407 323.96 84.693 328.569C93.2453 333.177 111.008 327.252 111.008 327.252L114.297 245.617L107.718 240.351Z" fill="#D0CDE1"/>
                    <path d="M102.886 240.35C102.886 240.35 109.034 237.717 114.297 240.35C119.56 242.984 137.981 256.151 136.665 262.076C135.349 268.001 118.244 309.477 130.086 329.227C141.928 348.977 143.901 354.244 143.901 354.244L114.955 339.102C114.955 339.102 92.5875 325.277 94.5611 316.718C96.5347 308.16 102.886 240.35 102.886 240.35Z" fill="#3F3D56"/>
                    <path d="M76.7907 240.351C76.7907 240.351 62.9832 241.667 62.3253 242.984C61.6675 244.301 41.6024 249.896 42.9182 255.822C44.2339 261.747 62.3253 314.743 54.4309 324.619C46.5364 334.494 33.379 348.319 37.9841 349.636C42.5892 350.952 50.4837 347.661 58.3781 349.636C66.2726 351.611 84.693 335.152 82.7193 317.377C80.7457 299.601 82.7038 244.959 76.7907 240.351Z" fill="#3F3D56"/>
                    <path d="M109.692 366.094V372.678C109.692 372.678 112.981 387.82 102.455 387.161C91.9295 386.503 98.5082 368.728 98.5082 368.728L99.1661 362.802L109.692 366.094Z" fill="#FFB8B8"/>
                    <path d="M80.0879 366.753C80.0879 366.753 87.3245 381.894 80.0879 383.211C72.8514 384.528 67.5884 374.653 67.5884 372.019C67.5884 369.386 80.0879 366.753 80.0879 366.753Z" fill="#FFB8B8"/>
                    <path d="M70.5488 215.663C71.2755 215.663 71.8645 214.484 71.8645 213.029C71.8645 211.575 71.2755 210.396 70.5488 210.396C69.8221 210.396 69.233 211.575 69.233 213.029C69.233 214.484 69.8221 215.663 70.5488 215.663Z" fill="#FFB8B8"/>
                    <path d="M109.363 215.663C110.09 215.663 110.679 214.484 110.679 213.029C110.679 211.575 110.09 210.396 109.363 210.396C108.636 210.396 108.047 211.575 108.047 213.029C108.047 214.484 108.636 215.663 109.363 215.663Z" fill="#FFB8B8"/>
                    <path d="M59.036 248.909C59.036 248.909 42.5893 248.909 43.2471 255.492C43.905 262.076 65.6147 375.311 65.6147 375.311C65.6147 375.311 74.8249 366.753 82.7194 368.728L59.036 248.909Z" fill="#3F3D56"/>
                    <path d="M122.849 250.884C122.849 250.884 139.296 254.176 139.296 264.051C139.296 273.926 115.613 368.728 112.324 368.728C109.034 368.728 96.5347 366.753 96.5347 363.461C96.5347 360.169 122.849 250.884 122.849 250.884Z" fill="#3F3D56"/>
                    <path opacity="0.2" d="M119.231 270.305L104.429 328.233C104.429 328.233 111.337 277.547 119.231 270.305Z" fill="black"/>
                    <path opacity="0.2" d="M61.6564 262.166L76.6268 337.904C76.6268 337.904 71.8422 266.534 61.6564 262.166Z" fill="black"/>
                    <path d="M89.9559 232.45C100.493 232.45 109.034 223.903 109.034 213.358C109.034 202.814 100.493 194.266 89.9559 194.266C79.4193 194.266 70.8777 202.814 70.8777 213.358C70.8777 223.903 79.4193 232.45 89.9559 232.45Z" fill="#FFB8B8"/>
                    <path d="M72.4702 193.936L86.7304 186.461L106.423 189.519L110.497 207.527L100.355 207.137L97.5216 200.521V207.027L92.8417 206.848L90.1253 196.314L88.4279 207.527L71.7909 207.187L72.4702 193.936Z" fill="#2F2E41"/>
                    <path d="M286.307 83.0962L278.443 101.812L344.817 136.677L367.178 71.1919" fill="#F2F2F2"/>
                    <path d="M343.287 125.194L372.608 56.1512L305.217 22.9651L276.913 90.3295L343.287 125.194Z" fill="#6C63FF"/>
                    <path d="M303.624 49.3674L303.13 50.3351L354.15 76.4236L354.644 75.4559L303.624 49.3674Z" fill="white"/>
                    <path d="M299.799 58.5535L299.305 59.5211L350.325 85.6096L350.82 84.642L299.799 58.5535Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0">
                        <rect width="572" height="512" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
                </center>
            </div>
            <div class="form_charrr col-md-6 mt-5 p-5">
                <center>
                <div class="headerzz">
                    <h1>Welcome</h1>
                    <p>Easy-lend offers a unique opportunity to organizations and individuals to expand their outreach and the visibility of their work. </p>
                </div>
                <form action="{{route('save')}}" method="post">
                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                    @csrf
                    <div class="forma px-4 pt-3">
                    <div class="input-group mt-3">

                            <span class="icon input-group-text" id="basic-addon1"><svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="8" cy="5" r="5" fill="#4E4E4E"/>
                            <path d="M16 19C11.5 19 12.4183 19 8 19C3.58172 19 6.5 19 0 19C0 14.5817 3.58172 11 8 11C12.4183 11 16 14.5817 16 19Z" fill="#4E4E4E"/>
                        </svg></span>
                        <input type="username" class="User_form" name="username" id="exampleInputEmail1" placeholder="Username">
                        <span class="text-danger">@error('username'){{$message}} @enderror</span>

                    </div>
                    <div class="pw input-group ">
                        <span class="icon1 input-group-text" id="basic-addon1"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13 6.5C13 9.10848 12.3627 10.3876 11.5891 11.0556C10.7863 11.7488 9.59772 12 8 12C6.40228 12 5.21371 11.7488 4.41089 11.0556C3.63726 10.3876 3 9.10848 3 6.5C3 3.38556 5.31243 1 8 1C10.6876 1 13 3.38556 13 6.5Z" stroke="#4E4E4E" stroke-width="2"/>
<path d="M-6.99382e-07 8C4.5 8 3.58172 8 8 8C12.4183 8 9.5 8 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 -3.13124e-07 12.4183 -6.99382e-07 8Z" fill="#4E4E4E"/>
<circle cx="8" cy="11" r="1" fill="white"/>
</svg></span>
                        <input type="password" class="Password_form " name="password" id="exampleInputPassword1" placeholder="Password">
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                    </div>
                        <div class="pwo input-group mb-3 ">
                        <span class="icon1 input-group-text mb-5" id="basic-addon1"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13 6.5C13 9.10848 12.3627 10.3876 11.5891 11.0556C10.7863 11.7488 9.59772 12 8 12C6.40228 12 5.21371 11.7488 4.41089 11.0556C3.63726 10.3876 3 9.10848 3 6.5C3 3.38556 5.31243 1 8 1C10.6876 1 13 3.38556 13 6.5Z" stroke="#4E4E4E" stroke-width="2"/>
<path d="M-6.99382e-07 8C4.5 8 3.58172 8 8 8C12.4183 8 9.5 8 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 -3.13124e-07 12.4183 -6.99382e-07 8Z" fill="#4E4E4E"/>
<circle cx="8" cy="11" r="1" fill="white"/>
</svg></span>
                            <input type="password" class="Password_form shadow mb-5 bg-body rounded" name="confirmpw" id="exampleInputPassword1" placeholder="Confirm Password">
                            <span class="text-danger">@error('confirmpw'){{$message}} @enderror</span>
                        </div>
                    </div>

                    <div class="d-grid col-6 mx-auto ">
                        <button class="btn btn-primary mx-auto mb-5" type="submit">Sign In</button>

                    </div>
                    <a href="{{route('home')}}" class="link-secondary">Already Have an Account?</a>
                </form>

                </center>
            </div>
         </div>


    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </body>
</html>