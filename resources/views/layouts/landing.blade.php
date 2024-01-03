<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://icons.iconarchive.com/icons/jonathan-rey/star-wars-vehicles/128/Death-Star-2nd-icon.png" width="128" height="128">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>
        @yield('title')
    </title>
</head>
<body>
    @include('layouts.partials.menu')
    <main>
        @yield('body')
    <div class="push"></div>
    </main>
    <?php
    echo"<script>
       const toggleBtn= document.querySelector('.toggle_btn')
       const toggleBtnIcon= document.querySelector('.toggle_btn i')
       const dropDownMenu= document.querySelector('.dropdown_menu')

       toggleBtn.onclick = function(){
           dropDownMenu.classList.toggle('open')
           const isOpen= dropDownMenu.classList.contains('open')
           toggleBtnIcon.classList= isOpen
               ? \"fa-solid fa-xmark\"
               : \"fa-solid fa-dna fa-spin\"
       }
   </script>"?>
</body>
</html>
