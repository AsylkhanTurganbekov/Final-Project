<!DOCTYPE html>

<html lang="en">

<head>
    <title>
        Support.spotify.com
    </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--------------------------------------------------------------------------------------------------------------------------------->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background: linear-gradient(#1ed760, #000 25%, #000 30%, #000 40%, #000 50%, #000 60%, #000);
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .list {
        width: 100%;
        height: 100vh;
    }

    footer {
        background-color: black;
        display: block;
        width: 100%;
        color: white;
        position: relative;
    }

    footer .hh a {
        color: grey;
        text-align: left;
        margin-left: 190px;
        padding-bottom: 1%;
        text-decoration: none;
    }

    footer .content {
        max-width: 1350px;
        margin: 0px 90px;
        padding: 20px;
        display: flex;
        margin-top: 85px;
        align-items: stretch;
    }

    footer .content .box {
        width: 20%;
        transition: all 0.4s ease;
    }

    footer .content p {
        text-align: justify;
    }

    footer .content .middle {
        padding-left: 80px;
        display: block;
        justify-content: center;
    }

    footer .content .middle p {
        margin-top: 30px;
        color: grey;
        font-size: 20px;
        margin-bottom: 30px;
    }

    footer .content .middle a {
        line-height: 32px;
        color: white;
        font-size: 18px;
        padding-bottom: 30px;
        font-weight: 900;
        text-decoration: none;
    }

    footer .content .middle div {
        padding-bottom: 15px;
    }

    footer .content a:hover {
        text-decoration: none;
        color: rgb(4, 192, 41);
    }

    footer .niz a {
        color: grey;
        text-decoration: none;
        padding: 1%;
    }

    footer .niz a:hover {
        text-decoration: none;
        color: rgb(4, 192, 41);
    }

    footer .niz {
        text-align: center;
        margin-top: 30px;
        margin-right: 20%;
    }

    footer .hh a:hover {
        text-decoration: underline;
    }

    footer .content .middle select {
        padding: 8px;
        background-color: transparent;
        border: 1px solid grey;
        color: grey;
    }

    /* Navbar section */

    .nav {
        width: 100%;
        height: 100px;
        line-height: 65px;
        text-align: center;
        background: transparent;
    }

    .svgg {
        fill: white;
        margin-left: 50px;
    }

    .nav div.logo {
        margin-top: 20px;
        width: 220px;
        position: absolute;
    }

    .nav div.main_list {
        width: 600px;
        height: 65px;
        float: right;
    }

    .nav div.main_list ul {
        width: 100%;
        height: 65px;
        display: flex;
        list-style: none;
    }

    .nav div.main_list ul li {
        width: 120px;
        height: 65px;
        display: flex;
        align-items: center;
    }

    .nav div.main_list ul li a {
        text-decoration: none;
        color: #fff;
        line-height: 65px;
        text-transform: uppercase;
    }

    .nav div.main_list ul li a:hover {
        color: rgb(4, 192, 41);
    }

    .nav div.media_button {
        width: 40px;
        height: 40px;
        background-color: transparent;
        position: absolute;
        right: 15px;
        top: 12px;
        display: none;
    }

    .nav div.media_button button.main_media_button {
        width: 100%;
        height: 100%;
        background-color: transparent;
        ;
        outline: 0;
        border: none;
        cursor: pointer;
    }

    .nav div.media_button button.main_media_button span {
        width: 98%;
        height: 1px;
        display: block;
        background-color: #fff;
        margin-top: 9px;
        margin-bottom: 10px;
    }

    .nav div.media_button button.main_media_button:hover span:nth-of-type(1) {
        transform: rotateY(180deg);
        transition: all 0.5s;
        background-color: #c0c0c0;
    }

    .nav div.media_button button.main_media_button:hover span:nth-of-type(2) {
        transform: rotateY(180deg);
        transition: all 0.4s;
        background-color: #c0c0c0;
    }

    .nav div.media_button button.main_media_button:hover span:nth-of-type(3) {
        transform: rotateY(180deg);
        transition: all 0.3s;
        background-color: #c0c0c0;
    }

    .nav div.media_button button.active span:nth-of-type(1) {
        transform: rotate3d(0, 0, 1, 45deg);
        position: absolute;
        margin: 0;
    }

    .nav div.media_button button.active span:nth-of-type(2) {
        display: none;
    }

    .nav div.media_button button.active span:nth-of-type(3) {
        transform: rotate3d(0, 0, 1, -45deg);
        position: absolute;
        margin: 0;
    }

    .nav div.media_button button.active:hover span:nth-of-type(1) {
        transform: rotate3d(0, 0, 1, 20deg);
    }

    .nav div.media_button button.active:hover span:nth-of-type(3) {
        transform: rotate3d(0, 0, 1, -20deg);
    }

    /* Home section */

    .home {
        width: 100%;
        height: 100vh;
        background-color: #ddd;
    }

    /* Medai qurey section */
    section {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }

    .secF {
        width: 40%;
        display: block;
        position: relative;
    }

    .secF h1 {
        font-weight: 50;
        font-size: 16px;
        color: white;
        margin: 30px 0;
        padding-left: 15px;
    }

    .secF h2 {
        font-weight: 900;
        font-size: 65px;
        letter-spacing: 5px;
        color: white;
        margin-bottom: 60px;
        padding-left: 15px;
    }

    .text-field__input {
        display: block;
        width: 90%;
        height: calc(2.25rem + 2px);
        padding: 0.375rem 0.75rem;
        font-family: inherit;
        font-size: 1rem;
        font-weight: 400;
        position: relative;
        margin: 30px;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #bdbdbd;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .text-field__icon-2_search::after {
        width: 2.5rem;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23212529' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'%3E%3C/path%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
    }

    /* inactive icon - вариант 2 */
    .text-field__icon-2 {
        position: relative;
        margin: 0 auto;
        width: 90%;
    }

    .text-field__icon-2::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 2.5rem;
        background-color: #f5f5f5;
        border: 1px solid #bdbdbd;
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }

    .text-field__icon-2::after {
        content: '';
        color: #212529;
        position: absolute;
        display: flex;
        align-items: center;
        top: 0;
        bottom: 0;
        width: 2.5rem;
        top: 50%;
        transform: translateY(-50%);
        justify-content: center;
    }

    .text-field__icon-2 input {
        padding-left: 2rem;
    }

    .text-field__icon-2_email::after {
        content: '@';
    }

    .secF .third {
        display: flex;
        align-items: center;
        padding-left: 15px;
    }

    .secF .third .spa {
        font-size: 30px;
        font-weight: 600;
        color: white;
    }

    .secS {
        position: relative;
        display: block;
        width: 40%;
        background-color: grey;
    }

    .secS div {
        display: flex;
        flex-direction: column;
        margin: 30px;
    }

    .secS h2 {
        margin: 30px;
        margin-left: 20px;
        font-size: 40px;
        color: white;
        font-weight: bold;
    }

    .secS a {
        margin: 20px;
        font-size: 35px;
        text-decoration: none;
        color: white;
        position: relative;
        width: 100%;
    }

    .secS a {
        margin: 20px;
        font-size: 35px;
        text-decoration: none;
        color: white;
        display: flex;
        width: 100%;
    }

    .secS a:hover {
        cursor: pointer;
        text-decoration: underline;
    }

    .secS a span {
        position: relative;
        width: 80%;
    }

    .secS a svg {
        position: relative;
        width: 20%;
    }

    .secT {
        position: relative;
        width: 40%;
        display: block;
        background-color: black;
        text-align: center;
    }

    .secT p {
        font-size: 21px;
        color: white;

    }

    .secT h2 {
        font-size: 70px;
        font-weight: 400;
        color: white;
        margin: 30px;
    }

    .secT button {
        margin-top: 25px;
        border: 2px solid black;
        border-radius: 80px;
        width: 30%;
        height: 60px;
        background-color: rgb(4, 192, 41);
        color: black;
        font-weight: 900;
        font-size: 20px;
        margin-bottom: 10px;
    }

    .secT button:hover {
        width: 32%;
        height: 83px;
        transition: 0.1s;
        cursor: pointer;
    }

    .contaainer {
        width: 100%;
        margin: 30px auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }

    .item {
        padding: 20px;
        font-size: 25px;
        font-family: sans-serif;
        color: white;
    }

    @media screen and (max-width: 2000px) {
        .secS h2 {
            font-size: 30px;
        }

        .secS a {
            font-size: 25px;
        }
    }

    @media screen and (max-width: 1800px) {
        .text-field__input {
            width: 85%;
        }

        .contaainer {
            grid-template-columns: repeat(1, 1fr);
        }

        .item {
            font-size: 20px;
        }

        .secT h2 {
            font-size: 50px;
        }

        .secS h2 {
            font-size: 25px;
        }

        .secS a {
            font-size: 20px;
        }
    }

    @media screen and (max-width: 1250px) {

        .secF,
        .secT,
        .secS {
            width: 60%;
        }

        .secF h2 {
            font-size: 45px;
        }

        footer .content {
            display: block;
            width: 40%;
            margin: auto;
        }

        .svgg {
            margin-left: 0;
        }

        footer .content .middle {
            padding-left: 0;
        }

        footer .content .box {
            width: 100%;
        }

        footer .niz {
            margin-top: 0;
            margin-right: 0;
        }

        footer .niz a {
            display: block;
        }

        .secT h2 {
            font-size: 22px;
        }

        .secT p {
            font-size: 16px;
        }

        .secT button {
            width: 40%;
            height: 40px;
            font-size: 10px;
        }
    }

    @media screen and (max-width:1200px) {

        .container {
            margin: 0;
        }

        .nav div.logo {
            margin-left: 15px;
        }

        .nav div.main_list {
            width: 60%;
            margin-top: 65px;
            height: 0px;
            right: 0;
            overflow: hidden;
        }

        .nav div.show_list {
            height: 100vh;
        }

        .nav div.main_list ul {
            flex-direction: column;
            width: 100%;
            top: 80px;
        }

        .nav div.main_list ul li {
            width: 100%;
            background-color: black;
            position: relative;
            z-index: 1;
        }

        .nav div.main_list ul li a {
            text-align: center;
            width: 100%;
            display: table;
            right: 0;
            position: relative;
            z-index: 1;
        }

        .nav div.media_button {
            display: block;
        }
    }

    @media screen and (max-width: 750px) {
        .text-field__input {
            width: 65%;
        }
    }
