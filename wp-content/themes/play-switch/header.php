<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>Play Switch</title>
</head>
<body class="body" id="body">
    <div class="body__wrapper">
        <header class="header">
            <div class="container">
                <div class="header__wrapper">
                    <div class="header__top-menu">
                        <div class="top-menu__left">
                            <a href="#" class="game-burger">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1640_467)">
                                        <path d="M7 0H4C2.93913 0 1.92172 0.421427 1.17157 1.17157C0.421427 1.92172 0 2.93913 0 4L0 7C0 8.06087 0.421427 9.07828 1.17157 9.82843C1.92172 10.5786 2.93913 11 4 11H7C8.06087 11 9.07828 10.5786 9.82843 9.82843C10.5786 9.07828 11 8.06087 11 7V4C11 2.93913 10.5786 1.92172 9.82843 1.17157C9.07828 0.421427 8.06087 0 7 0V0ZM9 7C9 7.53043 8.78929 8.03914 8.41421 8.41421C8.03914 8.78929 7.53043 9 7 9H4C3.46957 9 2.96086 8.78929 2.58579 8.41421C2.21071 8.03914 2 7.53043 2 7V4C2 3.46957 2.21071 2.96086 2.58579 2.58579C2.96086 2.21071 3.46957 2 4 2H7C7.53043 2 8.03914 2.21071 8.41421 2.58579C8.78929 2.96086 9 3.46957 9 4V7Z" fill="#929292"/>
                                        <path d="M20 0H17C15.9391 0 14.9217 0.421427 14.1716 1.17157C13.4214 1.92172 13 2.93913 13 4V7C13 8.06087 13.4214 9.07828 14.1716 9.82843C14.9217 10.5786 15.9391 11 17 11H20C21.0609 11 22.0783 10.5786 22.8284 9.82843C23.5786 9.07828 24 8.06087 24 7V4C24 2.93913 23.5786 1.92172 22.8284 1.17157C22.0783 0.421427 21.0609 0 20 0V0ZM22 7C22 7.53043 21.7893 8.03914 21.4142 8.41421C21.0391 8.78929 20.5304 9 20 9H17C16.4696 9 15.9609 8.78929 15.5858 8.41421C15.2107 8.03914 15 7.53043 15 7V4C15 3.46957 15.2107 2.96086 15.5858 2.58579C15.9609 2.21071 16.4696 2 17 2H20C20.5304 2 21.0391 2.21071 21.4142 2.58579C21.7893 2.96086 22 3.46957 22 4V7Z" fill="#929292"/>
                                        <path d="M7 13H4C2.93913 13 1.92172 13.4214 1.17157 14.1716C0.421427 14.9217 0 15.9391 0 17L0 20C0 21.0609 0.421427 22.0783 1.17157 22.8284C1.92172 23.5786 2.93913 24 4 24H7C8.06087 24 9.07828 23.5786 9.82843 22.8284C10.5786 22.0783 11 21.0609 11 20V17C11 15.9391 10.5786 14.9217 9.82843 14.1716C9.07828 13.4214 8.06087 13 7 13ZM9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22H4C3.46957 22 2.96086 21.7893 2.58579 21.4142C2.21071 21.0391 2 20.5304 2 20V17C2 16.4696 2.21071 15.9609 2.58579 15.5858C2.96086 15.2107 3.46957 15 4 15H7C7.53043 15 8.03914 15.2107 8.41421 15.5858C8.78929 15.9609 9 16.4696 9 17V20Z" fill="#929292"/>
                                        <path d="M20 13H17C15.9391 13 14.9217 13.4214 14.1716 14.1716C13.4214 14.9217 13 15.9391 13 17V20C13 21.0609 13.4214 22.0783 14.1716 22.8284C14.9217 23.5786 15.9391 24 17 24H20C21.0609 24 22.0783 23.5786 22.8284 22.8284C23.5786 22.0783 24 21.0609 24 20V17C24 15.9391 23.5786 14.9217 22.8284 14.1716C22.0783 13.4214 21.0609 13 20 13ZM22 20C22 20.5304 21.7893 21.0391 21.4142 21.4142C21.0391 21.7893 20.5304 22 20 22H17C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20V17C15 16.4696 15.2107 15.9609 15.5858 15.5858C15.9609 15.2107 16.4696 15 17 15H20C20.5304 15 21.0391 15.2107 21.4142 15.5858C21.7893 15.9609 22 16.4696 22 17V20Z" fill="#929292"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1640_467">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>                                    
                            </a>
                            <div class="search-wrapper" id="search-wrapper">
                                <a href="#" class="search">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1640_472)">
                                            <path d="M23.7068 22.293L17.7378 16.324C19.3644 14.3346 20.1642 11.7961 19.9716 9.23359C19.7791 6.67106 18.609 4.28056 16.7034 2.55655C14.7977 0.832537 12.3024 -0.0930816 9.73342 -0.0288498C7.16447 0.035382 4.71849 1.08455 2.9014 2.90164C1.08431 4.71873 0.0351379 7.16472 -0.029094 9.73367C-0.0933258 12.3026 0.832293 14.798 2.5563 16.7036C4.28031 18.6092 6.67081 19.7793 9.23334 19.9719C11.7959 20.1644 14.3344 19.3647 16.3238 17.738L22.2928 23.707C22.4814 23.8892 22.734 23.99 22.9962 23.9877C23.2584 23.9854 23.5092 23.8803 23.6946 23.6948C23.88 23.5094 23.9852 23.2586 23.9875 22.9964C23.9897 22.7342 23.8889 22.4816 23.7068 22.293ZM9.99978 18C8.41753 18 6.87081 17.5308 5.55522 16.6518C4.23963 15.7727 3.21425 14.5233 2.60875 13.0615C2.00324 11.5997 1.84482 9.99115 2.1535 8.4393C2.46218 6.88746 3.22411 5.46199 4.34293 4.34317C5.46175 3.22435 6.88721 2.46243 8.43906 2.15374C9.99091 1.84506 11.5994 2.00349 13.0613 2.60899C14.5231 3.21449 15.7725 4.23987 16.6515 5.55546C17.5306 6.87106 17.9998 8.41778 17.9998 10C17.9974 12.121 17.1538 14.1545 15.654 15.6543C14.1542 17.154 12.1208 17.9976 9.99978 18Z" fill="#929292"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1640_472">
                                                <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <div class="search__bar-content">
                                    <input type="text" class="search-area" id="search-area" placeholder="Начните вводить название игры">
                                    <a class="search__button" id="search__button" href="#">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1744_559)">
                                                <path d="M23.725 11.3364C23.7247 11.3361 23.7245 11.3358 23.7242 11.3355L18.8256 6.46049C18.4586 6.09529 17.865 6.09665 17.4997 6.46368C17.1345 6.83067 17.1359 7.42424 17.5028 7.78949L20.7918 11.0625L0.937501 11.0625C0.41972 11.0625 9.25758e-07 11.4822 1.01629e-06 12C1.10682e-06 12.5178 0.41972 12.9375 0.937501 12.9375L20.7917 12.9375L17.5029 16.2105C17.1359 16.5757 17.1345 17.1693 17.4998 17.5363C17.865 17.9034 18.4587 17.9047 18.8256 17.5395L23.7242 12.6645C23.7245 12.6642 23.7247 12.6639 23.7251 12.6636C24.0922 12.2971 24.0911 11.7016 23.725 11.3364Z" fill="#EC1A25"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1744_559">
                                                    <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="header__logo">
                            <img src="images/logo.svg" alt="">
                        </a>
                        <div class="top-menu__right">
                            <a href="#" class="share">
                                <img src="images/share.svg" alt="">
                            </a>
                            <a href="#" class="mouse">
                                <img src="images/mouse.svg" alt="">
                            </a>
                            <div class="burger">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class="header__bot-menu">
                        <div class="bot-menu__wrapper">
                            <a href="#" class="articles bot-menu__item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1640_435)">
                                        <path d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31597 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.1906 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3492 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3492 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z" fill="#3C3A3B"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1640_435">
                                            <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>                                    
                                <p>Статьи</p>
                            </a>
                            <a href="#" class="reviews bot-menu__item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.0783 6.63997L9.12833 0.806636C8.50741 0.351957 7.77269 0.078131 7.00564 0.0155218C6.23859 -0.0470874 5.46919 0.103966 4.78275 0.451934C4.0963 0.799901 3.51965 1.33118 3.11672 1.98687C2.71378 2.64256 2.50032 3.39704 2.5 4.16664V15.8333C2.50014 16.6032 2.71361 17.3581 3.11673 18.0141C3.51985 18.6701 4.09684 19.2015 4.78368 19.5495C5.47052 19.8974 6.24034 20.0483 7.00771 19.9852C7.77507 19.9222 8.50996 19.6478 9.13083 19.1925L17.0808 13.3591C17.6086 12.9721 18.0377 12.4663 18.3335 11.8825C18.6293 11.2988 18.7835 10.6536 18.7835 9.99914C18.7835 9.34472 18.6293 8.6995 18.3335 8.11575C18.0377 7.532 17.6086 7.02614 17.0808 6.63914L17.0783 6.63997ZM16.0917 12.015L8.14167 17.8483C7.76918 18.1205 7.32864 18.2843 6.86881 18.3216C6.40898 18.3589 5.9478 18.2683 5.53631 18.0597C5.12482 17.8511 4.77907 17.5327 4.53734 17.1397C4.2956 16.7468 4.16731 16.2946 4.16667 15.8333V4.16664C4.16204 3.70443 4.28791 3.25029 4.52981 2.85641C4.77172 2.46252 5.11983 2.14488 5.53417 1.93997C5.88658 1.76071 6.27629 1.66707 6.67167 1.66664C7.20158 1.66866 7.71685 1.84071 8.14167 2.15747L16.0917 7.9908C16.4079 8.22305 16.6651 8.52647 16.8423 8.87653C17.0195 9.22658 17.1119 9.61344 17.1119 10.0058C17.1119 10.3982 17.0195 10.785 16.8423 11.1351C16.6651 11.4851 16.4079 11.7886 16.0917 12.0208V12.015Z" fill="#3C3A3B"/>
                                </svg>                                    
                                <p>Обзоры</p>
                            </a>
                            <a href="#" class="collection bot-menu__item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1640_423)">
                                        <path d="M16.7806 20C16.4723 19.9992 16.1673 19.9372 15.8831 19.8178C15.5989 19.6984 15.3411 19.5238 15.1248 19.3042L9.99978 14.2092L4.87478 19.3075C4.54563 19.6414 4.12352 19.8685 3.66346 19.959C3.2034 20.0495 2.72674 19.9993 2.29561 19.815C1.86021 19.6399 1.48773 19.3375 1.22683 18.9474C0.96592 18.5573 0.828708 18.0976 0.833111 17.6283V4.16667C0.833111 3.0616 1.2721 2.00179 2.0535 1.22039C2.8349 0.438987 3.89471 0 4.99978 0L14.9998 0C15.547 0 16.0888 0.107774 16.5943 0.317169C17.0998 0.526563 17.5591 0.833478 17.9461 1.22039C18.333 1.6073 18.6399 2.06663 18.8493 2.57215C19.0587 3.07768 19.1664 3.61949 19.1664 4.16667V17.6283C19.1711 18.0972 19.0344 18.5567 18.7741 18.9467C18.5138 19.3368 18.1421 19.6393 17.7073 19.815C17.4138 19.9377 17.0987 20.0006 16.7806 20ZM4.99978 1.66667C4.33674 1.66667 3.70085 1.93006 3.23201 2.3989C2.76317 2.86774 2.49978 3.50363 2.49978 4.16667V17.6283C2.49948 17.7672 2.54034 17.903 2.61719 18.0187C2.69405 18.1343 2.80346 18.2246 2.9316 18.2781C3.05974 18.3316 3.20087 18.3459 3.33714 18.3193C3.47342 18.2926 3.59874 18.2262 3.69728 18.1283L9.41644 12.4442C9.57258 12.289 9.78379 12.2018 10.0039 12.2018C10.2241 12.2018 10.4353 12.289 10.5914 12.4442L16.3039 18.1267C16.4025 18.2245 16.5278 18.291 16.6641 18.3176C16.8004 18.3443 16.9415 18.33 17.0696 18.2765C17.1978 18.2229 17.3072 18.1327 17.384 18.017C17.4609 17.9014 17.5017 17.7655 17.5014 17.6267V4.16667C17.5014 3.50363 17.2381 2.86774 16.7692 2.3989C16.3004 1.93006 15.6645 1.66667 15.0014 1.66667H4.99978Z" fill="#3C3A3B"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1640_423">
                                            <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p>Коллекция</p>
                            </a>
                            <a href="#" class="sets bot-menu__item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1640_415)">
                                        <path d="M19.863 7.32821C19.6925 6.78563 19.352 6.31231 18.8917 5.97824C18.4314 5.64418 17.8759 5.4671 17.3072 5.47321H13.6663L12.5605 2.02655C12.3866 1.48401 12.0449 1.01073 11.5846 0.674935C11.1244 0.339144 10.5694 0.158203 9.99967 0.158203C9.42995 0.158203 8.87495 0.339144 8.4147 0.674935C7.95445 1.01073 7.61274 1.48401 7.43884 2.02655L6.33301 5.47321H2.69217C2.12529 5.47402 1.57317 5.65395 1.11466 5.9873C0.656146 6.32065 0.314706 6.79037 0.139107 7.32937C-0.0364925 7.86837 -0.0372697 8.44907 0.136886 8.98854C0.311042 9.528 0.651223 9.99864 1.10884 10.3332L4.07217 12.4999L2.94551 15.989C2.76343 16.5302 2.76113 17.1157 2.93893 17.6583C3.11673 18.2009 3.46513 18.6714 3.93217 18.9999C4.39122 19.3389 4.9475 19.5205 5.51813 19.5176C6.08877 19.5148 6.64321 19.3276 7.09884 18.984L9.99967 16.849L12.9013 18.9815C13.3596 19.3186 13.9128 19.5017 14.4816 19.5044C15.0505 19.5072 15.6055 19.3295 16.067 18.997C16.5285 18.6644 16.8726 18.1941 17.0499 17.6536C17.2272 17.1131 17.2286 16.5304 17.0538 15.989L15.9272 12.4999L18.8938 10.3332C19.3567 10.0028 19.7009 9.53221 19.8754 8.991C20.05 8.44979 20.0456 7.86676 19.863 7.32821ZM17.9105 8.98738L14.4572 11.5115C14.3153 11.615 14.2098 11.7607 14.1556 11.9277C14.1014 12.0947 14.1014 12.2745 14.1555 12.4415L15.468 16.4999C15.5344 16.7057 15.5339 16.9273 15.4664 17.1328C15.3989 17.3383 15.268 17.5171 15.0925 17.6435C14.917 17.7699 14.706 17.8375 14.4897 17.8363C14.2734 17.8352 14.063 17.7656 13.8888 17.6374L10.493 15.1374C10.35 15.0323 10.1771 14.9757 9.99967 14.9757C9.8222 14.9757 9.64937 15.0323 9.50634 15.1374L6.11051 17.6374C5.93641 17.7673 5.72545 17.8384 5.50823 17.8404C5.291 17.8424 5.07879 17.7751 4.90236 17.6483C4.72594 17.5216 4.59446 17.3419 4.527 17.1355C4.45954 16.929 4.4596 16.7063 4.52717 16.4999L5.84384 12.4415C5.89794 12.2745 5.8979 12.0947 5.84372 11.9277C5.78955 11.7607 5.68401 11.615 5.54217 11.5115L2.08884 8.98738C1.91493 8.86004 1.7857 8.681 1.71962 8.47583C1.65355 8.27066 1.654 8.04986 1.72091 7.84496C1.78782 7.64006 1.91778 7.46155 2.09221 7.33492C2.26664 7.2083 2.47662 7.14003 2.69217 7.13988H6.94217C7.1186 7.13987 7.29048 7.08387 7.43305 6.97994C7.57561 6.87601 7.68152 6.72951 7.73551 6.56155L9.02717 2.53571C9.09347 2.3297 9.22343 2.15004 9.39834 2.02259C9.57325 1.89514 9.78409 1.82647 10.0005 1.82647C10.2169 1.82647 10.4278 1.89514 10.6027 2.02259C10.7776 2.15004 10.9075 2.3297 10.9738 2.53571L12.2655 6.56155C12.3195 6.72951 12.4254 6.87601 12.568 6.97994C12.7105 7.08387 12.8824 7.13987 13.0588 7.13988H17.3088C17.5244 7.14003 17.7344 7.2083 17.9088 7.33492C18.0832 7.46155 18.2132 7.64006 18.2801 7.84496C18.347 8.04986 18.3475 8.27066 18.2814 8.47583C18.2153 8.681 18.0861 8.86004 17.9122 8.98738H17.9105Z" fill="#3C3A3B"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1640_415">
                                            <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>                                    
                                <p>Сеты</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <menu class="menu" id="menu">
                <div class="menu__content">
                    <div class="menu__sections">
                        <a href="#" class="articles bot-menu__item">
                            <img src="images/book-icon.svg" alt="">
                            <p>Статьи</p>
                        </a>
                        <a href="#" class="reviews bot-menu__item">
                            <img src="images/play-icon.svg" alt="">
                            <p>Обзоры</p>
                        </a>
                        <a href="#" class="collection bot-menu__item">
                            <img src="images/bookmark-icon.svg" alt="">
                            <p>Коллекция</p>
                        </a>
                        <a href="#" class="sets bot-menu__item">
                            <img src="images/star-icon.svg" alt="">
                            <p>Сеты</p>
                        </a>
                        <div class="menu__game-genres">
                            <a href="#" class="games-by-genre" id="games-by-genre">
                                <p>Игры по жанрам</p>
                            </a>
                        </div>
                        <div class="genre-list" id="genre-list">
                            <?php
                                $game_genre_list = get_field('game_genre_list');
                                if( $game_genre_list ): ?>
                                    <a href="#" class="genre-list__item">
                                        <div class="genre-list__image">
                                            <img src="<?php echo( $game_genre_list['game_genre_list__image']); ?>" alt="">
                                        </div>
                                        <div class="genre-list__name">
                                        <?php echo($game_genre_list['game_genre_list__text']); ?>
                                        </div>
                                    </a>
                            <?php endif; ?>
                            <?php
                                $game_genre_list_2 = get_field('game_genre_list_2');
                                if( $game_genre_list_2 ): ?>
                                    <a href="#" class="genre-list__item">
                                        <div class="genre-list__image">
                                            <img src="<?php echo($game_genre_list_2['game_genre_list__image']); ?>" alt="">
                                        </div>
                                        <div class="genre-list__name">
                                        <?php echo($game_genre_list_2['game_genre_list__text']); ?>
                                        </div>
                                    </a>
                            <?php endif; ?>
                            <?php
                                $game_genre_list_3 = get_field('game_genre_list_3');
                                if( $game_genre_list ): ?>
                                    <a href="#" class="genre-list__item">
                                        <div class="genre-list__image">
                                            <img src="<?php echo( $game_genre_list_3['game_genre_list__image']); ?>" alt="">
                                        </div>
                                        <div class="genre-list__name">
                                        <?php echo($game_genre_list_3['game_genre_list__text']); ?>
                                        </div>
                                    </a>
                            <?php endif; ?>
                            <?php
                                $game_genre_list_4 = get_field('game_genre_list_4');
                                if( $game_genre_list_4 ): ?>
                                    <a href="#" class="genre-list__item">
                                        <div class="genre-list__image">
                                            <img src="<?php echo( $game_genre_list_4['game_genre_list__image']); ?>" alt="">
                                        </div>
                                        <div class="genre-list__name">
                                        <?php echo($game_genre_list_4['game_genre_list__text']); ?>
                                        </div>
                                    </a>
                            <?php endif; ?>
                            <?php
                                $game_genre_list_5 = get_field('game_genre_list_5');
                                if( $game_genre_list_5 ): ?>
                                    <a href="#" class="genre-list__item">
                                        <div class="genre-list__image">
                                            <img src="<?php echo( $game_genre_list_5['game_genre_list__image']); ?>" alt="">
                                        </div>
                                        <div class="genre-list__name">
                                        <?php echo($game_genre_list_5['game_genre_list__text']); ?>
                                        </div>
                                    </a>
                            <?php endif; ?>
                            <?php
                                $game_genre_list_6 = get_field('game_genre_list_6');
                                if( $game_genre_list_6 ): ?>
                                    <a href="#" class="genre-list__item">
                                        <div class="genre-list__image">
                                            <img src="<?php echo( $game_genre_list_6['game_genre_list__image']); ?>" alt="">
                                        </div>
                                        <div class="genre-list__name">
                                        <?php echo($game_genre_list_6['game_genre_list__text']); ?>
                                        </div>
                                    </a>
                            <?php endif; ?>
                            <?php
                                $game_genre_list_7 = get_field('game_genre_list_7');
                                if( $game_genre_list_7 ): ?>
                                    <a href="#" class="genre-list__item">
                                        <div class="genre-list__image">
                                            <img src="<?php echo( $game_genre_list_7['game_genre_list__image']); ?>" alt="">
                                        </div>
                                        <div class="genre-list__name">
                                        <?php echo($game_genre_list_7['game_genre_list__text']); ?>
                                        </div>
                                    </a>
                            <?php endif; ?>
                            <?php
                                $game_genre_list_8 = get_field('game_genre_list_8');
                                if( $game_genre_list_8 ): ?>
                                    <a href="#" class="genre-list__item">
                                        <div class="genre-list__image">
                                            <img src="<?php echo( $game_genre_list_8['game_genre_list__image']); ?>" alt="">
                                        </div>
                                        <div class="genre-list__name">
                                        <?php echo($game_genre_list_8['game_genre_list__text']); ?>
                                        </div>
                                    </a>
                            <?php endif; ?>
                            <?php
                                $game_genre_list_9 = get_field('game_genre_list_9');
                                if( $game_genre_list_9 ): ?>
                                    <a href="#" class="genre-list__item">
                                        <div class="genre-list__image">
                                            <img src="<?php echo( $game_genre_list_9['game_genre_list__image']); ?>" alt="">
                                        </div>
                                        <div class="genre-list__name">
                                        <?php echo($game_genre_list_9['game_genre_list__text']); ?>
                                        </div>
                                    </a>
                            <?php endif; ?>
                            <?php
                                $game_genre_list_10 = get_field('game_genre_list_10');
                                if( $game_genre_list_10 ): ?>
                                    <a href="#" class="genre-list__item">
                                        <div class="genre-list__image">
                                            <img src="<?php echo( $game_genre_list_10['game_genre_list__image']); ?>" alt="">
                                        </div>
                                        <div class="genre-list__name">
                                        <?php echo($game_genre_list_10['game_genre_list__text']); ?>
                                        </div>
                                    </a>
                            <?php endif; ?>
                            <?php
                                $game_genre_list_11 = get_field('game_genre_list_11');
                                if( $game_genre_list_11 ): ?>
                                    <a href="#" class="genre-list__item">
                                        <div class="genre-list__image">
                                            <img src="<?php echo( $game_genre_list_11['game_genre_list__image']); ?>" alt="">
                                        </div>
                                        <div class="genre-list__name">
                                        <?php echo($game_genre_list_11['game_genre_list__text']); ?>
                                        </div>
                                    </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </menu>
            <menu class="game-menu" id="game-menu">
                <div class="game-menu__content">
                    <div class="game-menu__genre-list" id="game-menu__genre-list">
                        <?php
                            $game_genre_list = get_field('game_genre_list');
                            if( $game_genre_list ): ?>
                                <a href="#" class="genre-list__item">
                                    <div class="genre-list__image">
                                        <img src="<?php echo( $game_genre_list['game_genre_list__image']); ?>" alt="">
                                    </div>
                                    <div class="genre-list__name">
                                    <?php echo($game_genre_list['game_genre_list__text']); ?>
                                    </div>
                                </a>
                        <?php endif; ?>
                        <?php
                            $game_genre_list_2 = get_field('game_genre_list_2');
                            if( $game_genre_list_2 ): ?>
                                <a href="#" class="genre-list__item">
                                    <div class="genre-list__image">
                                        <img src="<?php echo($game_genre_list_2['game_genre_list__image']); ?>" alt="">
                                    </div>
                                    <div class="genre-list__name">
                                    <?php echo($game_genre_list_2['game_genre_list__text']); ?>
                                    </div>
                                </a>
                        <?php endif; ?>
                        <?php
                            $game_genre_list_3 = get_field('game_genre_list_3');
                            if( $game_genre_list ): ?>
                                <a href="#" class="genre-list__item">
                                    <div class="genre-list__image">
                                        <img src="<?php echo( $game_genre_list_3['game_genre_list__image']); ?>" alt="">
                                    </div>
                                    <div class="genre-list__name">
                                    <?php echo($game_genre_list_3['game_genre_list__text']); ?>
                                    </div>
                                </a>
                        <?php endif; ?>
                        <?php
                            $game_genre_list_4 = get_field('game_genre_list_4');
                            if( $game_genre_list_4 ): ?>
                                <a href="#" class="genre-list__item">
                                    <div class="genre-list__image">
                                        <img src="<?php echo( $game_genre_list_4['game_genre_list__image']); ?>" alt="">
                                    </div>
                                    <div class="genre-list__name">
                                    <?php echo($game_genre_list_4['game_genre_list__text']); ?>
                                    </div>
                                </a>
                        <?php endif; ?>
                        <?php
                            $game_genre_list_5 = get_field('game_genre_list_5');
                            if( $game_genre_list_5 ): ?>
                                <a href="#" class="genre-list__item">
                                    <div class="genre-list__image">
                                        <img src="<?php echo( $game_genre_list_5['game_genre_list__image']); ?>" alt="">
                                    </div>
                                    <div class="genre-list__name">
                                    <?php echo($game_genre_list_5['game_genre_list__text']); ?>
                                    </div>
                                </a>
                        <?php endif; ?>
                        <?php
                            $game_genre_list_6 = get_field('game_genre_list_6');
                            if( $game_genre_list_6 ): ?>
                                <a href="#" class="genre-list__item">
                                    <div class="genre-list__image">
                                        <img src="<?php echo( $game_genre_list_6['game_genre_list__image']); ?>" alt="">
                                    </div>
                                    <div class="genre-list__name">
                                    <?php echo($game_genre_list_6['game_genre_list__text']); ?>
                                    </div>
                                </a>
                        <?php endif; ?>
                        <?php
                            $game_genre_list_7 = get_field('game_genre_list_7');
                            if( $game_genre_list_7 ): ?>
                                <a href="#" class="genre-list__item">
                                    <div class="genre-list__image">
                                        <img src="<?php echo( $game_genre_list_7['game_genre_list__image']); ?>" alt="">
                                    </div>
                                    <div class="genre-list__name">
                                    <?php echo($game_genre_list_7['game_genre_list__text']); ?>
                                    </div>
                                </a>
                        <?php endif; ?>
                        <?php
                            $game_genre_list_8 = get_field('game_genre_list_8');
                            if( $game_genre_list_8 ): ?>
                                <a href="#" class="genre-list__item">
                                    <div class="genre-list__image">
                                        <img src="<?php echo( $game_genre_list_8['game_genre_list__image']); ?>" alt="">
                                    </div>
                                    <div class="genre-list__name">
                                    <?php echo($game_genre_list_8['game_genre_list__text']); ?>
                                    </div>
                                </a>
                        <?php endif; ?>
                        <?php
                            $game_genre_list_9 = get_field('game_genre_list_9');
                            if( $game_genre_list_9 ): ?>
                                <a href="#" class="genre-list__item">
                                    <div class="genre-list__image">
                                        <img src="<?php echo( $game_genre_list_9['game_genre_list__image']); ?>" alt="">
                                    </div>
                                    <div class="genre-list__name">
                                    <?php echo($game_genre_list_9['game_genre_list__text']); ?>
                                    </div>
                                </a>
                        <?php endif; ?>
                        <?php
                            $game_genre_list_10 = get_field('game_genre_list_10');
                            if( $game_genre_list_10 ): ?>
                                <a href="#" class="genre-list__item">
                                    <div class="genre-list__image">
                                        <img src="<?php echo( $game_genre_list_10['game_genre_list__image']); ?>" alt="">
                                    </div>
                                    <div class="genre-list__name">
                                    <?php echo($game_genre_list_10['game_genre_list__text']); ?>
                                    </div>
                                </a>
                        <?php endif; ?>
                        <?php
                            $game_genre_list_11 = get_field('game_genre_list_11');
                            if( $game_genre_list_11 ): ?>
                                <a href="#" class="genre-list__item">
                                    <div class="genre-list__image">
                                        <img src="<?php echo( $game_genre_list_11['game_genre_list__image']); ?>" alt="">
                                    </div>
                                    <div class="genre-list__name">
                                    <?php echo($game_genre_list_11['game_genre_list__text']); ?>
                                    </div>
                                </a>
                        <?php endif; ?>
                    </div>
                </div>
            </menu>