<html>
<head>
    <title>
        Teacher Dashboard
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link href="/css/navbar.css" rel="stylesheet">
</head>
<body>

<!--MODAL FOR SCAN-room select-->
<div class="modal fade" id="roomsel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Select Room</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <select class="custom-select frms" id="inputGroupSelect01">
                    <option selected>Room</option>
                    <option value="1"></option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger">Sign-up</button>
            </div>

        </div>
    </div>
</div>


<header>
    <!--SIDENAV-->
    <nav id="primary_nav">
        <a  href="#" id="mobile_nav">&#9776;</a>
        <ul>
            <li><div class="logo p-4 px-5">
                    <svg width="58" height="54" viewBox="0 0 58 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="28.9198" cy="24.9762" r="24.9762" fill="#6C63FF"/>
                        <circle cx="28.9199" cy="24.9762" r="23.1617" stroke="white"/>
                        <path d="M37.9833 29.928C38.6833 31.1404 38.8136 32.2661 38.3741 33.305C37.952 34.3339 37.0482 35.2483 35.6625 36.0483C33.4455 37.3283 31.3837 37.5372 29.4772 36.675C27.5879 35.8027 25.9583 34.1802 24.5883 31.8072C24.3683 31.4262 24.0656 30.8619 23.6803 30.1145L22.2254 30.9545C22.0868 31.0345 21.9875 31.0225 21.9275 30.9186C21.7575 30.6241 21.6997 30.1841 21.7542 29.5984C21.8086 29.0127 22.0091 28.6198 22.3555 28.4198L22.8491 28.1348C22.3543 26.7578 22.083 25.4479 22.0353 24.2053C22.0049 22.9527 22.1169 21.9065 22.3711 21.0669C22.6427 20.2173 23.0262 19.4416 23.5217 18.7398C24.2956 17.6002 25.2714 16.6904 26.4492 16.0104C27.627 15.3304 28.4731 15.096 28.9876 15.307C29.2361 15.4175 29.5104 15.7326 29.8104 16.2522C30.1004 16.7545 30.1848 17.0407 30.0636 17.1107C30.0462 17.1207 29.9483 17.131 29.7697 17.1417C29.1994 17.1939 28.5765 17.415 27.901 17.805C26.4287 18.655 25.5769 19.8396 25.3455 21.3588C25.1315 22.868 25.3559 24.5167 26.0188 26.3048C27.3251 25.5275 29.1041 24.4889 31.3558 23.1889C31.529 23.0889 31.6506 23.0995 31.7206 23.2207C31.8806 23.4979 31.947 23.9329 31.9199 24.5259C31.8828 25.1016 31.691 25.4895 31.3446 25.6895L26.8759 28.2695C26.9786 28.4873 27.2349 28.9513 27.6449 29.6615C28.0449 30.3543 28.5912 31.0204 29.2837 31.6598C29.9835 32.2719 30.8261 32.6514 31.8116 32.7984C32.8144 32.9353 33.8615 32.6888 34.9526 32.0588C36.0438 31.4288 36.8218 30.6563 37.2866 29.7413C37.3332 29.622 37.3912 29.5424 37.4604 29.5024C37.599 29.4224 37.7733 29.5643 37.9833 29.928Z" fill="white"/>
                    </svg>
                    <span>WORKKIT</span>
                </div></li>
            <li ><a href="#" >Dashboard</a></li>
            <li><a href="#" data-toggle="modal" data-target="#roomsel"> Scan</a></li>
            <li><a href="#">About us</a></li>
        </ul>
    </nav>
    <nav class="navbar justify-content-end">
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{$LoggedUserInfo['fullname'] }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button"><a href="{{ route('logout') }}">Log Out</a></button>
                <button class="dropdown-item" type="button">Another action</button>
                <button class="dropdown-item" type="button">Something else here</button>
            </div>
        </div>

    </nav>
</header>

<main class="pl-5 ">
    <!-- MAIN CONTENT DIV-->
    <div class="ff">

        <div class="container">
            <div class="row chat-row">
                <div class="chat-content">
                    <ul>

                    </ul>
                </div>

                <div class="chat-section">
                    <div class="chat-box">
                        <div class="chat-input bg-primary" id="chatInput" contenteditable="">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.socket.io/4.0.1/socket.io.min.js" integrity="sha384-LzhRnpGmQP+lOvWruF/lgkcqD+WDVt9fU3H4BWmwP5u5LTmkUGafMcpZKNObVMLU" crossorigin="anonymous"></script>


        <script>
            $(function() {
                let ip_address = '127.0.0.1';
                let socket_port = '3000';
                let socket = io(ip_address + ':' + socket_port);

                let chatInput = $('#chatInput');
                chatInput.keypress(function(e) {
                    let message = $(this).html();
                    var name = '{{$LoggedUserInfo['username'] }}:';
                    console.log(message);
                    var total = name + ' ' + message;
                    if(e.which === 13 && !e.shiftKey) {
                        socket.emit('sendChatToServer', total);
                        chatInput.html('');
                        return false;
                    }
                });

                socket.on('sendChatToClient', (message) => {
                    $('.chat-content ul').append(`<h1> ${message}</h1>`);
                });
            });
        </script>
    </div>

</main>


<script src="/js/tdash.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>