</style>
<!-------------------------------------------------------------------------------------------------------------------------------->

<body>
    <div class="list">
        </nav>
        <nav class="nav">
            <div class="container">
                <div class="logo">
                    <svg role="img" viewBox="0 0 78 24" height="55%" class="svgg">
                        <path d="M18.616 10.639c-3.77-2.297-9.99-2.509-13.59-1.388a1.077 1.077 0 0 1-1.164-.363 1.14 1.14 0 0 1-.119-1.237c.136-.262.37-.46.648-.548 4.132-1.287 11-1.038 15.342 1.605a1.138 1.138 0 0 1 .099 1.863 1.081 1.081 0 0 1-.813.213c-.142-.02-.28-.07-.403-.145Zm-.124 3.402a.915.915 0 0 1-.563.42.894.894 0 0 1-.69-.112c-3.144-1.983-7.937-2.557-11.657-1.398a.898.898 0 0 1-.971-.303.952.952 0 0 1-.098-1.03.929.929 0 0 1 .54-.458c4.248-1.323 9.53-.682 13.14 1.595a.95.95 0 0 1 .3 1.286Zm-1.43 3.267a.73.73 0 0 1-.45.338.712.712 0 0 1-.553-.089c-2.748-1.722-6.204-2.111-10.276-1.156a.718.718 0 0 1-.758-.298.745.745 0 0 1-.115-.265.757.757 0 0 1 .092-.563.737.737 0 0 1 .457-.333c4.455-1.045 8.277-.595 11.361 1.338a.762.762 0 0 1 .241 1.028ZM11.696 0C5.237 0 0 5.373 0 12c0 6.628 5.236 12 11.697 12 6.46 0 11.698-5.372 11.698-12 0-6.627-5.238-12-11.699-12h.001Zm20.126 11.078c-2.019-.494-2.379-.84-2.379-1.57 0-.688.633-1.151 1.572-1.151.91 0 1.814.352 2.76 1.076a.131.131 0 0 0 .187-.03l.987-1.426a.139.139 0 0 0-.025-.185c-1.127-.928-2.396-1.378-3.88-1.378-2.18 0-3.703 1.342-3.703 3.263 0 2.06 1.315 2.788 3.585 3.352 1.932.457 2.258.84 2.258 1.524 0 .757-.659 1.229-1.72 1.229-1.18 0-2.141-.408-3.216-1.364a.13.13 0 0 0-.188.016l-1.106 1.35a.137.137 0 0 0 .013.188c1.252 1.147 2.79 1.752 4.451 1.752 2.35 0 3.869-1.317 3.869-3.356 0-1.723-1.003-2.676-3.465-3.29Zm10.487 2.31c0 1.454-.874 2.47-2.125 2.47-1.235 0-2.169-1.061-2.169-2.47 0-1.41.933-2.47 2.17-2.47 1.23 0 2.124 1.038 2.124 2.47Zm-1.706-4.354c-1.018 0-1.854.412-2.543 1.256v-.95a.136.136 0 0 0-.038-.095.132.132 0 0 0-.093-.04h-1.81a.131.131 0 0 0-.093.04.136.136 0 0 0-.039.096v10.546c0 .076.06.137.133.137h1.809a.132.132 0 0 0 .093-.041.136.136 0 0 0 .038-.096v-3.329c.69.794 1.525 1.18 2.543 1.18 1.893 0 3.808-1.494 3.808-4.35 0-2.858-1.915-4.354-3.808-4.354Zm8.72 6.839c-1.297 0-2.274-1.068-2.274-2.486 0-1.422.943-2.455 2.244-2.455 1.305 0 2.288 1.069 2.288 2.487 0 1.422-.949 2.454-2.258 2.454Zm0-6.838c-2.438 0-4.347 1.926-4.347 4.383 0 2.432 1.896 4.338 4.317 4.338 2.445 0 4.36-1.92 4.36-4.369 0-2.44-1.901-4.353-4.33-4.353Zm9.535.17h-1.99V7.117a.136.136 0 0 0-.08-.126.13.13 0 0 0-.052-.01h-1.809a.133.133 0 0 0-.093.04.136.136 0 0 0-.038.095v2.087h-.87a.131.131 0 0 0-.122.085.139.139 0 0 0-.01.052v1.595c0 .074.06.135.132.135h.87v4.126c0 1.667.809 2.513 2.404 2.513.648 0 1.186-.138 1.694-.434a.135.135 0 0 0 .067-.117V15.64a.137.137 0 0 0-.063-.115.13.13 0 0 0-.129-.006c-.349.18-.685.263-1.061.263-.58 0-.84-.271-.84-.876V11.07h1.99a.13.13 0 0 0 .094-.04.136.136 0 0 0 .039-.096V9.339a.137.137 0 0 0-.039-.096.132.132 0 0 0-.094-.04v.001Zm6.934.007v-.255c0-.755.281-1.092.914-1.092.376 0 .68.077 1.019.194a.13.13 0 0 0 .118-.02.135.135 0 0 0 .056-.11V6.365a.137.137 0 0 0-.026-.081.133.133 0 0 0-.068-.05 4.852 4.852 0 0 0-1.502-.22c-1.67 0-2.554.965-2.554 2.788v.393h-.87a.132.132 0 0 0-.093.04.136.136 0 0 0-.038.096v1.603c0 .075.059.136.132.136h.87v6.364c0 .075.058.135.131.135h1.809c.072 0 .131-.06.131-.135V11.07h1.69l2.586 6.362c-.294.669-.583.802-.977.802-.319 0-.654-.098-.998-.29a.133.133 0 0 0-.105-.01.135.135 0 0 0-.078.072l-.612 1.38a.137.137 0 0 0 .056.175 3.733 3.733 0 0 0 1.932.508c1.334 0 2.073-.638 2.724-2.355l3.137-8.317a.14.14 0 0 0-.014-.126.131.131 0 0 0-.108-.06h-1.883a.132.132 0 0 0-.126.092l-1.928 5.651L69.006 9.3a.133.133 0 0 0-.124-.088h-3.09v.001Zm-4.02-.008h-1.809a.132.132 0 0 0-.093.041.136.136 0 0 0-.038.096v8.094c0 .075.06.135.132.135h1.809c.072 0 .131-.06.131-.135V9.34a.136.136 0 0 0-.038-.096.133.133 0 0 0-.094-.04Zm-.896-3.685a1.295 1.295 0 0 0-.919.393c-.243.25-.379.586-.377.937a1.342 1.342 0 0 0 .377.938 1.304 1.304 0 0 0 .92.393c.346-.002.677-.143.92-.393s.379-.587.377-.938c0-.735-.581-1.33-1.296-1.33h-.002Zm15.918 4.49h-.331v.434h.331c.165 0 .264-.083.264-.216 0-.142-.099-.217-.264-.217Zm.215.619.36.517h-.304l-.323-.474h-.279v.474h-.254v-1.37h.595c.31 0 .515.163.515.436a.412.412 0 0 1-.31.417Zm-.282-1.31c-.652 0-1.146.532-1.146 1.183 0 .65.49 1.175 1.139 1.175.652 0 1.147-.532 1.147-1.183 0-.65-.492-1.174-1.14-1.174Zm-.007 2.488a1.259 1.259 0 0 1-.904-.384 1.296 1.296 0 0 1-.368-.92c0-.717.563-1.314 1.279-1.314a1.259 1.259 0 0 1 .903.384 1.295 1.295 0 0 1 .369.921c0 .717-.563 1.314-1.279 1.314Z">
                        </path>
                    </svg>
                </div>
                <div class="main_list" id="mainListDiv">
                    <ul>
                        <li><a href="premium1.php">Premium</a></li>
                        <li><a href="spravka.php">Справка</a></li>
                        <li><a href="#">Скачать</a></li>
                        <li><svg role="img" height="48" fill="white" width="48" aria-hidden="true" aria-label="Картинка профиля" data-testid="not-logged-user-icon" viewBox="0 0 24 24" data-encore-id="icon" class="Svg-sc-ytk21e-0 dmMoAF">
                                <path d="M11.999 1c-6.075 0-11 4.925-11 11s4.925 11 11 11 11-4.925 11-11-4.925-11-11-11zm-9 11a9 9 0 1115.763 5.938 4.998 4.998 0 00-2.105-2.381l-1.618-.935a.478.478 0 01-.193-.2.5.5 0 01.059-.544c.715-.854 1.255-1.893 1.33-3.164.021-.356 0-.708-.038-1.011a4.354 4.354 0 00-.177-.812 4.224 4.224 0 00-.878-1.509 4.262 4.262 0 00-6.284 0 4.24 4.24 0 00-.879 1.509 4.354 4.354 0 00-.176.812 5.5 5.5 0 00-.038 1.011c.075 1.271.615 2.31 1.33 3.164a.5.5 0 01.059.544.479.479 0 01-.193.2l-1.618.935a4.998 4.998 0 00-2.106 2.383A8.966 8.966 0 013 12zm3.883 7.405a3 3 0 011.46-2.116l1.62-.935c.436-.252.765-.613.975-1.025a2.5 2.5 0 00-.001-2.273 2.516 2.516 0 00-.306-.46l-.001-.002c-.516-.616-.824-1.26-.867-1.998a3.473 3.473 0 01.025-.638c.027-.21.064-.36.086-.424a2.22 2.22 0 01.46-.8 2.263 2.263 0 013.335 0c.199.217.351.484.459.8.021.064.059.214.086.424a3.5 3.5 0 01.026.638c-.044.738-.352 1.382-.868 1.998l-.001.002a2.5 2.5 0 00-.306 2.733c.21.412.538.773.975 1.025l1.618.935a3 3 0 011.461 2.114A8.96 8.96 0 0112 21a8.959 8.959 0 01-5.117-1.595z">
                                </path>
                            </svg><a href="#">Профиль</a></li>
                    </ul>
                </div>
                <div class="media_button">
                    <button class="main_media_button" id="mediaButton">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </nav>

        <section>
            <div class="secF">
                <h1>СЛУЖБА ПОДДЕРЖКИ SPOTIFY</h1>
                <h2>Мы всегда готовы помочь</h2>
                <div class="third"><svg role="img" height="48" fill="white" width="48" aria-hidden="true" aria-label="Картинка профиля" data-testid="not-logged-user-icon" viewBox="0 0 24 24" data-encore-id="icon" class="Svg-sc-ytk21e-0 dmMoAF">
                        <path d="M11.999 1c-6.075 0-11 4.925-11 11s4.925 11 11 11 11-4.925 11-11-4.925-11-11-11zm-9 11a9 9 0 1115.763 5.938 4.998 4.998 0 00-2.105-2.381l-1.618-.935a.478.478 0 01-.193-.2.5.5 0 01.059-.544c.715-.854 1.255-1.893 1.33-3.164.021-.356 0-.708-.038-1.011a4.354 4.354 0 00-.177-.812 4.224 4.224 0 00-.878-1.509 4.262 4.262 0 00-6.284 0 4.24 4.24 0 00-.879 1.509 4.354 4.354 0 00-.176.812 5.5 5.5 0 00-.038 1.011c.075 1.271.615 2.31 1.33 3.164a.5.5 0 01.059.544.479.479 0 01-.193.2l-1.618.935a4.998 4.998 0 00-2.106 2.383A8.966 8.966 0 013 12zm3.883 7.405a3 3 0 011.46-2.116l1.62-.935c.436-.252.765-.613.975-1.025a2.5 2.5 0 00-.001-2.273 2.516 2.516 0 00-.306-.46l-.001-.002c-.516-.616-.824-1.26-.867-1.998a3.473 3.473 0 01.025-.638c.027-.21.064-.36.086-.424a2.22 2.22 0 01.46-.8 2.263 2.263 0 013.335 0c.199.217.351.484.459.8.021.064.059.214.086.424a3.5 3.5 0 01.026.638c-.044.738-.352 1.382-.868 1.998l-.001.002a2.5 2.5 0 00-.306 2.733c.21.412.538.773.975 1.025l1.618.935a3 3 0 011.461 2.114A8.96 8.96 0 0112 21a8.959 8.959 0 01-5.117-1.595z">
                        </path>
                    </svg>
                    <span class="spa">Hello Tata</span>
                </div>
                <div class="text-field">
                    <div class="text-field__icon-2 text-field__icon-2_search">
                        <input class="text-field__input" type="text" placeholder="Поиск" value="">
                    </div>
                    <div class="contaainer">
                        <div class="item item--1">Помощь с платежами</div>
                        <div class="item item--2">Справка с подписками</div>
                        <div class="item item--3">Справка по приложению</div>
                        <div class="item item--4">Справка с устройствам</div>
                        <div class="item item--5">Безопасность и конфиденциальност</div>
                        <div class="item item--6">Помощь с аккаунтом</div>
                    </div>
                </div>
            </div>
            <div class="secS">
                <div>
                    <h2>Быстрая помощь</h2>
                    <a href=""><span>Не получается сбросить пароль</span>
                        <svg role="img" height="40" fill="black" width="40" aria-hidden="true" class="Svg-sc-ytk21e-0 gKIorR IconChevron__addFlexNoShrink-sc-142999t-0 jPMJwV" viewBox="0 0 24 24" data-encore-id="icon">
                            <path d="M8.043 2.793a1 1 0 000 1.414L15.836 12l-7.793 7.793a1 1 0 101.414 1.414L18.664 12 9.457 2.793a1 1 0 00-1.414 0z">
                            </path>
                        </svg>
                    </a>
                    <a href=""><span>Не могу вспомнить данные для входа</span>
                        <svg role="img" height="40" fill="black" width="40" aria-hidden="true" class="Svg-sc-ytk21e-0 gKIorR IconChevron__addFlexNoShrink-sc-142999t-0 jPMJwV" viewBox="0 0 24 24" data-encore-id="icon">
                            <path d="M8.043 2.793a1 1 0 000 1.414L15.836 12l-7.793 7.793a1 1 0 101.414 1.414L18.664 12 9.457 2.793a1 1 0 00-1.414 0z">
                            </path>
                        </svg>
                    </a><a href=""><span>Вход в аккаунт Spotify через Facebook</span><svg role="img" height="40" fill="black" width="44" aria-hidden="true" class="Svg-sc-ytk21e-0 gKIorR IconChevron__addFlexNoShrink-sc-142999t-0 jPMJwV" viewBox="0 0 24 24" data-encore-id="icon">
                            <path d="M8.043 2.793a1 1 0 000 1.414L15.836 12l-7.793 7.793a1 1 0 101.414 1.414L18.664 12 9.457 2.793a1 1 0 00-1.414 0z">
                            </path>
                        </svg>
                    </a>
                    <a href="">
                        <span>Способы оплаты</span><svg role="img" height="40" fill="black" width="40" aria-hidden="true" class="Svg-sc-ytk21e-0 gKIorR IconChevron__addFlexNoShrink-sc-142999t-0 jPMJwV" viewBox="0 0 24 24" data-encore-id="icon">
                            <path d="M8.043 2.793a1 1 0 000 1.414L15.836 12l-7.793 7.793a1 1 0 101.414 1.414L18.664 12 9.457 2.793a1 1 0 00-1.414 0z">
                            </path>
                        </svg>
                    </a>
                    <a href="" Как оформить подписку «Premium для семьи» или стать ее участником></a>
                </div>
            </div>
            <div class="secT">
                <h2>Присоединяйтесь к Сообществу</h2>
                <p>Есть вопросы? В нашем международном сообществе вы наверняка найдете ответы на них.</p>
                <button>В Сообщество</button>
            </div>
        </section>

        <!-- FOOTER SECTION STARTS -->
        <footer class="foot">
            <!-- <div class="hh"><a href="https://help.netflix.com/ru/contactus">Questions? Contact us.</a></div> -->
            <div class="content">
                <div class="middle box">
                    <svg role="img" viewBox="0 0 78 24" height="" width="150px" class="svgg">
                        <path d="M18.616 10.639c-3.77-2.297-9.99-2.509-13.59-1.388a1.077 1.077 0 0 1-1.164-.363 1.14 1.14 0 0 1-.119-1.237c.136-.262.37-.46.648-.548 4.132-1.287 11-1.038 15.342 1.605a1.138 1.138 0 0 1 .099 1.863 1.081 1.081 0 0 1-.813.213c-.142-.02-.28-.07-.403-.145Zm-.124 3.402a.915.915 0 0 1-.563.42.894.894 0 0 1-.69-.112c-3.144-1.983-7.937-2.557-11.657-1.398a.898.898 0 0 1-.971-.303.952.952 0 0 1-.098-1.03.929.929 0 0 1 .54-.458c4.248-1.323 9.53-.682 13.14 1.595a.95.95 0 0 1 .3 1.286Zm-1.43 3.267a.73.73 0 0 1-.45.338.712.712 0 0 1-.553-.089c-2.748-1.722-6.204-2.111-10.276-1.156a.718.718 0 0 1-.758-.298.745.745 0 0 1-.115-.265.757.757 0 0 1 .092-.563.737.737 0 0 1 .457-.333c4.455-1.045 8.277-.595 11.361 1.338a.762.762 0 0 1 .241 1.028ZM11.696 0C5.237 0 0 5.373 0 12c0 6.628 5.236 12 11.697 12 6.46 0 11.698-5.372 11.698-12 0-6.627-5.238-12-11.699-12h.001Zm20.126 11.078c-2.019-.494-2.379-.84-2.379-1.57 0-.688.633-1.151 1.572-1.151.91 0 1.814.352 2.76 1.076a.131.131 0 0 0 .187-.03l.987-1.426a.139.139 0 0 0-.025-.185c-1.127-.928-2.396-1.378-3.88-1.378-2.18 0-3.703 1.342-3.703 3.263 0 2.06 1.315 2.788 3.585 3.352 1.932.457 2.258.84 2.258 1.524 0 .757-.659 1.229-1.72 1.229-1.18 0-2.141-.408-3.216-1.364a.13.13 0 0 0-.188.016l-1.106 1.35a.137.137 0 0 0 .013.188c1.252 1.147 2.79 1.752 4.451 1.752 2.35 0 3.869-1.317 3.869-3.356 0-1.723-1.003-2.676-3.465-3.29Zm10.487 2.31c0 1.454-.874 2.47-2.125 2.47-1.235 0-2.169-1.061-2.169-2.47 0-1.41.933-2.47 2.17-2.47 1.23 0 2.124 1.038 2.124 2.47Zm-1.706-4.354c-1.018 0-1.854.412-2.543 1.256v-.95a.136.136 0 0 0-.038-.095.132.132 0 0 0-.093-.04h-1.81a.131.131 0 0 0-.093.04.136.136 0 0 0-.039.096v10.546c0 .076.06.137.133.137h1.809a.132.132 0 0 0 .093-.041.136.136 0 0 0 .038-.096v-3.329c.69.794 1.525 1.18 2.543 1.18 1.893 0 3.808-1.494 3.808-4.35 0-2.858-1.915-4.354-3.808-4.354Zm8.72 6.839c-1.297 0-2.274-1.068-2.274-2.486 0-1.422.943-2.455 2.244-2.455 1.305 0 2.288 1.069 2.288 2.487 0 1.422-.949 2.454-2.258 2.454Zm0-6.838c-2.438 0-4.347 1.926-4.347 4.383 0 2.432 1.896 4.338 4.317 4.338 2.445 0 4.36-1.92 4.36-4.369 0-2.44-1.901-4.353-4.33-4.353Zm9.535.17h-1.99V7.117a.136.136 0 0 0-.08-.126.13.13 0 0 0-.052-.01h-1.809a.133.133 0 0 0-.093.04.136.136 0 0 0-.038.095v2.087h-.87a.131.131 0 0 0-.122.085.139.139 0 0 0-.01.052v1.595c0 .074.06.135.132.135h.87v4.126c0 1.667.809 2.513 2.404 2.513.648 0 1.186-.138 1.694-.434a.135.135 0 0 0 .067-.117V15.64a.137.137 0 0 0-.063-.115.13.13 0 0 0-.129-.006c-.349.18-.685.263-1.061.263-.58 0-.84-.271-.84-.876V11.07h1.99a.13.13 0 0 0 .094-.04.136.136 0 0 0 .039-.096V9.339a.137.137 0 0 0-.039-.096.132.132 0 0 0-.094-.04v.001Zm6.934.007v-.255c0-.755.281-1.092.914-1.092.376 0 .68.077 1.019.194a.13.13 0 0 0 .118-.02.135.135 0 0 0 .056-.11V6.365a.137.137 0 0 0-.026-.081.133.133 0 0 0-.068-.05 4.852 4.852 0 0 0-1.502-.22c-1.67 0-2.554.965-2.554 2.788v.393h-.87a.132.132 0 0 0-.093.04.136.136 0 0 0-.038.096v1.603c0 .075.059.136.132.136h.87v6.364c0 .075.058.135.131.135h1.809c.072 0 .131-.06.131-.135V11.07h1.69l2.586 6.362c-.294.669-.583.802-.977.802-.319 0-.654-.098-.998-.29a.133.133 0 0 0-.105-.01.135.135 0 0 0-.078.072l-.612 1.38a.137.137 0 0 0 .056.175 3.733 3.733 0 0 0 1.932.508c1.334 0 2.073-.638 2.724-2.355l3.137-8.317a.14.14 0 0 0-.014-.126.131.131 0 0 0-.108-.06h-1.883a.132.132 0 0 0-.126.092l-1.928 5.651L69.006 9.3a.133.133 0 0 0-.124-.088h-3.09v.001Zm-4.02-.008h-1.809a.132.132 0 0 0-.093.041.136.136 0 0 0-.038.096v8.094c0 .075.06.135.132.135h1.809c.072 0 .131-.06.131-.135V9.34a.136.136 0 0 0-.038-.096.133.133 0 0 0-.094-.04Zm-.896-3.685a1.295 1.295 0 0 0-.919.393c-.243.25-.379.586-.377.937a1.342 1.342 0 0 0 .377.938 1.304 1.304 0 0 0 .92.393c.346-.002.677-.143.92-.393s.379-.587.377-.938c0-.735-.581-1.33-1.296-1.33h-.002Zm15.918 4.49h-.331v.434h.331c.165 0 .264-.083.264-.216 0-.142-.099-.217-.264-.217Zm.215.619.36.517h-.304l-.323-.474h-.279v.474h-.254v-1.37h.595c.31 0 .515.163.515.436a.412.412 0 0 1-.31.417Zm-.282-1.31c-.652 0-1.146.532-1.146 1.183 0 .65.49 1.175 1.139 1.175.652 0 1.147-.532 1.147-1.183 0-.65-.492-1.174-1.14-1.174Zm-.007 2.488a1.259 1.259 0 0 1-.904-.384 1.296 1.296 0 0 1-.368-.92c0-.717.563-1.314 1.279-1.314a1.259 1.259 0 0 1 .903.384 1.295 1.295 0 0 1 .369.921c0 .717-.563 1.314-1.279 1.314Z">
                        </path>
                    </svg>
                </div>

                <div class="middle box">
                    <div>
                        <p>Компания</p>
                    </div>
                    <div><a href="https://help.netflix.com/legal/privacy">О нас</a></div>
                    <div><a href="https://help.netflix.com/legal/privacy">Вакансии</a></div>
                    <div><a href="https://fast.com">For the Record</a></div>
                </div>

                <div class="middle box">
                    <div>
                        <p>Сообщества</p>
                    </div>
                    <div><a href="https://jobs.netflix.com">Для исполнителей</a></div>
                    <div><a href="#">Для разработчиков</a></div>
                    <div><a href="https://help.netflix.com/legal/notices">Реклама</a></div>
                    <div><a href="https://help.netflix.com/legal/notices">Для инвесторов</a></div>
                    <div><a href="https://help.netflix.com/legal/notices">Для вендоров</a></div>
                </div>

                <div class="middle box">
                    <div>
                        <p>Полезные ссылки</p>
                    </div>
                    <div><a href="https://devices.netflix.com/en/">Справка</a></div>
                    <div><a href="https://help.netflix.com/legal/corpinfo">Веб-плеер</a></div>
                    <div><a href="https://www.netflix.com/kz/browse/genre/839338">Бесплатное мобильное приложение</a>
                    </div>
                </div>
            </div>
            <div class="niz">
                <a href="https://devices.netflix.com/en/">Юридическая информация</a>
                <a href="https://devices.netflix.com/en/">Центр конфиденциальности</a>
                <a href="https://devices.netflix.com/en/">Политика конфиденциальности</a>
                <a href="https://devices.netflix.com/en/">Файлы cookie</a>
                <a href="https://devices.netflix.com/en/">О рекламе</a>
                <span></span>
            </div>

        </footer>
        <!-- FOOTER SECTION ENDS -->
    </div>
    <script>
        var mainListDiv = document.getElementById("mainListDiv"),
            mediaButton = document.getElementById("mediaButton");

        mediaButton.onclick = function() {

            "use strict";

            mainListDiv.classList.toggle("show_list");
            mediaButton.classList.toggle("active");

        };
    </script>
</body>

</html>