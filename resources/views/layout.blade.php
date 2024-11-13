<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body {
        background-color: #F8FAFE;
        margin: 0;
        height: 100vh;
    }

    .container-fluid {
        height: 100%;
    }

    /* Custom style for sidebar */
    .sidebar {
        height: 100vh;
        background-color: white !important;
        color: black;
        padding-top: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .sidebar a {
        color: #9197B3;
        text-decoration: none;
        padding: 10px;
        display: block;
    }

    .sidebar a:focus,
    .sidebar a:active {
        background-color: #5932EA;
        color: white;
        /* Change this to the color you want when clicked */
    }

    .sidebar a:hover {
        background-color: #5932EA;
        color: white;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar ">

                <h2 class="text-center d-flex align-items-center justify-content-center" style="gap: 10px;">
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.5004 34.8876C17.4674 34.8876 16.4191 34.6564 15.602 34.1784L7.1229 29.2914C3.66957 26.9634 3.45374 26.6089 3.45374 22.9551V14.0443C3.45374 10.3905 3.65415 10.0359 7.04582 7.73887L15.5866 2.80553C17.2054 1.86512 19.7491 1.86512 21.3679 2.80553L29.8779 7.70803C33.3312 10.0359 33.547 10.3905 33.547 14.0443V22.9397C33.547 26.5934 33.3466 26.948 29.9549 29.2451L21.4141 34.1784C20.5816 34.6564 19.5333 34.8876 18.5004 34.8876ZM18.5004 4.42428C17.8529 4.42428 17.2208 4.54762 16.7737 4.8097L8.29457 9.7122C5.78165 11.408 5.78165 11.408 5.78165 14.0443V22.9397C5.78165 25.5759 5.78165 25.5759 8.35624 27.318L16.7737 32.1743C17.6833 32.6984 19.3329 32.6984 20.2424 32.1743L28.7216 27.2718C31.2191 25.5759 31.2191 25.5759 31.2191 22.9397V14.0443C31.2191 11.408 31.2191 11.408 28.6445 9.66595L20.227 4.8097C19.7799 4.54762 19.1479 4.42428 18.5004 4.42428Z"
                            fill="black" />
                        <path
                            d="M18.5 24.2812C15.3088 24.2812 12.7188 21.6912 12.7188 18.5C12.7188 15.3088 15.3088 12.7188 18.5 12.7188C21.6912 12.7188 24.2812 15.3088 24.2812 18.5C24.2812 21.6912 21.6912 24.2812 18.5 24.2812ZM18.5 15.0312C16.5883 15.0312 15.0312 16.5883 15.0312 18.5C15.0312 20.4117 16.5883 21.9688 18.5 21.9688C20.4117 21.9688 21.9688 20.4117 21.9688 18.5C21.9688 16.5883 20.4117 15.0312 18.5 15.0312Z"
                            fill="black" />
                    </svg>
                    Dashboard

                </h2>
                <div class="m-sm-3">
                    <a href="#dashboard" class="d-flex align-items-center " style="gap: 8px;">
                        <svg width="24" height="24" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.5004 34.8876C17.4674 34.8876 16.4191 34.6564 15.602 34.1784L7.1229 29.2914C3.66957 26.9634 3.45374 26.6089 3.45374 22.9551V14.0443C3.45374 10.3905 3.65415 10.0359 7.04582 7.73887L15.5866 2.80553C17.2054 1.86512 19.7491 1.86512 21.3679 2.80553L29.8779 7.70803C33.3312 10.0359 33.547 10.3905 33.547 14.0443V22.9397C33.547 26.5934 33.3466 26.948 29.9549 29.2451L21.4141 34.1784C20.5816 34.6564 19.5333 34.8876 18.5004 34.8876ZM18.5004 4.42428C17.8529 4.42428 17.2208 4.54762 16.7737 4.8097L8.29457 9.7122C5.78165 11.408 5.78165 11.408 5.78165 14.0443V22.9397C5.78165 25.5759 5.78165 25.5759 8.35624 27.318L16.7737 32.1743C17.6833 32.6984 19.3329 32.6984 20.2424 32.1743L28.7216 27.2718C31.2191 25.5759 31.2191 25.5759 31.2191 22.9397V14.0443C31.2191 11.408 31.2191 11.408 28.6445 9.66595L20.227 4.8097C19.7799 4.54762 19.1479 4.42428 18.5004 4.42428Z"
                                fill="red" />
                            <path
                                d="M18.5 24.2812C15.3088 24.2812 12.7188 21.6912 12.7188 18.5C12.7188 15.3088 15.3088 12.7188 18.5 12.7188C21.6912 12.7188 24.2812 15.3088 24.2812 18.5C24.2812 21.6912 21.6912 24.2812 18.5 24.2812ZM18.5 15.0312C16.5883 15.0312 15.0312 16.5883 15.0312 18.5C15.0312 20.4117 16.5883 21.9688 18.5 21.9688C20.4117 21.9688 21.9688 20.4117 21.9688 18.5C21.9688 16.5883 20.4117 15.0312 18.5 15.0312Z"
                                fill="red" />
                        </svg>
                        Dashboard
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L10 8L6 4" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>


                    </a>
                    <a href="#product" class="d-flex align-items-center" style="gap: 8px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z"
                                fill="red" />
                            <path
                                d="M12.0006 13.0797C11.8706 13.0797 11.7406 13.0497 11.6206 12.9797L6.32061 9.9197C5.96061 9.7097 5.84059 9.2497 6.05059 8.8997C6.26059 8.5397 6.72061 8.4197 7.07061 8.6297L11.9906 11.4797L16.8806 8.6497C17.2406 8.4397 17.7006 8.5697 17.9006 8.9197C18.1006 9.2697 17.9806 9.7397 17.6306 9.9397L12.3706 12.9797C12.2606 13.0397 12.1306 13.0797 12.0006 13.0797Z"
                                fill="red" />
                            <path
                                d="M12 18.5201C11.59 18.5201 11.25 18.1801 11.25 17.7701V12.3301C11.25 11.9201 11.59 11.5801 12 11.5801C12.41 11.5801 12.75 11.9201 12.75 12.3301V17.7701C12.75 18.1801 12.41 18.5201 12 18.5201Z"
                                fill="red" />
                            <path
                                d="M12.0002 18.7498C11.4202 18.7498 10.8503 18.6198 10.3903 18.3698L7.19025 16.5898C6.23025 16.0598 5.49023 14.7898 5.49023 13.6898V10.2998C5.49023 9.20981 6.24025 7.9398 7.19025 7.3998L10.3903 5.6198C11.3103 5.1098 12.6902 5.1098 13.6102 5.6198L16.8102 7.3998C17.7702 7.9298 18.5103 9.19981 18.5103 10.2998V13.6898C18.5103 14.7798 17.7602 16.0498 16.8102 16.5898L13.6102 18.3698C13.1502 18.6298 12.5802 18.7498 12.0002 18.7498ZM12.0002 6.7498C11.6702 6.7498 11.3502 6.8098 11.1202 6.9398L7.92026 8.7198C7.43026 8.9898 6.99023 9.7498 6.99023 10.2998V13.6898C6.99023 14.2498 7.43026 14.9998 7.92026 15.2698L11.1202 17.0498C11.5802 17.3098 12.4202 17.3098 12.8802 17.0498L16.0802 15.2698C16.5702 14.9998 17.0103 14.2398 17.0103 13.6898V10.2998C17.0103 9.73981 16.5702 8.9898 16.0802 8.7198L12.8802 6.9398C12.6502 6.8098 12.3302 6.7498 12.0002 6.7498Z"
                                fill="red" />
                        </svg>

                        Product
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L10 8L6 4" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>

            </nav>
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h1>Hello</h1>
            </main>
            <div class="">
                heleleloeoe
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXlR+Pp6b2DZT06CEBzeyb2Hc4tWtCFZf1/9eD4g5Yx2kaq6mYf5D9B1QVp0" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-csccrYmFV4DRpHjD7qIcz3Onjs7CpoKLG9f3yT2QUtpoGEpF5B1ekIgjaIZh9w+A" crossorigin="anonymous">
    </script>
</body>

</html>