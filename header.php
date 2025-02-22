<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/template.css" type="text/css"/>
        
        <link rel="stylesheet" href="/css/bootstrap-5.2.3/dist/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="/css/bootstrap-5.2.3/dist/css/bootstrap-grid.min.css" type="text/css"/>
        
        <!--Owl-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

        <title>test</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row g-0">
                    <div class="col-xl-auto">
                        <div class="menu">
                            <div class="menu-logo menu-chapter-text-js" style="display: block;">
                                <a href="/">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="15" cy="15" r="15" fill="#B84C74" /></svg>
                                    <span class="menu-logo-text">Logo</span>
                                </a>
                            </div>

                            <div class="menu-logo-alternative menu-chapter-text-js text-center" style="display: none;">
                                <a href="/">
                                    <span class="menu-logo-alternative-title">LOGO</span>
                                </a>
                            </div>

                            <div id="menu-hamburger-button">
                                <img src="/image/burger.png" alt="menu">
                            </div>

                            <div class="menu-chapter-blok active-blok">
                                <a href="/">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M19 1H4C2.34315 1 1 2.34315 1 4V19C1 20.6569 2.34315 22 4 22H19C20.6569 22 22 20.6569 22 19V4C22 2.34315 20.6569 1 19 1ZM4 0C1.79086 0 0 1.79086 0 4V19C0 21.2091 1.79086 23 4 23H19C21.2091 23 23 21.2091 23 19V4C23 1.79086 21.2091 0 19 0H4Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M18.1031 14.863H13.0176V13.863H18.1031V14.863Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M18.1031 7.74341H13.0176V6.74341H18.1031V7.74341Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M9.34114 17.8708L4.52733 13.057L5.23444 12.3499L10.0483 17.1637L9.34114 17.8708Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M9.96641 7.74341L4.88086 7.74341L4.88086 6.74341L9.96641 6.74341L9.96641 7.74341Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M7.93213 4.69179V9.77734H6.93213V4.69179H7.93213Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M10.0483 13.057L5.23439 17.8709L4.52728 17.1638L9.34119 12.3499L10.0483 13.057Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M18.1031 16.8972H13.0176V15.8972H18.1031V16.8972Z" fill="#417A82" /></svg>
                                    <span class="menu-chapter-text menu-chapter-text-js" style="display: none;">
                                        Lorem
                                    </span>
                                </a>
                            </div> 
                            
                            <div class="menu-chapter-blok">
                                <a href="/">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.8021 1.99537L11.5078 0.00488281L9.21359 1.99537L6.23146 1.41868L5.23982 4.28963L2.36888 5.28126L2.94557 8.26339L0.955078 10.5576L2.94557 12.8519L2.36888 15.834L5.23982 16.8257L6.23146 19.6966L9.21359 19.1199L11.5078 21.1104L13.8021 19.1199L16.7842 19.6966L17.7759 16.8257L20.6468 15.834L20.0701 12.8519L22.0606 10.5576L20.0701 8.26339L20.6468 5.28126L17.7759 4.28963L16.7842 1.41868L13.8021 1.99537ZM16.1223 2.56522L13.5143 3.06956L11.5078 1.32879L9.50141 3.06956L6.89341 2.56522L6.02618 5.07598L3.51542 5.94322L4.01975 8.55122L2.27898 10.5576L4.01975 12.5641L3.51542 15.1721L6.02618 16.0393L6.89341 18.5501L9.50141 18.0457L11.5078 19.7865L13.5143 18.0457L16.1223 18.5501L16.9895 16.0393L19.5003 15.1721L18.9959 12.5641L20.7367 10.5576L18.9959 8.55122L19.5003 5.94322L16.9895 5.07598L16.1223 2.56522Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M11.5078 15.5879C14.2859 15.5879 16.538 13.3358 16.538 10.5577C16.538 7.77966 14.2859 5.52759 11.5078 5.52759C8.72974 5.52759 6.47766 7.77966 6.47766 10.5577C6.47766 13.3358 8.72974 15.5879 11.5078 15.5879ZM11.5078 16.5879C14.8382 16.5879 17.538 13.8881 17.538 10.5577C17.538 7.22738 14.8382 4.52759 11.5078 4.52759C8.17745 4.52759 5.47766 7.22738 5.47766 10.5577C5.47766 13.8881 8.17745 16.5879 11.5078 16.5879Z" fill="#417A82" /></svg>
                                    <span class="menu-chapter-text menu-chapter-text-js" style="display: none;">
                                        Lorem
                                    </span>
                                </a>
                            </div> 

                            <div class="menu-chapter-blok">
                                <a href="/">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.8021 1.99537L11.5078 0.00488281L9.21359 1.99537L6.23146 1.41868L5.23982 4.28963L2.36888 5.28126L2.94557 8.26339L0.955078 10.5576L2.94557 12.8519L2.36888 15.834L5.23982 16.8257L6.23146 19.6966L9.21359 19.1199L11.5078 21.1104L13.8021 19.1199L16.7842 19.6966L17.7759 16.8257L20.6468 15.834L20.0701 12.8519L22.0606 10.5576L20.0701 8.26339L20.6468 5.28126L17.7759 4.28963L16.7842 1.41868L13.8021 1.99537ZM16.1223 2.56522L13.5143 3.06956L11.5078 1.32879L9.50141 3.06956L6.89341 2.56522L6.02618 5.07598L3.51542 5.94322L4.01975 8.55122L2.27898 10.5576L4.01975 12.5641L3.51542 15.1721L6.02618 16.0393L6.89341 18.5501L9.50141 18.0457L11.5078 19.7865L13.5143 18.0457L16.1223 18.5501L16.9895 16.0393L19.5003 15.1721L18.9959 12.5641L20.7367 10.5576L18.9959 8.55122L19.5003 5.94322L16.9895 5.07598L16.1223 2.56522Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M11.5078 15.5879C14.2859 15.5879 16.538 13.3358 16.538 10.5577C16.538 7.77966 14.2859 5.52759 11.5078 5.52759C8.72974 5.52759 6.47766 7.77966 6.47766 10.5577C6.47766 13.3358 8.72974 15.5879 11.5078 15.5879ZM11.5078 16.5879C14.8382 16.5879 17.538 13.8881 17.538 10.5577C17.538 7.22738 14.8382 4.52759 11.5078 4.52759C8.17745 4.52759 5.47766 7.22738 5.47766 10.5577C5.47766 13.8881 8.17745 16.5879 11.5078 16.5879Z" fill="#417A82" /></svg>
                                    <span class="menu-chapter-text menu-chapter-text-js" style="display: none;">
                                        Lorem
                                    </span>
                                </a>
                            </div> 

                            <div class="menu-chapter-blok">
                                <a href="/">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.8021 1.99537L11.5078 0.00488281L9.21359 1.99537L6.23146 1.41868L5.23982 4.28963L2.36888 5.28126L2.94557 8.26339L0.955078 10.5576L2.94557 12.8519L2.36888 15.834L5.23982 16.8257L6.23146 19.6966L9.21359 19.1199L11.5078 21.1104L13.8021 19.1199L16.7842 19.6966L17.7759 16.8257L20.6468 15.834L20.0701 12.8519L22.0606 10.5576L20.0701 8.26339L20.6468 5.28126L17.7759 4.28963L16.7842 1.41868L13.8021 1.99537ZM16.1223 2.56522L13.5143 3.06956L11.5078 1.32879L9.50141 3.06956L6.89341 2.56522L6.02618 5.07598L3.51542 5.94322L4.01975 8.55122L2.27898 10.5576L4.01975 12.5641L3.51542 15.1721L6.02618 16.0393L6.89341 18.5501L9.50141 18.0457L11.5078 19.7865L13.5143 18.0457L16.1223 18.5501L16.9895 16.0393L19.5003 15.1721L18.9959 12.5641L20.7367 10.5576L18.9959 8.55122L19.5003 5.94322L16.9895 5.07598L16.1223 2.56522Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M11.5078 15.5879C14.2859 15.5879 16.538 13.3358 16.538 10.5577C16.538 7.77966 14.2859 5.52759 11.5078 5.52759C8.72974 5.52759 6.47766 7.77966 6.47766 10.5577C6.47766 13.3358 8.72974 15.5879 11.5078 15.5879ZM11.5078 16.5879C14.8382 16.5879 17.538 13.8881 17.538 10.5577C17.538 7.22738 14.8382 4.52759 11.5078 4.52759C8.17745 4.52759 5.47766 7.22738 5.47766 10.5577C5.47766 13.8881 8.17745 16.5879 11.5078 16.5879Z" fill="#417A82" /></svg>
                                    <span class="menu-chapter-text menu-chapter-text-js" style="display: none;">
                                        Lorem
                                    </span>
                                </a>
                            </div> 

                            <div class="menu-chapter-blok">
                                <a href="/">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.8021 1.99537L11.5078 0.00488281L9.21359 1.99537L6.23146 1.41868L5.23982 4.28963L2.36888 5.28126L2.94557 8.26339L0.955078 10.5576L2.94557 12.8519L2.36888 15.834L5.23982 16.8257L6.23146 19.6966L9.21359 19.1199L11.5078 21.1104L13.8021 19.1199L16.7842 19.6966L17.7759 16.8257L20.6468 15.834L20.0701 12.8519L22.0606 10.5576L20.0701 8.26339L20.6468 5.28126L17.7759 4.28963L16.7842 1.41868L13.8021 1.99537ZM16.1223 2.56522L13.5143 3.06956L11.5078 1.32879L9.50141 3.06956L6.89341 2.56522L6.02618 5.07598L3.51542 5.94322L4.01975 8.55122L2.27898 10.5576L4.01975 12.5641L3.51542 15.1721L6.02618 16.0393L6.89341 18.5501L9.50141 18.0457L11.5078 19.7865L13.5143 18.0457L16.1223 18.5501L16.9895 16.0393L19.5003 15.1721L18.9959 12.5641L20.7367 10.5576L18.9959 8.55122L19.5003 5.94322L16.9895 5.07598L16.1223 2.56522Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M11.5078 15.5879C14.2859 15.5879 16.538 13.3358 16.538 10.5577C16.538 7.77966 14.2859 5.52759 11.5078 5.52759C8.72974 5.52759 6.47766 7.77966 6.47766 10.5577C6.47766 13.3358 8.72974 15.5879 11.5078 15.5879ZM11.5078 16.5879C14.8382 16.5879 17.538 13.8881 17.538 10.5577C17.538 7.22738 14.8382 4.52759 11.5078 4.52759C8.17745 4.52759 5.47766 7.22738 5.47766 10.5577C5.47766 13.8881 8.17745 16.5879 11.5078 16.5879Z" fill="#417A82" /></svg>
                                    <span class="menu-chapter-text menu-chapter-text-js" style="display: none;">
                                        Lorem
                                    </span>
                                </a>
                            </div> 

                            <div class="menu-chapter-blok">
                                <a href="/">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.8021 1.99537L11.5078 0.00488281L9.21359 1.99537L6.23146 1.41868L5.23982 4.28963L2.36888 5.28126L2.94557 8.26339L0.955078 10.5576L2.94557 12.8519L2.36888 15.834L5.23982 16.8257L6.23146 19.6966L9.21359 19.1199L11.5078 21.1104L13.8021 19.1199L16.7842 19.6966L17.7759 16.8257L20.6468 15.834L20.0701 12.8519L22.0606 10.5576L20.0701 8.26339L20.6468 5.28126L17.7759 4.28963L16.7842 1.41868L13.8021 1.99537ZM16.1223 2.56522L13.5143 3.06956L11.5078 1.32879L9.50141 3.06956L6.89341 2.56522L6.02618 5.07598L3.51542 5.94322L4.01975 8.55122L2.27898 10.5576L4.01975 12.5641L3.51542 15.1721L6.02618 16.0393L6.89341 18.5501L9.50141 18.0457L11.5078 19.7865L13.5143 18.0457L16.1223 18.5501L16.9895 16.0393L19.5003 15.1721L18.9959 12.5641L20.7367 10.5576L18.9959 8.55122L19.5003 5.94322L16.9895 5.07598L16.1223 2.56522Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M11.5078 15.5879C14.2859 15.5879 16.538 13.3358 16.538 10.5577C16.538 7.77966 14.2859 5.52759 11.5078 5.52759C8.72974 5.52759 6.47766 7.77966 6.47766 10.5577C6.47766 13.3358 8.72974 15.5879 11.5078 15.5879ZM11.5078 16.5879C14.8382 16.5879 17.538 13.8881 17.538 10.5577C17.538 7.22738 14.8382 4.52759 11.5078 4.52759C8.17745 4.52759 5.47766 7.22738 5.47766 10.5577C5.47766 13.8881 8.17745 16.5879 11.5078 16.5879Z" fill="#417A82" /></svg>
                                    <span class="menu-chapter-text menu-chapter-text-js" style="display: none;">
                                        Lorem
                                    </span>
                                </a>
                            </div> 

                            <div class="menu-chapter-blok">
                                <a href="/">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.8021 1.99537L11.5078 0.00488281L9.21359 1.99537L6.23146 1.41868L5.23982 4.28963L2.36888 5.28126L2.94557 8.26339L0.955078 10.5576L2.94557 12.8519L2.36888 15.834L5.23982 16.8257L6.23146 19.6966L9.21359 19.1199L11.5078 21.1104L13.8021 19.1199L16.7842 19.6966L17.7759 16.8257L20.6468 15.834L20.0701 12.8519L22.0606 10.5576L20.0701 8.26339L20.6468 5.28126L17.7759 4.28963L16.7842 1.41868L13.8021 1.99537ZM16.1223 2.56522L13.5143 3.06956L11.5078 1.32879L9.50141 3.06956L6.89341 2.56522L6.02618 5.07598L3.51542 5.94322L4.01975 8.55122L2.27898 10.5576L4.01975 12.5641L3.51542 15.1721L6.02618 16.0393L6.89341 18.5501L9.50141 18.0457L11.5078 19.7865L13.5143 18.0457L16.1223 18.5501L16.9895 16.0393L19.5003 15.1721L18.9959 12.5641L20.7367 10.5576L18.9959 8.55122L19.5003 5.94322L16.9895 5.07598L16.1223 2.56522Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M11.5078 15.5879C14.2859 15.5879 16.538 13.3358 16.538 10.5577C16.538 7.77966 14.2859 5.52759 11.5078 5.52759C8.72974 5.52759 6.47766 7.77966 6.47766 10.5577C6.47766 13.3358 8.72974 15.5879 11.5078 15.5879ZM11.5078 16.5879C14.8382 16.5879 17.538 13.8881 17.538 10.5577C17.538 7.22738 14.8382 4.52759 11.5078 4.52759C8.17745 4.52759 5.47766 7.22738 5.47766 10.5577C5.47766 13.8881 8.17745 16.5879 11.5078 16.5879Z" fill="#417A82" /></svg>
                                    <span class="menu-chapter-text menu-chapter-text-js" style="display: none;">
                                        Lorem
                                    </span>
                                </a>
                            </div> 

                            <div class="menu-chapter-blok">
                                <a href="/">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.8021 1.99537L11.5078 0.00488281L9.21359 1.99537L6.23146 1.41868L5.23982 4.28963L2.36888 5.28126L2.94557 8.26339L0.955078 10.5576L2.94557 12.8519L2.36888 15.834L5.23982 16.8257L6.23146 19.6966L9.21359 19.1199L11.5078 21.1104L13.8021 19.1199L16.7842 19.6966L17.7759 16.8257L20.6468 15.834L20.0701 12.8519L22.0606 10.5576L20.0701 8.26339L20.6468 5.28126L17.7759 4.28963L16.7842 1.41868L13.8021 1.99537ZM16.1223 2.56522L13.5143 3.06956L11.5078 1.32879L9.50141 3.06956L6.89341 2.56522L6.02618 5.07598L3.51542 5.94322L4.01975 8.55122L2.27898 10.5576L4.01975 12.5641L3.51542 15.1721L6.02618 16.0393L6.89341 18.5501L9.50141 18.0457L11.5078 19.7865L13.5143 18.0457L16.1223 18.5501L16.9895 16.0393L19.5003 15.1721L18.9959 12.5641L20.7367 10.5576L18.9959 8.55122L19.5003 5.94322L16.9895 5.07598L16.1223 2.56522Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M11.5078 15.5879C14.2859 15.5879 16.538 13.3358 16.538 10.5577C16.538 7.77966 14.2859 5.52759 11.5078 5.52759C8.72974 5.52759 6.47766 7.77966 6.47766 10.5577C6.47766 13.3358 8.72974 15.5879 11.5078 15.5879ZM11.5078 16.5879C14.8382 16.5879 17.538 13.8881 17.538 10.5577C17.538 7.22738 14.8382 4.52759 11.5078 4.52759C8.17745 4.52759 5.47766 7.22738 5.47766 10.5577C5.47766 13.8881 8.17745 16.5879 11.5078 16.5879Z" fill="#417A82" /></svg>
                                    <span class="menu-chapter-text menu-chapter-text-js" style="display: none;">
                                        Lorem
                                    </span>
                                </a>
                            </div> 

                            <div class="menu-chapter-blok">
                                <a href="/">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.8021 1.99537L11.5078 0.00488281L9.21359 1.99537L6.23146 1.41868L5.23982 4.28963L2.36888 5.28126L2.94557 8.26339L0.955078 10.5576L2.94557 12.8519L2.36888 15.834L5.23982 16.8257L6.23146 19.6966L9.21359 19.1199L11.5078 21.1104L13.8021 19.1199L16.7842 19.6966L17.7759 16.8257L20.6468 15.834L20.0701 12.8519L22.0606 10.5576L20.0701 8.26339L20.6468 5.28126L17.7759 4.28963L16.7842 1.41868L13.8021 1.99537ZM16.1223 2.56522L13.5143 3.06956L11.5078 1.32879L9.50141 3.06956L6.89341 2.56522L6.02618 5.07598L3.51542 5.94322L4.01975 8.55122L2.27898 10.5576L4.01975 12.5641L3.51542 15.1721L6.02618 16.0393L6.89341 18.5501L9.50141 18.0457L11.5078 19.7865L13.5143 18.0457L16.1223 18.5501L16.9895 16.0393L19.5003 15.1721L18.9959 12.5641L20.7367 10.5576L18.9959 8.55122L19.5003 5.94322L16.9895 5.07598L16.1223 2.56522Z" fill="#417A82" /><path fill-rule="evenodd" clip-rule="evenodd" d="M11.5078 15.5879C14.2859 15.5879 16.538 13.3358 16.538 10.5577C16.538 7.77966 14.2859 5.52759 11.5078 5.52759C8.72974 5.52759 6.47766 7.77966 6.47766 10.5577C6.47766 13.3358 8.72974 15.5879 11.5078 15.5879ZM11.5078 16.5879C14.8382 16.5879 17.538 13.8881 17.538 10.5577C17.538 7.22738 14.8382 4.52759 11.5078 4.52759C8.17745 4.52759 5.47766 7.22738 5.47766 10.5577C5.47766 13.8881 8.17745 16.5879 11.5078 16.5879Z" fill="#417A82" /></svg>
                                    <span class="menu-chapter-text menu-chapter-text-js" style="display: none;">
                                        Lorem
                                    </span>
                                </a>
                            </div> 

                            <div class="menu-chapter-blok menu-chapter-blok-search menu-chapter-text-js" style="display: block;">
                                <a href="/">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="4.5" cy="4.5" r="4" transform="matrix(-1 0 0 1 16 6)" stroke="#417A82" /><path d="M13.5001 13.5L17.4242 18.5435" stroke="#417A82" /><rect x="0.5" y="0.5" width="24" height="24" rx="12" stroke="#417A82" /></svg>
                                </a>
                            </div>

                            <div class="menu-chapter-blok menu-chapter-blok-searchfull menu-chapter-text-js" style="display: none;">
                                <form action="" class="search">
                                    <div class="menu-chapter-blok-searchfull-blok">
                                        <input class="search-input" type="text" placeholder="Поиск">
                                        <button class="search-input-btn btn">
                                            <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="7" cy="7" r="6.5" transform="matrix(-1 0 0 1 14 0)" stroke="#417A82" /><path d="M12.5 14L16 18.5" stroke="#417A82" /></svg>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="menu-chapter-blok menu-chapter-blok-razdel menu-chapter-text-js" style="display: none;">
                                <div class="menu-chapter-blok-razdel-elem">
                                    <a href="">О компании</a>
                                    <a href="">Отзывы</a>
                                    <a href="">Коммерческим покупателям</a>
                                    <a href="">Контакты</a>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <div class="col-xl">
                        <div class="banner">                  
                            <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-auto col-xl-auto">
                                        <button class="order-measurement">Заказать замер</button>
                                    </div>    

                                    <div class="col-auto col-xl-auto">
                                        <div class="basket-blok">
                                            <a href="/" class="basket">
                                                <img src="/image/cart-icon.png" alt="basket">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-start">
                                    <div class="title-blok">
                                        <h1>Купите <span class="title-blok-add title-blok-add-block">что-то</span> <span class="title-blok-add-block">и еще <span class="title-blok-add">шторы</span></span> </h1>
                                    </div>  
                                </div>

                                <div class="row justify-content-start">
                                    <div class="col-xl-4 col-auto">
                                        <div class="title-blok-description">
                                            <span>«Lorem» — производитель изделий для внутренней и внешней lorem</span>
                                        </div>  
                                    </div>  
                                    <div class="col-xl-8"></div>
                                </div>

                                <div class="row justify-content-start">
                                    <div class="col-xl-auto col-auto">
                                        <div class="title-blok-calc">
                                            <button class="title-blok-calc-btn">Калькулятор</button>
                                        </div>  
                                    </div> 
                                    <div class="col-xl"></div>
                                </div> 
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </header>

        <main>
