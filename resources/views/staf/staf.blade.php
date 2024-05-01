<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
</head>
<body>
    

    @if(auth()->check() && auth()->user()->id)
    <script>
        Echo.private('App.Models.User.' + {{ auth()->user()->id }})
            .notification((notification) => {
                // Handle notification, e.g., display it in the UI
                console.log(notification);
            });
    </script>
@endif
</body>
</html>