<header>
    @extends('includes.nav-bar')
</header>

@section('content')
<link href="{{ asset('assets/css/chat.css')}}" rel="stylesheet">
<div class="container p-3 h-50">

    <body class="p-3 mt-3">

        <div class="container py-5 px-4">

            <div class="row rounded-lg overflow-hidden shadow">
                <!-- Users box-->
                <div class="col-5 px-0">
                    <div class="bg-white">

                        <div class="messages-box">
                            <div class="list-group rounded-0">
                                <a class="list-group-item list-group-item-action active text-white rounded-0">
                                    <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                        <div class="media-body ml-4">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">25 Dec</small>
                                            </div>
                                            <p class="font-italic mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                    <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                        <div class="media-body ml-4">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">14 Dec</small>
                                            </div>
                                            <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur. incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                    <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                        <div class="media-body ml-4">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">9 Nov</small>
                                            </div>
                                            <p class="font-italic text-muted mb-0 text-small">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                    <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                        <div class="media-body ml-4">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">18 Oct</small>
                                            </div>
                                            <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                    <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                        <div class="media-body ml-4">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">17 Oct</small>
                                            </div>
                                            <p class="font-italic text-muted mb-0 text-small">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chat Box-->
                <div class="col-7 px-0">
                    <div class="px-4 py-5 chat-box bg-white">
                        <!-- Sender Message-->
                        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                            <div class="media-body ml-3">
                                <div class="bg-light rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-muted">Test which is a new approach all solutions</p>
                                </div>
                                <p class="small text-muted">12:00 PM | Aug 13</p>
                            </div>
                        </div>

                        <!-- Reciever Message-->
                        <div class="media w-50 ml-auto mb-3">
                            <div class="media-body">
                                <div class="bg-primary rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-white">Test which is a new approach to have all solutions</p>
                                </div>
                                <p class="small text-muted">12:00 PM | Aug 13</p>
                            </div>
                        </div>

                        <!-- Sender Message-->
                        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                            <div class="media-body ml-3">
                                <div class="bg-light rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
                                </div>
                                <p class="small text-muted">12:00 PM | Aug 13</p>
                            </div>
                        </div>

                        <!-- Reciever Message-->
                        <div class="media w-50 ml-auto mb-3">
                            <div class="media-body">
                                <div class="bg-primary rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                                </div>
                                <p class="small text-muted">12:00 PM | Aug 13</p>
                            </div>
                        </div>

                        <!-- Sender Message-->
                        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                            <div class="media-body ml-3">
                                <div class="bg-light rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-muted">Test, which is a new approach</p>
                                </div>
                                <p class="small text-muted">12:00 PM | Aug 13</p>
                            </div>
                        </div>

                        <!-- Reciever Message-->
                        <div class="media w-50 ml-auto mb-3">
                            <div class="media-body">
                                <div class="bg-primary rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                                </div>
                                <p class="small text-muted">12:00 PM | Aug 13</p>
                            </div>
                        </div>

                    </div>

                    <!-- Typing area -->
                    <form action="#" class="bg-light">
                        <div class="input-group">
                            <input type="text" placeholder="Type a message" id="message-input" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
                            <div class="input-group-append">
                                <button id="button-addon2" id="send-button" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous" type="module"></script>
<script src=" {{ asset('assets/js/chat.js')}}"></script>
</body>
@endsection