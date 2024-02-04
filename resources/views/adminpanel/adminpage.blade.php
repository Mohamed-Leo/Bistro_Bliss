<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Panel</title>
        <link rel="icon" href="{{URL('storage/logo.jpg')}}">
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{asset('static/css/adminpanel/admin.css')}}">
    </head>
    <body>
        {{-- Start container --}}
        <div class="container">
            <h1>Admin Panel Page</h1>

            {{-- Start cards --}}
            <div class="cards">
                <a href="{{route('addmenu.form')}}" target="_blank">
                    <div class="img">
                        <img src="https://img.freepik.com/free-vector/toggle-concept-illustration_114360-8900.jpg?w=740&t=st=1700331228~exp=1700331828~hmac=0dd9974283cd5cbe9c4c4a2c69872f39ab529c88207a27d983a45515ff75e20e" alt="icon">
                    </div>
                    <div class="text">
                        <h3>Add To Menu</h3>
                        <p>Add a new Item In Menu List In Menu Table Inside The Menu page</p>
                    </div>
                </a>

                <a href="{{route('menu.table')}}" target="_blank">
                    <div class="img">
                        <img src="https://img.freepik.com/free-vector/catalogue-concept-illustration_114360-2032.jpg?w=740&t=st=1700332932~exp=1700333532~hmac=1d303dfbb08d446a4f65833af103b477450a803286c376ebd2664566abbe9627" alt="icon">
                    </div>
                    <div class="text">
                        <h3>show all menu</h3>
                        <p>show the table of all menu list with update and delete every item</p>
                    </div>
                </a>

                <a href="{{route('show.bookings')}}" target="_blank">
                    <div class="img">
                        <img src="https://img.freepik.com/free-vector/booking-concept-illustration_114360-1706.jpg?w=740&t=st=1700334216~exp=1700334816~hmac=def743f57c7288004e75d1933b8351d77e30b6311f7c02f586cdbc275f28f4eb" alt="add-image">
                    </div>
                    <div class="text">
                        <h3>bookings</h3>
                        <p>show the table of bookings from database (bookings table) </p>
                    </div>
                </a>

                <a href="{{route('show.users')}}" target="_blank">
                    <div class="img">
                        <img src="https://img.freepik.com/free-vector/add-friends-concept-illustration_114360-5558.jpg?w=740&t=st=1700335867~exp=1700336467~hmac=8b3661cc12995a13837b565273f27017ec68ab20207d0c0f5631c9bfa19e7f81" alt="add-image">
                    </div>
                    <div class="text">
                        <h3>show users</h3>
                        <p>show the table of users from database (users table)</p>
                    </div>
                </a>

                <a href="{{route('home.page')}}" target="_blank">
                    <div class="img">
                        <img src="https://img.freepik.com/free-vector/stay-home-abstract-concept-vector-illustration-forced-isolation-covid19-outbreak-prevention-measures-social-distance-governmental-support-self-protection-wear-mask-abstract-metaphor_335657-4138.jpg?w=740&t=st=1700334338~exp=1700334938~hmac=2b22ec2b56302eb4cc2291df8d97af6bdd96ef4eeff9c6c2e21da949bbf0a7f3" alt="add-image">
                    </div>
                    <div class="text">
                        <h3>home page</h3>
                        <p>show home page</p>
                    </div>
                </a>

                <a href="{{route('menu.page')}}" target="_blank">
                    <div class="img">
                        <img src="https://img.freepik.com/free-vector/list-concept-illustration_114360-1320.jpg?w=740&t=st=1700334426~exp=1700335026~hmac=c53e8249df1b67af88b9e166c73aa36728f6158b906582740516566aaa3c4d52" alt="add-image">
                    </div>
                    <div class="text">
                        <h3>menu page</h3>
                        <p>show menu page</p>
                    </div>
                </a>

                <a href="{{route('blogs.page')}}" target="_blank">
                    <div class="img">
                        <img src="https://img.freepik.com/free-vector/blogging-fun-content-creation-online-streaming-video-blog-young-girl-making-selfie-social-network-sharing-feedback-self-promotion-strategy_335657-2386.jpg?w=740&t=st=1700335702~exp=1700336302~hmac=f96667d0b4b593bca7c54f3a58b5728080b6448fc5cc16f1d1007e0640dbee0d" alt="add-image">
                    </div>
                    <div class="text">
                        <h3>blogs page</h3>
                        <p>show blogs page</p>
                    </div>
                </a>

                <a href="{{route('show.contacts')}}" target="_blank">
                    <div class="img">
                        <img src="https://img.freepik.com/free-vector/organic-flat-blog-post-illustration-with-people_23-2148955260.jpg?w=740&t=st=1700335746~exp=1700336346~hmac=e365c2ecd1c33c49c59fade53bb29009b1ea621bf20d250ab2c8f96df03128dc" alt="add-image">
                    </div>
                    <div class="text">
                        <h3>contacts</h3>
                        <p>show table of contacts</p>
                    </div>
                </a>
            </div>
            {{-- End cards --}}
        </div>
        {{-- End container --}}
    </body>
</html>
